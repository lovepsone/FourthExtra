<?php
/**
 * @copyright (c) 2014 - 2015 lovepsone
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 **/
	session_start();
	error_reporting(E_ALL);

	function Redirect($location, $script = false)
	{
		if (!$script)
		{
			header("Location: ".str_replace("&amp;", "&", $location));
			exit;
		}
		else
		{
			echo "<script type='text/javascript'>document.location.href='".str_replace("&amp;", "&", $location)."'</script>\n";
			exit;
		}
	}

	function ReturnForm($Retime, $url)
	{
		echo "<script type='text/javascript'>function exec_refresh(){window.status = 'reloading...' + myvar;myvar = myvar + ' .';var timerID = setTimeout('exec_refresh();', 100);if (timeout > 0){timeout -= 1;}else{clearTimeout(timerID);window.status = '';window.location = '$url';}}var myvar = '';var timeout = '".$Retime."';exec_refresh();</script>";
	}

	define("SELF", basename($_SERVER['PHP_SELF']));
	if(!@include('locale/locale.php'))
		die("<b>Error:</b> can not loaded locale!!!");

	$img = array();
	$img[1][0] = '1.png';
	$img[1][1] = '2.png';
	$img[1][2] = '3.png';
	$img[1][3] = '4.png';
	$img[1][4] = 1;
	$img[2][0] = '1.png';
	$img[2][1] = '2.png';
	$img[2][2] = '3.png';
	$img[2][3] = '4.png';
	$img[2][4] = 3;
	$img[3][0] = '1.png';
	$img[3][1] = '2.png';
	$img[3][2] = '3.png';
	$img[3][3] = '4.png';
	$img[3][4] = 2;
	$img[4][0] = '1.png';
	$img[4][1] = '2.png';
	$img[4][2] = '3.png';
	$img[4][3] = '4.png';
	$img[4][4] = 4;
	$img[5][0] = '1.png';
	$img[5][1] = '2.png';
	$img[5][2] = '3.png';
	$img[5][3] = '4.png';
	$img[5][4] = 2;
	$img[6][0] = '1.png';
	$img[6][1] = '2.png';
	$img[6][2] = '3.png';
	$img[6][3] = '4.png';
	$img[6][4] = 3;
	$img[7][0] = '1.png';
	$img[7][1] = '2.png';
	$img[7][2] = '3.png';
	$img[7][3] = '4.png';
	$img[7][4] = 4;
	$img[8][0] = '1.png';
	$img[8][1] = '2.png';
	$img[8][2] = '3.png';
	$img[8][3] = '4.png';
	$img[8][4] = 1;
	$img[9][0] = '1.png';
	$img[9][1] = '2.png';
	$img[9][2] = '3.png';
	$img[9][3] = '4.png';
	$img[9][4] = 1;
	$img[10][0] = '1.png';
	$img[10][1] = '2.png';
	$img[10][2] = '3.png';
	$img[10][3] = '4.png';
	$img[10][4] = 4;
?>