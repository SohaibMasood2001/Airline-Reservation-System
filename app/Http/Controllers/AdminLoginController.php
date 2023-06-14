<?php

namespace App\Http\Controllers;
use App\Models\AdminUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    public function index(){
        return view('admin.login');
    }


    public function loginPost(Request $request)
{
    $request->validate([
        'emailaddress' => 'required|email',
        'password' => 'required|min:5',
    ]);

    $adminUser = AdminUser::where('email', $request->emailaddress)->first();

    if ($adminUser) {
        if ($request->password == $adminUser->password) {
            // Auth::login($adminUser);

            return redirect('/airline/admin')->with('l-success', 'You are logged in successfully.');
        } else {
            throw ValidationException::withMessages([
                'password' => ['The provided password is incorrect.'],
            ]);
        }
    } else {
        throw ValidationException::withMessages([
            'emailaddress' => ['This email is not registered.'],
        ]);
    }
}

}
