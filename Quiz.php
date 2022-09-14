<?php

//Willekeurige getal wordt gekozen.
$random = rand(1,100);

//Het willekeurige getal wordt geprint. Dit wordt gebruikt bij het testen van de applicatie.
//echo $random . "\n";

//Pogingteller. Bij elke foute keer gaat de teller met 1 omhoog.
$teller = 1;

//Doel van het spel wordt uitgelegd.
echo "Het programma heeft een willekeurig getal gekozen tussen de 1 en 100.\n";
echo "Je kan het programma op ieder moment stoppen door 'STOP' te typen.\n";
//Speler kan een getal invoeren. Deze wordt m.b.v. readline() gelezen.
$invoer = readline("Probeer het getal te raden:\n");

//Als speler 'STOP' invoert, wordt het programma afgesloten.
if ( $invoer == "STOP" ) {
    exit("Het programma wordt nu afgesloten.");

//Als speler 'STOP' niet invoert, wordt de code in else uitgevoerd.
} else{
//Als invoer binnen de getallen 1 en 100 valt, wordt de code in de if statement uitgevoerd.
    if ( $invoer >= 1 && $invoer <= 100 ) {
//Als invoer niet gelijk staat aan het willekeurige getal, wordt de while-loop uitgevoerd.
//Deze loop checkt via de if en else statements of het getal hoger of lager is dan het willekeurige getal.
//Deze tekst wordt dan uitgevoerd.
        while ( $invoer != $random ) {
            echo "Je hebt het verkeerde getal gekozen.\n";
            if ($invoer < $random) {
                echo "Je gekozen getal is lager dan het willekeurige getal dat het programma heeft gekozen.\n";
            } else {
                echo "Je gekozen getal is hoger dan het willekeurige getal dat het programma heeft gekozen.\n";
            }
//Na een foutieve poging, mag de speler het getal opnieuw proberen te raden.
//De teller gaat hierbij omhoog.
            $invoer = readline("Probeer het opnieuw:\n");
            $teller++;
        }
//Als de speler het goede getal heeft geraden, krijgt de speler te horen hoeveel pogingen hij/zij nodig had.
//Daarna wordt het programma afgesloten.
        if ( $invoer == $random ) {
            echo "Je hebt het goede getal geraden!\n";
            echo "Je hebt getal in " . $teller . " poging(en) geraden.\n";
        }
//Als invoer niet binnen de getallen 1 en 100 valt, wordt het programma afgesloten.
    } else {
        exit("Het programma wordt nu afgesloten.");

    }
}



// Als je alles in de Quiz() functie zet en deze aanroept aan het einde van de functie, echo't het alleen de eerste zin
// (die buiten de functie ligt). De rest van de code wordt dan overgeslagen.

// WERKT NIET, CODE VALT IN EEN INFINITE LOOP
//while ( $invoer != $random ) {
//    echo "Je hebt het verkeerde getal gekozen.\n";
//    $invoer = "Probeer het opnieuw.\n";
//}

// KON HET NIET WERKENDE KRIJGEN
//function opnieuw() {
//    $invoer = "Je hebt het verkeerde getal gekozen. Probeer het opnieuw.\n";
//}

?>