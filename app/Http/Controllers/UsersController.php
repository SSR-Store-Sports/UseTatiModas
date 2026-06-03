<?php

namespace App\Http\Controllers;

use App\Http\Requests\MakeLoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
            app(\App\Services\CartService::class)->migrateSessionToDatabase();
            
            return to_route('home');
        };
        
        return back()->with(['message' => 'Credentials invalid.']);
    }

    public function signUp()
    {
        return view('sign-up.index');
    }

    public function signUpRegister(RegisterRequest $request)
    {
        if ($request->tryToRegister()) {
            app(\App\Services\CartService::class)->migrateSessionToDatabase();
            
            return to_route('home');
        }

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
        $user = auth()->user()->load('address');
        return view('profile.index', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $user = auth()->user();

        $request->validate([
            'email' => 'required|email|unique:users,email,' . $user->id,
            'phone' => 'required|string|min:10|max:15',
        ]);

        $user->update($request->only(['email', 'phone']));

        return back()->with('success', 'Informações atualizadas com sucesso!');
    }

    public function destroyProfile()
    {
        $user = auth()->user();
        Auth::logout();
        $user->delete();

        return redirect()->route('home')->with('success', 'Conta excluída com sucesso.');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
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
