<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class UpdateContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return abilities()->contains('update_contact_requests');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ["required", "string:255"],
            'email' => ['required', 'string', 'email:rfc,dns'],
            'phone' => ['required', 'max:255'],
            "description" => ["required", "string:255"],
            "reply" => ["required", "string:255"],
        ];
    }
}