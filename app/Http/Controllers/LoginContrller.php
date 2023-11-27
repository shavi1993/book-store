<?php

namespace App\Http\Controllers;
// app/Http/Controllers/Auth/LoginController.php

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function guard()
    {
        return Auth::guard('web'); // Use the 'web' guard for regular users
    }
}
