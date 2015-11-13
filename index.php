<?php 
$strConnection = 'mysql:host=localhost;dbname=world';

$pdo = new PDO($strConnection, 'root', 'website');

require 'function.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="../WORLD_DM/style.css">
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
			<option value=""></option>
		</select>


		<h2></h2>

		<p></p>


		<h2></h2>

		<p></p>
	</article>

	<article>
		<!-- partie PAYS-->
		<select name="PAYS" multiple>
			

			<?php 
			

			$rowcountry = getcountry($pdo);
			
			foreach($rowcountry AS $currentcountry) {

				echo  '<option value="' . $currentcountry['Name'] .'">'.$currentcountry['Name'] .'</option>';
				
				
			}
			?>
			

			
		</select>


		<h2>Démographie</h2>

		<p>Capitale :</p>
		<p>Ville la plus habité :</p>
		<p>Nombres de ville enregistrées :</p>
		<p>Langue Officielle :</p>
		<p>Autres langues parlées :</p>
		<p>Langues A (%) :</p>
		<p>Langues B (%) :</p>


		<h2>Economie</h2>

		<p>PNB: M$</p>
	</article>


</body>
</html>