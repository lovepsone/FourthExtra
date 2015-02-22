<?php
/**
 * @copyright (c) 2014 - 2015 lovepsone
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 **/
	@include_once('maincore.php');
	list($type, $level) = explode(":", $_POST['data']);
	if ($img[$level][4] == (int)$type)
		Redirect('FourthExtra.php?levelup=1', true);
	else
		Redirect('FourthExtra.php?levelup=0', true);
?>
