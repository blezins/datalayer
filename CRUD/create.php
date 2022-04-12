<?php

    require_once __DIR__.'/../vendor/autoload.php';
    use Source\Models\User;
    use Source\Models\Address;

    $user = new User();
    $user->first_name = 'Edivalda';
    $user->last_name = 'Cruz';
    $user->genre = 'F';
    $user->save();

    $addr = new Address();
    $addr->add($user, "Rua Edivalda Cruz", "55");
    $addr->save();

    var_dump($user);
    var_dump($addr);

?>