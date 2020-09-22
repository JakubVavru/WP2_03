<?php 
$eur = filter_input(INPUT_POST, 'eur');
$czk = 27 ;
$sub = filter_input(INPUT_POST, 'odeslat');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
if (isset($sub)) { ?>
   Výsledek v Kč: <?= $eur * $czk ?>
<?php
} else { ?>
    <form action="index.php" method="post">
Euro:   <input type="text" name="eur" id="eur"> <br>
        <input type="submit" value="odeslat" name="odeslat">
    </form>
<?php
} ?>

</body>
</html>