<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;


class Book extends Model
{
    use HasFactory;

    use Searchable;

    protected $fillable = ['title', 'author', 'description','published'];

    protected $table = 'books';

}
