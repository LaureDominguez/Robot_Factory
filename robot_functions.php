<?php

$nomRobot;
function getRobotName(){
    $lettre = [
        "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "T", "U", "V", "W", "X", "Y", "Z"
    ];
    
    $chiffre = [
        1, 2, 3, 4, 5, 6, 7, 8, 9, 0
    ];
    
    
    $randomLettre = array_rand($lettre,2);
    $lettres = $lettre[$randomLettre[0]]. $lettre[$randomLettre[1]];
    
    $randomChiffre = array_rand($chiffre, 4);
    $chiffres = $chiffre[$randomChiffre[0]]. $chiffre[$randomChiffre[1]]. $chiffre[$randomChiffre[2]]. $chiffre[$randomChiffre[3]];
    
    $nomRobot =  $lettres . "-" . $chiffres;
    return $nomRobot;
}

function hi($nomRobot){
    echo("Salut, humain. Je suis ". $nomRobot .".<br>");
}
// bonus 1 :

function donnerDate(){
    echo("Nous sommes le " . date("d, M, Y") . "et il est " . date("h:i:s") . ".<br>");
}

//bonus 2 :

function random(){
    $getRandom = rand(1,10);
    if ($getRandom % 2 == 0){
        echo("J'ai choisi le nombre " . $getRandom . ". C'est un nombre pair.<br>");
    } else {
        echo("J'ai choisi le nombre " . $getRandom . ". C'est un nombre impair.<br>");
    }
}


//bonus 3 :
function joke($nomRobot){
    echo("Mon nom à l'envers s'écrit " . strrev($nomRobot) . ". Ah.Ah.Ah.<br>");
}

//bonus 4 :
function randCoffee(){
    $coffee = rand(0,2);
    if ($coffee == 0){
        echo("Extermination ! Extermination !<br>");
    } else {
        echo("Vous voulez un café ?<br>");
    }
}

function coffee($morales){
    switch($morales){
        case "gentil":
            echo("Vous voulez un café ?<br>");
            break;
        case "surprise":
            randCoffee();
            break;
        case "mechant":
            echo("<p style='color:red; font-weight: bold'>Extermination ! Extermination !</p>");
            break;
        default:
            randCoffee();
    }
}

//bonus 5 :
function game(){
    $subconscient = rand(1, 10);
    echo("Le robot doit trouver ". $subconscient ."<br>");

    $robot = rand(1,10);
    echo("Le robot pense au nombre ". $robot ."<br>");


    function search($robot, $subconscient){
        while ($robot != $subconscient){
            if ($robot > $subconscient){
                echo($robot." ? Non, c'est pas ça... Trop élevé ?<br> Alors... ");
                $robot--;
            } elseif ($robot < $subconscient){
                echo("C'est ".$robot. " ? Raté, pas assez...<br>");
                $robot++;
            }
        } echo("J'AI TROUVE !! C'est " . $robot . " !!!<br>");
    }

    search($robot, $subconscient);
    echo "<hr>";
}

//bonus 6 :

function game2(){
    $listeNombres = [1,1000000];
    $longueur = range($listeNombres[0], end($listeNombres));
    //echo("Le tableau comporte ".$longueur . "<br>");
    $debut= $longueur[0];
    //echo("Le début : ".$debut . "<br>");
    $fin= end($longueur);
    //echo("La fin : ".$fin . "<br>");
    $milieu= (int) ($fin/2);

    echo("Pour le deuxième jeu, le robot doit trouver un nombre entre ". $debut . " et " . $fin ."<br>");

    $subconscient2 = rand($listeNombres[0], end($listeNombres));
    echo("Le deuxième robot doit trouver ". $subconscient2 ."<br>");

    $robot2 = rand($listeNombres[0], end($listeNombres));
    echo("Le deuxième robot pense au nombre ". $robot2 ."<br>");

    while ($robot2 != $subconscient2){

        if ($subconscient2 > $milieu){
            echo("C'est ".$robot2."? Non, c'est pas ça... Trop élevé ?<br>");
            $debut = $milieu;
            $length = count(range($debut, $fin));
            $milieu= (int) ($debut + $length/2);
            echo("debut : " . $debut."; milieu : ".$milieu."; fin : ".$fin."<br><hr>");
            $robot2 = rand($debut, $fin);
        }

        elseif ($subconscient2 <= $milieu){
            echo("C'est ".$robot2."? Raté... Trop petit ?<br>");
            $fin = $milieu;
            $length = count(range($debut, $fin));
            $milieu= (int) ($debut + $length/2);
            echo("debut : " . $debut."; milieu : ".$milieu."; fin : ".$fin."<br><hr>");
            $robot2 = rand($debut, $fin);
        }
    } echo("J'AI TROUVE !! C'est " . $robot2 . "<br>");
}

?>