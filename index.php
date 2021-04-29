<?php

/*
$tasks = [
    ['Acheter du champagne pour la pendaison de crémaillère', '2021-05.01', 'moyenne' ],
    ['Acheter des nouveaux haltères', '2021-04.20', 'élevée' ],
];

echo $tasks[1][2]; //affichera 'élevée'
*/
function readTasks() 
{
    $tasks = [];

    $file = fopen('todo-list.csv', 'r');

while(true)
{
    $values = fgetcsv($file);

    if($values == false)
    {
        break;
    }

    array_push($tasks, $values);
}

fclose($file);

return $tasks;
}

if(file_exists('todo-list.csv') == true)
{
    $tasks = readTasks();
}

else 
{
    $tasks = [];
}

include 'templates/index.phtml';

?>