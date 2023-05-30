<?php
require __CLASS__ . 'User.php';

$user = new User();

function validationPassword($password){
    if(get_current_user()==$password->getPassword()){
        return $validation = true;
    }else{
        return $validation = false;
    }
}

function errorLogin($login){
    if(get_current_user()==$login->getLogin()){
        return true;
    }else{
        return false;
    }

}