<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    use AuthenticatesUsers;

    protected $redirectTo = '/admin';

    public function __construct()
    {

    }

    protected function guard()
    {
        return Auth::guard('admin');
    }

    public function username()
    {
        return 'phone';
    }

    public function showLoginForm()
    {

        return view('admin.login');
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->flush();

        $request->session()->regenerate();

        return redirect($this->redirectTo);
    }
}
