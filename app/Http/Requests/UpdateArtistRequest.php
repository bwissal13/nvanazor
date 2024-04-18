<?php


namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateArtistRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // Add your authorization logic here if needed
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
            'bio' => 'nullable|string|max:255', 
            'image_url' => 'nullable',
            'external_url' => 'nullable',
            
        ];
    }
}
