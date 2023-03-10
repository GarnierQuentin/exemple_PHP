<?php

    require_once 'connexion.php';

    if($_POST['title'] != '' && $_POST['content'] != ''){
        $data = [
            'title' => $_POST['title'],
            'content' => $_POST['content'],
            'date' => date('Y-m-d H:i:s')
        ];

        $requete = $database->prepare('INSERT INTO articles (title, content, date) VALUES (:title, :content, :date)');
        $requete->execute($data);

        if($requete) {
            echo 'Votre article a bien été ajouté';
            //redirection vers la page principale après l'insertion en base de donnée
            header('Location: index.php');
        } else {
            echo 'Une erreur est survenue';
        }

    } else {
        echo 'Veuillez remplir tous les champs';
    }

    

?>