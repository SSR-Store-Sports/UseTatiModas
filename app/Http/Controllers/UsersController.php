<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function login()
    {
        return view('login.index');
    }

    public function register()
    {
        return view('register.index');
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
