<?php include '_top.php'; ?>

<input type="hidden" id="page" data-pagename="swot_pforte,swot_pfraco,swot_oportunidades,swot_ameacas" />


<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h1 class="page-header">Matriz SWOT</h1>
  
  <ul class="nav nav-tabs" role="tablist">
    <li class="active"><a href="#fortes" role="tab" data-toggle="tab">Pontos Fortes</a></li>
    <li><a href="#fracos" role="tab" data-toggle="tab">Pontos Fracos</a></li>
    <li><a href="#oportunidades" role="tab" data-toggle="tab">Oportunidades</a></li>
    <li><a href="#ameacas" role="tab" data-toggle="tab">Ameaças</a></li>
  </ul>
  
  <div class="tab-content" class="tab-content">
    <div class="tab-pane active" id="fortes">
      <h3 class="page-header">Pontos Fortes</h3>
      <textarea style="width: 100%; height: 40%;" id="swot_pforte"><?= $rows['swot_pforte']; ?></textarea>
    </div>

    <div class="tab-pane" id="fracos">
      <h3 class="page-header">Pontos Fracos</h3>
      <textarea style="width: 100%; height: 40%;" id="swot_pfraco"><?= $rows['swot_pfraco']; ?></textarea>
    </div>

    <div class="tab-pane" id="oportunidades">
      <h3 class="page-header">Oportunidades</h3>
      <textarea style="width: 100%; height: 40%;" id="swot_oportunidades"><?= $rows['swot_oportunidades']; ?></textarea>
    </div>

    <div class="tab-pane" id="ameacas">
      <h3 class="page-header">Ameaças</h3>
      <textarea style="width: 100%; height: 40%;" id="swot_ameacas"><?= $rows['swot_ameacas']; ?></textarea>
    </div>
  </div>
</div>



<?php include '_bottom.php'; ?>