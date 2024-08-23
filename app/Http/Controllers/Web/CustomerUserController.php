<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Web\CustomerUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CustomerUserController extends Controller
{

    public function showLoginForm()
    {
        return view('auth.customer-login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email |exists:customer_users',
            'password' => 'required|min:6',
        ]);

        if (Auth::guard('customer')->attempt([
            'email' => $request->email,
            'password' => $request->password
        ], $request->remember)) {
            successMessage('Login Successful');
            return redirect()->intended(route('home'));
        }else{
            errorMessage('Invalid email or password');
            return redirect()->back()->withInput($request->only('email', 'remember'))->with('error', 'Invalid email or password');
        }

    }

    public function logout()
    {
        Auth::guard('customer')->logout();
      
        return redirect('/');
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        $customer = $this->create($request->all());

        Auth::guard('customer')->login($customer);

        return redirect()->route('home');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:customer_users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function create(array $data)
    {
        return CustomerUser::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    
}
