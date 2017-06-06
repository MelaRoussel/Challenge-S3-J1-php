# Challenge : PHP, variables, conditions, tableaux

## Objectif
Revoir les bases de la syntaxe PHP, écrire vos premiers scripts, savoir utiliser les conditions pour éxécuter un traitement différent selon des valeurs fournies.

## Problématique
Une compagnie d'assurances veut aussi vous mettre au travail ! Il s'agit de calculer le niveau de contrat pour ses prospects.

La compagnie d'assurance automobile propose à ses clients **quatre paliers tarifaires** du plus au moins onéreux :

- Palier 0 : Refus d'assurer
- Palier 1 : Rouge
- Palier 2 : Orange
- Palier 3 : Vert
- Palier 4 : Bleu

On recense les informations suivantes sur le conducteur :
- Son `âge` (en nb d'années)
- L'`ancienneté` de son permis (en nb d'années)
- Le `nombre d'accidents` de sa responsabilité
- Son `ancienneté chez l'assureur` (en nb d'années)

Le `palier` dépend de la situation du conducteur et des **conditions** suivantes :

- Par défaut, tout le monde entre au palier 1 (tarif Rouge)
- Le nombre d'accidents réduit d'autant le nombre de paliers
- Un permis de plus de 2 ans augmente le palier d'un niveau
- Un âge de plus de 25 ans augmente le palier d'un niveau
- Une ancienneté de plus de 5 ans augmente le palier d'un niveau, si le conducteur n'est pas déjà refusé

## Instructions

1. Créer les variables qui vont contenir les informations du client.
2. Ecrire le script qui permet de déterminer à quel palier peut prétendre un client, selon ses informations (et donc à quel couleur de tarif).
3. Afficher le résultat, par ex. "Votre client a droit au tarif Vert".
4. Bonus : afficher le résultat de trois manières différentes : via `if`, `switch` et `array()`.
    - Voir [Switch sur PHP.net](http://php.net/manual/en/control-structures.switch.php) et voir la fiche récap' "Syntaxe" pour `array()`

## Conseils
* Vous pouvez revoir les scripts écrits en cours pour vous remettre les choses en mémoire.
* Si vous ne voyez pas comment faire, utilisez crayon et papier ou écrivez dans les commentaires de votre script,
et essayez de décomposer ce que vous comprenez.
Ecrivez des commentaires descriptifs, essayez d'éxécuter les étapes une par une. Vous aurez sûrement des idées.
