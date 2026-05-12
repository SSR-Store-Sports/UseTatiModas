<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

/**
 * @property-read string $name
 * @property-read string $email
//  * @property-read string $phone
//  * @property-read string $cpf
 * @property-read string $password
//  * @property-read string $password_confirmation
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
            // 'phone' => ['required', 'min:10', 'max:10'],
            // 'cpf' => ['required', 'min:11', 'max:11'],
            'password' => ['required', 'min:6', 'max:20', 'confirmed'],
        ];
    }

    public function tryToRegister() {
        // 1. Criar usuário
        $user = new User;
        $user->name = $this->name;
        $user->password = $this->password;
        $user->email = $this->email;
        // $user->phone = $this->phone;
        $user->save();

        // 2. Logar com o usuário
        auth()->login($user);

        return true;
        // dd($this);
    }
}
