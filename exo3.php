
<?php
  $age = 20;
  $genre = "Homme";
  if ($age >= 18) {

    if ($genre == "Homme") {

      echo "Vous êtes un homme et vous êtes majeur";
    } else {

      echo "Vous êtes une femme et vous êtes majeure";
    }
  }
  else {
    if ($genre == "Homme") {

      echo "Vous êtes un homme et vous êtes mineur";
    }
    else {

      echo "Vous êtes une femme et vous êtes mineure";
    }
  }
 ?>
