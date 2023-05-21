<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IdInformation extends Model
{
    use HasFactory;

    protected $table = 'id_information';

    protected $fillable = [
        'candidacy_application_id',
        'first_name' , 
        'last_name',
        'father_name',
        'mother_name',
        'birthday',
        'place_birth',
        'gender',
        'place_registration',
        'number_registration',
    ];

    public function Candidcy_Appliction ()
    {
        return $this->belongsTo(candidacy_application::class);
    }
}
