<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\User; // Make sure to import the User model

class LoginController extends Controller
{
    /**
     * Show the login form.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('pages.auth.login');
    }

    /**
     * Handle the login request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        // Validation logic here
        $request->validate([
            'mail_mhs' => 'required|string',
            'password' => 'required|string',
        ]);

        // Attempt to log in the user
        if (Auth::attempt(['mail_mhs' => $request->input('mail_mhs'), 'password' => $request->input('password')])) {
            // Authentication passed

            // Check the user role
            $user = User::where('mail_mhs', $request->input('mail_mhs'))->first();

            if ($user && $user->role === 'admin') {
                return redirect()->route('admin.dashboard'); // Redirect admin to the admin dashboard
            }

            return redirect()->intended('/'); // Redirect to the intended page after successful login
        }

        // Authentication failed
        return redirect()->route('login.show')->with('error', 'Invalid credentials. Please try again.');
    }

    /**
     * Log the user out of the application.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        Auth::logout();

        return Redirect::to('/');
    }
}
