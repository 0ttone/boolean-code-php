<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
</head>
<body>

<?php
/*
Utilizzare questo array https://pastebin.com/CkX3680A di partenza
 e stampare tutti gli insegnanti in un rettangolo grigio e tutti i PM in un rettangolo verde.
*/
$db = [
      'teachers' => [
          [
              'name' => 'Michele',
              'lastname' => 'Papagni'
          ],
          [
              'name' => 'Fabio',
              'lastname' => 'Forghieri'
          ]
      ],
      'pm' => [
          [
              'name' => 'Roberto',
              'lastname' => 'Marazzini'
          ],
          [
              'name' => 'Federico',
              'lastname' => 'Pellegrini'
          ]
      ]
  ];

//ciclo per dividere teachers da pm e inserisco echo con div con background --->TODO assegnare style alle classi

  for ($i = 0; $i < count($db); $i++){
        if ($db['teachers']){
              echo "<div style= \"background-color:lightgray;\">{$db['teachers'] [$i]['name']} {$db['teachers'] [$i]['lastname']} </div>";
        };

        if ($db['pm']){
            echo "<div style= \"background-color:green;\">{$db['pm'] [$i]['name']} {$db['pm'] [$i]['lastname']} </div>";
      };

  }


?>
      
</body>
</html>