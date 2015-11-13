<?php


$dsn = 'mysql:host=localhost;dbname=world;charset=utf8';
$pdo = new PDO($dsn, 'world', '');
	
REQUIRE 'function.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>

	<header>
		<h1>Statistiques mondiales</h1>
	</header>
	
	<article>
		<!-- partie Monde-->
	</article>

	<article>
		<!-- partie Continent-->
		<select name="" multiple>
							
			<?php 
			
			$rowContinent= getContinentByName($pdo);

			foreach($rowContinent AS $currentContinent)
			{
				echo '<option value="'.$currentContinent['Continent'].'">'.$currentContinent['Continent'].'</option>';
			}
			?>


		
		</select>


		<h2>Démographie</h2>

		<p>Nombre de pays : </p>
		<p>Population : </p>
		<p>Surface totale : </p>
		<p>Pays le plus habité : </p>
		<p>Pays ayant la plus grande espérance de vie : </p>
		<p>Espérance de vie moyenne : </p>


		<h2>Economie</h2>

		<p>Richesse créée : M$</p>



	</article>

	<article>
		<!-- partie PAYS-->
		<select name="" multiple>
			<option value=""></option>
		</select>


		<h2></h2>

		<p></p>


		<h2></h2>

		<p></p>
	</article>


</body>
</html>