<!DOCTYPE html>
<html lang="fr"dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice5 PartIII</title>
</head>
<body>
    <div>
    <?php 
        $departement = [02 =>'Aisne', 59 =>'Nord', 60 =>'Oise', 62 =>'Pas-de-Calais', 80 =>'Somme'];
        print_r($departement);
    ?>
    </div>
    <div><?php echo $departement[02]?></div>
    <div><?php echo $departement[59]?></div>
    <div><?php echo $departement[60]?></div>
    <div><?php echo $departement[62]?></div>
    <div><?php echo $departement[80]?></div>
</body>
</html>