<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daniel Jacoby</title>
    <link rel="stylesheet" type="text/css" href="assets/css/card.css">
    <!-- Font Awesome -->
	<link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!--<script type="text/javascript">
	var el = document.querySelector("#gif");
	var random = math.floor((math.random()*2)+1)
	el.innerHTML = "img/gif-" + random + ".gif\" alt=\"Random gif of Daniel"
	</script>-->
 </head>
 <body>
<div id="container">

	<main>

		<img id="gif" src="assets/img/daniel-<?php echo rand(1,4); ?>.gif" alt="Random gif of Daniel">
		
	</main>
	<section>
		<div id="icons">
			<p>Refresh for random GIF</p>
			<h2>Daniel Jacoby</h2>
			<p>Writer. Developer. Friend</p>
			<a href="https://twitter.com/danielmjacoby" target="_blank" class="badge social twitter"><i class="fa fa-twitter"></i></a>
			<a href="https://www.facebook.com/profile.php?id=100007971407891" target="_blank" class="badge social facebook"><i class="fa fa-facebook"></i></a>
			<a href="https://github.com/danielmjacoby" target="_blank" class="badge social github"><i class="fa fa-github"></i></a>
			<a href="https://linkedin.com/in/danielmjacoby" target="_blank" class="badge social linkedin"><i class="fa fa-linkedin"></i></a>
			<a href="https://zerotofrontend.wordpress.com" target="_blank" class="badge social wordpress"><i class="fa fa-wordpress"></i></a>
			<footer>
			<p>&copy; <?php echo date('Y'); ?> Daniel Jacoby</p>
			</footer>
		</div><!--icons-->

	</section>
</div><!--container-->
</body>
</html>