@extends('welcome')
@section('content')
    <div class="container py-5" style="width: 50%; margin:auto;">
        <h1 class="mb-4 fw-bold"> Book Information</h1>
        <div class="card mb-3 shadow-sm">
            <div class="row g-0 align-items-center">
                <div class="col-md-8">
                    <div class="card-body">
                        <h3 class="card-title mb-3">{{ $book->title }}</h3>
                        <p class="mb-1"><strong>Author:</strong> {{ $book->author->author_name }}</p>
                        <p class="mb-1"><strong>Category:</strong> {{ $book->category->category_name ?? '-' }}</p>
                        <p class="mb-1"><strong>Language:</strong> {{ $book->language->language_name }}</p>
                        <p class="mb-0"><strong>Publication Date:</strong> {{ \Carbon\Carbon::parse($book->published_at)->format('d M Y') }}</p>
                    </div>
                </div>
                <div class="col-md-4 text-center" >
                    <img src="{{ asset('storage/' . $book->cover) }}" class="img-fluid rounded-end p-2" alt="{{ $book->title }}" style="width: 100%; height:300px;">
                </div>
            </div>
            <div class="card-footer bg-white d-flex justify-content-end">
                <a href="{{ route('books.index') }}" class="btn btn-outline-secondary me-2"> <i class="bi bi-arrow-left"></i> Back</a>
            </div>
        </div>
    </div>
@endsection