<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $connection ='sqlsrv';
    protected $table = 'UserProfile';

    public function getPasswordAttribute()
    {
        return Hash::make($this->attributes['Password']);
    }



    protected $guarded = [];


    protected $hidden = [
        'Password',
        'remember_token',
    ];

    protected $casts = [
        'healthunit_ID' => 'integer',
        'Rankid' => 'integer',
        'Password' => 'hashed',
    ];

    public function unitHealth()
    {
        return $this->belongsTo(HealthUnit::class, 'healthunit_ID', 'id');
    }

    public function rank()
    {
        return $this->belongsTo(Rank::class, 'Rankid', 'ID');
    }


}
