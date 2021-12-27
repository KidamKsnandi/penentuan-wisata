<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $visible = ['nama_kategori', 'deskripsi_kategori'];
    protected $fillable = ['nama_kategori', 'deskripsi_kategori'];
    public $timestamps = true;

    public function wisata() {
        $this->hasMany('App\Models\Wisata', 'id_kategori');
    }
}
