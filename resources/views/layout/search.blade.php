@extends('layout.master')
@section('title', 'welcome to dsis')
@section('content')
	<div class="container">
		<h4>Results</h4>
	    @foreach($results as $item)
	        <table>
				<tr>
					<th>name</th>
					<th>price</th>
					<th>category</th>
				</tr>
				<tr>
					<td>{{ $item->name }}</td>
					<td>{{ $item->price }}</td>
					<td>{{ $item->category }}</td>
				</tr>
				
			</table>
	    @endforeach
	    {!! $results->render() !!}
	    <div><a href="{{ route('index') }}">Click here to go back to home</a></div>
	</div>
@endsection