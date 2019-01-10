<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Custom Login</title>
	<link rel="stylesheet" href="/css/app.css">
</head>
<body>
	<div class="container">
		<hr>
		@if(session()->has('flash'))
			<div class="alert alert-info">{{ session('flash') }}</div>
		@endif
		@yield('content')
	</div>
</body>
</html>