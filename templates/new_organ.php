<?php include '_top.php'; ?>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h1 class="page-header">Novo orgão</h1>

  <form method="post" action="<?= link_to('organs'); ?>">
    <div class="form-group">
      <label for="name">Nome</label>
      <input type="text" class="form-control" name="name">
    </div>
    <div class="form-group">
      <label for="description">Descrição</label>
      <textarea class="form-control" name="description" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-success btn-lg pull-right">Inserir</button>
  </form>
</div>

<?php include '_bottom.php'; ?>