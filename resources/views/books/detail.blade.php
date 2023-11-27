<!-- resources/views/books/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>{{ $book->title }}</h1>
    <p><strong>Author:</strong> {{ $book->author }}</p>
    <p><strong>Publication Date:</strong> {{ $book->published }}</p>
    <p><strong>ISBN:</strong> {{ $book->isbn }}</p>
    <p><strong>Genre:</strong> {{ $book->genre }}</p>
    <p><strong>Description:</strong> {{ $book->description }}</p>
    <!-- Add other details as needed -->

    <!-- You can also include a button or link to go back to the list of books -->
    <a href="/home">Back to Books</a>
@endsection
