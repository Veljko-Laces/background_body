
<?php
$couleurDuFormulaire = isset($_GET['rgb']) ? $_GET['rgb'] : "#ffffff";  
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>backgroud-color</title>
    <style>
        body{
            background-color:<?= $couleurDuFormulaire;?>
        }
    </style>
</head>
<body>
        <form method="get" action="<?= $_SERVER['PHP_SELF']; ?>">
            <input type="color" name="rgb" value="<?= $couleurDuFormulaire;?>">
            <button type="submit">Appliquer la couleur</button>
        </form>
</body>
</html>