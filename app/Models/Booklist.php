<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Booklist extends Model
{
    use HasFactory;

    /**
     * Get the books associated with the booklist.
     */
    public function books(): HasMany
    {
        return $this->hasMany(Book::class);
    }
}
