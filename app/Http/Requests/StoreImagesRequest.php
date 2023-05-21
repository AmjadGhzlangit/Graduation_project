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
            'font_img' => 'required|image|max:2048|mimes:jpeg,png',
            'back_img' => 'required|image|max:2048|mimes:jpeg,png',
            'registerWork_img' => 'required|image|max:2048|mimes:jpeg,png',
            'familyDocument_img' => 'required|image|max:2048|mimes:jpeg,png',
            'residenceDocument_img' => 'required|image|max:2048|mimes:jpeg,png',
            'education_img' => 'required|image|max:2048|mimes:jpeg,png',
            'convicationDocument_img' =>'required|image|max:2048|mimes:jpeg,png',
            'medicalExamination_img' => 'required|image|max:2048|mimes:jpeg,png',
        ];
    }
}
