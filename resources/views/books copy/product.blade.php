<!-- resources/views/books/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div>
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
@endsection
