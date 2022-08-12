<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aktivitas extends Model
{
    use HasFactory;
    public $table = "aktivitas";
    protected $fillable = [
        'img_aktv','judul', 'isi','author','tgl_aktivitas'];
}
