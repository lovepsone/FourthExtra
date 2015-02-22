<?php
/**
 * @copyright (c) 2014 - 2015 lovepsone
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 **/
	@include_once('maincore.php');
	session_start();
	list($type, $level) = explode(":", $_POST['data']);
	if ($_SESSION['img'][$level][4] == (int)$type)
		Redirect('FourthExtra.php?levelup=1', true);
	else
		Redirect('FourthExtra.php?levelup=0', true);
?>
