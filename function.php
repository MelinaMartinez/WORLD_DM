<?php
function getcountry($pdo) {
	$sql= 'SELECT DISTINCT Name FROM country;';
			$country = $pdo->query($sql); 
			$rowcountry = $country->fetchAll(PDO::FETCH_ASSOC);
			return $rowcountry;
}
?>