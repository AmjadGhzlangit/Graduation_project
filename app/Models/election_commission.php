<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class election_commission extends Model
{

    use HasFactory;

    protected $tabel = 'election_commissions';

    protected $fillable = [
        'start_election',
        'end_election',
    ];
}
