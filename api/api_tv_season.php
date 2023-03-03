
<?php


$ctp22 = curl_init();
curl_setopt($ctp22, CURLOPT_URL, "https://api.themoviedb.org/3/tv/".$id_tv."/season?api_key=" . $apikey);
curl_setopt($ctp22, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ctp22, CURLOPT_HEADER, FALSE);
curl_setopt($ctp22, CURLOPT_HTTPHEADER, array("Accept: application/json"));
$response19 = curl_exec($ctp22);
curl_close($ctp22);
$tv_season = json_decode($response19);

?>