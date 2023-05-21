<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class image extends Model
{
    use HasFactory;

    protected $fillable = [ 'candidacy_application_id',
                            'font_img',
                            'back_img',
                            'registerWork_img',
                            'familyDocument_img',
                            'residenceDocument_img',
                            'education_img',
                            'convicationDocument_img',
                            'medicalExamination_img'
                        ];
    public function Candidcy_Appliction ()
    {
        return $this->belongsTo(candidacy_application::class);
    }
}
