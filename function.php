<?php

function getContinentByName($pdo) {

	$sql1 ='SELECT DISTINCT Continent FROM country;'; 
	$continent = $pdo->query($sql1); 
	$rowContinent = $continent->fetchAll(PDO::FETCH_ASSOC);
	return $rowContinent;

}

?>