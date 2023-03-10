<?php 

    require_once 'connexion.php';

    if($_GET['recherche'] != ""){
        $data = [
            'recherche' => $_GET['recherche']
        ];

        $requete = $database->prepare("SELECT * FROM articles WHERE content LIKE CONCAT('%', :recherche, '%')");
        $requete->execute($data);

        $articles = $requete->fetchAll(PDO::FETCH_ASSOC);

        foreach($articles as $article){?>
            <h2><?php echo $article['title']; ?></h2>
            <br>
            <h2><?php echo $article['content']; ?></h2>
            <br>
        <?php
        }
    } else {
        echo 'Veuillez remplir le champ de recherche';
    }

?>