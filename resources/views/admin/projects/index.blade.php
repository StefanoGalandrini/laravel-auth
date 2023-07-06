@extends('admin.layouts.base')

@section('contents')
	{{-- Messaggio di conferma cancellazione --}}
	{{-- @if (session('delete_success'))
		@php $project = session('delete_success') @endphp
		<div class="alert alert-danger">
			Il Progetto "{{ $project->title }}" è stato eliminato
		</div>
	@endif --}}

	{{-- @if (session('update_success'))
		<div class="alert alert-success">
			{{ session('update_success') }}
		</div>
	@endif --}}

	<div class="d-flex justify-content-center mt-5" style="margin: 0; padding: 0;">
		<table class="table table-bordered table-secondary table-striped table-hover table-rounded">
			<thead>
				<tr class="thead-dark">
					<th>Title</th>
					<th>Image</th>
					<th>Creation Date</th>
					<th>Github URL</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($projects as $project)
					<tr>
						<td class="fw-bold fs-5">{{ $project->title }}</td>
						<td class="fs-5"><img src="{{ $project->url_image }}" alt="{{ $project->title }}"></td>
						<td>{{ $project->creation_date }}</td>
						<td><a href="{{ $project->github_url }}">{{ $project->url_repo }}</a></td>
						<td>
							<a href="{{ route('admin.projects.show', ['project' => $project->id]) }}"
								class="btn btn-success btn-sm fs-5">View</a>
							<a href="{{ route('admin.projects.edit', ['project' => $project->id]) }}"
								class="btn btn-primary btn-sm fs-5">Edit</a>
							<form action="{{ route('admin.projects.destroy', ['project' => $project->id]) }}" method="POST" class="d-inline">
								@csrf
								@method('DELETE')
								<button type="submit" class="btn btn-danger btn-sm fs-5">Delete</button>
							</form>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection
