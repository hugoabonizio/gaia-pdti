<?php
class Utils {
	static function getImageBase64($url) {
		$ch = curl_init($url);
		curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1) ;
		$content = curl_exec($ch);
		if(!curl_errno($ch)) {
			$info = curl_getinfo($ch);
			/*echo 'Content type of returned data: ' . $info['content_type'];
			$info = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);
			echo '<br>'. $info;*/
		}
		curl_close($ch);
		return 'data:' . $info['content_type'] . ';base64,' . base64_encode($content);
	}

	static function getImageRaw($url) {
		$ch = curl_init($url);
		curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1) ;
		$content = curl_exec($ch);
		curl_close($ch);
		return $content;
	}
}