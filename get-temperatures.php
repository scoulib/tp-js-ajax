<?php
header("Content-Type: application/json; charset=UTF-8");
$mois=$_POST['month'];
$fichier = 'temperatures.xml';
$xml = simplexml_load_file($fichier);
$i=0;
$json=[];
foreach($xml as $month){
  if($i==0)
  {
      $i++;
  }
  else
  {
        $attributs = $month->attributes();
        if($attributs["name"]->__toString()==$mois)
            $json[]=[$attributs["name"]->__toString(),$attributs["value"]->__toString()];
}
}

echo json_encode($json);

 ?>
