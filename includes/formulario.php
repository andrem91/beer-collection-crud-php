<main>

  <section>
    <a href="index.php">
      <button class="btn btn-success">Voltar</button>
    </a>
  </section>

  <h2 class="mt-3"><?= TITLE ?></h2>

  <form method="post">

    <div class="form-group">
      <label for="marca">Marca</label>
      <input type="text" id="marca" class="form-control" name="marca" value="<?= $objCerveja->marca?>">
    </div>

    <div class="form-group">
      <label for="nome">Nome</label>
      <input type="text" id="nome" class="form-control" name="nome" value="<?= $objCerveja->nome?>">
    </div>

    <div class="form-group">
      <label for="estilo">Estilo</label>
      <input type="text" id="estilo" class="form-control" name="estilo" value="<?= $objCerveja->estilo?>">
    </div>

    <div class="form-group">
      <label for="imagem">URL Imagem</label>
      <input type="text" id="imagem" class="form-control" name="imagem" value="<?= $objCerveja->imagem?>">
    </div>

    <div class="form-group">
      <label for="descricao">Descrição</label>
      <textarea name="descricao" id="descricao" class="form-control" cols="30" rows="5"><?=$objCerveja->descricao?></textarea>
    </div>

    <div class="form-group">
    <button type="submit" class="btn btn-success">Enviar</button>
  </div>

</main>