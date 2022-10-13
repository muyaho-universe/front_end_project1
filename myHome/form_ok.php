<?php
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $color = $_POST['color'];
    $gender = $_POST['gender'];
    $grade =$_POST['grade'];
    $birthday = $_POST['birthday'];
    $major= $_POST['uclass'];
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
        <h3>Welcome <?=$fname?>!</h3>
    </div>
    <div id="center">
        <div>Name : <?= $fname?> <?=$lname?></div>
        <div>
            Your favorite color: <div style="color:<?=$color?>; background-color:<?=$color?>" >a</div>
        </div>
        <div>Gender : <?= $gender?> </div>
        <div>Favorite language:

            <?for ($i =0; $i<count($_POST['fav_language']); $i++){?>
                <?$position = $_POST['fav_language'];?>
                <?echo $position[$i];?>
                <?
            }
            ?>
        </div>
        <div>Birthday: <?=$birthday?></div>
        <div>Major: <?=$major?></div>
        <div>Grade: <?=$grade?></div>
        <div>
            Comment:<br>
            <?=$comment?>
        </div>
    </div>

</body>
