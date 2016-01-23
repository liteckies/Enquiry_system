<?php
ERROR_REPORTING(0);
define("HOSTNAME","localhost");
define("DATABASE","TUMENQUIRY-DB");
define("USERNAME","root");
define("PASSWORD","root");
   
@$db = mysql_connect(HOSTNAME,USERNAME,PASSWORD)or die('Error!');

mysql_select_db(DATABASE,$db);

DEFINE("PUBLIC_PAGE");
?>