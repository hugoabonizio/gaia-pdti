<?php include '_top.php'; ?>

<input type="hidden" id="page" data-pagename="swot_pforte,swot_pfraco,swot_oportunidades,swot_ameacas" />


<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h1 class="page-header">Matriz SWOT</h1>

  <h3 class="page-header">Pontos Fortes</h3>
  <textarea style="width: 810px; height: 100px" id="swot_pforte"><?= $rows['swot_pforte']; ?></textarea>

  <h3 class="page-header">Pontos Fracos</h3>
  <textarea style="width: 810px; height: 100px" id="swot_pfraco"><?= $rows['swot_pfraco']; ?></textarea>

  <h3 class="page-header">Oportunidades</h3>
  <textarea style="width: 810px; height: 100px" id="swot_oportunidades"><?= $rows['swot_oportunidades']; ?></textarea>

  <h3 class="page-header">Ameaças</h3>
  <textarea style="width: 810px; height: 100px" id="swot_ameacas"><?= $rows['swot_ameacas']; ?></textarea>
</div>



<?php include '_bottom.php'; ?>