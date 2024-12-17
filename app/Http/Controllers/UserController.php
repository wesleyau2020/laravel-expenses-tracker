<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    // Show the change password form
    public function showChangePasswordForm()
    {
        return view('auth.change-password');
    }

    // Handle the password update request
    public function updatePassword(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ]);

        // Check if the current password entered matches the user's existing password
        $currentPasswordHashed = Hash::make($request->current_password);
        if ($currentPasswordHashed == Auth::user()->password) {
            return back()->withErrors(['current_password' => 'The current password is incorrect.']);
        }

        // Update the password if the current password is correct
        Auth::user()->update([
            'password' => Hash::make($request->new_password),
        ]);

        return redirect('/expenses')->with('success', 'Password updated successfully!');
    }
}
