@extends('welcome')
@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="card shadow-sm border-0 hover-shadow">
                    <div class="card-body">
                        <h2 class="card-title fw-bold mb-4">Edit category</h2>
                        <form action="{{ route('categories.update',$category) }}" method="POST" novalidate>
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="name" class="form-label">Category Name:</label>
                                <input type="text" id="name" name="name" value="{{ $category->category_name }}" class="form-control @error('name') is-invalid @enderror" placeholder="Enter category name…" required>
                                @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                </div>
                                <div class="d-flex justify-content-end gap-2 mt-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="bi bi-check-lg me-1"></i>update
                                    </button>
                                    <a href="{{ route('categories.index') }}" class="btn btn-secondary">
                                        <i class="bi bi-x-lg me-1"></i> Cancel
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
