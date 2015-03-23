<?php

$times = [];

require 'vendor/autoload.php';

define('INSTITUICAO_ID', 1);

#require 'lib/MPDF57/mpdf.php';
require 'database.php';
require 'helpers.php';

require 'models/organ.php';
require 'models/meeting.php';



/*$db = new DB();
$db->create();*/

$app = new \Slim\Slim(array(
    'templates.path' => './templates',
    'debug' => true
));

$app->get('/', function () use ($app) {
	$db = new DB();
	$app->render('home.php', array('rows' => $db->loadInfos(INSTITUICAO_ID)));
});

$app->get('/update', function () use ($app) {
	$db = new DB();
	$db->update_attributes(INSTITUICAO_ID, $app->request->get());
});

$app->group('/organs', function () use ($app) {
  $app->get('/', function () use ($app) {
    $o = new Organ((new DB())->pdo);
    $app->render('organs.php', array('organs' => $o->all()));
  });

  $app->post('/', function () use ($app) {
    $o = new Organ((new DB())->pdo);
    $o->create($app->request->post());
    print_r($app->request->post());
    $app->redirect(link_to('organs'));
  });

  $app->get('/delete', function () use ($app) {
    $o = new Organ((new DB())->pdo);
    $o->delete($app->request->get('id'));
    $app->redirect(link_to('organs'));
  });

  $app->get('/new', function () use ($app) {
    $app->render('new_organ.php');
  });
});

$app->group('/meetings', function () use ($app) {
  $app->get('/', function () use ($app) {
    $m = new Meeting();
    $app->render('meetings.php', array('meetings' => $m->all()));
  });
  
  $app->post('/', function () use ($app) {
    $m = new Meeting((new DB())->pdo);
    $params = $app->request->post();
    if ($params['action'] == "create") {
      $m->create($params);
    } elseif ($params['action'] == "update") {
      $m->update($params['id'], $params);
    }
    $app->render('meetings.php', array('meetings' => $m->all()));
  });
  
  $app->get('/new', function () use ($app) {
    error_reporting(E_ERROR|E_WARNING);
    $o = new Organ();
    $app->render('meeting.php', array(
      'action' => 'create',
      'organs' => $o->all(),
      'infos' => array()
    ));
  });
  
  $app->get('/edit/:id', function ($id) use ($app) {
    $o = new Organ();
    $app->render('meeting.php', array(
      'action' => 'update',
      'organs' => $o->all(),
      'infos' => (new Meeting())->find($id)
    ));
  });
  
  $app->get('/delete', function () use ($app) {
    $o = new Meeting();
    $o->delete($app->request->get('id'));
    $app->redirect(link_to('meetings'));
  });
});


$app->get('/:page', function ($page) use ($app) {
	$db = new DB();
	//if (in_array($page, array('missao', 'visao', 'objetivos', 'matriz', 'options', 'descricao',
  //                         'organizacional', 'metodologia', 'redes'))) {
    
    $page_info = [
      'descricao' => ['descricao', 'Descrição sucinta do município'],
      'organizacional' => ['organizacional', 'Estrutura Organizacional da Secretaria de Tecnologia da Informação'],
      'metodologia' => ['metodologia', 'Metodologia de Trabalho'],
      'missao' => ['missao', 'Missão'],
      'visao' => ['visao', 'Visão'],
      'objetivos' => ['objetivos', 'Objetivos Estratégicos de TIC'],
      'redes' => ['redes', 'Redes de Comunicação de Dados'],
      'servidores' => ['servidores', 'Servidores'],
    ];
    echo $page;
    if (in_array($page, array('descricao', 'organizacional', 'metodologia', 'missao', 'visao',
                             'objetivos', 'redes', 'servidores'))) {
      $app->render('simple_field.php', array('rows' => $db->loadInfos(INSTITUICAO_ID),
                                         'page' => $page_info[$page]));
    } elseif (in_array($page, array('matriz', 'options'))) {
		  $app->render("$page.php", array('rows' => $db->loadInfos(INSTITUICAO_ID)));
    }
	//}
});


$app->post('/options', function () use ($app) {
	if (!empty($_FILES)) {
		//echo file_exists($_FILES['logo']['tmp_name']);
		$client_id = "f3bf45deedce9c6";
		$image = file_get_contents($_FILES['logo']['tmp_name']);
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, 'https://api.imgur.com/3/image.json');
		curl_setopt($ch, CURLOPT_POST, TRUE);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Client-ID ' . $client_id));
		curl_setopt($ch, CURLOPT_POSTFIELDS, array('image' => base64_encode($image)));

		$reply = curl_exec($ch);
		curl_close($ch);

		$reply = json_decode($reply);
		//printf('<img height="180" src="%s" >', $reply->data->link);
		$db = new DB();
		$db->update_attributes(INSTITUICAO_ID, array('logo_url' => $reply->data->link));
		$app->render("options.php", array('rows' => $db->loadInfos(INSTITUICAO_ID)));
	}
});


$app->get('/hello/:name', function ($name) {
    echo "Hello, $name";
});


$app->run();
