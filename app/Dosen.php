<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $fillable = ['nama_dosen', 'jenis_kelamin', 'jabatan'];
}
