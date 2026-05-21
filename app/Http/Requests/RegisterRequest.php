<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

/**
 * @property-read string $name
 * @property-read string $email
 * @property-read string $phone
 * @property-read string $cpf
 * @property-read string $password
 */

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'min:3', 'max:80'],
            'email' => ['required', 'email', 'unique:users'],
            'cpf' => ['required', 'min:1', 'max:13'],
            'phone' => ['required', 'min:1', 'max:13'],
            'password' => ['required', Password::defaults(), 'confirmed'],
        ];
    }

    public function tryToRegister() {
        // 1. Create user using 
        $user = new User;
        $user->name = $this->name;
        $user->email = $this->email;
        $user->phone = $this->phone;
        $user->cpf = $this->cpf;
        $user->password = $this->password;
        $user->save();

        // 2. Logar com o usuário
        Auth::login($user);

        // dd($this);
        return true;
    }
}
