<?php

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
            $name[]=$attributs["name"]->__toString();
            $valeurs[]=intval($attributs["value"]->__toString());

}
}

$tab=['title'=>['text'=>'Step line types, with null values in the series'],'xAxis'=>['categories'=>$name],'series'=>[['data'=>$valeurs,'name'=>'Angers']]];
echo json_encode($tab);

 ?>
