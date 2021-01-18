<?php

require_once 'user.php';

$first_user = new User('Marco', 'Grandi');

    $first_user->findChar('marco@mail.com');
    var_dump($first_user);

$second_user = new User('Mario', 'Rossi');

    $second_user->findChar('mario90.mail.com');
    var_dump($second_user);




 ?>
