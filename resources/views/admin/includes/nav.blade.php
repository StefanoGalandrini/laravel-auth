@php $user = Auth::user(); @endphp

<nav class="navbar navbar-expand-lg bg-body-tertiary">
	<div class="container-fluid">
		<a class="navbar-brand h1" href="{{ route('guests.home') }}">MY PROJECTS</a>

		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
			aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item">
					<a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						PROJECTS
					</a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="{{ route('admin.projects.index') }}">Index</a></li>
						<li><a class="dropdown-item" href="{{ route('admin.projects.create') }}">Create</a></li>
					</ul>
				</li>
			</ul>

			<ul class="navbar-nav mb-2 mb-lg-0">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						{{ $user->name }}
					</a>
					<ul class="dropdown-menu">
						<li class="nav-item dropdown">
							<a class="dropdown-item" href="{{ route('admin.profile.edit') }}">Edit profile</a>
						</li>
						<li class="nav-item dropdown">
							<form action="{{ route('logout') }}" method="post">
								@csrf
								<button class="btn btn-warning mx-2">Logout</button>
							</form>
						</li>
					</ul>
				</li>
			</ul>
			<a href="{{ route('admin.projects.index') }}" class="btn btn-success">Project Index</a>

		</div>
	</div>
</nav>
