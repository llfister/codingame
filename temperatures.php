<?php
/**
 * Objectif : Dans cet exercice, vous devez analyser un relevé de températures pour
 * trouver quelle température se rapproche le plus de zéro.
 *
 * Règles : Écrivez un programme qui affiche la température la plus proche de 0 parmi
 * les données d'entrée. Si deux nombres sont aussi proches de zéro, alors l'entier positif
 * sera considéré comme étant le plus proche de zéro (par exemple, si les températures sont
 * -5 et 5, alors afficher 5).
 *
 * Affichez 0 (zéro) si aucune température n'est fournie. Sinon, affichez la température la plus proche de 0
 * Le nombre de températures doit être compris entre 0 et 10 000
 */


/**
 * @param array $inputs tableau qui contient toutes les températures
 * @return int
 */
function getTemperatureClosestZero(array $inputs): int
{
    $n = count($inputs);
    $closest = 0;
    for ($i = 0; $i < $n; $i++)
    {
        $t = intval($inputs[$i]);
        if($closest == 0){
            $closest = $t;
        }elseif(0 < $t && $t <= abs($closest)) {
            $closest = $t;
        }elseif(0 > $t && -$t < abs($closest)){
            $closest = $t;
        }
    }

    echo "$closest \n";
    return $closest;
}
