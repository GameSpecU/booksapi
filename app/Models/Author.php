<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Author extends Model
{
    protected $appends = ['full_name'];
    public $timestamps = false;
    use Searchable;

    public function getFullNameAttribute(): string
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function books(): HasMany
    {
        return $this->hasMany(Book::class);
    }
}
