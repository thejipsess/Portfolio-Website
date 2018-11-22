$(document).ready(function()
{

	$('#personalDetails').fadeIn(1000);

	var nav = document.getElementById('NavBar');
	var alert = document.getElementById('alertBar');
	var header = document.getElementById('MainHeader');
	var sec2 = document.getElementById('section2');
	var onScreen = null;
	var done = false;

	//make the navigation bar scroll with the screen as soon as it's on top of the page. Additionaly, set its transparancy.
	window.onscroll = function()
	{
		if (window.pageYOffset > 75) {
			nav.style.background = 'rgb(8, 15, 61,0.7)';
			nav.style.position = "fixed";
			nav.style.top = 0;

			//also set for alert box
			alert.style.position = "fixed";
			alert.style.top = '65px'; 
		} else {
			nav.style.background = "rgb(8, 15, 61, 1)";
			nav.style.position = "absolute";
			nav.style.top = "75px";
			nav.style.width = "100%";

			//also set for alert box
			alert.style.position = "absolute";
			alert.style.top = "140px";
		}
	}

	// adjust abstract & pfwScroller scrolling speeed + pop up and -down container 2 when scrolling it. Additionaly, blur abstract and change container2 opacity.
	$(window).scroll(function(){
		if (window.width() <= 1300) {
			console.log("width <= 1300");
		}


		var scrollAmount = $(this).scrollTop();
		//console.log(scrollAmount);
		$('#Abstract').css({
			'transform' : 'translate(0px, ' + scrollAmount / -40 + '%)'
		})
		console.log('height: ' + $(window).height());
		//if ($(window).height() > 600) {
			console.log('scrolling');
			$('.pfwScroller').css({
				'transform' : 'translate(0px, ' + scrollAmount / -40 + '%)'
			})
		//}
		
		
		if (scrollAmount > 220){

			if (onScreen == false || onScreen == null ) {
				$('.container2').animate({
					marginTop: '400px'
				},300, function(){
					$('.container2').stop()
				}),
				onScreen = true,
				$('#Abstract').css({
					'filter' : 'blur(1px)'
				})
				$('.container2').css({
					'background-color' : 'rgb(30,30,30 , 0.5)'
				})
			} 
		} 

		else if(onScreen == true || onScreen == null){		
			$('.container2').animate({
				marginTop: '800px'
			},300, function(){
				$('.container2').stop()
			}),
			onScreen = false,
			$('#Abstract').css({
				'filter' : 'blur(0)'
			})
			$('.container2').css({
				'background-color' : 'rgb(164, 59, 14, 0)'
			})
		}

		//change top-radius based on the amount  scrolled for container2
		if(scrollAmount > 245 && scrollAmount <= 345){
			//var s2Rad = -(30-(scrollAmount - 245)) * 10/30;
			var s2Rad = (-15/50)*(scrollAmount-245) + 30;
			//console.log('rad = ' + s2Rad);
			$('.container2').css({
				'border-top-left-radius' : '100% ' + s2Rad + '%',
				'border-top-right-radius' : '100% ' + s2Rad + '%'
			})
		} else if(scrollAmount <= 245){
			$('.container2').css({
				'border-top-left-radius' : '100% 30%',
				'border-top-right-radius' : '100% 30%'
			})
		}

		//slide up the modelingScroller
		if (scrollAmount >= 2800 && done == false) {
			done = true;
			$('.modelingScroller').animate({
				//'top': '-500px'
			},500)
		}
		
	})

	var div1Height = $('#thesisContainer').height();
	$('.pfwScroller').css('margin-top', parseInt(div1Height - 1100));
	var div2Height = $('.pfwScroller').height() - 2200;
	$('.modelingScroller').css('margin-top', parseInt(div2Height));

	if ($('.pfwScroller').length > 0){
		window.setInterval(function(){
			if (div1Height != $('#thesisContainer').height()) {
				div1Height = $('#thesisContainer').height();
			$('.pfwScroller').css('margin-top', parseInt(div1Height - 900)); //set pfwScroller margin based on size of the div above it so it is always close enough and not overlapping.
		}
		if (div2Height != $('.pfwScroller').position().top + $('.pfwScroller').height()) {
			var div2Height = $('.pfwScroller').height() - 2700;
			var div2Top = (-8/6.5)window.width + 2400;
			$('.modelingScroller').css('margin-top', parseInt(div2Top));
		}
		//console.log($('.pfwScroller').height());	
	}, 1000)
	}

	function openAlertBar(displayText){
		//console.log("fadeIn");
		$('#alertBar').fadeIn(500);
		$('#alertText').text(displayText);
	}

	var page = window.location.href;
	if (window.location.href.substring(page.length - 3, page.length) == '=nl'){
		//'http://localhost/index.php?lang=nl') {
		//console.log('url confirmed')
		openAlertBar('De website is helaas nog niet volledig vertaald naar het Nederlands.');
	}


})


