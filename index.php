<?php

// function greetings(string $name, int $ages = NULL)
// {
//     echo "Bonjour, je m'appelle $name" . PHP_EOL;
//     if($ages){
//         echo "J'ai $ages".PHP_EOL;
//     }
// }

// greetings('ruben', 2);

// function getDateTime(): string
// {
//     return date('d/m/Y h:i');
// }

// $currentDate = getDateTime();
// echo $currentDate;



// function increase (int $numbers) {
//     echo "$numbers ".PHP_EOL;
//     if($numbers < 20) {
//         $numbers += 2;
//         increase($numbers);
//     }
// }
// increase(1);



// $cube = function($n)
// {
//     return ($n * $n * $n);
// };

// // La fonction range permet de générer un tableau contenant un intervalle d'éléments
// $array = range(1, 5);

// // Affichera la valeur au cube de tous les éléments du tableau
// print_r(array_map($cube, $array));





// Déclarez une fonction greetings qui permettra à un utilisateur d'afficher plusieurs informations le concernant :
//     Son nom : il doit s'agir d'une chaîne de caractères
//     Son âge : il doit s'agir d'un entier
//     Ses langages de programmation préférés : il doit s'agir d'un tableau qui, par défaut, peut être vide
// La fonction devra afficher les éléments suivants :
//     "Bonjour, je m'appelle ... et j'ai ... ans."
//     Si l'utilisateur n'a pas défini de langages de programmation préférés, affichez "Je n'ai pas de langage de programmation favori"
//     Si l'utilisateur a défini des langages de programmation préférés, affichez "J'ai N langages de programmation favoris, il s'agit de : ... ... ..."

function greetings (string $name, int $age, $array = NULL){
    countGreetings();
    echo "bonjour je m'appelle $name et j'ai $age ans".PHP_EOL;
    if($array){
        $arrayCount = Count($array);
        $result = implode(', ', $array);
        echo "J'ai $arrayCount langages de programmation favoris, il s'agit de $result ".PHP_EOL;
    }else {
        echo "e n'ai pas de langage de programmation favori".PHP_EOL;
    }
    echo "La fonction a été exécutée $count fois ".PHP_EOL;
}
greetings('greg', 22, ['javascript', 'php', 'sql',]);


function countGreetings (){
    static $count = 0;
    return $count++;
}


// function countElements()
// {
//     static $count = 0;

//     $count++;
    
//     echo $count . PHP_EOL;
// }
    
// countElements();
// countElements();
// countElements();