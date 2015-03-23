<?php include '_top.php'; ?>


<?php foreach ($organs as $organ) { ?>
  <div class="modal fade" id="modal_<?= $organ['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel"><?= $organ['name']; ?></h4>
        </div>
        <div class="modal-body">
          <?= $organ['description']; ?>
        </div>
      </div>
    </div>
  </div>
<?php } ?>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h1 class="page-header">Orgãos</h1>
  
  <a href="<?= link_to('organs/new'); ?>" class="btn btn-success btn-lg pull-right">
    <span class="glyphicon glyphicon-plus"></span> <span class="button_text">Adicionar</span>
  </a>
  
  <table class="table">
    <thead>
      <th colspan="3">Orgão</th>
    </thead>
    <tbody>
      <?php foreach ($organs as $organ) { ?>
        <tr>
          <td colspan="2">
            <a data-toggle="modal" href="#modal_<?= $organ['id']; ?>"><?= $organ['name']; ?></a>
          </td>
          <td>
            <a href="<?= link_to('organs/delete'); ?>?id=<?= $organ['id']; ?>">
              <span class="glyphicon glyphicon-remove"></span>
            </a>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>



<?php include '_bottom.php'; ?>