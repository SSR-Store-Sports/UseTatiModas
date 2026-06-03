<?php

namespace App\Http\Controllers;

use App\Models\LoginToken;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class MagicLinkController extends Controller
{
    public function send(Request $request)
    {
        $request->validate(['email' => 'required|email|exists:users,email']);

        $user = User::where('email', $request->email)->first();

        if ($user->status === 'inactive') {
            return back()->with('magic_error', 'Usuário inativo.');
        }

        // Invalida tokens anteriores
        LoginToken::where('user_id', $user->id)->delete();

        $token = LoginToken::create([
            'user_id'    => $user->id,
            'token'      => Str::random(64),
            'expires_at' => now()->addMinutes(15),
        ]);

        $link = route('magic-link.login', ['token' => $token->token]);

        return back()->with('magic_link', $link);
    }

    public function login(string $token)
    {
        $record = LoginToken::where('token', $token)->first();

        if (!$record || !$record->isValid()) {
            return redirect()->route('sign-in')->with('message', 'Link inválido ou expirado.');
        }

        $user = $record->user;
        $record->delete();

        Auth::login($user);
        app(\App\Services\CartService::class)->migrateSessionToDatabase();

        return redirect()->route('home');
    }
}
