<?php
echo ("<h1 style='color: blue'>ESERCIZIO 2 (LISTA SPESA) </h1>");
$spesa = ["pane", "latte", "mele"];

echo ("<p style='color: red'>La lista della spesa è:</p>");
    echo ("<pre>");
    print_r ($spesa);
    echo ("</pre>");

$spesa = [...$spesa, "Uova", "Farina"];

echo ("<p style='color: red'>La nuova lista della spesa è:</p>");
    echo ("<pre>");
    print_r ($spesa);
    echo ("</pre>");


unset( $spesa [1]);

echo ("<p style='color: red'>La lista senza il latte è:</p>");

    echo ("<pre>");
    print_r ($spesa);
    echo ("</pre>");





/*RISPOSTA: Darebbe errore perchè usando unset eliminiamo l'array "1" e quindi non lo troverebbe e non passerebbe al successivo*/


?>