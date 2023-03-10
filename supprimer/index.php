<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        require_once 'connexion.php';

        $requete = $database->prepare('SELECT * FROM articles ORDER BY date DESC');

        $requete->execute();

        $articles = $requete->fetchAll(PDO::FETCH_ASSOC); //le résultat est stocké en format tableau avec un clé et une valeur

        var_dump($articles);

        foreach($articles as $article) { ?>

        <div>

            <h2><?php echo $article['title'];?></h2>
            
            <p><?php echo $article['content'];?></p>

            <span><?php echo $article['date'];?></span>

            <a href="supprimer.php?id=<?php echo $article['id'] ?>">Supprimer</a>

        </div>

        <?php

        }

    ?>
    
</body>
</html>