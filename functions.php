<?php

function generatePassword($length)
{
    $characters = "abcdefghijlmnopqrstuvwxyzABCDEFGHIJLMNOPQRSTUVWXYZ0123456789_?*+&%!#@";
    $charactersLength = strlen($characters);

    $randomPassword = "";
    $i = 0;

    while ($i < $length) {
        $randomNumber = rand(0, $charactersLength - 1);
        $randomPassword .= $characters[$randomNumber];
        $i++;
    }
    return $randomPassword;
}
