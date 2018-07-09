<?php
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    
    if(($login == "adm") && ($senha == "1234"))
    {
        header('location: menu.html');
    }
    else
    {
        echo "Login ou senha incorreta!";
    }
?>