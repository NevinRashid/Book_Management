@extends('welcome')
@section('content')
    <div class="container py-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h2 fw-bold">Authors</h1>
            <a href="{{ route('authors.create') }}" class="btn btn-success btn-lg shadow-sm">
                <i class="bi bi-plus-lg me-1"></i> Add New Author
            </a>
        </div>
        @if (count($authors)!=0)
        @foreach ($authors as $author)
            <div class="card shadow-sm border-1" style="margin-bottom:20px">
            <div class="card-header text-white" style="background-color:#9db9c1;" >
                <h3 class="mb-0">{{ $author->author_name }}</h3>
            </div>
            <div class="card-body">
                <div class="row gy-4">
                    <div class="col-md-8">
                        <dl class="row">
                            <dt class="col-sm-4 text-end">Full Name:</dt>
                            <dd class="col-sm-8">{{ $author->author_name }}</dd>
                            <dt class="col-sm-4 text-end">Birth Date:</dt>
                            <dd class="col-sm-8">{{ \Carbon\Carbon::parse($author->birth_date)->format('d M Y') }}</dd>
                            <dt class="col-sm-4 text-end">Nationality:</dt>
                            <dd class="col-sm-8">{{ $author->nationality }}</dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-white text-end">
                <div class="mt-auto d-flex justify-content-end gap-2">
                    <a href="{{ route('authors.edit', $author) }}" class="btn btn-outline-primary me-2">
                        <i class="bi bi-pencil-square"></i> Edit
                    </a>
                    <form action="{{ route('authors.destroy', $author) }}"method="POST"
                                onsubmit="return confirm('Are you sure you want to delete this author?');">
                                @csrf @method('DELETE')
                                <button class="btn btn-outline-danger me-2">
                                    <i class="bi bi-trash"></i> Delete
                                </button>
                    </form>
                </div>
            </div>
            </div>
        @endforeach
        @else
            <p>There are no Author currently</p>
        @endif

    </div>
@endsection
