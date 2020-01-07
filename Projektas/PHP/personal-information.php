<?php
$mesage = $_GET['mesage'];

if (strlen ($mesage) < 1) {
    echo "Write something on potato!";
    } elseif (strlen ($mesage) > 40) {
        echo "You wrote too much:)";
    } else {
        echo '
            <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>personal-information</title>
	<style>
		body {
			background-image: url(../image/bowltatoes.5.jpg);
			background-repeat: no-repeat;
			background-size: cover;
		}
		form {
			padding: 20px;
			text-align: center;
		}
		h1 {
			color: white;
			text-align: center;
			font-family: Comic Sans MS;
			padding: 50px;
			font-size: 50px;
		}
		input {
			border-radius: 2px;
			border-style: none;
			margin: 3px;
			font-size: 20px;
		}
		.title {
			font-family: Comic Sans MS;
			font-size: 25px;
			color: white;
		}
	</style>
</head>
<body>
	<h1>You are in finish line!!! :)</h1>
	<form action="data.php" method="get">
		<div class="form">
			<div class="title">Write the lucky, who will get the potato</div>
			<input type="text" name="name" placeholder="Name" required autofocus>
			<input type="text" name="lastName" placeholder="Last name" required>
		</div>
		<div>
			<input type="text" name="address" placeholder="Address" required>
		</div>
		<div>
		<input type="submit" value="Please pay">
		</div>
	</form>
</body>
</html>';
}
?>    
      