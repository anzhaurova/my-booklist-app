<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Booklist extends Model
{
    use HasFactory;

    /**
     * Get the books associated with the booklist.
     */
    public function books()
    {
        return $this->belongsToMany(Book::class, 'booklist_book', 'booklist_id', 'book_id');
    }

    public function scopeFilter($query, array $filters)
    {
        if($filters['search']?? false) {
            $query->where('name', 'like', '%' . request('search') . '%')
            ->orWhere('description', 'like', '%' . request('search') . '%');
        }
    }
}
