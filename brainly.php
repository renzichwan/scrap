<?php

require "src/Brainly.php";

use Brainly\Brainly;

$query = $_GET['q'];
$st = new Brainly('Penemu Motor');
$result = $st->exec();

if (count($result) === 0) {
  print "Not found!\n";
} else {
  $data = json_encode($result, JSON_PRETTY_PRINT);
  $data = json_decode($data,true);
  echo "*[+] Jawaban Pertama [+]* \n<br>";
  echo "_".$data[0]['answers'][0]."_ \n \n<br>";
  
  echo "<br>*[+] Jawaban Kedua [+]* \n<br>";
  echo "_".$data[1]['answers'][0]."_ \n \n<br>";
  
   echo "<br>*[+] Jawaban Ketiga [+]* \n<br>";
  echo "_".$data[2]['answers'][0]."_ \<br>";
}
