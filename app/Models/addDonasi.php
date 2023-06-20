<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class addDonasi extends Model
{
    use HasFactory;
    protected $table = 'adddonasi';

    protected $fillable = ['judul', 'target', 'awal','akhir', 'gambar', 'metode'];
}
