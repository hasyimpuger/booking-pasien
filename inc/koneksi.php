<?php
//KONEKSI ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$koneksi = mysql_connect($xhostname, $xusername, $xpassword) or die(mysql_error());
mysql_select_db($xdatabase);
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>