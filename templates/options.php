<?php include '_top.php'; ?>

<input type="hidden" id="page" data-pagename="instituicao_nome" />

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h1 class="page-header">Opções</h1>
  <div class="col-md-8">
    <div class="col-md-6">
      <span class="formFieldLabel">Nome da instituição</span>
    </div>
    <div class="col-md-6">
      <input class="form-control" id="instituicao_nome" value="<?= $rows['instituicao_nome']; ?>" required />
    </div>

    <div class="col-md-6">
      <span class="formFieldLabel">Logo</span>
    </div>
    <div class="col-md-6">
      <img src="<?= $rows['logo_url']; ?>" style="width: 70px;" />
      <form action="<?= link_to('options'); ?>" method="post" enctype="multipart/form-data">
        <input type="file" name="logo" />
        <input type="submit" value="Enviar imagem" />
      </form>
    </div>
  </div>
</div>

<?php include '_bottom.php'; ?>
