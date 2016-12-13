<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="GeeksLabs">
	<title>@if(isset($title)) {{$title}} @else() Admin @endif() </title>

	<link rel="stylesheet"  href="{{ asset('dashboard/css/bootstrap.min.css') }}">
	<link rel="stylesheet"  href="{{ asset('dashboard/css/custom.css') }}">
</head>
<body>


	@yield('content')


  <script src="{{ asset('dashboard/js/jquery-3.1.0.min.js') }}"></script>
  <script src="{{ asset('dashboard/js/bootstrap.min.js') }}"></script>

</body>
</html>