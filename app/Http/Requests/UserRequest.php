<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        $userId = $this->route('user')->id ?? null;
        return [
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email,' . $userId,
            'password' => 'required|min:6|confirmed',
        ];
    }

    public function response(array $errors)
    {
        return redirect()->route('users.create')->withErrors($errors);
    }
}
