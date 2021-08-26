<?php

$mensagem = '';
if(isset($_GET['status'])) {
  switch ($_GET['status']) {
    case 'success':
      $mensagem = '<div class="alert alert-success">Ação executada com sucesso</div>';
      break;

      case 'error':
        $mensagem = '<div class="alert alert-danger">Ação não executada</div>';
        break;
  }
}

$resultados = '';
foreach($cervejas as $cerveja) {
  $resultados .= '<div class="col-md-12 my-3">
                    <div class="card">
                      <div class="row no-gutters my-auto d-flex align-items-center">
                        <div class="col-md-3">
                          <img class="img-fluid mx-auto d-block" style="max-width: 200px;" src="/img/'.$cerveja->imagem.'" class="card-img-top" alt="">
                        </div>
                        <div class="col-md-9">
                          <div class="card-body">
                            <h4 class="card-title">'.$cerveja->marca.'</h4>
                            <h5 class="card-subtitle">'.$cerveja->nome.'</h5>
                            <p class="card-text"><small class="text-muted">Estilo: '.$cerveja->estilo.'</small></p>
                            <p class="card-text">
                              '.$cerveja->descricao.'
                            </p>
                          <a href="editar.php?id='.$cerveja->id.'" class="btn btn-primary mr-2">Editar</a>
                          <a href="excluir.php?id='.$cerveja->id.'" class="btn btn-danger">Excluir</a>
                          </div>
                        </div>
                      </div>  
                    </div>
                  </div>';
}

?>
<main>

<?=$mensagem?>

<section>
    <a class="btn btn-success" href="cadastrar.php">
      Cadastrar Cerveja
    </a>
  </section>
  <section>
  <div class="row">
      <?=$resultados?>
  </div>
  </section>

</main>
