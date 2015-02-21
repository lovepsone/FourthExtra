<?php
/**
 * @copyright (c) 2014 - 2015 lovepsone
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 **/
	require_once 'maincore.php';

	echo '<!DOCTYPE html>';
	echo '<html xmlns="http://www.w3.org/1999/xhtml">';
	echo '<head>';
	echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
	echo '<title>Survarium Armory</title>';
	echo '<link rel="stylesheet" href="style.css">';
	echo '<script type="text/javascript" src="jquery.min.js"></script>';
	echo '<script type="text/javascript" src="jquery.ui.custom.min.js"></script>';
	echo '<script type="text/javascript" src="script.js"></script>';
	echo '</head><body><div align="center">';
	$retime = 15;
	if (empty($_SERVER["QUERY_STRING"]))
		Redirect(SELF.'?level=1', true);
	echo '<table align="center"><form>';
	if (!isset($_GET['levelup']) && isset($_GET["level"]) && $_GET["level"] <= count($img))
	{
		$style = array(
		1 => 'background-image: url(images/'.$_GET["level"].'/'.$img[$_GET["level"]][0].'); background-repeat: no-repeat; background-size: 100% 100%; height: 330px; width: 355px;',
		2 => 'background-image: url(images/'.$_GET["level"].'/'.$img[$_GET["level"]][1].'); background-repeat: no-repeat; background-size: 100% 100%; height: 330px; width: 355px;',
		3 => 'background-image: url(images/'.$_GET["level"].'/'.$img[$_GET["level"]][2].'); background-repeat: no-repeat; background-size: 100% 100%; height: 330px; width: 355px;',
		4 => 'background-image: url(images/'.$_GET["level"].'/'.$img[$_GET["level"]][3].'); background-repeat: no-repeat; background-size: 100% 100%; height: 330px; width: 355px;',
		);
		$_SESSION['level'] = $_GET["level"];
		if ((int)$_GET["level"] == 1)
		{
			$_SESSION['accept'] = 0;
			$_SESSION['errors'] = 0;
		}
		echo '<tr><td colspan="2" align="center"><h2>'.$locale[1].'</h2></td></tr>';
		echo '<tr><td><input type="button" id="i1" style="'.$style[1].'" /></td>';
		echo '<td><input type="button" id="i2" style="'.$style[2].'" /></td></tr>';
		echo '<tr><td><input type="button" id="i3" style="'.$style[3].'" /></td>';
		echo '<td><input type="button" id="i4" style="'.$style[4].'" /></td></tr>';
		echo '<tr><td colspan="2" align="center">'.$locale[2].'<font style="color:green;">'.$locale[3].'['.$_SESSION['accept'].']</font> <font style="color:red;">'.$locale[4].'['.$_SESSION['errors'].']</font></td></tr>';
	}
	else if (isset($_GET['levelup']) && (int)$_GET['levelup'])
	{
		$_SESSION['accept']++;
		echo '<tr><td><img src="images/true.jpg" /></td></tr>';
		echo '<tr><td><h2 style="color:green;" align="center">'.$locale[5].'</h2></td></tr>';
		ReturnForm($retime, SELF.'?level='.($_SESSION['level']+1));
	}
	else if (isset($_GET['levelup']) && !(int)$_GET['levelup'])
	{
		$_SESSION['errors']++;
		echo '<tr><td><img src="images/false.jpeg" /></td></tr>';
		echo '<tr><td><h2 style="color:red;" align="center">'.$locale[6].'</h2></td></tr>';
		ReturnForm($retime, SELF.'?level='.($_SESSION['level']+1));
	}
	else
	{
		echo '<tr><td colspan="2" align="center"><h2>'.$locale[7].'</h2></td></tr>';
		echo '<tr><td colspan="2" align="center">'.$locale[2].'<font style="color:green;">'.$locale[3].'['.$_SESSION['accept'].']</font> <font style="color:red;">'.$locale[4].'['.$_SESSION['errors'].']</font></td></tr>';
		echo '<tr><td colspan="2" align="center">'.$locale[8].' <input type="button" id="regame" value="'.$locale[9].'"/></td></tr>';
	}
	echo '</form></table>';
	echo '<div id="HUpLvl">';
	echo '</div></body></html>';
?>