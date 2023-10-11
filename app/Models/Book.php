<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public function author()
    {
        return $this->belongsTo(Book::class);
    }

    public function booklist()
    {
        return $this->belongsToMany(Book::class, 'booklist_book', 'book_id', 'booklist_id');
    }
}
