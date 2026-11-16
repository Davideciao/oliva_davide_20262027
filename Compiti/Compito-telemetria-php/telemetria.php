<?php

$ping_grezzi = [45, 120, -1, 32, 210, 85, -1, 18, 95, 310, 45, 60, -1, 150, 28, 240, 18, 72];


array_push($ping_grezzi, 55, 190,12);

$ping_validi = pingValidi($ping_grezzi);
$tempo_medio = TempoMedio($ping_validi);

$ping_minimo = 0;
$ping_massimo = 0;

$pacchetti_persi = contaPacchettiPersi($ping_grezzi);

calcoloMinMax($ping_validi, $ping_minimo, $ping_massimo);

function contaPacchettiPersi($ping_grezzi){
    $pacchetti_persi = 0;
    foreach($ping_grezzi as $ping){
        if ($ping == -1)
            $pacchetti_persi ++ ;
    }
    return $pacchetti_persi;
}

function pingValidi($ping_grezzi){
    $ping_validi = [];
    foreach ($ping_grezzi as $ping){
        if($ping > 0 ){
            $ping_validi[] = $ping;
        }
    }
    return($ping_validi);
}

function tempoMedio($ping_validi){
    $somma = 0;
    $cont = 0;
    $media = 0;

    foreach($ping_validi as $ping){
        $somma += $ping;
        $cont ++;
    }
    $media = $somma/$cont;

    return round($media, 2);

}

function calcoloMinMax($ping_validi, &$min, &$max){
    $min = $ping_validi[0];
    $max = $ping_validi[0];

    foreach($ping_validi as $ping){
        if ($ping > $max) $max = $ping;
        if ($ping < $min) $min = $ping;
    }
}

$ping_unici = array_unique($ping_validi);

$ping_ordinati = $ping_validi;
sort($ping_ordinati);

$ping_critici = ($ping_validi >= 150);

$top_3_veloci = array_slice($ping_ordinati, 0, 3);

$controllo_100ms = in_array(100, $ping_validi, true) ? "Sì" : "No";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telemtria</title>
</head>
<body>
    <ul>
        <li> Totale rivelazioni: <?= count($ping_grezzi); ?>  </li>
        <li> Totale validi:      <?= count($ping_validi); ?>  </li>
        <li> Totale persi:       <?= $pacchetti_persi; ?>     </li>
        <li> Media:              <?= $tempo_medio; ?>         </li>
        <li> Minimo:             <?= $ping_minimo; ?>         </li>
        <li> Massimo:            <?= $ping_massimo; ?>        </li>
    </ul>

    <table>
    <thead>
        <tr>
            <th> #         </th>    
            <th> Ping (ms) </th>   
            <th> Stato     </th>   
        </tr>
    </thead>
     <tbody>
        <?php for( $i = 0; $i < count ($ping_validi); $i++  ): ?>
            <tr>
                <td> <?= $i+1; ?> </td>
                <td> <?= $ping_validi[$i]; ?> </td>
                <td> <?= $ping_validi[$i] >= 150 ? "CRITICO" : "NORMALE" ?> </td>
            </tr>
        <?php endfor; ?>    
    </tbody>
</table>
</body>
</html>
