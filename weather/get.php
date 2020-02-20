<?php
error_reporting(0);
$get = json_decode(file_get_contents('http://ip-api.com/json/'),true);
date_default_timezone_set($get['timezone']);
$city = $_GET['q'];
$string = "http://api.openweathermap.org/data/2.5/weather?q=".$city."&units=metric&appid=ebcf5230b3446f334fe3fa2fd2d4ce24";
$data = json_decode(file_get_contents($string),true);
 
$icon = $data['weather'][0]['icon'];

$country =  "<h1 class='w3-xxxlarge w3-animate-zoom'>".$data['name'].",".$data['sys']['country']."</h1>";
 
$logo = "<img src='http://openweathermap.org/img/w/".$icon.".png'>";
$desc = $data['weather'][0]['description'];
$weatherId = $data['weather'][0]['id'];    
        
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Report of <?php echo $_GET['q']; ?></title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <style>
        body {
            background-color: lightblue;
        }
        html, body, h1, h2 {
          font-family: "Comic Sans MS", cursive, sans-serif;
        }
    </style>
</head>
<body>
    <div class="w3-display-topmiddle w3-margin-top">
			
        <?php 
        echo $country;
        echo "<center>$logo</center>";
        echo "<center><h2>$desc</h2></center>";
        include 'sqli.php';
        ?>
            
    </div>		
</body>
</html>