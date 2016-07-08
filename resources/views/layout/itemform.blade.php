@extends ('layout.master')
@section ('title', 'create an Item')
@include ('layout.partial.alert')
@section ('content')
	<div class="container">
		<a href="{{ route('index') }}"><h1>Demo Supermarket Information System</h1></a>
		<h3>Item Form</h3>
		<form method="post" action="{{ route('uploadItem') }}">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="form-group({{ $errors->has('name') ? 'has-error' : '' }})">
				<label for="name">Name</label>
				<input type="text" name="name" class="form-control" placeholder="Name">
				@if ($errors->has('name'))
					<span class="help-block">
						<strong>{{ $errors->first('name') }}</strong>
					</span>
				@endif	
			</div>

			<div class="form-group({{ $errors->has('price') ? 'has-error' : '' }})">
				<label for="price">Price</label>
				<input type="text" name="price" class="form-control" placeholder="Price">
				@if ($errors->has('price'))
					<span class="help-block">
						<strong>{{ $errors->first('price') }}</strong>
					</span>
				@endif
			</div>

			<div class="form-group({{ $errors->has('category') ? 'has-error' : '' }})">
				<label for="category">Category</label>
				<select name="category" id="category">
					<option value="">Choose a category</option>
					<option value="mobilephones">Mobile Phones</option>
					<option value="laptop">Laptop</option>
					<option value="wears">Wears</option>
				</select>
				@if ($errors->has('category'))
					<span class="help-block">
						<strong>{{ $errors->first('category') }}</strong>
					</span>
				@endif
			</div>

			<button type="submit" class="btn btn btn-large">Add</button>

		</form>
	</div>
@endsection