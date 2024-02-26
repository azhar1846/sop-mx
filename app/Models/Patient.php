<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $connection ='sqlsrv';
    protected $table = 'PATIENTS';

    protected $casts = [
        'Rank' => 'integer',
        'MilitaryTeam' => 'integer',

    ];

    public function rank() {
        return $this->belongsTo(Rank::class, 'Rank', 'ID');
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class, 'MilitaryTeam', 'BUId');
    }
}
