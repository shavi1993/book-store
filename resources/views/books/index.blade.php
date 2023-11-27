<!-- resources/views/books/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Book Search Results</h1>

    <form action="/books/search" method="get">
        <input type="text" name="q" placeholder="Search books by title" value="{{ request('q') }}">
        <input type="text" name="author" placeholder="Filter by author" value="{{ request('author') }}">
        <input type="date" name="publication_date" placeholder="Filter by publication date" value="{{ request('published') }}">
        <input type="text" name="isbn" placeholder="Filter by ISBN" value="{{ request('isbn') }}">
        <input type="text" name="genre" placeholder="Filter by genre" value="{{ request('genre') }}">
        <button type="submit">Search</button>
    </form>

    <ul>
        @foreach($books as $book)
        <a href="/books/{{$book->id}}">     <li>{{ $book->title }} - {{ $book->author }}</li></a>
        @endforeach
    </ul>

    {{ $books->links() }}
@endsection
