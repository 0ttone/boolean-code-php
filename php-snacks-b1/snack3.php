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
Creare un array di array.
Ogni array figlio avrà come chiave una data in questo formato: DD/MM/YYYY (ad es 31/01/2007) e come valore un array di post associati a quella data.
Stampare ogni data con i relativi post.
Qui l’array di esempio:
https://www.codepile.net/pile/R2K5d68z
*/

/*
rifatto passo passo con for per ricapitolarne l uso - sotto commentato la stessa con
foreach
*/
$posts = [

      '10-01-2019' => [
          [
              'title' => 'Post 1',
              'author' => 'Michele Papagni',
              'text' => 'Testo post 1'
          ],
          [
              'title' => 'Post 2',
              'author' => 'Michele Papagni',
              'text' => 'Testo post 2'
          ],
      ],
      '10-02-2019' => [
          [
              'title' => 'Post 3',
              'author' => 'Michele Papagni',
              'text' => 'Testo post 3'
          ]
      ],
      '15-05-2019' => [
          [
              'title' => 'Post 4',
              'author' => 'Michele Papagni',
              'text' => 'Testo post 4'
          ],
          [
              'title' => 'Post 5',
              'author' => 'Michele Papagni',
              'text' => 'Testo post 5'
          ],
          [
              'title' => 'Post 6',
              'author' => 'Michele Papagni',
              'text' => 'Testo post 6'
          ]
      ],
  ];
  

//1 - con array_keys estrarre l array posizionale dell array interno 

$postsKeys = array_keys($posts);
//var_dump($posts);

//2 con questa chiave cicliamo gli array interni

for ($x = 0; $x < count($postsKeys); $x++) {
    
      //definiamo questa chiave associata chiamandola original
      $originalKey = $postsKeys[$x];
      //e stampa le date dell array che contiene gli altri 
      echo "($originalKey)<br/>";

     // var_dump($posts[$originalKey]);


//3 cicliamo con questa chiave all interno di ciascun array con le 
//relative chiavi che la compongono title author e text

for($i = 0; $i <count($posts[$originalKey]); $i++){
      //chiamiamo $post il risulato per ciascun [$i] 
      $post = $posts[$originalKey][$i];
      echo "<h2>{$post['title']}</h2>";
      echo "<p>{$post['text']}</p>";
      echo "<div>{$post['author']}</div>";

}



}




?>
      
</body>
</html>