<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
	<!-- css -->
	<base href="{{ asset('') }}">
	<link href="backend/css/bootstrap.min.css" rel="stylesheet">
	<link href="backend/css/datepicker3.css" rel="stylesheet">
	<link href="backend/css/styles.css" rel="stylesheet">
	<!--Icons-->
	<script src="backend/js/lumino.glyphs.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css" integrity="sha384-REHJTs1r2ErKBuJB0fCK99gCYsVjwxHrSU0N7I1zl9vZbggVJXRMsv/sLlOAGb4M" crossorigin="anonymous"></head>
<body>
    @include('backend.master.header')
    @include('backend.master.slidebar')
    @yield('content')

    	<!-- javascript -->
	<script src="backend/js/jquery-1.11.1.min.js"></script>
	<script src="backend/js/bootstrap.min.js"></script>
	<script src="backend/js/chart.min.js"></script>
	<script src="backend/js/easypiechart.js"></script>
	<script src="backend/js/easypiechart-data.js"></script>
	<script src="backend/js/bootstrap-datepicker.js"></script>
	@yield('data')
    @yield('script_product')
</body>

</html>