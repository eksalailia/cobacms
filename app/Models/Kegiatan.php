<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    use HasFactory;

    public $table = "kegiatan";
    protected $fillable = [
        'nama_kegiatan', 'tgl_kegiatan','deskripsi'];
}
