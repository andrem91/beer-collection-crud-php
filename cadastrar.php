<?php

require __DIR__ . '/vendor/autoload.php';

define('TITLE','Cadastrar vaga');

use \App\Entity\Cerveja;

$objCerveja = new Cerveja;

if(isset($_POST['marca'], $_POST['nome'], $_POST['estilo'], $_POST['descricao'], $_POST['imagem'])) {
  $objCerveja->marca = $_POST['marca'];
  $objCerveja->nome = $_POST['nome'];
  $objCerveja->estilo = $_POST['estilo'];
  $objCerveja->descricao = $_POST['descricao'];
  $objCerveja->imagem = $_POST['imagem'];
  $objCerveja->cadastrar();

  header('location: index.php?status=success');
  exit;
}

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/formulario.php';
include __DIR__ . '/includes/footer.php';
