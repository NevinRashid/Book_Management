@extends('welcome')
@section('content')
    <div class="container py-5">
    {{-- Edit Author Card --}}
        <div class="card shadow-sm border-0">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0"><i class="bi bi-pencil-square"></i> Edit Author</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('authors.update', $author) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row gy-3">
                        <div class="col-md-6">
                            <label for="author_name" class="form-label">Full Name</label>
                            <input type="text" name="author_name" id="author_name"
                                    class="form-control @error('author_name') is-invalid @enderror"
                                    value="{{$author->author_name }}"
                                    placeholder="e.g. Jane Doe" required>
                                @error('author_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="birth_date" class="form-label">Birth Date</label>
                            <input type="date" name="birth_date" id="birth_date"
                                    class="form-control @error('birth_date') is-invalid @enderror"
                                    value="{{$author->birth_date}}" required>
                                @error('birth_date')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="nationality" class="form-label">Nationality</label>
                            <input type="text" name="nationality" id="nationality"
                                    class="form-control @error('nationality') is-invalid @enderror"
                                    value="{{$author->nationality}}" placeholder="e.g. American" required>
                                @error('nationality')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                        </div>
                    </div>
                    <div class="mt-4 text-end">
                        <button type="submit" class="btn btn-primary me-2">
                            <i class="bi bi-check-circle"></i> Update
                        </button>
                        <a href="{{ route('authors.index') }}" class="btn btn-outline-secondary">
                            <i class="bi bi-arrow-left-circle"></i> Cancel
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection