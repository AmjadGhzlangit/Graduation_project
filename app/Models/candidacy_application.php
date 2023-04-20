<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class candidacy_application extends Model
{
        use HasFactory;

        protected $fillable = [
                'phoneNumber',
                'education',
                'category',
                'address',
        ];

        public function images()
        {
                return $this->hasMany(candidacy_application::class);
        }
}
