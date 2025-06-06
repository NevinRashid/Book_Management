<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $fillable=[
                        'language_name'
                        ];

    public function books(){
        return $this->hasMany(Book::class);
    }
}
