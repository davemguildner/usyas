<?php
$db_host = "localhost";
$db_username = "edgedes2_sport";
$db_pass = "Las!0(drg1";
$db_name = "edgedes2_sportstats";
@mysql_connect("$db_host","$db_username","$db_pass") or die ("Could not connect to Mysql");
@mysql_select_db("$db_name") or die ("Could not connect to database");
?>