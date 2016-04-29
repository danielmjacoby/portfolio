<!doctype html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Weather or Not</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
<style>
	html, body {
		height: 100%;
		letter-spacing: 2px;
	}
	.contentContainer {
		background-image: url("../assets/img/weather.jpg");
		background-size: cover;
		background-position: center;
		width: 100%;
		height: 100%;
	}
	.black {
		color: #000;
		background-color: inherit;
	}
	.words {
		padding-top: 20%;
		padding-bottom: 20px;
		/*background-color: #fff;
		opacity: .7;*/
		height: 100%;
		text-align: center;
	}
	.btn {
		margin-top: 20px;
		color: #000;
	}
	p {
		padding-top: 20px;
		padding-bottom: 20px;
	}
	.alert {
		margin-top: 20px;
		display: none;
	}
	#success {
		text-align: left;
	}
	
	
</style>
</head>
<body>
	<div class="contentContainer container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 words black">
			<h1>Weather Checker</h1>
			<p class="lead">Enter your city, get a weather report. Hopefully. </p>
			
			<form>
				<div class="form-group">
					<input type="text" class="form-control" name="city" id="city" 
					placeholder="New York, Los Angeles, Atlantis..."/>
				</div>
				<div>
					<input type="submit" id="findMyWeather" class="btn btn-success btn-lg" value="Weather me, baby!"/>
				</div>
			</form>
			<div id="success" class="alert alert-success">Success!</div>
			<div id="fail" class="alert alert-danger">No weather available for that city. Please
			try again.</div>
			<div id="noCity" class="alert alert-danger">Please enter a city.</div>
			</div>
		</div>
		
	</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/../assets/js/bootstrap.min.js"></script>
    <script>
    	$("#findMyWeather").click(function (event) {
    		event.preventDefault();
    		$(".alert").hide();
    		if ($("#city").val()!="") {
    		$.get("scraper.php?city="+$("#city").val(), function (data) {
    			if (data==""){
    			
    				$("#fail").fadeIn();
    				
    			} else {
    				
    				$("#success").html(data).fadeIn();
    				
    			}
    		});
    		} else {
    			$("#noCity").fadeIn();
    		}
    	});
    </script>
    
</body>
</html>