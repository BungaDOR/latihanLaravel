<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $table = 'dosen';

    // Kolom yang bisa diisi mass-assignment
    protected $fillable = [
        'namaDsn',
        'nid',
        'matkul'
    ];
}