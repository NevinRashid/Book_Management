<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable=[
                        'author_name',
                        'birth_date',
                        'nationality'
                        ];

    public function books(){
        return $this->hasMany(Book::class);
    }
}
