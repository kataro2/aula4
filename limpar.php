<?php
session_start();


unset($_SESSION['nome']);
unset($_SESSION['telefone']);


header("Location: index2.php");
exit();
?>