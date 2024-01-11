<?php
//traccia 1

/*$users = [['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'M'],
['name' => 'Giorgia', 'surname' => 'Bianchi', 'gender' => 'F'],
['name' => 'Optimus', 'surname' => 'Prime', 'gender' => 'NB']
];

foreach($users as $elemento){
    if ($elemento['gender']=='M') {
        echo "{$elemento['name']} {$elemento['surname']} è di genere Maschile.\n";
    }
    if ($elemento['gender']=='F') {
        echo "{$elemento['name']} {$elemento['surname']} è di genere Femminile.\n";
    }
    if ($elemento['gender']=='NB') {
        echo "{$elemento['name']} {$elemento['surname']} è di genere N.B.\n";
    }
}*/

//traccia 2

/*$numeri = [0, 20, 14, 3, 67, 901, 374, 90];

foreach ($numeri as $elemento => $value) {
    if($value%2 == 0){
        echo "($value) è pari.\n"; 
    }else{
        echo "($value) è dispari.\n";
    }
}*/

//traccia 3

/*$numeri = 101;

for ($i = 0; $i < $numeri; $i++) {
    if ($i % 3 == 0) {
        echo "PHP\n";
    }elseif ($i % 5 == 0 ) {
        echo "JAVASCRIPT\n";
    }elseif ($i % 5 == 0 && $i % 3 == 0){
        echo "HACKACADEMY\n";
    }else{
        echo "($i)\n";
    }
    
}*/

//traccia 4

/*$temperatura =[20, 10, 7, 29, 32, 2, 12, 18];

foreach ($temperatura as $key => $value) {
    if ($value>=15 && $value<25) {
        echo "Fa caldo\n";
    }elseif ($value>25){
        echo "Fa molto caldo\n";
    }else{
        echo "Fa molto freddo\n";
    }
}*/


//traccia 5



/*$temperatura =[
'Venezia' => 16,
'Bari' => 32,
'Roma' => 16,
'Napoli' => 30,
'Milano' => 13,
'Palermo' => 14,
'Torino' => 24,
'Lecce' => 27,
'Genova' => 30,
'Catania' => 11,
'Cosenza' => 9,];

foreach ($temperatura as $key => $value) {
    if ($value>=15 && $value<25) {
        echo "A ($key) fa caldo con ($value)°C\n";
    }elseif ($value>25){
        echo "A ($key) fa molto caldo con ($value)°C\n";
    }else{
        echo "A ($key) fa freddo con ($value)°C\n";
    }
}*/

//traccia 6

$tombola = [[],[],[],[]];

foreach ($tombola as &$sottoarray) {
    for ($i = 0; $i < 5; $i++) {
        $numeroCasuale = rand(1, 100);
        $sottoarray[] = $numeroCasuale;
    }
}


var_dump($tombola);


?>