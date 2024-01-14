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

    //belongsTo menerima data 
    public function user(){
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }

    public function kamar(){
        return $this->belongsTo(Kamar::class, 'id_kamar', 'id_kamar');
    }
}
