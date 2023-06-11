<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $fillable=['name','surname','birthday'];

    protected $casts = [
        'birthday' => 'datetime'
    ];

    public function books(){
        return $this->hasMany(Book::class);
    }
}
