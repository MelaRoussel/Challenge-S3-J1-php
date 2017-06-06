<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<?php

		// 1. Créer les variables qui vont contenir les informations du client.
		// 2. Ecrire le script qui permet de déterminer à quel palier peut prétendre un client, selon ses informations (et donc à quel couleur de tarif).
		// 3. Afficher le résultat, par ex. "Votre client a droit au tarif Vert".
		// 4. Bonus : afficher le résultat de trois manières différentes : via `if`, `switch` et `array()`.
//INFOS CONDUCTEUR
        $age=$_GET['age'];
        $permis=$_GET['permis'];
        $accidents=$_GET['accidents'];
        $assureur=$_GET['assureur'];
// Ne pas oublier les ''
//SCRIPT PALIER
        $message= "";
        $palier= 1;
        $palier= $palier - $accidents;
        $messageSwitch="";
        // Toujours == pour les valeurs =
        if($permis == 2){
            $palier +=1;
        }
        if ($age > 25) {
            $palier +=1;
        }
        // && pour ajouter une autre variable
        if ($assureur > 5 && $palier > 0){
            $palier += 1;
        }
        if ($palier == 0) {
            $message="Refus d'assurer";
        }
        elseif ($palier == 1) {
            $message="Rouge";
        }
        elseif ($palier == 2) {
            $message="orange";
        }
        elseif ($palier==3) {
            $message="Vert";
        }
        elseif ($palier == 4) {
            $message="Bleu";
        }

        switch ($palier){
            case 0 :
            $messageSwitch="Refus d'assurer";
            break;
            case 1 :
            $messageSwitch="Rouge";
            break;
            case 2 :
            $messageSwitch="orange";
            break;
            case 3 :
            $messageSwitch="Vert";
            break;
            case 4:
            $messageSwitch="Bleu";
            break;
        }
        //Plus lisible comme ça!!
        $array_palier[0]="Refus d'assurer";
        $array_palier[1]="Rouge";
        $array_palier[2]="orange";
        $array_palier[3]="Vert";
        $array_palier[4]="Bleu";
		?>

		<h1>Calcul du tarif de votre client</h1>
        <form class="form">
        <input type="text" name="age" value="">
        <input type="text" name="permis" value="">
        <input type="text" name="accidents" value="">
        <input type="text" name="assureur" value="">
        <button type="submit" name="button">Go</button>
        </form>
		<p>Votre client à droit au tarif <?php echo $message  ?>.</p>
        <p>Votre client à droit au tarif <?php echo $messageSwitch  ?>.</p>
        <p>Votre client à droit au tarif <?php echo $array_palier[$palier]  ?>.</p>
        <!-- J'affiche la valeur du palier dans le tableau array_palier -->
	</body>
</html>
