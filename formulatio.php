<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
         $nome = $_POST["Nome"];
         $telefone = $_POST["Telefone"];
          $email = $_POST["Email"];

          $nome2 = $_POST["Nome2"];
          $telefone2 = $_POST["Telefone2"];
          $email2 = $_POST["Email2"];

          


    }

    echo "nome $nome" . "<br>";
          
          echo "Telefone $telefone". "<br>";
          echo"<br>";
          echo "email $email". "<br>";
          echo"<br>";

          echo"<hr>";
           echo "nome $nome2". "<br>";
          echo"<br>";
          echo "rtelefone $telefone2". "<br>";
          echo"<br>";

          echo "email $email2". "<br>";

?>

