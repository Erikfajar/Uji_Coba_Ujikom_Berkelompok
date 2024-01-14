<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservasi extends Model
{
    use HasFactory;
    protected $table = 'reservasi';
    protected $fillable = [
        'id_user', 'email', 'no_hp', 'nama_tamu', 'id_kamar', 'tgl_cekIn', 'tgl_cekOut', 'jumlah_kamar'
    ];
}
