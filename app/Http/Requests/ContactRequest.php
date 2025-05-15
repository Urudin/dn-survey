<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'g-recaptcha-response' => 'required',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'rate' => 'required|string',
            'combo_dance' => 'required|in:yes,no',
            'tattoo_system' => 'required|in:yes,no',
            'buff_system' => 'required|in:npc_full_no_resists,up_to_74',
            'message' => 'nullable|string',
            'subscribe' => 'nullable|boolean',
        ];
    }
}
