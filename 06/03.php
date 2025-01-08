<?php

class User
{
    private $name = null;


    function __construct($name)
    {
        echo 'Ya 100 Welcome ya ' . $name . '<br />';
    }

}


$user_1 = new User('Maged');
$user_2 = new User('Aliaa');