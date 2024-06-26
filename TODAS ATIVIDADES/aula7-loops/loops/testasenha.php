<?php
$login = $_POST['login'];
$senha = $_POST['senha'];
/*
 echo "{$senha}";
 echo "{$login}";
 */
        while($senha != 123){
        echo "The password is wrong!";
header('Location: login.php');
    }
    echo "bem vindo ao sistema!";
/*
    while(($senha != 123) && ($login != "pedro")){
        echo "The password is wrong!";
header('Location: login.php');
    }
    echo "bem vindo ao sistema!";*/