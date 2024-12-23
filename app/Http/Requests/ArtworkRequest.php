<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArtworkRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; 
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
           
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image_url' => 'nullable',
            'price' => 'required|numeric|min:0',
        ];
    }
}
