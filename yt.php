<?php
header("Access-Control-Allow-Origin: *");
$q = $_GET['q'];
$ch = curl_init('http://youtube-scrape.herokuapp.com/api/search?q='.$q.'&page=1');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$upx = curl_exec($ch);
$data = json_decode($upx,true);
$id = $data['results'][0]['video']['id'];
$title = $data['results'][0]['video']['title'];
$thumb = $data['results'][0]['video']['thumbnail_src'];
  $array = array(
   'id' => $id,
   'title' => $title,
   'thumbnail' => $thumb
   );
print_r(json_encode($array,true));
?>
