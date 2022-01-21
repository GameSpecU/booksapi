<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BookType extends Model
{
    public $timestamps = false;

    public function books(): HasMany
    {
        return $this->hasMany(Book::class);
    }
}
