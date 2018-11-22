<!DOCTYPE html>
<html>
<head>
	<title> Portfolio Jip de Kok</title>
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
	<!-- <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script> -->
	<script src="js/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
	<script src='js/function.js'></script>
	<script src="js/turntable.js"></script>
	<?php include 'ChromePhp.php'; ?>
	<?php include_once 'Language/language.php';?>
</head>
<body>

	<header id="MainHeader">
		<svg width=100% height=75px viewbox="0 0 100 100" preserveAspectRatio = "none">
			<polygon fill="#D2691E" points="20,0 80,0 70,90 30,90" />
		</svg>
		<div class="container">
			<h1> Jip de Kok</h1>
		</div>

		<script>
			function redirectPage(lang){
				//console.log('lang = ' + lang);
				var page = window.location.href;
				if (page.substring(page.length - 7, page.length - 2) == 'lang=') {
					window.location.href = page.substring(0, page.length - 2) + lang;
				} else {
					window.location.href = page + '?lang=' + lang;
				}
			}

		</script>

		<ul class="langList">
			<li>
				<button type="button" class="langButton" id="enBtn" onclick="redirectPage('en')"><a href="index.php?lang=en" alt="English"></a></button>
			</li>
			<li>
				<button type="button" class="langButton" id="nlBtn" onclick="redirectPage('nl')"><a href="index.php?lang=nl" alt="Dutch"></a></button>
			</li>
		</ul>



		

	</header>

	<nav id="NavBar">
		<div class="container">
			<ul><strong>
				<li> <a href="index.php"><?php echo $lang['index title']; ?></a> </li>
				<li> <a href="PersonalInfo.php"><?php echo $lang['personal info title']; ?>	</a> </li>
				<li> <a href="Portfolio.php"><?php echo $lang['portfolio title']; ?>	</a> </li>
				<li> <a href="Contact.php"><?php echo $lang['contact title']; ?>	</a> </li>
			</strong></ul>
		</div>
	</nav>

	<div class="container" id="alertBar">
		<button class='btn' id="closeButton" onclick="closeAlertBar()">
			<svg viewPort="0 0 15 15">
				<line x1="1" y1="15"
				x2="15" y2="1"
				stroke="black"
				stroke-width="2"/>
				<line x1="1" y1="1" 
				x2="15" y2="15" 
				stroke="black" 
				stroke-width="2"/>
			</svg>
		</button>
		<h3 id="alertText">Alert Message!</h3>
	</div>