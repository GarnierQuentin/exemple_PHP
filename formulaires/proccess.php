<?php
    echo 'Tu as lancé la fonction';

    $data = [
        "pseudo" => $_POST['pseudo'],
        "password" => $_POST['password'],
        "message" => $_POST["message"]
    ];

    var_dump($data);
?>