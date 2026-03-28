<?php
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
   
    $nome = isset($_POST['nome']) ? trim($_POST['nome']) : '';
    $telefone = isset($_POST['telefone']) ? trim($_POST['telefone']) : '';
    
    
    if (empty($nome) || empty($telefone)) {
        $_SESSION['mensagem'] = "Por favor, preencha todos os campos!";
        header("Location: index2.php");
        exit();
    }
    
    
    $_SESSION['nome'] = $nome;
    $_SESSION['telefone'] = $telefone;
    
   
    header("Location: index2.php");
    exit();
    
} else {
    
    header("Location: index2.php");
    exit();
}
?>