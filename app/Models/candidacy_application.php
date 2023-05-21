<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class candidacy_application extends Model
{
        use HasFactory;
        use SoftDeletes;

        protected $fillable = [
                'election_program',
                'phoneNumber',
                'education',
                'category',
                'address',
                'status',
        ];

        public function id_information()
        {
                return $this->hasOne(IdInformation::class);
        }

        public function images()
        {
                return $this->hasOne(image::class);
        }
}
