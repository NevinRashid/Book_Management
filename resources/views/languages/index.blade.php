@extends('welcome')
@section('content')
<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h2 fw-bold">Languages</h1>
        <a href="{{ route('languages.create') }}" class="btn btn-success btn-lg shadow-sm">
            <i class="bi bi-plus-lg me-1"></i> Add New Language
        </a>
    </div>
    <div class="row">
        @if (count($languages)!=0)
        <div class="row g-4">
            @foreach($languages as $language)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card h-100 border-1 shadow-sm hover-shadow">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $language->language_name }}</h5>
                            <div class="mt-auto d-flex justify-content-end gap-2">
                            <a href="{{ route('languages.edit', $language) }}"class="btn btn-outline-primary btn-sm"><i class="bi bi-pencil"></i> Edit</a>
                            <form action="{{ route('languages.destroy', $language) }}"method="POST"
                                onsubmit="return confirm('Are you sure you want to delete this language?');">
                                @csrf @method('DELETE')
                                <button class="btn btn-outline-danger btn-sm">
                                    <i class="bi bi-trash"></i> Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @else
            <p>There are no languages currently</p>
        @endif
    </div>
</div>
@endsection