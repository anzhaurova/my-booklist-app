<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
    ];

    public function author()
    {
        return $this->belongsTo(Book::class);
    }

    public function booklist(): BelongsToMany
    {
        return $this->belongsToMany(Book::class, 'booklist_book', 'book_id', 'booklist_id');
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }
}
