<?php
//echo "KONEKSI SUKSES";
$url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

$my['host']	= "localhost";
$my['user']	= "muflih";
$my['pass']	= "fairuz.el";
$my['dbs']	= "SC_YT";

$koneksi	= mysql_connect($my['host'],$my['user'],$my['pass']);
if (! $koneksi) {
  echo "Database not found connection failed!";
  echo mysql_error();
}
else
// memilih database pda server
mysql_select_db($my['dbs'])
	 or die ("Database not found".mysql_error());
?>
