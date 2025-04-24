@extends('welcome')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Edit Book</h4>
                    </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('books.update',$book) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text"class="form-control @error('title') is-invalid @enderror"
                                    id="title" name="title" value="{{$book->title }}" placeholder="Enter book title">
                                    @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                        </div>
                        <div class="mb-3">
                            <label for="published_at" class="form-label">Publication Date</label>
                            <input type="date" class="form-control @error('published_at') is-invalid @enderror"
                                    id="published_at" name="published_at" value="{{$book->published_at }}">
                                    @error('published_at')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                        </div>
                        <div class="mb-3">
                            <label for="cover" class="form-label">Book Cover</label>
                            <input class="form-control @error('cover') is-invalid @enderror" type="file"
                                    id="cover" name="cover">
                                @error('cover')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                        </div>
                        <div class="mb-3">
                            <label for="author" class="form-label">Author</label>
                            <select class="form-select" id="author_id" name="author_id" required>
                                @foreach($authors as $author)
                                    <option value="{{ $author->id }}" {{ $book->author_id == $author->id ? 'selected' : '' }}>{{ $author->author_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="category_id" class="form-label">Category</label>
                            <select class="form-select" id="category_id" name="category_id" required>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ $book->category_id == $category->id ? 'selected' : '' }}>{{ $category->category_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="language_id"  class="form-label">Language</label>
                            <select class="form-select" id="language_id" name="language_id" required>
                                @foreach($languages as $language)
                                    <option value="{{ $language->id }}" {{ $book->language_id == $language->id ? 'selected' : '' }}>{{ $language->language_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mt-4 text-end">
                            <button type="submit" class="btn btn-primary me-2">
                                <i class="bi bi-check-circle"></i> Update
                            </button>
                            <a href="{{ route('books.index') }}" class="btn btn-outline-secondary">
                                <i class="bi bi-arrow-left-circle"></i> Cancel
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

