<!DOCTYPE html>
<head>
	<meta name="viewport" content="width=device-width">
	<meta name="pmt" content="This is a project management system">

	<link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
	@include('layout.partial.alert')
	@yield('content')
</body>