<?php

$array = array("terme1", "terme2", "intrus1", "terme3", "intrus2", "terme4");
$asupp = array("intrus1", "intrus2"); //r�pertoires et fichiers � exclure

foreach ($asupp as $supp){
	unset($array[array_search($supp, $array)]);
	}
print_r($array);

?>