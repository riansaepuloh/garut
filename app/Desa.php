<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Desa extends Model
{
    protected $table = 'desas';
    protected $primaryKey = 'kd_desa';
    protected $fillable = ['kd_desa','kd_kecamatan','nama_desa','luas_desa','jumlah_laki-laki','jumlah_wanita','jumlah_kk','polygon'];
}
