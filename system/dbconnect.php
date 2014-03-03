<?php

require('dbconfig.php');
$connection = mysql_connect($dbhost,$dbnutzer,$dbpassword);
mysql_select_db($db,$connection);

?>