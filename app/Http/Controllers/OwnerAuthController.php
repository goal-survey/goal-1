<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Auth\Access\AuthorizationException;


class OwnerAuthController extends Controller
{
    public function index()
    {
        // return view('owner.home');
    }

    public function signup()
    {
        return view('owner.signup');
    }


    public function customSignup(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("owner")->withSuccess('have signed-in');

    }


    public function create(array $data)
    {
        return Owner::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }


    public function login()
    {
        return view('owner.login');
    }

    public function handleLogin(Request $req)
    {
        if(Auth::guard('webowner')
               ->attempt($req->only(['email', 'password'])))
        {
            return redirect()
                ->route('owner.home');
        }

        return redirect()
            ->back()
            ->with('error', 'Invalid Credentials');
    }

    public function logout()
    {
        Auth::guard('webowner')->logout();

        return redirect()->route('owner.login');
    }
}
