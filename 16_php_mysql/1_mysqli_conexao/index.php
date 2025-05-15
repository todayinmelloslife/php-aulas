<?php

  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "cursophp";

  $conn = new mysqli($host, $user, $pass, $db);
  ?>
  <h1>Conexão com o banco de dados</h1>
  <?php
  if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
  }
  echo "Conexão realizada com sucesso!";
  $conn->close();
  ?>