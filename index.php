<?php 
include __DIR__ . '/partials/functions.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
  <title>Password Sicura</title>
</head>
<body>
  <form method="GET">
    
    <label for="">Numero di carateri per la tua password</label>
    <input type="number" min="2" max="30" placeholder="inserisci la quantità di caratteri" name="NumeroCaratteri">

    <button type="submit">invio</button>

  </form>
  <span>
    <?php 
    for ($x = 0; $x <= $lunghezza / 2; $x++) {
      echo str_shuffle($alphas[rand(0,51)].rand(0,10)) ;
    }
   ?>
  </span>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>