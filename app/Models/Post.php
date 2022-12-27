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
    protected $with = ['author', 'category'];

    public function scopeFilter($query, array $filters){
        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where(function($query) use($search){
                $query->where('title', 'like', '%' . $search . '%')
                      ->orWhere('body', 'like', '%' . $search . '%');
            });
        });

        $query->when($filters['category'] ?? false, function($query, $category){
            return $query->whereHas('category', function($query) use($category){
                $query->where('slug', $category);
            });
        });

        $query->when($filters['author'] ?? false, fn($query, $author) => 
            $query->whereHas('author', fn($query) => 
                $query->where('username', $author)
            )
        );
    }

    // Relasi one to one terhadap class category
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function author(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
