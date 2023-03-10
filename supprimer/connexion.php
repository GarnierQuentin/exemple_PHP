<?php

    try{

    $database = new PDO('mysql:host=localhost;dbname=cours_php', 'root', '');

    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

?>