<?php
	//NaCloud Tutoriales Youtube
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, 'http://www.youtube.com/user/NaCloudTutoriales');
	curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)');
	curl_setopt($ch, CURLOPT_HTTPHEADER, array("Accept-Language: es-es,en"));
	curl_setopt($ch, CURLOPT_TIMEOUT, 10);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$result = curl_exec($ch);
	$error = curl_error($ch);
	curl_close($ch); 

	preg_match_all("(<span class=\"stat-value\">(.*)</span>
  <span class=\"stat-name\">suscriptores</span>)siU", $result, $matches1);
	preg_match_all("(</div>


    
    <div class=\"stat-entry\">
        <span class=\"stat-value\">(.*)</span>)siU", $result, $matches2);
	$suscribtores = $matches1[1][0];
	$reproduccionesvideo = $matches2[1][0];
	echo "NaCloud Youtube:</br>";
	echo "Suscriptors: " . $suscribtores;
	echo "</br>Reproduccions de videos: " . $reproduccionesvideo;
?>