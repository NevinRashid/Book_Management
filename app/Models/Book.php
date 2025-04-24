<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable=[
                        'title',
                        'published_at',
                        'cover',
                        'category_id',
                        'author_id',
                        'language_id',
                        ];

    public function author(){
        return $this->belongsTo(Author::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function language(){
        return $this->belongsTo(Language::class);
    }
}
