<?php

function is_production() {
  //return isset($_ENV['production']);
  return false;
}

function link_to($url) {
	if (is_production()) {
		return "/index.php/" . $url;
	} else {
		return "http://localhost/slim_tests/2/index.php/" . $url;
	}
}

function resource($url) {
	if (is_production()) {
		return "/" . $url;
	} else {
		return "http://gaia3.uel.br/projetos/gaia-pdti/" . $url;
	}
}

?>