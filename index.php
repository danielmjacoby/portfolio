<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>My Portfolio - Daniel Jacoby</title>
	<!-- Font Awesome -->
	<link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
	<link href="assets/css/bootstrap.min.css" type="text/css" rel="stylesheet">
	<link href="assets/css/main.css" rel="stylesheet" type="text/css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset-top="50">
<header class="site-header" role="banner">
		<div class="navbar-wrapper">
			<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle Navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="index.php">Daniel M Jacoby </a>
					</div><!-- navbar-header-->
						<div class="navbar-collapse collapse">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="#built">What I've Built</a></li>
								<!--<li><a href="#know">What I Know</a></li>-->
								<li><a href="#about-me">About Me</a></li>
								<li><a href="#contact">Contact</a></li>
							</ul>
						</div><!--navbar collapse-->
				</div><!-- container -->
			</div><!-- navbar-->
		</div><!-- navbar-wrapper-->
</header>

<!--WHAT I'VE BUILT-->
<section id="intro">
	<div class="container">
		<div class="row">
			<div class="col-sm-offset-1 col-sm-10" >
				<h1>I'm Daniel, a front-end web developer.</h1>
				<p class="lead">Welcome to my portfolio.</p>
				
				
			</div><!--col-->
		</div><!--row-->
	</div><!--container-->
</section><!--Built-->

<section id="built">
	<div class="container-fluid"
		<div class="row" id="projects">
			<div class="col-sm-offset-2 col-sm-8">
				<h1>What I've Built</h1>
				<div class="col-sm-offset-2 col-sm-4">
					
						<h3><a href="http://www.oktofail.com" target="_blank">oktofail.com</a></h3>
						<p>My biggest project to date is a custom WordPress theme. I self-publish short stories on Amazon, and I needed a new website. The site was built using a combination of Bootstrap and PHP. I used <a href="https://www.udemy.com/bootstrap-to-wordpress/learn/v4/content" target="_blank">this course on Udemy</a> as a head start.</p>
						<p>You can read about my triumphs and struggles with this project (and others) <a href="http://www.zerotofrontend.wordpress.com" target="_blank">on my blog</a>. I use it to document my web dev journey. </p>
				</div><!--col-->
				<div class="col-sm-4">
						<a href="http://www.oktofail.com" target="_blank"><img class="img-rounded border" src="assets/img/oktofail2.png" alt="A wordpress website I built"></a>
				</div><!--col-->
				<div class="col-sm-offset-2 col-sm-8">
				<hr>		
				</div>
				<div class="col-sm-offset-2 col-sm-4">
						
						<h3><a href="card.php" target="_blank">Digital Business Card Social Media Landing Page... Thing</a></h3>
						<h4>(I'm still working on the title of this one.)</h4>
						<p>This started as a project for my brother-in-law. He wanted a simple page where he could link to all of his various online personas. I liked what I made enough that I stole the idea for myself and stuck my goofy face on it.<br> ¯\_(ツ)_/¯ <br><br>
						The site is responsive without using any frameworks, and has a wee bit of PHP (to load a random GIF on refresh and to keep the &copy; date current).</p>
				</div><!--col-->
				<div class="col-sm-4">
						<a href="card.php" target="_blank"><img class="img-rounded" src="assets/img/digicard.png" alt="A digital business card site"></a>
					
						
				</div><!--col-->
				<div class="col-sm-offset-2 col-sm-8">
				<hr>		
				</div>
				<div class="col-sm-offset-2 col-sm-8">
					<h3 class="center">JavaScript/jQuery</h3>
					<p>I made the following as part of the front-end developer certificate from FreeCodeCamp. Everything was built from the ground up; I was shown an example site and then thrown into the wild to recreate it.</p>

				</div>
				<!--<div class="col-sm-offset-2 col-sm-4">
						<h3><a href="newcard.php" target="_blank">The Other One</a></h3>
						<p>I still made a site for my brother-in-law. I felt guilty about stealing the initial idea for myself, so I tried adding some more bells and whistles. The site looks different on mobile vs desktop, which I accomplished via CSS flexbox and sacrificing an albino calf to the dark gods that live in a field by my house.</p><br>
				</div> 
				<div class="col-sm-4">
				
					<a href="newcard.php" target="_blank"><img class="img-rounded" src="assets/img/garrydesktop.png" alt="A digital business card"></a>
				</div> 
				<div class="col-sm-offset-2 col-sm-8">
				<hr>		
				</div>
				<div class="col-sm-offset-2 col-sm-4">
					
					<h3><a href="panicbutton.html" target="_blank">Panic Button</a></h3>
					<p>This is an experiment trying out interactive fiction, an idea I'd like to build upon. I built it using jQuery. </p>
				</div> 
				<div class="col-sm-4">
					<a href="panicbutton.html" target="blank"><img class="img-rounded border" src="assets/img/panicbutton.png" alt="Panic Button page screenshot"></a>
				</div> 		
				<div class="col-sm-offset-2 col-sm-8">
				<hr>
					<p class="lead">These are sites I built as part of my classes. They will get phased out as I build up my body of work.</p>
				
					<div class="col-sm-6 white">
						<img class="img-rounded" src="assets/img/codePlayer.png">
						<p>Write HTML on the left, see your results on the right. There are also columns for CSS and Javascript. This project used jQuery to toggle the columns on and off.</p>
						<button role="button" class="btn btn-success"><a href="codeplayer.html">Code Player</a></button>	
					</div> 
					<div class="col-sm-6 white">
						<img class="img-rounded" src="assets/img/weatherScraper.png">
						<p>One of the first sites I built with bootstrap. This one uses PHP and regular expressions to scrape info from another weather website and import it. It's in celcius because that seems more refined.</p>
						<button role="button" class="btn btn-success"><a href="weather.php">Weather Scraper</a></button>	
					</div> -->
				
			</div> 
		</div> 
	</div> 
</section>

<!--WHAT I KNOW-->
<!--<section id="know">
	<div class="container">
		<div class="row middle">
			
			<h1>What I Know</h1>
				<div class="col-sm-4 col-xs-12">
					<div class="lighter skills">
					<h3>Fluent in: </h3>
					<ul>
						<li><i class="fa fa-html5"></i> HTML5</li>
						<li><i class="fa fa-css3"></i> CSS3</li>
						<li><span class="purple">B</span> Bootstrap</li>
						<li><i class="fa fa-github"></i> Git/Github</li>
						<li><i class="fa fa-hand-spock-o"></i> Introverts</li>
						<div class="bottom">
							<li>I'm leaving all this empty space because I'm an optimist</li>
						</div>
					</ul>
					</div>
				</div> 
				<div class="col-sm-4 col-xs-12">
					<div class="lighter skills">
					<h3>Familiar with:</h3>
					<ul>
						<li>JQuery</li>
						<li>Javascript</li>
						<li>SASS/SCSS</li>
						<li>PHP</li>
						<li><i class="fa fa-wordpress"></i> WordPress</li>
					</ul>
					</div> 
				</div> 
				<div class="col-sm-4 col-xs-12">
					<div class="lighter skills">
					<h3>Investigating:</h3>
					<ul>
						
						<li>Angular 1.X</li>
						
					</ul>
					</div> 
				</div> 
			

		</div> 
	</div> 
</section>-->

<!--ABOUT ME-->
<section id="about-me">
	<div class="container">
		<div class="row middle">
			<div class="col-sm-offset-1 col-sm-10">
				<h1>About Me</h1>
				<p class="lead">This is the part where people usually add some cool icons.</p>
				<div class="col-sm-4 ">
					<div class="whitebox">
						Like a rocket!<br><br>
						<i class="fa fa-rocket fa-5x"></i>
					</div><!--whitebox-->
				</div><!-- div col -->
				<div class="col-sm-4">
					<div class="whitebox">
						Or a camera!<br><br>
					<i class="fa fa-camera fa-5x"></i>
					</div><!--whitebox-->
				</div><!-- div col -->
				<div class="col-sm-4">
					<div class="whitebox">
						Or this... thing<br><br>
					<i class="fa fa-ship fa-5x"></i>
					</div><!--whitebox-->
				</div><!-- div col -->
				<div id="bio" class="col-sm-offset-1 col-sm-10">
				<p>But don't worry; I'm not interested in any of that. Let's talk about me.</p>
				<p>It's safe to say that my life has always revolved around technology. I grew up on a steady diet of Etch-A-Sketch (<em>that</em> would make for a cool icon), Konami codes, and indestructable Nokia brick phones. I've purchased (and returned) an Apple Watch, launched a <a href="https://www.indiegogo.com/projects/best-father-s-day-gift-ever/x/107059#/" target="_blank">woefully unsuccessfull crowdfunding campaign</a>, and I'll soon be welcoming a brand-new baby Oculus Rift into my home.</p>
				<p>But it wasn't until the summer of 2015 that I decided it was time to learn how to make the things I love, instead of just consuming them. In the beginning, I focused on front-end web design for several reasons:
					<ul>
 						<li>I love the creative aspect of designing a page, fiddling with styles to make things look just right. It feels like a natural extension of my abilities. </li>
 						<li>I'm interested in learning the full stack, but I thought it would be better to really nail the basics first. I'm slowy making my way backwards.</li>
 						<li>Instant feedback. Save something as a .html and within seconds I can see my creation in multiple browers. This allows me to iterate quickly.</li>
					</ul>
				</p>
				<p>I've woken up early, stayed up late, and stolen countless moments throughout the day to consume anything I could get my hands on. I've taken classes from Udemy, Udacity, Codecademy, and my local community college. Google and Stack Overflow have become constant companions as I navagite a world of floats and padding, functions and event handlers. I'm even reading an honest-to-God <a href="http://www.amazon.com/JavaScript-JQuery-Interactive-Front-End-Development/dp/1118531647/ref=sr_1_1?ie=UTF8&amp;qid=1460000689&amp;sr=8-1&amp;keywords=javascript+and+jquery" target="_blank">book</a> (made out of paper and everything).
				</p>
				<p>It's a lot to take in, but I'm just getting started. Maybe you'll come along for the ride?</p>
				</div><!--col-->
			</div><!-- div col -->
		</div><!--row-->
	</div><!--container-->
</section>

<!--CONTACT-->
<section id="contact">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 middle">
				<h1>Contact</h1>
				<p class="lead">Let's stay in touch.</p> 
				<p>Send me an <a href="mailto:danielmjacoby@gmail.com" target="blank">email</a>, check out my 
				<a href="https://linkedin.com/in/danielmjacoby" target="_blank">LinkedIn</a> page, or take a look at my <a href="https://github.com/danielmjacoby" target="_blank">Github</a> account.</p> 
				<p>Interested in my resume? <a href="http://standardresume.co/DanielMJacoby" target="_blank">Here you go</a>.</p>
			</div><!-- div col -->
		</div><!--row-->
	</div><!--container-->
</section>
<footer>
	<div class="container">
			<div class="row">
			<div class="col-sm-12">
				<p class="center">&copy;<?php echo date('Y'); ?> Daniel Jacoby</p>
				<p class="center">Cool blue underlines shamelessly stolen from <a href="http://wired.com" target="blank">Wired.com</a>.</p>
			</div><!-- div col -->
		</div><!--row-->
		</div><!--container-->
</footer>




<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="assets/js/jquery.min.js"></script>
<!-- JS for Bootstrap (make nav button work etc...) -->
<script src="assets/js/bootstrap.min.js"></script>




</body>
</html>