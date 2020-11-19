<?php 
        $departement = [
            02 =>'Aisne',
            59 =>'Nord',
            60 =>'Oise',
            62 =>'Pas-de-Calais',
            80 =>'Somme'
        ];

    ?>
<!DOCTYPE html>
<html lang="fr"dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice6 PartIII</title>
</head>
<body>
    <div>
        <?php foreach($departement as $index => $valeur){
            echo 'Le département ' .$valeur. ' a le numéro ' .$index. '<br>';
        } ?>
</body>
</html>