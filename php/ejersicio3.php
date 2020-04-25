<?php

  $nombre = $_POST["nombre"];
  $peso = $_POST["peso"];
  $estatura = $_POST["estatura"];

  $imc = ($peso)/($estatura*$estatura);
  echo "Paciente: ".$nombre."<br>";
  echo "Masa corporal: ".$imc."<br>";
  if($Imc<18.5){
    echo "Por debajo del peso";
  }else
  if($Imc>=18.5 && $im<=24.9){
    echo "Saludable";
  }else
  if($Imc>=25 && $im<=29.9){
      echo "Con sobrepeso";
  }else
  if($Imc>=30 && $im<=39.9){
      echo "Obeso";
  }else
  if($Imc>=40){
    echo "obesidad morbida";
  }




 ?>
