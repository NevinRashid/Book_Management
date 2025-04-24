@extends('welcome')
@section('content')
    <div class="container py-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h2 fw-bold">Book Management</h1>
            <a href="{{ route('books.create') }}" class="btn btn-success btn-lg shadow-sm">
                <i class="bi bi-plus-lg me-1"></i> Add New Book
            </a>
        </div>
        <div class="row">
          @if (count($books)!=0)
            @foreach($books as $book)
                <div class="col-md-3 mb-4">
                    <div class="card mb-4 shadow-sm">
                        <img src="{{ asset('storage/' . $book->cover) }}" class="card-img-top" alt="{{ $book->title }}" style="height:45vh">
                        <div class="card-body">
                            <h5 class="card-title">{{ $book->title }}</h5>
                            <p class="card-text"><strong>Author: </strong>{{ $book->author->author_name }}</p>
                            <p class="card-text"><strong>Category:</strong> {{ $book->category->category_name }}</p>
                            <p class="card-text"><strong>Language: </strong>{{ $book->language->language_name }}</p>
                            <p class="card-text"><strong>Publication Date: </strong>{{ \Carbon\Carbon::parse($book->published_at)->format('d M Y') }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                              <a href="{{ route('books.show', $book) }}" class="btn btn-outline-success btn-custom"> <i class="bi bi-eye"></i> Show</a>
                              <a href="{{ route('books.edit', $book) }}" class="btn btn-outline-primary btn-custom"><i class="bi bi-pencil"></i> Edit</a>
                              <form action="{{ route('books.destroy', $book) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this book?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger btn-custom"><i class="bi bi-trash"></i> Delete</button>
                              </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        @else
          <p>There are no books currently</p>
        @endif
    </div>

@endsection