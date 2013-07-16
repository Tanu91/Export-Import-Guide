<?php
$itc= $_POST ["code"];
$count=strlen(((string)$itc));
mysql_connect("localhost","root","12345");
@mysql_select_db("trade") or die("unable to select database");
?>
