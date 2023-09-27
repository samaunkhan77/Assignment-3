<?php

function generatePassword($length){
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ(!@#$%^&*()_+)()';
    $password = '';

    for ($i = 0; $i < $length; $i++){
        $randomChar = $characters[rand(0, strlen($characters) - 1)];

        $password .= $randomChar;


    }
    return $password;
}
$password = generatePassword(12);
echo "Your password is: $password";