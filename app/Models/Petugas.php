<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    use HasFactory;
    public $table = "petugas";
    protected $fillable = [
        'nama', 'jabatan','uraian','pendidikan','pelatihan'];
}
