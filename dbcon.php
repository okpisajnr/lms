<!--
<?php
#mysql_select_db('capstone',mysql_connect('localhost','root',''))or die(mysql_error());
?>
 -->

 <?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
#mysqli_select_db(mysqli_connect('localhost','capstone')or die(mysqli_error()));

$con = mysqli_connect('localhost', 'root', '')or die(mysqli_error());
mysqli_select_db($con, 'capstone')
?>