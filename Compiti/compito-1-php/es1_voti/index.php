<?php
echo ("<h1 style='color: blue'>ESERCIZIO 1 (VOTI)</h1>");
echo ("<p style='color: red'>I voti sono:</p>");
$voti = [7., 5.5, 8, 6, 9];
echo("<ul>");
foreach($voti as $voto){
    echo ("<li> $voto </li>");
}
echo("</ul>");

$totale = count($voti);
echo("<p>all'interrogazione ci sono stati $totale voti </p>");

$somma = 0;
foreach($voti as $voto){
    $somma += $voto;
}    

if ($totale > 0){
    $media = $somma / $totale;
    echo("<p>La media dei voti è: $media </p>");
}

$arrotondamento = round($media,3);
echo ($arrotondamento);

    $paragraph = $media >=6 ?
        "<p>Facendo la media il tuo risultato è:</p> <p style='color: green'> Promosso </p>" :
        "<p>Facendo la media il tuo risultato è:</p> <p style='color: red'> Bocciato </p>";

        echo ($paragraph);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php foreach ($voti as $voto): ?>
        <li> <?php echo($voto); ?> </li>
        <?php endforeach ?>
    </ul>
</body>
</html>