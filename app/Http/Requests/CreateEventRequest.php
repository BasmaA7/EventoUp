<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Carbon\Carbon;
class CreateEventRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'description' => 'required|max:500', 
            'image' => 'required|image', 
            'category_id' => 'required|integer', 
            'quantity' => 'required|integer',
            'date' => ['required', 'date', 'after_or_equal:' . now()->format('Y-m-d')],
            'validation' => 'required|in:automatique,manuelle',
            'location' => 'required|string|max:255',
        ];
    }
}
