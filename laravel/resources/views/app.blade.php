<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header class="bg-light">    
	<nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <a class="navbar-brand" href="/"><img src="https://via.placeholder.com/200x50?text=Logo+Image" alt="Augmented Heart Logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#topnav" aria-expanded="false" aria-label="Toggle navigation">
    	<span class="navbar-toggler-icon"></span>
	    </button>
  	    <div class="collapse navbar-collapse justify-content-end" id="topnav">
            <a href="services" class="nav-link">Services</a>
            <a href="about" class="nav-link">About us</a>
            <a href="blog" class="nav-link">Blog</a>
            <a href="contact" class="nav-link">Contact us</a>
            <a href="article" class="nav-link">Terms and conditions</a>
            <a href="https://www.facebook.com/" class="nav-link">
			<img class="img-fluid" src="https://via.placeholder.com/40x40?text=FB" alt="Facebook page"></a>
        </div>
	</nav>
</header>
    @yield('content')
<footer>
    <nav class="navbar navbar-light bg-dark">
        <a class="navbar-brand" href="/"><img src="https://via.placeholder.com/200x50?text=Logo+Image" alt="Augmented Heart Logo"></a>
            <ul>
                    <li><a href="services" class="nav-link">Services</a></li>
                    <li><a href="about" class="nav-link">About us</a></li>
                    <li><a href="blog" class="nav-link">Blog</a></li>
                    <li><a href="contact" class="nav-link">Contact us</a></li>
                    <li><a href="terms" class="nav-link">Terms and conditions</a></li>
            </ul>
            <ul>
                    <li><a href="#" class="nav-link"><img class="img-fluid" src="https://via.placeholder.com/30x30?text=F" alt="Facebook">Facebook</a></li>
                    <li><a href="#" class="nav-link"><img class="img-fluid" src="https://via.placeholder.com/30x30?text=I+N" alt="LinkedIN">LinkedIN</a></li>
                    <li><a href="#" class="nav-link"><img class="img-fluid" src="https://via.placeholder.com/30x30?text=t" alt="Twitter">Twitter</a></li>
            </ul>
    </nav>
</footer>
<script src="node_modules/jquery/dist/jquery.slim.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
<script src="assets/js/app.js"></script>
</body>
</html>
