<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreImagesRequest;
use App\Models\image;


class ImageController extends Controller
{
    public function create()
    {
        return view('nomiation.form_two');
    }
    public function store(StoreImagesRequest $request)
    {
        $form1Data = session('form1_data')->toArray();

    $attributes = ['font_img', 'back_img', 'registerWork_img', 'familyDocument_img', 'residenceDocument_img', 'education_img', 'convicationDocument_img', 'medicalExamination_img'];

        $data = [];
        foreach ($attributes as $attribute) {
            $file = $request->file($attribute);
            $path = $file->store('candidacy','public');
            $data[$attribute] = $path;
        }

        $data['candidacy_application_id'] = $form1Data['id'];
        Image::create($data);

        session()->forget('form1_data');
        return view('nomiation.response_page');
    }
}
