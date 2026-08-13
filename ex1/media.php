<?php
$nome = $_POST['nome'];
$nota1 = $_POST['nota1'];
$peso1 = $_POST['peso1'];
$nota2 = $_POST['nota2'];
$peso2 = $_POST['peso2'];

$somaPesos = $peso1 + $peso2;
$media = ($nota1 * $peso1 + $nota2 * $peso2) / $somaPesos;

echo "Caro(a) aluno(a) $nome, de acordo com os dados fornecidos, sua média na unidade Programação Web é $media.";
?>