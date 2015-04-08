<?php
/**
 * Created by PhpStorm.
 * User: SilvaYuri
 * Date: 08.04.2015
 * Time: 19:15
 */
session_start();
require_once('data.php');
if (isset($_SESSION['sess_login']) && isset($_SESSION['sess_pass'])) {
    if (($_SESSION['sess_login']===$enter_login) && ($_SESSION['sess_pass']===$enter_passw)){
        //var_dump($_SESSION['sess_login']);
        //var_dump($_SESSION['sess_pass']);
        echo "Информация для прошедших аутентификацию<br><br>\n";
        echo "<a href='exit.php'>Выйти из системы</a>\n";
    } else{
        header('Location:index.php');
        //exit();
    }
}
else {
    header('Location:index.php');
    //exit();
}
?>