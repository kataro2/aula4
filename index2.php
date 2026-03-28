<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            background-color: #f5f5f5;
        }
        
        .container {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        h2 {
            color: #333;
            text-align: center;
            margin-bottom: 30px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
            font-weight: bold;
        }
        
        input[type="text"],
        input[type="tel"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
            box-sizing: border-box;
        }
        
        button {
            width: 100%;
            padding: 12px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        
        button:hover {
            background-color: #45a049;
        }
        
        .info {
            margin-top: 20px;
            padding: 15px;
            background-color: #e8f4f8;
            border-left: 4px solid #2196F3;
            border-radius: 4px;
        }
        
        .info h3 {
            margin-top: 0;
            color: #1976D2;
        }
        
        .info p {
            margin: 10px 0;
            color: #555;
        }
        
        .clear-btn {
            background-color: #f44336;
            margin-top: 10px;
        }
        
        .clear-btn:hover {
            background-color: #da190b;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Formulário de Cadastro</h2>
        
        <form method="POST" action="processar.php">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required placeholder="Digite seu nome completo">
            </div>
            
            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="tel" id="telefone" name="telefone" required placeholder="(00) 00000-0000">
            </div>
            
            <button type="submit">Enviar</button>
        </form>
        
        <?php if (isset($_SESSION['nome']) && isset($_SESSION['telefone'])): ?>
        <div class="info">
            <h3>Informações Armazenadas na Sessão:</h3>
            <p><strong>Nome:</strong> <?php echo htmlspecialchars($_SESSION['nome']); ?></p>
            <p><strong>Telefone:</strong> <?php echo htmlspecialchars($_SESSION['telefone']); ?></p>
        </div>
        
        <form method="POST" action="limpar.php" style="margin-top: 10px;">
            <button type="submit" class="clear-btn">Limpar Sessão</button>
        </form>
        <?php endif; ?>
    </div>
</body>
</html>

