<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    use HasFactory;
    protected $table = 'kamar';
    public $primaryKey = 'id_kamar';
    public $timestamps = false;
    protected $fillable = [
        'tipe_kamar', 'fasilitas', 'poto_kamar', 'jumlah_kamar'
    ];

    public function reservasi(){
        return $this->hasMany(Reservasi::class,'id_kamar','id_kamar');
    }
}
