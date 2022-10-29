<?php
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $goodness= $_POST['goodness'];
    $date = $_POST['date'];
    $comment = $_POST['comment'];
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
    <h3>Welcome <?=$name?>!</h3>
</div>
<div id="center">
    <div>이름: <?= $name?></div>
    <div>나이: <?= $age?></div>
    <div>성별: <?= $gender?> </div>
    <div>선행정도: <?= $goodness?></div>
    <div>선행일시: <?= $date?></div>
    <div>선행내용: <?= $comment?></div>

    
</div>

</body>
