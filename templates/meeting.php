<?php include '_top.php'; ?>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h1 class="page-header">Nova reunião</h1>

  <ul class="nav nav-tabs" role="tablist">
    <li class="active"><a href="#reuniao" role="tab" data-toggle="tab">Reunião</a></li>
    <li><a href="#participantes" role="tab" data-toggle="tab">Participantes</a></li>
    <li><a href="#pessoas" role="tab" data-toggle="tab">Pessoas</a></li>
    <li><a href="#processos" role="tab" data-toggle="tab">Processos</a></li>
    <li><a href="#infraestrutura" role="tab" data-toggle="tab">Infraestrutura</a></li>
    <li><a href="#sistemas" role="tab" data-toggle="tab">Sistemas</a></li>
  </ul>
  
  <form method="post" action="<?= link_to('meetings'); ?>">
    <input type="hidden" name="action" value="<?= $action; ?>">
    <input type="hidden" name="id" value="<?= $infos['id']; ?>">
    
    
    <div class="tab-content" class="tab-content">
      <div class="tab-pane active" id="reuniao">
        <div class="form-group">
          <label for="name">Data</label>
          <input type="date" class="form-control" name="date" value="<?= $infos['m_date']; ?>">
        </div>
        <div class="form-group">
          <label for="name">Horário</label>
          <input type="time" class="form-control" name="time" value="<?= $infos['m_time']; ?>">
        </div>
        <div class="form-group">
          <label for="name">Local</label>
          <input type="text" class="form-control" name="local" value="<?= $infos['local']; ?>">
        </div>
        <div class="form-group">
          <label for="name">Orgão</label>
          <select class="form-control" name="organ">
            <?php print_r($organs); ?>
            <?php foreach ($organs as $organ) { ?>
              <option value="<?= $organ['id']; ?>"><?= $organ['name']; ?></option>
            <?php } ?>
          </select>
        </div>
      </div>
    
      <div class="tab-pane" id="participantes">
        <div class="form-group">
          <textarea class="textarea" style="width: 100%; height: 40%;" name="participantes">
             <?= $infos['participants']; ?>
          </textarea>
        </div>
      </div>
      
      <div class="tab-pane" id="pessoas">
        <div class="form-group">
          <textarea class="textarea" style="width: 100%; height: 40%;" name="pessoas">
             <?= $infos['people']; ?>
          </textarea>
        </div>
      </div>
      
      <div class="tab-pane" id="processos">
        <div class="form-group">
          <textarea class="textarea" style="width: 100%; height: 40%;" name="processos">
             <?= $infos['processes']; ?>
          </textarea>
        </div>
      </div>
      
      <div class="tab-pane" id="infraestrutura">
        <div class="form-group">
          <textarea class="textarea" style="width: 100%; height: 40%;" name="infraestrutura">
             <?= $infos['infra']; ?>
          </textarea>
        </div>
      </div>
      
      <div class="tab-pane" id="sistemas">
        <div class="form-group">
          <textarea class="textarea" style="width: 100%; height: 40%;" name="sistemas">
             <?= $infos['systems']; ?>
          </textarea>
        </div>
      </div>
    </div>
    
    <button type="submit" class="btn btn-success btn-lg pull-right">Salvar</button>
  </form>
</div>

<?php include '_bottom.php'; ?>