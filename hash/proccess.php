<?php

    require_once 'connexion.php';

    if($_POST['pseudo'] != "" && $_POST['password'] != "") {
        $data = [
            'pseudo' => $_POST['pseudo'],
            'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
        ];
        var_dump($data);

        $requete = $database->prepare('INSERT INTO users (pseudo, password) VALUES (:pseudo, :password)');
        $requete->execute($data);

        if($requete) {
            header('Location: index.php'); //attention ne pas mettre d'espace entre Location et les 2 points
        } else {
            echo "Une erreur est survenue";
        }

    } else {
        echo 'Veuillez remplir tous les champs';
    }

?>