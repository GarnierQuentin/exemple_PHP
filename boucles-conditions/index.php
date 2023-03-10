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
        $users = [
            [
            'name' => 'Kevin',
            'age' => 19,
            'city' => 'Nanterre'
            ],
            [
            'name' => 'Jean-Eude',
            'age' => 16,
            'city' => 'Tourcoing'
            ],
            [
                'name' => 'Gni',
                'age' => 20,
                'city' => 'Poussi La Jarry'
                ]
            ];
    ?>

    <pre>
        <?php var_dump($users); ?>
    </pre>

    <h2><?php echo $users[2]['name']?></h2>

    <?php 

        foreach($users as $user){ ?>
            <h2> <?php echo $user['name'] . ' '; ?></h2>
        
        <?php

        if($user['age'] >= 18){ ?>
            <h2>Vous êtes majeur</h2>
        <?php
        
        } else { ?>
            <h2 style="color : red">Vous êtes mineur</h2>


        <?php
        }

    }

    ?>
    */

    

</body>
</html>