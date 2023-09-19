<?php
    // armazena ultimo ponto visitado
    $_SESSION['url_retorno'] = $_SERVER['PHP_SELF'];
    // verifica se o usuario esta logado
    if(!isset($_SESSION['login'])){
        header('Location: login_formulario.php');
        exit;
    }
?>