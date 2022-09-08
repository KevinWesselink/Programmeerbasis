<?php

$naam = readline("Geef jouw naam : ");
$leeftijd = readline("Geef jou leeftijd : ");
$gekozenleeftijd = 21;

echo "Hallo $naam \n";

if ( $leeftijd < $gekozenleeftijd ) {
    echo "Jij bent jonger dan " . $gekozenleeftijd . " jaar.\n";
}
if ( $leeftijd > $gekozenleeftijd ) {
    echo "Jij bent ouder dan " . $gekozenleeftijd . " jaar.\n";
}
if ( $leeftijd == $gekozenleeftijd ) {
    echo "Jij bent precies " . $gekozenleeftijd . " jaar.\n";
}
?>