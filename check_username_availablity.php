<?php
sleep(1);
include('dbcon.php');
if($_REQUEST)
{
	$username 	= $_REQUEST['username'];
	$query = "select CNOMUSU from tmae_usuario where CNOMUSU = '".strtolower($username)."'";
	$results = mysql_query( $query) or die('ok');
	
	if(mysql_num_rows(@$results) > 0) // not available
	{
		echo '<div id="Error">Usuario ya existente</div>';
	}
	else
	{
		echo '<div id="Success">Disponible</div>';
	}
}?>