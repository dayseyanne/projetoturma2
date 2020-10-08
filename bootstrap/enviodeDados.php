<?php

include("conn.php");


$sql = "INSERT INTO aluno ( nomeAluno, emailAluno, cpfAluno, cursoAluno, senhaAluno)
VALUES (' ".$_POST["nome"]." ', '".$_POST["email"]."', '".$_POST["cpf"]."', '".$_POST["curso"]."','". $_POST["senha"]."' )";

if ($conn->query($sql) === TRUE) {
  echo "ENVIADO COM SUCESSO";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>





