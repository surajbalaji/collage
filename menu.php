<?php




session_start();
 ?>





<!DOCTYPE html 
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" href="css\bootstrap-theme.css">

<link rel="stylesheet" href="css\bootstrap-theme.min.css">
<link rel="stylesheet" href="css\hide.css">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<script type="text/javascript" src="js\rightde.js"></script>
<title>Health Care hospital</title>
<link href="css\menu.css" rel="stylesheet" type="text/css" />
</head>
<body>

<header class="nav-down ">

<?php include_once('navbar.php');?>







</header>

<main>
<div class="container-fluid" >
<div class="row">

<h1 class="text-center "><img width="2%" src="images/logol.png">Health Care Hospital<br /><small style="font-size:50px">Hospital Management System</small></h1>

<hr width="250px">
</div>
</div>




<div class="container">
<div class="row">
<div class="col-lg-4 col-lg-offset-4">

<table  class="table table-bordered" width="auto" border="10">
  <tr>
    <td><a href="patientinfo.php"><img src="images/menu/pdinfo.jpg"
            class="img-responsive img-thumbnail"
            onMouseOver="src='images/menu/pinfo.jpg'"
            onMouseOut="src='images/menu/pdinfo.jpg'"
            id="picture" /></a></td>

    <td><a href="roomavi.php"><img src="images/menu/radinfo.jpg"
            class="img-responsive img-thumbnail"
            onMouseOver="src='images/menu/rainfo.jpg'"
            onMouseOut="src='images/menu/radinfo.jpg'"
            id="picture"  /></a></td>
  </tr>
  <tr>
    <td><a href="invo.php"><img src="images/menu/piidinfo.jpg"
            class="img-responsive img-thumbnail"
            onMouseOver="src='images/menu/piiinfo.jpg'"
            onMouseOut="src='images/menu/piidinfo.jpg'"
            id="picture" /></a></td>

    <td><a href="staff.php"><img src="images/menu/sdinfo.jpg"
            class="img-responsive img-thumbnail"
            onMouseOver="src='images/menu/sinfo.jpg'"
            onMouseOut="src='images/menu/sdinfo.jpg'"
            id="picture" /></a></td>
  </tr>
  <tr>
    <td colspan="100"><a href="admite.php"><img src="images/menu/padinfob.jpg"
            class="img-responsive img-thumbnail"
            onMouseOver="src='images/menu/padinfo.jpg'"
            onMouseOut="src='images/menu/padinfob.jpg'"
            id="picture" /></a></td>



           
</tr>
</table>
</div>
</div>
</div>



<script src="js\jquery.min.js"></script>
<script src="js\bootstrap.min.js"></script>
<script src="js\hidenv.js"></script>

</main>
</body>
<br>



