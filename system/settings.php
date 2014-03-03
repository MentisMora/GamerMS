<?php

function getSetting($property){
    global $dbpraefix;
    $res = mysql_query("SELECT value FROM ".$dbpraefix."settings WHERE property = '".$property."'");
    $row = mysql_fetch_row($res);
    return $row[0];
}

?>
