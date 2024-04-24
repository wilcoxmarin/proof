@extends('components.layout.layout')

@section('title', 'Companies - create')

@section('content')
    <div class="card">
        <div class="card-content">
            <div class="card-title">
                <h1>Create Companie</h1>
            </div>
            <div class="card-form">
                <form action="{{ route('companies.store') }}" method="POST" class="needs-validation">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="paco">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com">
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="logo" class="form-label">Logo</label>
                        <input class="form-control @error('logo') is-invalid @enderror" type="file" id="logo">
                        @error('logo')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="website" class="form-label">Website</label>
                        <input type="text" class="form-control @error('website') is-invalid @enderror" id="website" placeholder="www.google.com">
                        @error('website')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <a href="{{ url('companies') }}" class="btn btn-secondary disabled" tabindex="-1" role="button" aria-disabled="true">Cancel</a>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
