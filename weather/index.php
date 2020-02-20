<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
    <title>Weather Report</title>
    <style>
        body {
            background-color: lightblue;
        }
        html, body, h1, h2, p {
            font-family: "Comic Sans MS", cursive, sans-serif;
        }
        form {
            text-align: center;
            margin: 50px;
        }
    </style>
</head>   
<body>
    <form method="GET" action="Get.php">
        <h1>Type City</h1>
        <br><p>For Example Kaunas</p>
        <label>City:</label>
        <input type="text" name="q" autofocus>
<!--itarukti visus miestus, kad rasant nepadarytu klaidos ir pasirinktu is saraso -->
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>