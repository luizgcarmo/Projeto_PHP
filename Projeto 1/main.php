<?php




require __DIR__ . '/functions.php';
include __CLASS__ . '/User.php';

echo "<link rel='index' href='index.html'>";
echo "<link rel='gameX' href'https://www.pngwing.com/pt/free-png-ndeos'>";
header("Content-Type: text/html; charset=utf-8");
$user = new User();

$user->setLogin($_POST  = ['login']);
$user->setPassword($_POST = ['password']);

$vLogin[0] = errorLogin($user->getLogin());
$vLogin[1] = validationPassword($user->getPassword());
if($vLogin[0]==$vLogin[1]){
    echo "<p>Usuario confirmado</p><hr>";
}else{
    echo "<p>Ops ocorreu um erro em algum lugar! </p>";
}




foreach($user as $key=>$value){
    echo "<p> {$key} is {$value} </p>";
}

echo "<img = https://www.pngwing.com/pt/free-png-ndeos>";


   