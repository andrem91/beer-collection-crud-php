<?php

require __DIR__ . '/vendor/autoload.php';

define('TITLE','Editar Cerveja');

use \App\Entity\Cerveja;

if(!isset($_GET['id']) or !is_numeric($_GET['id'])) {
  header('location: index.php?status=error');
  exit;
}

$objCerveja = Cerveja::getCerveja($_GET['id']);

if(!$objCerveja instanceof Cerveja) {
  header('location: index.php?status=error');
  exit;
}

if(isset($_POST['marca'], $_POST['nome'], $_POST['estilo'], $_POST['descricao'], $_POST['imagem'])) {
  $objCerveja->marca = $_POST['marca'];
  $objCerveja->nome = $_POST['nome'];
  $objCerveja->estilo = $_POST['estilo'];
  $objCerveja->descricao = $_POST['descricao'];
  $objCerveja->imagem = $_POST['imagem'];
  $objCerveja->atualizar();

  header('location: index.php?status=success');
  exit;
}

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/formulario.php';
include __DIR__ . '/includes/footer.php';
