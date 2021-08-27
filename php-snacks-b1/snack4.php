<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Snack4</title>
</head>
<body>



<?php
/*
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà i seguenti dati:
nome
cognome
un array contenente i suoi voti scolastici
Stampare nome, cognome e la media dei voti di ogni alunno.
*/

$classe = [

      [
            "nome" => "Gigi",
            "cognome" => "Mori",
            "voti" => [5,6,7,8],
      ],
      [
            "nome" => "Anna",
            "cognome" => "Cori",
            "voti" => [8,6,7,7],
      ],
      [
            "nome" => "Luca",
            "cognome" => "Seti",
            "voti" => [6,7,6,8],
      ],
      [
            "nome" => "Lea",
            "cognome" => "Vesa",
            "voti" => [7,7,5,8],
      ],

];

//cicliamo con for per ogni alunno ottenendo media (somma / lunghezza)

for ($i = 0; $i < count($classe); $i++) {
      //per la media inizio a sommare i voti
      $somma = array_sum($classe[$i]["voti"]);

      //media 
      $media = $somma / count($classe[$i]["voti"]);

      //unisco i dati in una stringa
      $mediaAlunno = "La media dei voti di {$classe[$i]['nome']} {$classe[$i]['cognome']} è: $media<br> ";

      //visualizzazione
      echo $mediaAlunno;

}






?>


      
</body>
</html>