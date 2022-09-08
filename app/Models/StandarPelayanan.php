<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StandarPelayanan extends Model
{
    use HasFactory;
    public $table = "pelayanan";
    protected $fillable = [
        'jenis', 'komponen','uraian'];
}
