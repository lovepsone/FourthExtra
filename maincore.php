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
	$img[0][0] = '1.png';
	$img[0][1] = '2.png';
	$img[0][2] = '3.png';
	$img[0][3] = '4.png';
	$img[0][4] = 1;
	$img[0]['folder'] = 0;
	$img[1][0] = '1.png';
	$img[1][1] = '2.png';
	$img[1][2] = '3.png';
	$img[1][3] = '4.png';
	$img[1][4] = 3;
	$img[1]['folder'] = 1;
	$img[2][0] = '1.png';
	$img[2][1] = '2.png';
	$img[2][2] = '3.png';
	$img[2][3] = '4.png';
	$img[2][4] = 2;
	$img[2]['folder'] = 2;
	$img[3][0] = '1.png';
	$img[3][1] = '2.png';
	$img[3][2] = '3.png';
	$img[3][3] = '4.png';
	$img[3][4] = 4;
	$img[3]['folder'] = 3;
	$img[4][0] = '1.png';
	$img[4][1] = '2.png';
	$img[4][2] = '3.png';
	$img[4][3] = '4.png';
	$img[4][4] = 2;
	$img[4]['folder'] = 4;
	$img[5][0] = '1.png';
	$img[5][1] = '2.png';
	$img[5][2] = '3.png';
	$img[5][3] = '4.png';
	$img[5][4] = 3;
	$img[5]['folder'] = 5;
	$img[6][0] = '1.png';
	$img[6][1] = '2.png';
	$img[6][2] = '3.png';
	$img[6][3] = '4.png';
	$img[6][4] = 4;
	$img[6]['folder'] = 6;
	$img[7][0] = '1.png';
	$img[7][1] = '2.png';
	$img[7][2] = '3.png';
	$img[7][3] = '4.png';
	$img[7][4] = 1;
	$img[7]['folder'] = 7;
	$img[8][0] = '1.png';
	$img[8][1] = '2.png';
	$img[8][2] = '3.png';
	$img[8][3] = '4.png';
	$img[8][4] = 1;
	$img[8]['folder'] = 8;
	$img[9][0] = '1.png';
	$img[9][1] = '2.png';
	$img[9][2] = '3.png';
	$img[9][3] = '4.png';
	$img[9][4] = 4;
	$img[9]['folder'] = 9;
?>