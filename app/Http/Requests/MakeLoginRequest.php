<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;

/**
 * Handle Login Request
 * @property-read string $password
 * @property-read string $email
 */
class MakeLoginRequest extends FormRequest
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
        // realiza validação dos dados da requisição
        return [
            'email' => ['required', 'email'],
            'password' => ['required']
        ];
    }

    /**
     * Attempt to login in the system
     */
    public function attempt(): bool
    {
        // verifica se usuário existe e se senha é compatível pra direcionar para home
        if ($user = User::query()->where('email', '=', $this->email)->first()) {
            if (Hash::check($this->password, $user->password)) {
                auth()->login($user);

                return true;
            }
        }
        ;

        // se não existir, retorna pro login com mensagem de erro genérica
        return false;

    }
}
