<?php

  $dinero = $_POST["dinero"];

  $ginecologia = ($dinero * 40)/100;
  $traumatologia =($dinero * 30)/100;
  $pediatria =($dinero * 30)/100;

  echo "Dinero dirigido al departamento de Ginecologia: ".$ginecologia."<br>";
  echo "Dinero dirigido al departamento de Traumatologia: ".$traumatologia."<br>";
  echo "Dinero dirigido al departamento de Pediatria: ".$pediatria."<br>";
 ?>
