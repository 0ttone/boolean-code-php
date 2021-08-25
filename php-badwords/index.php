<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>php-badwords</title>
</head>
<body>

/*
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall’utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.

*/

<?php

$paragrafo = "Charlie era il centro propulsore della band. Il sound degli Stones è fondato sull'Interplay tra le chitarre ma in realtà i leggendari riff di Keith Richards e il suo modo di scandire gli accordi dell'accompagnamento erano costruiti sull'intesa telepatica con Watts: quella struttura chitarra-batteria che, in modi diversi ha segnato la storia e l'evoluzione del rock. Charlie Watts aveva swing, nella vita e nel modo di suonare: cercava l'essenzialità della pulsazione, usava delle pause nell'accompagnamento che venivano confuse con la rozzezza tecnica e invece, insieme all'uso del tom e del timpano, erano proprio il segreto del suo stile. ";
$paragrafoLunghezza = strlen($paragrafo);

$parolaCensura = $_GET['badWord'];
$censura = "***";

$paragrafoCensura = str_replace($parolaCensura, $censura, $paragrafo);
$paragrafoCensuraLunghezza = strlen($paragrafoCensura);



?>

<p> <?php echo $paragrafo ?> </p>

      
</body>
</html>