<!DOCTYPE html>
<html>
	<head>
			<meta charset="utf-8">
			<title>FootballClub Inscriptions</title>
            <link rel="stylesheet" href="./style.css">
	</head>
    <?php
		$message ="";
		if(isset($_GET['age'])){
		    $age= $_GET['age'];
		    if($age <=6){$message='Trop jeune';}
		    elseif($age <=7){ $message='Poussin'; }
		    elseif ($age <=9) { $message='Pupille'; }
		    elseif ($age <=11) { $message='Minime'; }
		    elseif ($age <15) { $message='Cadet'; }
		    else { $message='Trop âgé'; }
		}
    ?>
		<body>
			<div class="container">
			<h1>Catégorie selon l'âge de votre enfant</h1>


					<form class="formulaire">
						<p>Je soussigné MME/MR <input type="text" name="nom" value="" placeholder="Nom">
						<br> Désire inscrire mon enfant <input type="text" name="nomenfant" value="" placeholder="Nom">
						au club de sport a partir de ce mois ci!</p>
						<p>Veuillez inquer l'âge de votre enfant pour savoir dans qu'elle catégorie il sera:
						<input type="age" name="age" placeholder="âge" >
						</p>
						<button type="submit" name="button">Go!</button>
						<p><?php echo $message; ?></p>
					</form>
				</div>
			</body>
</html>
