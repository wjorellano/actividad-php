
<?php
  $nombre = $_POST['nombre'];
  $nota1 = $_POST['nota1'];
  $nota2 = $_POST['nota2'];
  $nota3 = $_POST['nota3'];
  $examen = $_POST['examen_final'];
  $trabajo = $_POST['trabajo_final'];

  $notas = ($nota1 + $nota2 + $nota3 * 35)/100;
  $examenFinal = ($examen * 35)/100;
  $trabajoFinal = ($trabajo * 35)/100;

  echo "Estudiante: ".$nombre."<br>";
  $resultado = $notas + $examenFinal + $trabajoFinal;
    echo "Nota: ".$resultado."<br>";
  if ($resultado < 2.9) {
    echo "El estudiande desaprobo el Periodo";
  }else{
    echo "El estudiande aprobo el Periodo";
  }
?>
