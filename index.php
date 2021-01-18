<?php

require_once 'user.php';

$first_user = new User('Marco', 'Grandi');

    $first_user->findChar('giacomo04mail.com');
    var_dump($first_user);




$second_user = new User('Mario', 'Rossi');




 ?>
