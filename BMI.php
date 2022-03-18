

<!DOCTYPE
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Health Care hospital</title>
<link rel="stylesheet" type="text/css" href="css/staff.css"/>
<script type="text/javascript" src="js/rightde.js"></script>
<link rel="stylesheet" href="css/hide.css">
<style type="text/css">
  .active a{
    background-color: #c6c6c6;
}

</style>

</head>
<body>


<header class="nav-down ">
<?php include_once('navbar.php');?>
</header>
<br>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>MANAGE BMI PAGE</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <style>
        ul {
          list-style-type: none;
          margin: 0;
          padding: 0;
          overflow: hidden;
          background-color: #333;
        }
        
        li {
          float: left;
          border-right:1px solid #bbb;
        }
        
        li:last-child {
          border-right: none;
        }
        
        li a {
          display: block;
          color: white;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
        }
        
        li a:hover:not(.active) {
          background-color: #111;
        }
        
        .active {
          background-color: #4CAF50;
        }
        </style>
        </head>
        <body>
        
        <ul>
          <li><a class="active" href="index.php">Home</a></li>
          <li><a class="active" href="menu.php">Back</a></li>
          </ul>
          <html>
           <head>
        <title>BMI Calculator</title>
             
        <script type="text/javascript">
          
            function computeBMI() {
                // user inputs
                var height = Number(document.getElementById("height").value);
                var heightunits = document.getElementById("heightunits").value;
                var weight = Number(document.getElementById("weight").value);
                var weightunits = document.getElementById("weightunits").value;
        
        
                //Convert all units to metric
                if (heightunits == "inches") height /= 39.3700787;
                if (weightunits == "lb") weight /= 2.20462;
        
                //Perform calculation
        
                //        var BMI = weight /Math.pow(height, 2)*10000;
                var BMI = Math.round(weight / Math.pow(height, 2) * 10000);
        
                //Display result of calculation
                document.getElementById("output").innerText = Math.round(BMI * 100) / 100;
        
                var output = Math.round(BMI * 100) / 100
                if (output < 18.5)
                    document.getElementById("comment").innerText = "Underweight";
                else if (output >= 18.5 && output <= 25)
                    document.getElementById("comment").innerText = "Normal";
                else if (output >= 25 && output <= 30)
                    document.getElementById("comment").innerText = "Obese";
                else if (output > 30)
                    document.getElementById("comment").innerText = "Overweight";
                // document.getElementById("answer").value = output; 
            }
        </script>
         </head>
         <body>
        <h1>Body Mass Index Calculator</h1>
        <p>Enter your height: <input type="text" id="height"/>
            <select type="multiple" id="heightunits">
                <option value="metres" selected="selected">metres</option>
                <option value="inches">inches</option>
            </select>
             </p>
        <p>Enter your weight: <input type="text" id="weight"/>
            <select type="multiple" id="weightunits">
                <option value="kg" selected="selected">kilograms</option>
                <option value="lb">pounds</option>
            </select>
        </p>
        <input type="submit" value="computeBMI" onclick="computeBMI();">
        <h1>Your BMI is: <span id="output">?</span></h1>
        
        <h2>This means you are: <span id="comment"> ?</span> </h2> 
         </body>
        
</body>
</html>