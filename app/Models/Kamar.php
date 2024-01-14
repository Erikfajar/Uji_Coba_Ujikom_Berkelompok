<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    use HasFactory;
    protected $table = 'kamar';
    protected $fillable = [
        'tipe_kamar', 'fasilitas', 'poto_kamar', 'jumlah_kamar'
    ];

    public function reservasi(){
        return $this->hasMany(Reservasi::class);
    }
}
