<main>
  <section>
    <h2 class="mt-3">Excluir cerveja</h2>
    <form method="post">
      <div class="form-group">
        <p>
          Você realmente deseja excluir a cerveja <strong><?=$objCerveja->nome?></strong> da cervejaria <strong><?=$objCerveja->marca?></strong>?
        </p>
        <div class="form-group">
          <a class="btn btn-danger" href="index.php">
            Cancelar
          </a>
          <button class="btn btn-warning" type="submit" name="excluir">Excluir</button>
        </div>
      </div>
    </form>
  </section>
</main>