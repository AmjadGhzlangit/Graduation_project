<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class candidacy_application extends Model
{
        use HasFactory;

        protected $fillable = [
                'election_program',
                'phoneNumber',
                'education',
                'category',
                'address',
        ];

        public function Id()
        {
                return $this->hasOne(IdInformation::class);
        }

        public function images()
        {
                return $this->hasMany(candidacy_application::class);
        }
}
