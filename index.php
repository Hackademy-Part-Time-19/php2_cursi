<?php


$users = [
    ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'M'],
    ['name' => 'Giorgia', 'surname' => 'Bianchi', 'gender' => 'F'],
    ['name' => 'Optimus', 'surname' => 'Prime', 'gender' => 'NB']
];

foreach ($users as $valore) {
    $saluto = "Buongiorno ";

    if ($valore['gender'] == 'M') {
        $saluto .= "Sig. " . $valore['name'] . " " . $valore['surname'] ;
        
    } elseif ($valore['gender'] == 'F') {
        $saluto .= "Sig.ra " . $valore['name'] . " " . $valore['surname'] . " " ;
    } elseif ($valore['gender'] == 'NB') {
        $saluto .= $valore['name'] . " " . $valore['surname'] . " " ;
    }

    echo $saluto . "\n";
}


foreach ($users as $valore) {
    $saluto = "Buongiorno ";

    switch ($valore["gender"]) {
        case 'M':
            $saluto .= 'Sig ' . " " . $valore['name'] . " " . $valore['surname'];
        break;
        case 'F':
            $saluto .= 'Sig.na' . " " . $valore['name'] . " " . $valore['surname'];
        break;
        case 'NB':
            $saluto .=  $valore['name'] . " " . $valore['surname'];
    }

echo $saluto . "\n";

};    

$numeriCasuali = [1, 23, 47, 12, 65, 34, 89, 9, 56, 78, 2, 45, 87, 18, 39, 73, 6, 51, 94, 27];


$somma = 0;

$numeriPari = 0;

foreach ($numeriCasuali as $numeri) {

    if ($numeri % 2 == 0) {
        $somma += $numeri;
        $numeriPari++;
    }

}

$media = $somma / $numeriPari;
echo "La media dei numeri è \n " . $media;





for ($i = 0; $i < 101; $i++) {

    if ($i %3== 0 && $i %5== 0) {
        echo  "- " . $i . " " . "HACKADEMY  " . "\n";
    } elseif ($i %3== 0){
        echo "- " . $i . " ". "PHP  " . "\n";
    } elseif ($i %5== 0){
        echo  "- " . $i . " " . " JAVASCRIPT  ". "\n";
    } else { 
        echo "- " . $i . " " . "\n";
    }

};   



$temperature = [ "Venezia" => 16, "Bari" => 32, "Roma" => 28, "Napoli" => 30, "Milano" => 13, "Palermo" => 14, "Torino" => 24, "Lecce" => 27, "Genova" => 30, "Catania" => 11, "Cosenza" => 9, ];

foreach ($temperature as $citta => $temperatura) {

    if ($temperatura <= 15 && $temperatura >= 10) {
        echo $citta . " " . "fa fresco \n" ;
    } elseif ($temperatura > 15 && $temperatura <= 25) {
        echo $citta . " " .  "si sta bene \n";
    } elseif ($temperatura <= 9 ) {
        echo $citta . " " . "fa freddissimo, si congela \n";
    } elseif ($temperatura > 26) {
        echo $citta . " " ."fa caldissimo, si scioglie \n" ;
    }
    
}



