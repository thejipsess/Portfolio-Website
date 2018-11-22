<?php 

session_start();
if (isset($_GET['lang'])) 
{
	$lang = $_GET['lang'];
	$_SESSION['lang'] = $lang;
	setcookie("lang", $lang );
}
elseif (isset($_SESSION['lang'])) 
{
	$lang = $_SESSION['lang'];
}
elseif (isset($_COOKIE['lang'])) 
{
	$lang = $_COOKIE['lang'];
}
else
{
	$lang = 'en';
}

switch ($lang) {
	case 'en':
		$lang_file = 'lang.en.php';
		break;

	case 'nl':
		$lang_file = 'lang.nl.php';
		break;
	
	default:
		$lang_file = 'lang.en.php';
		break;
}

include_once 'Language/'.$lang_file; //check if correct!!

 ?>
