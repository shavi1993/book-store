<!-- resources/views/books/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div>
        <h1>Book Search</h1>

        <form action="/books/search" method="get">
            <label for="search">Search by Title:</label>
            <input type="text" id="search" name="search" required>
            <button type="submit">Search</button>
        </form>

        <!-- Display search results here -->

        @if(isset($books) && $books->count() > 0)
            <h2>Search Results:</h2>
            <ul>
                @foreach($books as $book)
                    <li>
                        <a href="/">
                            {{ $book->title }}
                        </a>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
    {{ $books->links() }}
@endsection
