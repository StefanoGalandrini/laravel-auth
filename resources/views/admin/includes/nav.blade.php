<nav class="navbar navbar-expand-lg bg-body-tertiary">
	<div class="container-fluid">
		<span class="navbar-brand h1">PROGETTI</span>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
			aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item">
					<a class="nav-link" href="{{ route('guests.home') }}">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						NOME RISORSE
					</a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="{{ route('admin.projects.index') }}">Index</a></li>
						<li><a class="dropdown-item" href="{{ route('admin.projects.create') }}">Create</a></li>
					</ul>
				</li>
			</ul>

			<a href="{{ route('admin.projects.index') }}" class="btn btn-success">Back to Index</a>

		</div>
	</div>
</nav>
