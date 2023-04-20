<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreImagesRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'font-img' => 'required|image|max:2048|mimes:jpeg,png',
            'back-img' => 'required|image|max:2048|mimes:jpeg,png',
            'registerWork-img' => 'required|image|max:2048|mimes:jpeg,png',
            'familyDocument-img' => 'required|image|max:2048|mimes:jpeg,png',
            'residenceDocument-img' => 'required|image|max:2048|mimes:jpeg,png',
            'education-img' => 'required|image|max:2048|mimes:jpeg,png',
            'convicationDocument-img' =>'required|image|max:2048|mimes:jpeg,png',
            'medicalExamination-img' => 'required|image|max:2048|mimes:jpeg,png',
        ];
    }
}
