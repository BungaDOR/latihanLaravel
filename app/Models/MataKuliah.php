<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    use HasFactory;

    // Nama tabel (opsional, default = "mahasiswas" -> jamak)
    protected $table = 'mataKuliah';

    // Kolom yang bisa diisi mass-assignment
    protected $fillable = [
        'matkul',
        'deskripsi',
    ];
}