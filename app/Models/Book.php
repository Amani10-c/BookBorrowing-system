<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';

    public function bookLoans()
    {
        return $this->belongsToMany(BookLoan::class,'book_loans','user_id','book_id');
    }
}
