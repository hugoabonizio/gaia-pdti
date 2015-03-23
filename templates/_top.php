<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PDTI</title>
    <link href="<?= resource('public/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?= resource('public/css/bootstrap-wysihtml5.css');?>" rel="stylesheet">
    <link href="<?= resource('public/css/style.css'); ?>" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="http://jhollingworth.github.io/bootstrap-wysihtml5/lib/css/prettify.css"></link>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Gaia PDTI</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?= link_to('meetings'); ?>"><i class="glyphicon glyphicon-plus"></i> Reuniões</a></li>
            <li><a href="<?= link_to('options'); ?>"><i class="glyphicon glyphicon-align-justify"></i> Opções</a></li>
            <li><a href="#"><i class="glyphicon glyphicon-question-sign"></i> Ajuda</a></li>
            <li><a href="#"><i class="glyphicon glyphicon-log-out"></i> Sair</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">

        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            
            <div class="panel-group" id="accordion">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                      Introdução
                    </a>
                  </h4>
                </div>
                <div id="collapse1" class="panel-collapse">
                  <div class="panel-body">
                    <li><a href="<?= link_to('descricao'); ?>">Descrição</a></li>
                    <li><a href="<?= link_to('organizacional'); ?>">Estrutura Organizacional</a></li>
                    <li><a href="<?= link_to('metodologia'); ?>">Metodologia</a></li>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="panel-group" id="accordion">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                      Referencial Estratégico
                    </a>
                  </h4>
                </div>
                <div id="collapse2" class="panel-collapse">
                  <div class="panel-body">
                    <li><a href="<?= link_to('missao'); ?>">Missão</a></li>
                    <li><a href="<?= link_to('visao'); ?>">Visão</a></li>
                    <li><a href="<?= link_to('objetivos'); ?>">Objetivos Estratégicos</a></li>
                    <li><a href="<?= link_to('matriz'); ?>">Matriz SWOT</a></li>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="panel-group" id="accordion">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                      Infraestrutura
                    </a>
                  </h4>
                </div>
                <div id="collapse2" class="panel-collapse">
                  <div class="panel-body">
                    <li><a href="<?= link_to('redes'); ?>">Redes de Comunicação</a></li>
                    <li><a href="<?= link_to('servidores'); ?>">Servidores</a></li>
                  </div>
                </div>
              </div>
            </div>
            
          </ul>
          <hr>
          <a href="<?= resource('test_pdf.php'); ?>" target="blank">
            <button type="button" class="btn btn-danger btn-lg" style="position: absolute; bottom: 50px;">
              <span class="glyphicon glyphicon glyphicon-save"></span> Gerar PDF
            </button>
          </a>
        </div>