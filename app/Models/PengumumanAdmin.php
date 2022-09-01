<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengumumanAdmin extends Model
{
    use HasFactory;
    public $table = "pengumuman";
    protected $fillable = [
        'nama_pengumuman', 'tgl_pengumuman','deskripsi'];
}
