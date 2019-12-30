<?php
$mesage = $_GET['mesage'];

if (strlen ($mesage) < 1) {
    echo "Write something on potato!";
    } elseif (strlen ($mesage) > 40) {
        echo "You wrote too much:)";
    } else {
        echo "<b>Mesage on patato</b>: $mesage<br>";
        echo "Write the lucky one who will get the potato :)";
        echo '
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <title>personalInformation</title>
            </head>
            <body>
            <form action="data.php" method="_GET">
                <div>
                    <input type="text" name="name" placeholder="Name" required>
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
      