<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class image extends Model
{
    use HasFactory;
    protected $table = 'images';

    protected $fillable = [ 'candidacy_applications_id',
                            'font-img',
                            'back-img',
                            'registerWork-img',
                            'familyDocument-img',
                            'residenceDocument-img',
                            'education-img',
                            'convicationDocument-img',
                            'medicalExamination-img'
                        ];
    public function candidacy_application()
    {
        return $this->belongsTo(candidacy_application::class);
    }
}
