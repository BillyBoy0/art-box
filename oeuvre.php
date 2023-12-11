<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>

<?php

include('header.php');

include('oeuvres.php');

// Vérifier si un ID est dans l'URL
if (isset($_GET['id'])) {
    
    
    
    foreach ($oeuvres as $oeuvre) {            // je parcours mon tableau (les elements sont appelé "oeuvre")
        if ($oeuvre['id'] == $_GET['id']) {        //en defilant si l'id de mon oeuvre est = a l ID de l URL
            $oeuvreID = $oeuvre;                   //alors je range sa valeur dans ma nouvelle variable "oeuvreID"
            break;
        }
    }

    
    if ($oeuvreID) {                                    //si mon oeuvreID existe
        ?>

<main>
        <?php 
        
        echo '<article id="detail-oeuvre">';
        echo    '<div id="img-oeuvre">';
        echo        '<img src="'.$oeuvre['image'].'" alt="'.$oeuvre['nom'].'">';
        echo    '</div>';
        echo    '<div id="contenu-oeuvre">';
        echo        '<h1>'.$oeuvre['nom'].'</h1>';
        echo        '<p class="description">'.$oeuvre['description'].'</p>';
        echo        '<p class="description-complete">' .$oeuvre['description-complete'].'</p>';
        echo    '</div>';
        echo '</article>';
    } 
    else {
    
        echo 'Impossible de trouver l\'oeuvre demandée.';
    }
    

} 
?>

</main>
        <?php 

include('footer.php');
?>
