@extends('admin.layouts.base')

@section('contents')
	<h1>Add New Project</h1>

	{{-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}

	<form method="POST" action="{{ route('admin.projects.update', ['project' => $project]) }}" novalidate>
		@csrf
        @method('PUT')

		<div class="mb-3">
			<label for="title" class="form-label">Title</label>
			<input type="text" class="form-control @error('titolo') is-invalid @enderror" id="title" name="title"
				value="{{ old('title', $project->'title') }}">
			@error('title')
				<div class="invalid-feedback">
					{{ $message }}
				</div>
			@enderror
		</div>

		<div class="mb-3">
			<label for="src" class="form-label">URL Image</label>
			<input type="url" class="form-control @error('src') is-invalid @enderror" id="src" name="src"
				value="{{ old('src') }}">
			@error('src')
				<div class="invalid-feedback">
					{{ $message }}
				</div>
			@enderror
		</div>

		<div class="mb-3">
			<label for="description" class="form-label">Description</label>
			<textarea class="form-control @error('description') is-invalid @enderror" id="description" rows="3"
			 name="description">{{ old('description') }}</textarea>
			@error('description')
				<div class="invalid-feedback">
					{{ $message }}
				</div>
			@enderror
		</div>

		<div class="mb-3">
			<label for="date" class="form-label">Creation Date</label>
			<input type="date" class="form-control @error('date') is-invalid @enderror" id="date" name="date"
				value="{{ old('date') }}">
			@error('date')
				<div class="invalid-feedback">
					{{ $message }}
				</div>
			@enderror
		</div>

		{{-- <div class="mb-3">
			<label for="description" class="form-label">Description</label>
			<input type="number" class="form-control @error('description') is-invalid @enderror" id="description"
				name="description" value="{{ old('description') }}">
			<div class="invalid-feedback">
				@error('description')
					{{ $message }}
				@enderror
			</div>
		</div>

		<div class="mb-3">
			<label for="peso" class="form-label">Peso</label>
			<input type="number" class="form-control @error('peso') is-invalid @enderror" id="peso" name="peso"
				value="{{ old('peso') }}">
			<div class="invalid-feedback">
				@error('peso')
					{{ $message }}
				@enderror
			</div>
		</div> --}}


		<button class="btn btn-primary">Update</button>
	</form>
@endsection
