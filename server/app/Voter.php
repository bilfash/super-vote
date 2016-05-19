<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voter extends Model
{
    protected $table = "voter";
    protected $primaryKey = "id";
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = [
        'nama', 'telp', 'ktp',
    ];

    protected $hidden = [
        'session_ip', 'session_exp', 'token', 'token_exp',
    ];
}
