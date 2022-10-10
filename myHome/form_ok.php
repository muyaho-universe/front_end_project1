<?php
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
?>

<!DOCTYPE html>
<html lang=""en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP form</title>
</head>
<body>
    <div id="top">
        <h3>Welcome <?=$fname?>!</h3>
    </div>
    <div id="center">
        <div>이름 : <?= $fname?> <?=$lname?>.</div>
    </div>

</body>
