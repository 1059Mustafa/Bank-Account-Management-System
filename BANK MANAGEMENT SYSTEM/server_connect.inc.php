<?php
if(!mysql_connect('localhost','root','') || !mysql_select_db('bankman_db'))
{	$error='Cant connect'; 
	die($error);
}
?>