<?php
$numero = 5;

switch ($numero)
{
  case 1:
    echo "Micro- séisme impossible à ressentir";
  break;

  case 2:
    echo "Micro seisme impossible a ressenti mais enregistrable par le sismomètre";
  break;

  case 3:
    echo "Ne cause pas de dégats mais commence à pouvoir etre légèrement ressenti";
  break;

  case 4:
    echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats";
  break;

  case 5:
    echo "Séisme capable d'engendrer des dégats importants sur de vieux batiments ou bien des batiments présentants des défauts de construction, peu de dégats sur des batiments modernes";
  break;

  case 6:
    echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre";
  break;

  case 7:
    echo "Séisme capable de destructions majeures à modérées sur une tres large zone en fonction de la distance";
  break;

  case 8:
    echo "Séisme capable de destructions majeures sur une très large zone de plusieur centaines de kilomètres";
  break;

  case 9:
    echo "Séisme capable de tout détruire sur une très vaste zone";
  break;
}



 ?>
