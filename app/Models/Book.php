<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Book extends Model
{
    use Searchable;

    public $timestamps = false;

    public function author(): BelongsTo
    {
        return $this->belongsTo(Author::class);
    }

    public function bookType(): BelongsTo
    {
        return $this->belongsTo(BookType::class);
    }
    public function toSearchableArray(): array
    {
        return $this->only('title');
    }

}
