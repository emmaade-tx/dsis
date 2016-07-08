@if (session()->has('info'))
	<div class="container">
		<div class="alert alert-info" role-"alert">
			{{ session()->get('info') }}
		</div>
	</div>
@endif