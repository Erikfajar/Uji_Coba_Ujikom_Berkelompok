<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fasilitas extends Model
{
    use HasFactory;
    protected $table = 'fasilitas';
    public $primaryKey = 'id_fasilitas';
    public $timestamps = false;
    protected $fillable = [
        'poto_fasilitas', 'nama_fasilitas', 'ket_fasilitas'
    ];
}
