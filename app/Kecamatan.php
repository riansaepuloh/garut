<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    protected $table = 'kecamatans';
    protected $primaryKey = 'kd_kecamatan';
    protected $fillable = ['kd_kecamatan','nama_kecamatan'];
}
