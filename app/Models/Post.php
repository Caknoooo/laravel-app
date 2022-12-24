<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PDO;

class Post extends Model
{
    use HasFactory;

    // Fillable bertujuan untuk memasukkan data sesuai dengan nama kolomnya
    //protected $fillable = ['title', 'excerpt', 'body'];

    // Guarded bertujuan untuk memasukkan data selain dengan nama yang dimasukkan
    // ex : masukkan smua data ke kolom yang ada kecuali ID
    protected $guarded = ['id'];

    // Relasi one to one terhadap class category
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
