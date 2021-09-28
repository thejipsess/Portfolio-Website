<?php include 'header.php'; ?>

<div class="center">
	<div class="container3" id="thesisContainer">
		<h2 class="inContainer3"><?php echo $lang['master thesis title']; ?></h2>
		<br>
		<p class="inContainer3"><?php echo $lang['master thesis text']; ?></p>

		<br>
		<section class="imageContainer">
			<img src="IMG/spider chart example.svg", style="width: 80%">
			<p class="inContainer3" id="thesisGraph"> <?php echo $lang['master thesis graph description']; ?></p>
			</section>
		</div>

	<div class="bachelorThesisScroller">
		<h2 class="inContainer3"><?php echo $lang['thesis title']; ?></h2>
		<br>
		<p class="inContainer3"><?php echo $lang['thesis text']; ?></p>
		<div id="thesisBtn">
			<button type="button" class="btn" target="_blank" onclick='window.location.href = "/pdf/Bachlor Thesis Report - Jip de Kok (i6119367).pdf"'>full thesis</button>
		</div>

		<br>
		<section class="videoContainer">
			<video muted  loop onclick="this.paused?this.play():this.pause()" controls="controls" poster="/IMG/BTRthumbnail-alpha blurred.png" style="background: #333">
				<source src="video/Thesis Demo.mp4" type="video/mp4">
				</video>
			</section>
		</div>


		<div class="pfwScroller">
			<svg class=diagonal id='diagonalUp' width=100% height=120px viewBox= "0 0 100 120" preserveAspectRatio = "none" style="background: none">
				<polygon fill="#D2691E" points="0,100 0,120 100,120 100,100 100,0"/>
			</svg>
			<div class="container3" id="pfwContainer">
				<h2 class="inContainer3"><?php echo $lang['profielwerkstuk title']; ?></h2>
				<br>
				<p class="inContainer3"><?php echo $lang['profielwerkstuk text']; ?></p>
				<br>
				<section class="videoContainer">
					<video muted loop onclick="this.paused?this.play():this.pause()" controls="controls" poster="/IMG/profielwerkstuk-blurred.png" style="background: #333" ">
					<source src="video/pfwVideo.mp4" type="video/mp4">
					</video>
				</section>

				<div class="sideBar" id="showcaseInfo">
					<h2 id="showcaseInfoText">ATP synthase</h2>
				</div>

				<div class="gridContainer">
					<div class="gridElement" id="gridShowcase">
						<img src="IMG/clickForMoreInfo.png" alt="Click object to display here">
					</div>
					<div class="gridElement" onclick="showcase('IMG/ATP synthase.png')">
						<img src="IMG/ATP synthase.png">
					</div>
					<div class="gridElement" ">
						<img src="IMG/ATP.png" onclick="showcase('IMG/ATP.png')">
					</div>
					<div class="gridElement">
						<img src="IMG/BC1 complex.png" onclick="showcase('IMG/BC1 complex.png')">
					</div>
					<div class="gridElement">
						<img src="IMG/coenzyme q.png" onclick="showcase('IMG/coenzyme q.png')">
					</div>
					<div class="gridElement">
						<img src="IMG/cytochrome C.png" onclick="showcase('IMG/cytochrome C.png')">
					</div>
					<div class="gridElement">
						<img src="IMG/Electron.png" onclick="showcase('IMG/Electron.png')">
					</div>
					<div class="gridElement">
						<img src="IMG/FADH2.png" onclick="showcase('IMG/FADH2.png')">
					</div>
					<div class="gridElement">
						<img src="IMG/phospholipids.png" onclick="showcase('IMG/phospholipids.png')">
					</div>
					<div class="gridElement">
						<img src="IMG/proton.png" onclick="showcase('IMG/proton.png')">
					</div>
					<div class="gridElement">
						<img src="IMG/NADH dehydrogenase .png" onclick="showcase('IMG/NADH dehydrogenase .png')">
					</div>
					<div class="gridElement">
						<img src="IMG/NADH2.png" onclick="showcase('IMG/NADH2.png')">
					</div>
					<div class="gridElement">
						<img src="IMG/ucp2.png" onclick="showcase('IMG/ucp2.png')">
					</div>
				</div>

			</div>
			<svg class=diagonal id='diagonalDown' width=100% height=120px viewBox= "0 0 100 120" preserveAspectRatio = "none" style="margin-top: 0; top: -20px">
				<polygon fill="#D2691E" points="0,120 100,20 100,0 0,0 0,20"/>
			</svg>
		</div>

		<div class="modelingScroller">
			<div class="container3" id="modelingContainer">
				<h2 class="inContainer3"><?php echo $lang['modeling title']; ?></h2>
				<br>
				<p class="inContainer3"><?php echo $lang['modeling text']; ?></p>
				<br>
			</div>
		
				<svg id='modelingGradient' width=100% height=200px viewBox= "0 0 100 100" preserveAspectRatio = "none">
					<defs>
						<linearGradient id="grad1" x1="0%" y1="15%" x2= 0% y2="80%">
							<stop offset="15%" style="stop-color:rgb(30,30,30);stop-opacity:1" />
							<stop offset="80%" style="stop-color:rgb(30,30,30);stop-opacity:0" />
						</linearGradient>
					</defs>
					<rect fill="url(#grad1)" width="100%" height="100%"/>
				</svg>
			

		
		<div class="turntableContainer">
			<ul class="turntableBtnContainer">
				<li>
					<button class="turntableBtn" id="loopBtn" onclick="loopTurntable()">Auto Rotate</button>
				</li>
				<li>
					<button class="turntableBtn" onclick="changeModel('Thraw')">Dragon</button>
				</li>
				<li>
					<button class="turntableBtn" onclick="changeModel('Fairy')">Human</button>
				</li>
				<li>
					<button class="turntableBtn" onclick="changeModel('Mosasaur', true)">Mosasaur</button>
				</li>
				<li>
					<button class="turntableBtn" id="bgBtn" onclick="openBgMenu()">set BG</button>
					<div class="dropdownContent">
						<ul>
							<li class="dropdownItem">
								<img src="IMG/headerBG.jpg" onclick="bgChange('../IMG/headerBG.jpg')">
							</li>
							<li class="dropdownItem">
								<img src="IMG/abstractBG.png" onclick="bgChange('../IMG/abstractBG.png')">
							</li>
							<li class="dropdownItem">
								<img src="IMG/abstractBG.jpg" onclick="bgChange('../IMG/abstractBG.jpg')">
							</li>
							<li class="dropdownItem">
								<img src="IMG/empty room 2.jpeg" onclick="bgChange('../IMG/empty room 2.jpeg')">
							</li>
							<li class="dropdownItem">
								<img src="IMG/empty room.jpg" onclick="bgChange('../IMG/empty room.jpg')">
							</li>
							<li class="dropdownItem">
								<img src="IMG/horizontal stripes.jpg" onclick="bgChange('../IMG/horizontal stripes.jpg')">
							</li>
							<li class="dropdownItem">
								<img src="IMG/showcase bg.png" onclick="bgChange('../IMG/showcase bg.png')">
							</li>
							<li class="dropdownItem">
								<img src="IMG/void.jpg" onclick="bgChange('../IMG/void.jpg')">
							</li>
							<li class="dropdownItem">
								<img src="IMG/underwater BG.png" onclick="bgChange('../IMG/underwater BG.png')">
							</li>
						</ul>
					</div>
				</li>
				<li>
					<svg class="turntableBtn" x="0px" y="0px" viewBox="0 0 1280 800" id="turntableFullscreenBtn" onclick="toggleFullscreenTurntable()">
						<g>
							<g>
								<g>
									<polygon id="XMLID_61_" class="st0" points="457.5,330.5 457.5,217.5 570.5,217.5 570.5,126 366,126 366,330.5 			"/>
									<polygon id="XMLID_60_" class="st0" points="709.5,217.5 822.5,217.5 822.5,330.5 914,330.5 914,126 709.5,126 			"/>
									<polygon id="XMLID_59_" class="st0" points="822.5,469.5 822.5,582.5 709.5,582.5 709.5,674 914,674 914,469.5 			"/>
									<polygon id="XMLID_58_" class="st0" points="570.5,582.5 457.5,582.5 457.5,469.5 366,469.5 366,674 570.5,674 			"/>
								</g>
							</g>
						</g>
					</svg>
				</li>

			</ul>
			<img class="turntableImg" src="IMG/turntable/Thraw/turntable (12).png">
			<div class="progressBarContainer">
				<div class="progressBar">
				</div>
			</div>
			<div class="sliderContainer">
				<input type="range" min="0" max="59" value="12" class="slider" id="turntableSlider">
			</div>
		</div>

		</div>

			<svg id='modelingGradient' width=100% height=200px viewBox= "0 0 100 100" preserveAspectRatio = "none">
				<defs>
					<linearGradient id="grad2" x1="0%" y1="15%" x2= 0% y2="80%">
						<stop offset="15%" style="stop-color:rgb(30,30,30);stop-opacity:0" />
						<stop offset="80%" style="stop-color:rgb(30,30,30);stop-opacity:1" />
					</linearGradient>
				</defs>
			</svg>
				<div class="container" id="logoContainer">
	
	<div class="logoContentContainer">
		
		<h2> <?php echo $lang['logo title']; ?></h2>
		<p class="logoText"><?php echo $lang['logo text']; ?></p>

		<slider class="slideshow">
			<slide class="slide"></slide>
			<slide class="slide"></slide>
			<slide class="slide"></slide>
			<slide class="slide"></slide>
			<slide class="slide"></slide>
		</slider>

		<div class="logoBtnContainer">
			<div class="logoBtn" id="playPauseBtn" onclick="playPause()">
				<svg x="0px" y="0px" viewBox="0 0 1280 800">
					<polyline points="161.5,84 161.5,715 161.5,714.5 793,399 161.8,83.5 "/>
					<path class="pause" d="M948,682.4h-88c-6.6,0-12-5.4-12-12V127.6c0-6.6,5.4-12,12-12h88c6.6,0,12,5.4,12,12v542.8
					C960,677,954.6,682.4,948,682.4z"/>
					<path class="pause" d="M1122,682.6h-88c-6.6,0-12-5.4-12-12V127.9c0-6.6,5.4-12,12-12h88c6.6,0,12,5.4,12,12v542.8
					C1134,677.2,1128.6,682.6,1122,682.6z"/>
				</svg>
			</div>

			<div class="logoBtn" id="fullscreenBtn" onclick="toggleFullscreen()">
				<svg x="0px" y="0px" viewBox="0 0 1280 800">
					<g>
						<g>
							<g>
								<polygon id="XMLID_61_" class="st0" points="457.5,330.5 457.5,217.5 570.5,217.5 570.5,126 366,126 366,330.5 			"/>
								<polygon id="XMLID_60_" class="st0" points="709.5,217.5 822.5,217.5 822.5,330.5 914,330.5 914,126 709.5,126 			"/>
								<polygon id="XMLID_59_" class="st0" points="822.5,469.5 822.5,582.5 709.5,582.5 709.5,674 914,674 914,469.5 			"/>
								<polygon id="XMLID_58_" class="st0" points="570.5,582.5 457.5,582.5 457.5,469.5 366,469.5 366,674 570.5,674 			"/>
							</g>
						</g>
					</g>
				</svg>
			</div>
			<div class="logoBtn" id="nextBtn" onclick="nextImage()">
				<svg x="0px" y="0px" viewBox="0 0 200 560">
					<path d="M177.1,279.8L177,280L50.7,550.8c-3.5,7.5-29.4-5.4-26.6-12.4l120.5-258.5L24.2,21.4
					C20.7,13.9,47.2,2.4,50.8,9L177.1,279.8L177.1,279.8z"/>
				</svg>
			</div>
			<div class="logoBtn" id="previousBtn" onclick="previousImage()">
				<svg x="0px" y="0px" viewBox="0 0 200 560">
					<path id="XMLID_18_" class="st0" d="M23.8,279.8L24,280l126.2,270.7c3.5,7.5,29.4-5.4,26.6-12.4L56.3,279.8L176.8,21.4
					c3.5-7.5-23.1-19-26.6-12.4L23.8,279.8L23.8,279.8z"/>
				</svg>
			</div>
		</div>


	</div>
</div>



		</div>
	</div>
</div>


<?php include 'footer.php'; ?>

<script>
	var marginEditted = false;
	function showcase(foto){
		$('#gridShowcase img').attr("src", foto);
		$('#showcaseInfoText').html(foto.substring(4, foto.length - 4));
		$('#showcaseInfo').css('display' , 'block');
		if (marginEditted == false) {
			if (window.outerWidth >= 1300) {
				$('.modelingScroller').css('margin-top' , -250);
			}
			$('#gridShowcase').css('background' , 'radial-gradient(rgb(114,146,171),rgb(34,50,65))');
			marginEditted = true;
		}
	}


	var publicModel = 'Thraw';
	var menuStatus = false;
	var turntableFullscreenStatus = false;


	$(function(){
		turntable('IMG/turntable/Thraw', false);
	})

	function changeModel(model){
		var directory = 'IMG/turntable/' + model;
		turntable(directory, false);
		$('.turntableImg').attr('src', directory + '/turntable (12).png');
		$('.turntableImgFullscreen').attr('src', directory + '/turntable (12).png');
		$('.turntableSlider').attr('value', 12);
		publicModel = model;
	}

	function loopTurntable(){
		var directory = 'IMG/turntable/' + publicModel;
		turntable(directory, true);
	}

	function openBgMenu() {
		if (menuStatus == false) {
			$('.dropdownContent').css('display' , 'block');
			menuStatus = true;
		} else{
			$('.dropdownContent').css('display' , 'none');
			menuStatus = false;
		}
	}

	function bgChange(background){

		var backgroundURL = "url('" + background + "')";
		$('.turntableContainer').css('background-image' , backgroundURL);
		$('.turntableContainerFullscreen').css('background-image' , backgroundURL);
		console.log('change bg to: ' + backgroundURL);
	}

	function toggleFullscreenTurntable(){
		if (turntableFullscreenStatus == false) {
			$('.turntableContainer').attr('class', 'turntableContainerFullscreen');
			$('.turntableBtnContainer').attr('class', 'turntableBtnContainerFullscreen');
			$('.turntableImg').attr('class', 'turntableImgFullscreen');
			$('.modelingScroller').attr('class', 'modelingScrollerFullscreen');
			turntableFullscreenStatus = true;
		} else {
			$('.turntableContainerFullscreen').attr('class', 'turntableContainer');
			$('.turntableBtnContainerFullscreen').attr('class', 'turntableBtnContainer');
			$('.turntableImgFullscreen').attr('class', 'turntableImg');
			$('.modelingScrollerFullscreen').attr('class', 'modelingScroller');
			turntableFullscreenStatus = false;
		}
	}


	var slideshowStatus = 'playing';
	var fullscreenStatus = false;

	function playPause(){
		if (slideshowStatus == 'playing') {
			if (fullscreenStatus == true) {
				$('.slideshowFullscreen *').css('animation-play-state' , 'paused');
				$("#nextBtn").css('opacity' , 1);
				$("#previousBtn").css('opacity' , 1);
			} else { 
				$('.slideshow *').css('animation-play-state' , 'paused');
			}
			$(".pause").attr('class' , 'pauseClicked');
			slideshowStatus = 'paused';
		} else {
			if (fullscreenStatus == true) {
				$('.slideshowFullscreen *').css('animation-play-state' , 'running');
				$("#nextBtn").css('opacity' , 0);
				$("#previousBtn").css('opacity' , 0);
			}else{
				$('.slideshow *').css('animation-play-state' , 'running');
			}
			$(".pauseClicked").attr('class' , 'pause');
			slideshowStatus = 'playing';
		}
	}
	function toggleFullscreen(){
		if (fullscreenStatus == false) {
			$(".slideshow").attr('class', 'slideshowFullscreen');
			$(".logoBtnContainer").attr('class' , 'logoBtnContainerFullscreen');
			$("#fullscreenBtn").attr('id' , 'fullscreenBtnClicked');
			$("#nextBtn").attr('id' , "nextBtnFullscreen");
			$("#previousBtn").attr('id' , "previousBtnFullscreen");
			if (slideshowStatus == 'paused') {
				$("#nextBtn").css('opacity' , 1);
				$("#previousBtn").css('opacity' , 1);
			}
			fullscreenStatus = true;
		} else {
			$(".slideshowFullscreen").attr('class', 'slideshow');
			$(".logoBtnContainerFullscreen").attr('class' , 'logoBtnContainer');
			$("#fullscreenBtnClicked").attr('id' , 'fullscreenBtn');
			$("#nextBtnFullscreen").attr('id' , "nextBtn");
			$("#previousBtnFullscreen").attr('id' , "previousBtn");
			fullscreenStatus = false;
		}
	}

	//nextPrevious buttons -- everything here is based on 6 seconds per slide!!
	var delays = new Array($(".slide").length);
	var delay = -7;
	var delayString;
	for (var i = 0; i < $(".slide").length; i++) {
		delay = delay + 6;
		delays[i] = parseInt(delay);
	}

	function nextImage(){
		for (var i = 0; i < $(".slide").length; i++) {
			delays[i] = delays[i] -6;
			delayString = String(delays[i]) + 's';
			$(".slide").get(i).style.animationDelay = delayString;
		}
	}
	function previousImage(){
		if(delays[0] !== -1){
			for (var i = 0; i < $(".slide").length; i++) {
				delays[i] = delays[i] +6;
				delayString = String(delays[i]) + 's';
				$(".slide").get(i).style.animationDelay = delayString;
			} 
		}else {
			for (var i = 0; i < $(".slide").length; i++) {
				delays[i] = delays[i] -24;	//!!!important!!! - this -24 is based on a total slideShow duration of 30s. If changed, subtract "total duration - slide duration" instead.
				delayString = String(delays[i]) + 's';
				$(".slide").get(i).style.animationDelay = delayString;
			} 
		}
	}

</script>