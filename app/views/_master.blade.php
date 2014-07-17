<!doctype html>
<html>
<head>

	<title>@yield('title',"Developer's Best Friend")</title>

	<link rel= "icon" type = "image/ico" href="images/favicon.ico">
	<link rel="stylesheet" href="../css/style.css" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Raleway|Lato' rel='stylesheet' type='text/css'>
	
	@yield('head')

</head>

<body>
	<header >
		<a href="/"><img src="<?php echo URL::asset('images/dbflogo.png'); ?>" alt="logo" id="logo"></a><br>
		<!-- links -->
		<a href="/lorem" class="genlink">Lorem Ipsum Generator</a> |
		<a href="/randusr" class="genlink">Random User Generator</a>
	
	</header>
	
	<div>
	@yield('content')
	</div>

</body>

</html>