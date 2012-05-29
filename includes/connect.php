<?php
include("includes/config.php");
$connect = mysql_connect(HOST,UN,PWD)or die(mysql_error());
mysql_select_db(DB,$connect);
?>