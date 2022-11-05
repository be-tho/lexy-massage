<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	@vite('resources/css/app.css')
	<title>LexyMassage | @yield('title')</title>
</head>
<body>
	<nav>
		<p>Menú</p>
	</nav>
	<main>
		@yield('content')
	</main>
	<footer>
		<div>
			<p>Esto es el footer</p>
		</div>
	</footer>
</body>
</html>