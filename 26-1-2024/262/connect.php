<?php
$con= mysqli_connect("localhost","cheer","ch123455","library") or die("Error: " .
mysqli_error($con));
mysqli_query($con, "SET NAMES 'utf8' ");
error_reporting( error_reporting() & ~E_NOTICE );
?>