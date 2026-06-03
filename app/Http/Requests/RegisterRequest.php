<?php

namespace App\Http\Requests;

use App\Models\Address;
use App\Models\LoginToken;
use App\Models\User;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Str;

/**
 * @property-read string $name
 * @property-read string $email
 * @property-read string $phone
 * @property-read string $cpf
 * @property-read string $password
 * @property-read string $cep
 * @property-read string $street
 * @property-read string $number
 * @property-read string $complement
 * @property-read string $neighborhood
 * @property-read string $city
 * @property-read string $state
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
            'cpf' => ['required', 'min:11', 'max:14'],
            'phone' => ['required', 'min:10', 'max:15'],
            'password' => ['required', Password::defaults(), 'confirmed'],
            'cep' => ['required', 'string', 'max:9'],
            'street' => ['required', 'string', 'max:255'],
            'number' => ['required', 'string', 'max:10'],
            'complement' => ['nullable', 'string', 'max:255'],
            'neighborhood' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'state' => ['required', 'string', 'size:2'],
        ];
    }

    public function tryToRegister(): string
    {
        $user = User::create([
            'name'     => $this->name,
            'email'    => $this->email,
            'phone'    => $this->phone,
            'cpf'      => $this->cpf,
            'password' => $this->password,
            'role'     => 'member',
            'status'   => 'inactive',
        ]);

        Address::create([
            'user_id'      => $user->id,
            'cep'          => $this->cep,
            'street'       => $this->street,
            'number'       => $this->number,
            'complement'   => $this->complement,
            'neighborhood' => $this->neighborhood,
            'city'         => $this->city,
            'state'        => $this->state,
        ]);

        $token = LoginToken::create([
            'user_id'    => $user->id,
            'token'      => Str::random(64),
            'expires_at' => now()->addHours(24),
        ]);

        return route('verify-email', ['token' => $token->token]);
    }
}
