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

$numeri = 101;

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
    
}
?>