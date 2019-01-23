<?php

use \Hcode\Model\User;

function formatPrice($vlprice) {

    if (!$vlprice > 0)
        $vlprice = 0;
    return number_format($vlprice, 2, ",", ".");
}

function formatCEP($string) {
    return $string = substr($string, 0, 5) . '-' . substr($string, 5, 3);
}

function checkLogin($inadmin = true) {

    return User::checkLogin($inadmin);
}

function getUserName() {

    $user = User::getFromSession();
    return $user->getdesperson();
}
