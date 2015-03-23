<?php include '_top.php'; ?>

<input type="hidden" id="page" data-pagename="missao" />


<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h1 class="page-header">Missão</h1>
  <textarea class="textarea" style="width: 810px; height: 200px" id="missao"><?= $rows['missao']; ?></textarea>
</div>



<?php include '_bottom_save.php'; ?>