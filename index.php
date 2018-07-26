<?php
$isOk = true;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>Exercice8</title>
</head>
<body>
  <p>
    <?php
    //echo ($isOk) ? 'c\'est ok !!' : 'c\'est pas bon !!!';
    if($isOk){
      echo 'C\'est ok !!';
    }else{
      echo 'C\'est pas bon !!!';
    }
    ?>
  </p>
</body>
</html>
