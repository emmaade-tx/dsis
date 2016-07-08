@extends('layout.master')
@section('title', 'welcome to dsis')
@section('content')
	<div class="container">
		<div class="background-image">
			<h1>Welcome to Demo Supermarket Information System</h1>
			<p>This is a platform where you can search for items base on there categories and price</p>
		</div>
		<a href="{{ route('itemForm') }}">Add an Item to the store</a>

		<form method="post" action="{{ route('searchItem') }}">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<label for="search">Search an Item</label>
			<input type="text" name="search">
			@if ($errors->has('search'))
					<span class="help-block">
						<strong>{{ $errors->first('search') }}</strong>
					</span>
			@endif
			<button type="submit">Search</button>
		</form>
		
		
	</div>
@endsection