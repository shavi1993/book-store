<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book; 

class BookController extends Controller
{
    //

public function index()
    {
        // $books = Book::all();
        $books = Book::paginate(10); // Adjust as needed

        return view('books.index', compact('books'));
    }

public function search(Request $request)
{
    // $searchTerm = $request->input('q');
    // // dd($searchTerm);
    // $books = Book::where('title', 'like', "%$searchTerm%")
    //              ->orWhere('author', 'like', "%$searchTerm%")
    //              ->get();
    $query = $request->input('q');
    $author = $request->input('author');
    $publicationDate = $request->input('published');
    $isbn = $request->input('isbn');
    $genre = $request->input('genre');

    $books = Book::query()
        ->where('title', 'like', "%$query%")
        ->when($author, function ($query) use ($author) {
            $query->where('author', 'like', "%$author%");
        })
        ->when($publicationDate, function ($query) use ($publicationDate) {
            $query->where('published', $publicationDate);
        })
        ->when($isbn, function ($query) use ($isbn) {
            $query->where('isbn', $isbn);
        })
        ->when($genre, function ($query) use ($genre) {
            $query->where('genre', $genre);
        })
        ->paginate(10);

    // return view('books.index', compact('books'));
    return view('books.product', compact('books'));
}

public function show($id)
{
    $book = Book::findOrFail($id);

    return view('books.detail', compact('book'));
}

}
