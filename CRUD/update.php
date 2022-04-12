<?php

    require_once __DIR__.'/../vendor/autoload.php';

    use Source\Models\User;

    $user = (new User())->findById(1);
    $user->first_name = 'Moacir';
    $user->last_name = 'Junior';
    $user->save();

    var_dump($user);

?>