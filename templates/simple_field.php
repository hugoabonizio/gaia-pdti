<?php include '_top.php'; ?>

<input type="hidden" id="page" data-pagename="<?= $page[0]; ?>" />


<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h1 class="page-header"><?= $page[1]; ?></h1>
  <textarea class="textarea" style="width: 810px; height: 200px" id="<?= $page[0]; ?>"><?= $rows[$page[0]]; ?></textarea>
</div>



<?php include '_bottom.php'; ?>