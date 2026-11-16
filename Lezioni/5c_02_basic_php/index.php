<?php
function debug_array($array) {
    echo ("<pre>");
    print_r ($array); // Usa il parametro $array passato alla funzione
    echo ("</pre>");
}

function eliminaDaArray($array, $chiave){
    unset($array[$chiave]);
    $array = array_values($array);
    return $array;

}

$nome = "Davide";
echo ("<h1>Hello world, $nome</h1>");

$colore = "green";
$voto = 5;

/*if ($voto >=6){
    echo ("Il tuo risultato è: <p style='color: $colore'> Promosso </p>");
    }else{
        $colore = "red";
        echo ("Il tuo risultato è: <p style='color: $colore'> Bocciato </p>);
    }*/

        //operatore ternario
$paragraph = $voto >=6 ?
    "Il tuo risultato è: <p style='color: green'> Promosso </p>" :
    "Il tuo risultato è: <p style='color: red'> Bocciato </p>";

    echo ($paragraph);






$linguaggi_programmazione = ["PHP", "c++", "JAVA"];

debug_array($linguaggi_programmazione);

echo("<ul>");
//for($i = )
foreach($linguaggi_programmazione as $linguaggio){
    echo ("<li style='color: blue'> $linguaggio </li>");
}
echo("</ul>");

//aggiungo elemento all'array

$linguaggi_programmazione[] = "c#";
debug_array($linguaggi_programmazione);

//tolgo una posizione
unset($linguaggi_programmazione[1]);
debug_array($linguaggi_programmazione);

//riscaliamo le posizioni
$linguaggi_programmazione = array_values($linguaggi_programmazione);
debug_array($linguaggi_programmazione);

$linguaggi_programmazione = eliminaDaArray($linguaggi_programmazione, 0);


?>