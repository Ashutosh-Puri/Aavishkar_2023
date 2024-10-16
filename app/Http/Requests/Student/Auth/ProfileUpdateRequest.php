<?php

namespace App\Http\Requests\Student\Auth;

use App\Models\User;
use App\Models\Student;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'username' => ['string', 'max:255'],
            'email' => ['email', 'max:255', Rule::unique(Student::class)->ignore($this->user()->id)],
        ];
    }
}
