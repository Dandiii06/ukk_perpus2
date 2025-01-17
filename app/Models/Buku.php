<?php

namespace App\Models;

use App\Models\KategoriBuku;
use App\Models\Pinjam;
use App\Models\ulasan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    public function kategori_buku(){
        return $this->belongsTo(KategoriBuku::class);
    }

    public function pinjams(){
        return $this->hasMany(Pinjam::class);
    }

    public function ulasans(){
        return $this->hasMany(ulasan::class);
    }
}
