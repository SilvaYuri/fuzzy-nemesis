<?php
/**
 * Created by PhpStorm.
 * User: SilvaYuri
 * Date: 08.04.2015
 * Time: 19:15
 */
session_start();
session_unset();//������� ���������� ������
destroy();
header("Location:index.php");
?>