@extends('admin.layouts.base')

@section('contents')
	@if (session('update_success'))
		@php $project = session('update_success') @endphp
		<div class="alert alert-success">
			Project "{{ $project->title }}" has been successfully updated
		</div>
	@endif
	<div class="card" style="width: 40vw">
		<img src="{{ $project->url_image }}" alt="{{ $project->title }}" class="card-img-top">
		<div class="card-body">
			<h2 class="card-title">PROJECT:</h2>
			<h3>{{ $project->title }}</h3>
			<p class="card-text mt-5">Description:</p>
			<p>{{ $project->description }}</p>
		</div>
		<ul class="list-group list-group-flush">
			<li class="list-group-item">
				<p>Created on: {{ $project->creation_date }}</p>
			</li>
			<li class="list-group-item">
				<p>URL Github</p>
				<a href="">{{ $project->url_repo }}</a>
			</li>
		</ul>
	</div>
@endsection
