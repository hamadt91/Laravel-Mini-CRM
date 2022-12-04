<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function dashboard()
    {
        $companies = Company::count();
        $employees = Employee::count();
        return view('admin.dashboard', compact('companies', 'employees'));
    }

    public function login()
    {
        return view('admin.login');
    }

    public function logout()
    {
        Auth::logout();

        return redirect(route('login'));
    }

    public function Credentials(Request $request)
    {
        try {
            $email = $request->email;
            $password = $request->password;
            $user = User::where('email', '=', $email)->first();
            if (!$user) {
                session()->flash('email-message', 'Login failed, please check email');
                return redirect()->back();
            }
            if (!Hash::check($password, $user->password)) {
                session()->flash('password-message', 'Login failed, please check password');
                return redirect()->back();
            }
            Auth::login($user);

            return redirect(route('admin.dashboard'));

        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
