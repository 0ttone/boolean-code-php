<?php
/*
Creiamo una struttura dati che rappresenta le partite di basket di un’ipotetica tappa del calendario.
Ogni array interno conterrà le seguenti informazioni:
una squadra di casa
una squadra ospite
punti fatti dalla squadra di casa punti fatti dalla squadra ospite
Stampiamo a schermo tutte le partite con questo schema: Olimpia Milano - Cantù | 55-60

*/

$partite = [

      [
            "casa" => "Olimpia Milano",
            "ospite" => "Cantù",
            "casaPunti" => "55",
            "ospitePunti" => "60"
      ],
      [
            "casa" => "Virtus Bologna",
            "ospite" => "Virtus Roma",
            "casaPunti" => "80",
            "ospitePunti" => "70"
      ],
      [
            "casa" => "Sassari",
            "ospite" => "Cremona",
            "casaPunti" => "70",
            "ospitePunti" => "68"
      ],


];
//ora come in js si cicla con un for all interno dell array $partite

for($i = 0; $i < count($partite); $i++) {

      //direttamente in una variabile concateno in unaspecie di Template literall i dati tra ""
      $string = "{$partite [$i]['casa']} - {$partite [$i]['ospite']} | {$partite [$i]['casaPunti']} - {$partite [$i]['ospitePunti']}";

      echo $string;
}

?>