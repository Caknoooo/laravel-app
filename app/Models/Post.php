<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Fillable bertujuan untuk memasukkan data sesuai dengan nama kolomnya
    protected $fillable = ['title', 'excerpt', 'body'];

    // Guarded bertujuan untuk memasukkan data selain dengan nama yang dimasukkan
    // ex : masukkan smua data ke kolom yang ada kecuali ID
    protected $guarded = ['id'];
}
