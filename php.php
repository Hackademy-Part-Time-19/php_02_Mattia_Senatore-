<?php

$users = [['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'M'],
['name' => 'Giorgia', 'surname' => 'Bianchi', 'gender' => 'F'],
['name' => 'Optimus', 'surname' => 'Prime', 'gender' => 'NB']
];

//for ($i = 0; $i < count($users); $i++){}
    


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
}







?>