<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_mhs',
        'nim',
        'mail_mhs',
        'role',
        'telp_mhs',
        'password',
    ];

    // Additional model logic goes here
}
