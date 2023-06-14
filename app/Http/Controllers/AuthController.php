<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Validator;
use Socialite;

class AuthController extends Controller
{
    public function index (){
        return view('Auth.authentication');
    }
    public function Register(Request $request) {

        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone'=> 'required|numeric',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'same:password',
            
        ]);
        $register = new User; // Must import the Model file: use App\Student;
       
        $register->name = $request->get('name');
        $register->email = $request->get('email');
        $register->phone = $request->get('phone');
        $register->password = Hash::make($request->get('password'));
        Hash::make($request->get('password_confirmation'));
        $register->save(); 
      
       

    
    
        $name = $request->name;
        $email = $request->email;
       

        // SMTP protocol mail sending
        $mail = new PHPMailer(true);
        // $mail->SMTPDebug = 2;
        try{
            $mail->isSMTP();
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );
            $mail->Mailer = "smtp";
            $mail->Host = "smtp.gmail.com";
            $mail->Port = 587;
            $mail->SMTPAuth = true;
            $mail->Username = "sohaiblaravel043@gmail.com";
            $mail->Password = "nmhibtbinrrydtib";
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->setFrom($email, "$name");
            $mail->addAddress($email);
            $mail->isHTML(true);
            $mail->SMTPSecure = 'tls';
            $mail->Subject  = "LevelUp Registration";
            $mail->Body   = "Assalam U Alikum $name Your email $email successfully registered to our online services provider website 
            login to get access of all services at home in very lower price";
            $mail->send();
            
            return redirect('/register')->with('success-r', 'You are registered successfully login to continue');
            
        }
        catch (Exception $e) {
            return redirect('/register')->with('success-r', 'Registration Failed!');
        }
    }
    public function loginPost  (Request $request){
        
         $request->validate([
           
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);
         $register = User::where('email','=',$request->email)->first();
        
         if ($register) {
             if (Hash::check($request->password, $register->password)) {
                                                                    
                return redirect('/home')->with('l-success', 'you are logged in successfully');
             }
               else {
                 return back()-> with('l-error', 'Password not matches. ');
             }
            }
           else
             return back() -> with('l-error', 'This email is not registered.');
        
    }
    public function forget(){
        return view('Auth.forgot_password');
    }
    public function facebookRedirect()
    {
        return Socialite::driver('facebook')->redirect();
    }
    public function loginWithFacebook()
    {
        try {
    
            $user = Socialite::driver('facebook')->stateless()->user();
            $existingUser = User::where('fb_id', $user->id)->first();
     
            if($existingUser){
                Auth::login($existingUser);
                return redirect('/home');
            }else{
                $createUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'fb_id' => $user->id,
                    // 'password' => encrypt('admin@123')
                ]);
    
                Auth::login($createUser);
                return redirect('/home');
            }
    
        } catch (\Throwable $th) {
          throw $th;
       }
    }
    public function googleRedirect()
    {
        return Socialite::driver('google')->redirect();
    }
    public function loginWithGoogle()
    {
        try {
    
            $user = Socialite::driver('google')->stateless()->user();
            $existingUser = User::where('google_id', $user->id)->first();
     
            if($existingUser){
                Auth::login($existingUser);
                return redirect('/home');
            }else{
                $createUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id' => $user->id,
                    // 'password' => encrypt('admin@123')
                ]);
    
                Auth::login($createUser);
                return redirect('/home');
            }
    
        } catch (\Throwable $th) {
          throw $th;
       }
    }
}
