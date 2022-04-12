<?php

    require_once __DIR__.'/../vendor/autoload.php';
    use Source\Models\User;
    use Source\Models\Address;

    $user = new User();
    $user->first_name = 'Elma Maria';
    $user->last_name = 'Pinto';
    $user->genre = 'F';
    $user->save();

    $addr = new Address();
    $addr->add($user, "Rua Elma Maria Pinto", "9");
    $addr->save();

    var_dump($user);
    var_dump($addr);

?>