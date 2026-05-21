<?php

namespace App\Http\Controllers;

use App\Http\Requests\MakeLoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function signIn()
    {
        return view('sign-in.index');
    }

    public function signInSessions(MakeLoginRequest $request)
    {
        if($request->attempt()) {
            return to_route('home');
        };
        
        // dd($user);
        // dd(request()->all());
        // return view('sign-in.index');
        return back()->with(['message' => 'Credentials invalid.']);
    }

    public function signUp()
    {
        return view('sign-up.index');
    }

    public function signUpRegister(RegisterRequest $request)
    {
        if ($request->tryToRegister()) {
            return to_route('home');
        }

        // return view('sign-up.index');
        return back()->with(['message' => 'Not be able register user.']);
    }

    public function resetShipping()
    {
        return view('reset.index');
    }

    public function resetPassword()
    {
        return view('reset.reset-password');
    }
    public function indexUserPassword()
    {
        return view('profile.index');
    }

    public function resetUserPassword()
    {
        return view('profile.reset-password');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(User $user)
    {
        //
    }

    public function edit(User $user)
    {
        //
    }

    public function update(Request $request, User $user)
    {
        //
    }

    public function destroy(User $user)
    {
        //
    }
}
