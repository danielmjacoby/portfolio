$(function(){
	/*create variables so that jQuery objects are only created once.*/
	var $first = $('.first');
	var $firstText = $('#firstText');
	var $second = $('.second');
	var $secondText = $('#secondText');
	var $third = $('.third');
	var $thirdText = $('#thirdText');
	var $fourth = $('.fourth');
	var $fourthText = $('#fourthText');
	var $fifthText = $('#fifthText');
	var $body = $('body');
	var $section = $('section');

	$($first).on('click', function(){
		$($first).animate({left:'-2000px', top: '2000px'},1000);
		$($first).delay(1000).fadeOut();
		$($firstText).fadeOut('slow');
		$($second).delay(2000).fadeIn('slow');
		$($secondText).delay(2000).queue(function (next) { 
			$($secondText).show('slow');
			next();
			});
		/*changing .show to .fadeIn allowed to me remove the queue function in the code below. I'm
		leaving this here in case it comes in handy in the future*/
		});	
	$($second).on('click', function(){
		$($body).css('backgroundColor','#A42127');
		$($secondText).fadeOut('slow');
		$($thirdText).delay(2500).fadeIn('slow');	
		$($second).fadeOut('slow');
		$($third).delay(2500).fadeIn('slow');	
		});
	$($third).on('click', function(){
		$($body).css('backgroundColor', '#fff');
		$($third).text('Panic?').css('backgroundColor', '#A42127');
		$($thirdText).fadeOut('slow');
		$($third).delay(2000).fadeOut('slow');
		$($fourthText).delay(2500).fadeIn('slow');
		$($fourth).delay(2500).fadeIn('slow');
		});
	$($fourth).on('click', function(){
		$($fourth).addClass('drop').delay(2000).fadeOut('slow');
		$($fourthText).delay(3000).fadeOut('slow');
		$($fifthText).delay(4000).fadeIn('slow');
		$($section).delay(4000).fadeIn('slow');
		});

});