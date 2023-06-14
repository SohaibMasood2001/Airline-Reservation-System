<?php

namespace App\Http\Controllers;
use App\Models\Contact;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
class ContactController extends Controller
{
    public function store(Request $request)
{
    

    $contactForm = new Contact();
    $contactForm->name = $request->name;
    $contactForm->email = $request->email;
    $contactForm->subject = $request->subject;
    $contactForm->phone = $request->phone;
    $contactForm->message = $request->message;
    $contactForm->save();
    $validatedData = $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'subject' => 'required',
        'phone' => 'required',
        'message' => 'required',
    ]);
    $name = $request->name;
    $email = $request->email;
    $subject = $request->subject;
    $messege = $request->message;

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
        $mail->Subject  = "$subject";
        $mail->Body   = "Assalam u Alikum $name Your Messege Delivered Successfully to our team. Your messege review by our team soon 
        thanks for contact us";
        $mail->send();
        
        return redirect()->back()->with('contact_message', 'Email sent successfully! we will contact you soon');
        
    }
    catch (Exception $e) {
        return redirect()->back()->with('contact_message', 'Email Failed to sent!');
    }
    
}
}
