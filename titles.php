<?php 
$host = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; 
if($host == 'clgolden.com/websites/') {
	echo 'Websites Portfolio | CLGolden Frontend & WordPress Developer | Since 2010 | Pacific US';
} else { 
	echo 'CLGolden Frontend & WordPress Developer | Since 2010 | Pacific US';
}