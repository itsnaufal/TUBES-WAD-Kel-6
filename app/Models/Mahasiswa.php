<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\MahasiswaController;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa'; 
}
