<?php
session_start();
if( (!isset($_SESSION["firstname"])) && (!isset($_SESSION["lastname"])) )
{
header("Location: connect.php");
exit(); }
?>
