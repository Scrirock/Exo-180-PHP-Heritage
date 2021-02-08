<?php

/**
 * 1. Créez une classe Habitation, elle contiendra les propriétés:
 *    - pays ( string )
 *    - ville ( string )
 *    - code postal ( entier ou string )
 *    - chambres ( entier )
 *    - pièces ( entier )
 *
 * Définissez tous les setters et les getters.
 *
 *
 *
 * 2. Créez une classe Maison qui étend de Habitation, elle contiendra les propriétés:
 *    - jardin ( booleen )
 *    - etages ( entier )
 *    - garage ( booleen )
 *
 * Définissez tous les getters et les setters.
 *
 *
 *
 * 3. Créez une classe Appartement qui étend de habitation, elle contiendra les propriétés:
 *    - garage ( booleen )
 *
 * Définissez tous les getters et les setters.
 *
 *
 *
 * 4. Créez deux instances de Maison et invoquez toutes les méthodes définies, sauf les setters ( dans index.php ).
 *
 *
 *
 * 5. Créez une instance de Appartement et invoquez toutes les méthodes définies, y compris les setters ( dans index.php ).
 */

require "./Habitation.php";
require "./Maison.php";
require "./Appartement.php";

$myHouse1 = new Maison("Belgique", "Momignies", 6590, 78, 1470, true, 210, true);
echo $myHouse1->getPays()."<br>";
echo $myHouse1->getVille()."<br>";
echo $myHouse1->getCodePostale()."<br>";
echo $myHouse1->getChambres()."<br>";
echo $myHouse1->getPieces()."<br>";
echo $myHouse1->isJardin()."<br>";
echo $myHouse1->getEtage()."<br>";
echo $myHouse1->isGarage()."<br><br>";

$myHouse2 = new Maison("France", "Fourmies", 7841, 2, 4, false, 2, false);
echo $myHouse2->getPays()."<br>";
echo $myHouse2->getVille()."<br>";
echo $myHouse2->getCodePostale()."<br>";
echo $myHouse2->getChambres()."<br>";
echo $myHouse2->getPieces()."<br>";
echo $myHouse2->isJardin()."<br>";
echo $myHouse2->getEtage()."<br>";
echo $myHouse2->isGarage()."<br><br>";

$myApps1 = new Appartement("Angleterre", "Londre", 4796, 7, 5, true);
echo $myApps1->getPays()."<br>";
echo $myApps1->getVille()."<br>";
echo $myApps1->getCodePostale()."<br>";
echo $myApps1->getChambres()."<br>";
echo $myApps1->getPieces()."<br>";
echo $myApps1->isGarage()."<br><br>";

$myApps1->setPays("fgg");
$myApps1->setVille("dfvg");
$myApps1->setCodePostale(547);
$myApps1->setChambres(47);
$myApps1->setPieces(54);
$myApps1->setGarage(false);