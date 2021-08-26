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
Prendere un testo abbastanza lungo, contenente diverse frasi. 
Suddividere il testo in tanti paragrafi <p>: ad ogni punto corrisponde un nuovo paragrafo.
*/

$charlie = "E' morto in un ospedale di Londra a 80 anni. Era stato anche l'ultimo a decidere di entrare nella band nel 1963: aveva 22 anni, un buon futuro da grafico (per anni ha collaborato agli allestimenti scenici degli Stones) e un talento da fumettista (ha firmato una storia a fumetti di Charlie Parker). Ma era anche uno dei batteristi più in vista della ribollente scena Blues e Rhythm and Blues della Londra di quegli anni: Ginger Baker, per esempio, il folle virtuoso del rock inglese della prima ondata che disprezzava la maggior parte dei suoi colleghi, era uno dei suoi più accesi ammiratori. Charlie Watts è una leggenda del rock'n'roll che, nelle rare interviste concesse in 60 anni di carriera, raccontava che in realtà avrebbe desiderato nascere qualche decennio prima, per poter essere un batterista di Jazz e suonare al fianco dei suoi idoli come Charlie Parker, Dizzy Gillespie e compagni. Era stata sua l'idea di chiamare Sonny Rollins, il Saxophone Colossus, a suonare l'assolo di sax in Waitin'On A Friend. Era un Rolling Stone ma il grande amore musicale della sua vita è stato il jazz: ha anche diretto dei quartetti e una Big Band. La testimonianza più bella di questa passione è stata la visita a sorpresa, compiuta nel 2003, a casa di Stan Levey, un collega dal curriculum glorioso che è stato anche l'unico batterista bianco a suonare con Parker.";
$charlieArray = explode('.', $charlie);
var_dump($charlieArray);

echo $charlieArray;

for ($i = 0; $i < count($charlieArray); $i++){
      echo "<p>{$charlieArray[$i]}</p>";
}




?>

</body>
</html>