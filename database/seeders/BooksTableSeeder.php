<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    $data = file_get_contents('https://fakerapi.it/api/v1/books?_quantity=100');
    $books = json_decode($data)->data;

    foreach ($books as $book) {
        \App\Models\Book::create([
            'title' => $book->title,
            'author' => $book->author,
            'description' => $book->description,
            'isbn' => $book->isbn,
            'genre' => $book->genre,
            'image' => $book->image,
            'publisher' => $book->publisher,
            'published' => $book->published,
        ]);
    }
}

}
