<?php include '_top.php'; ?>

<?php foreach ($meetings as $meeting) { ?>
  <div class="modal fade" id="modal_<?= $meeting['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel"><?= $meeting['m_date']; ?> <?= $meeting['m_time']; ?></h4>
        </div>
        <div class="modal-body">
          <h3>Local</h3>
          <?= $meeting['local']; ?><br>
          <h3>Participantes</h3>
          <?= $meeting['participants']; ?><br>
          <h3>Sistemas</h3>
          <?= $meeting['systems']; ?><br>
        </div>
      </div>
    </div>
  </div>
<?php } ?>


<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h1 class="page-header">Reuniões</h1>
  
  <a href="<?= link_to('organs'); ?>" class="btn btn-success btn-lg pull-right">
    <span class="glyphicon glyphicon-list-alt"></span> <span class="button_text">Orgãos</span>
  </a>

  <table class="table">
    <thead>
      <th colspan="3">Data</th>
    </thead>
    <tbody>
      <?php foreach ($meetings as $meeting) { ?>
        <tr>
          <td colspan="2">
            <a data-toggle="modal" href="#modal_<?= $meeting['id']; ?>"><?= $meeting['m_date']; ?></a>
          </td>
          <td>
            <a href="<?= link_to('meetings/edit/' . $meeting['id']); ?>">
              <span class="glyphicon glyphicon-edit"></span>
            </a>
            <a href="<?= link_to('meetings/delete'); ?>?id=<?= $meeting['id']; ?>">
              <span class="glyphicon glyphicon-remove"></span>
            </a>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
  
  <a href="<?= link_to('meetings/new'); ?>" class="btn btn-success btn-lg pull-right">
    <span class="glyphicon glyphicon-plus"></span> <span class="button_text">Nova</span>
  </a>
  
</div>

<?php include '_bottom.php'; ?>