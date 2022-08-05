<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    protected $table = "kegiatan";
    protected $primaryKey= "id";
    protected $fillable = [
        'id','nama_kegiatan','tgl_kegiatan'
    ];
}
