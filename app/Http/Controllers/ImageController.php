<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreImagesRequest;
use App\Models\candidacy_application;
use App\Models\image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function create()
    {
        return view('nomiation.form_two');
    }
    public function store(StoreImagesRequest $request)
    {
        
        $form1Data = session('form1_data')->toArray();
        
    // $fontImg = $request->file('font-img')->store('public/images');
    // $backImg = $request->file('back-img')->store('public/images');
    // $registerWorkImg = $request->file('registerWork-img')->store('public/images');
    // $familyDocumentImg = $request->file('familyDocument-img')->store('public/images');
    // $residenceDocumentImg = $request->file('residenceDocument-img')->store('public/images');
    // $educationImg = $request->file('education-img')->store('public/images');
    // $convicationDocumentImg = $request->file('convicationDocument-img')->store('public/images');
    // $medicalExaminationImg = $request->file('medicalExamination-img')->store('public/images');
    

    // $image = new Image([
    //     'candidacy_applications_id' => $form1Data['id'],
    //     'font-img' => $fontImg,
    //     'back-img' => $backImg,
    //     'registerWork-img' => $registerWorkImg,
    //     'familyDocument-img' => $familyDocumentImg,
    //     'residenceDocument-img' => $residenceDocumentImg,
    //     'education-img' => $educationImg,
    //     'convicationDocument-img' => $convicationDocumentImg,
    //     'medicalExamination-img' => $medicalExaminationImg,
    // ]);
    //  $image->save();
    //  return 'thank you';

    //this code is Do the same function but shorter
    $attributes = ['font-img', 'back-img', 'registerWork-img', 'familyDocument-img', 'residenceDocument-img', 'education-img', 'convicationDocument-img', 'medicalExamination-img'];

        $data = [];
        foreach ($attributes as $attribute) {
            $file = $request->file($attribute);
            $path = $file->store('public/images');
            $data[$attribute] = $path;
        }

        $data['candidacy_applications_id'] = $form1Data['id'];
        $image = Image::create($data);

        session()->forget('form1_data');
        return 'thank you';
    }
}
