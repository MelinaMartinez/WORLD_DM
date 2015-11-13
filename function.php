<?php


function getContinentByName($pdo) {

	$sql1 ='SELECT DISTINCT Continent FROM country;'; 
	$continent = $pdo->query($sql1); 
	$rowContinent = $continent->fetchAll(PDO::FETCH_ASSOC);
	return $rowContinent;

}

function getcountry($pdo) {
	$sql= 'SELECT DISTINCT Name FROM country;';
			$country = $pdo->query($sql); 
			$rowcountry = $country->fetchAll(PDO::FETCH_ASSOC);
			return $rowcountry;
}