<?php
session_start();
unset($_SESSION['nome']);
unset($_SESSION['senha']);
header('location:../administrative/menu_adm/index.php');
