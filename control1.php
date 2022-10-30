<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>


</head>
<body>

  <div class="madre maa">
  <div class="tubo02"></div>
  <div class="tubo"></div>
  <div class="trian"></div>
  <div class="tubocom"></div>

  <div class="divaa">
  <div class="triri"></div>
  <label style="width: 45px; height:16px;">Proceso</label>
  </div>

  <div class="tubocom2"></div>
  <div class="tubo2"></div>
  <div class="tri"></div>

  <?php
  if(isset($_POST['regis1'])){
    $l1 = $_POST['l1'];
    $ll1 = $_POST['ll1'];

    $l5 = $l1;
  
    $ll5 = $ll1;
  
    $cambio = 0;

    $myArray = array($l5);
    $myArray2 = array(null);
    $myArray3 = array($ll5);

    $my = array($l5);
    sort($my);
    for($a = 0; $a < 1; $a++){
      $valor = $my[$a];
      for($i = 0; $i<1; $i++){
        if($valor == $myArray[$i]){
          if($a == 0){
            $cambio = $myArray[$i] + $myArray3[$i];
            $myArray2[$i] = $cambio;
          }else{
            $cambio += $myArray3[$i];
            $myArray2[$i] = $cambio;
          }
          $myArray[$i] = null;
            break;
        }
      }
      $my[$a] = null;
    }
    $r1 = bcdiv(($ll1) / ($myArray2[0] - $l1), '1', 3);

    $espera1 = ($myArray2[0] - $l1)-($ll1);
 
    $promedio = bcdiv((($r1)/1), '1', 3);
    $promedio2 = bcdiv(((($myArray2[0] - $l1)-($ll1))/1), '1', 3);
    $promedio3 = bcdiv(((($myArray2[0] - $l1))/1), '1', 3);
?>
<div>
<div class="a1 total"><label>' A '</label></div>
</div>
  <table class="tabla">
  <tr class="Pri"><th>Proceso</th><th>T. Llegada</th><th>T. Salida</th><th>T. Ejecucíon</th><th>Servicio T.</th><th style="color:white;">Espera E</th><th>T. Indice</th></tr>
  <tr class="Secs"><th>[A]</th><th><?php echo $l1 ?></th><th><?php echo $myArray2[0] ?></th><th><?php echo $ll1 ?></th><th><?php echo ($myArray2[0] - $l1) ?></th><th class="E"><?php echo ($myArray2[0] - $l1)-($ll1) ?></th><th><?php echo $r1 ?></th></tr>
 
  <tr class="Secs"><th></th><th></th><th></th><th>Medias</th><th><?php echo $promedio3 ?></th><th class="E"><?php echo $promedio2 ?></th><th><?php echo $promedio ?></th></tr>
</table>
  <?php
  }
  ?>

  <?php 
  if(isset($_POST['regis2'])){
    $l1 = $_POST['l1'];
    $ll1 = $_POST['ll1'];
    $l2 = $_POST['l2'];
    $ll2 = $_POST['ll2'];

    $l5 = $l1;
    $l6 = $l2;
  
    $ll5 = $ll1;
    $ll6 = $ll2;
  
    $cambio = 0;

    $myArray = array($l5,$l6);
    $myArray2 = array(null,null);
    $myArray3 = array($ll5,$ll6);

    $my = array($l5,$l6);
    sort($my);
    for($a = 0; $a < 2; $a++){
      $valor = $my[$a];
      for($i = 0; $i<2; $i++){
        if($valor == $myArray[$i]){
          if($a == 0){
            $cambio = $myArray[$i] + $myArray3[$i];
            $myArray2[$i] = $cambio;
          }else{
            $cambio += $myArray3[$i];
            $myArray2[$i] = $cambio;
          }
          $myArray[$i] = null;
            break;
        }
      }
      $my[$a] = null;
    }
    $r1 = bcdiv(($ll1) / ($myArray2[0] - $l1), '1', 3);
    $r2 = bcdiv(($ll2) / ($myArray2[1] - $l2), '1', 3);

    $espera1 = ($myArray2[0] - $l1)-($ll1);
    $espera2 = ($myArray2[1] - $l2)-($ll2);
 
    $promedio = bcdiv((($r1+$r2)/2), '1', 3);
    $promedio2 = bcdiv(((($myArray2[0] - $l1)-($ll1)+($myArray2[1] - $l2)-($ll2))/2), '1', 3);
    $promedio3 = bcdiv(((($myArray2[0] - $l1)+($myArray2[1] - $l2))/2), '1', 3);
//tiempo de llegada
$la = $l1;
$ls = $l2;
$myArray = array($la,$ls);
$arrayOrden = array(null,null);
$arrayValor = array("A","B");
$arrayLlegada = array($la,$ls);
sort($arrayLlegada);
for($a = 0; $a < 2; $a++){
  $valor = $arrayLlegada[$a];
  for($i = 0; $i<2; $i++){
    if($valor == $myArray[$i]){
        $arrayOrden[$a] = $arrayValor[$i];
        $myArray[$i] = null;
        break;
    }
  }
  $arrayLlegada[$a] = null;
}
?>
<div>
<div class="a1 total"><label>' <?php echo $arrayOrden[0] ?> '</label></div>
<div class="a2 total"><label>' <?php echo $arrayOrden[1] ?> '</label></div>
</div>
  <table class="tabla">
  <tr class="Pri"><th>Proceso</th><th>T. Llegada</th><th>T. Salida</th><th>T. Ejecucíon</th><th>Servicio T.</th><th style="color:white;">Espera E</th><th>T. Indice</th></tr>
  <tr class="Secs"><th>[A]</th><th><?php echo $l1 ?></th><th><?php echo $myArray2[0] ?></th><th><?php echo $ll1 ?></th><th><?php echo ($myArray2[0] - $l1) ?></th><th class="E"><?php echo ($myArray2[0] - $l1)-($ll1) ?></th><th><?php echo $r1 ?></th></tr>
  <tr class="Secs"><th>[B]</th><th><?php echo $l2 ?></th><th><?php echo $myArray2[1] ?></th><th><?php echo $ll2 ?></th><th><?php echo ($myArray2[1] - $l2) ?></th><th class="E"><?php echo ($myArray2[1] - $l2)-($ll2) ?></th><th><?php echo $r2 ?></th></tr>
 
  <tr class="Secs"><th></th><th></th><th></th><th>Medias</th><th><?php echo $promedio3 ?></th><th class="E"><?php echo $promedio2 ?></th><th><?php echo $promedio ?></th></tr>
</table>
  <?php
  }
  ?>

  <?php
  if(isset($_POST['regis3'])){
    $l1 = $_POST['l1'];
    $ll1 = $_POST['ll1'];
    $l2 = $_POST['l2'];
    $ll2 = $_POST['ll2'];
    $l3 = $_POST['l3'];
    $ll3 = $_POST['ll3'];

    $l5 = $l1;
    $l6 = $l2;
    $l7 = $l3;
  
    $ll5 = $ll1;
    $ll6 = $ll2;
    $ll7 = $ll3;
  
    $cambio = 0;

    $myArray = array($l5,$l6,$l7);
    $myArray2 = array(null,null,null);
    $myArray3 = array($ll5,$ll6,$ll7);

    $my = array($l5,$l6,$l7);
    sort($my);
    for($a = 0; $a < 3; $a++){
      $valor = $my[$a];
      for($i = 0; $i<3; $i++){
        if($valor == $myArray[$i]){
          if($a == 0){
            $cambio = $myArray[$i] + $myArray3[$i];
            $myArray2[$i] = $cambio;
          }else{
            $cambio += $myArray3[$i];
            $myArray2[$i] = $cambio;
          }
          $myArray[$i] = null;
            break;
        }
      }
      $my[$a] = null;
    }
    $r1 = bcdiv(($ll1) / ($myArray2[0] - $l1), '1', 3);
    $r2 = bcdiv(($ll2) / ($myArray2[1] - $l2), '1', 3);
    $r3 = bcdiv(($ll3) / ($myArray2[2] - $l3), '1', 3);
 
    $espera1 = ($myArray2[0] - $l1)-($ll1);
    $espera2 = ($myArray2[1] - $l2)-($ll2);
    $espera3 = ($myArray2[2] - $l3)-($ll3);

    $promedio = bcdiv((($r1+$r2+$r3)/3), '1', 3);
    $promedio2 = bcdiv(((($myArray2[0] - $l1)-($ll1)+($myArray2[1] - $l2)-($ll2)+($myArray2[2] - $l3)-($ll3))/3), '1', 3);
    $promedio3 = bcdiv(((($myArray2[0] - $l1)+($myArray2[1] - $l2)+($myArray2[2] - $l3))/3), '1', 3);

//tiempo de llegada
$la = $l1;
$ls = $l2;
$ld = $l3;
$myArray = array($la,$ls,$ld);
$arrayOrden = array(null,null,null);
$arrayValor = array("A","B","C");
$arrayLlegada = array($la,$ls,$ld);
sort($arrayLlegada);
for($a = 0; $a < 3; $a++){
  $valor = $arrayLlegada[$a];
  for($i = 0; $i<3; $i++){
    if($valor == $myArray[$i]){
        $arrayOrden[$a] = $arrayValor[$i];
        $myArray[$i] = null;
        break;
    }
  }
  $arrayLlegada[$a] = null;
}
?>
<div>
<div class="a1 total"><label>' <?php echo $arrayOrden[0] ?> '</label></div>
<div class="a2 total"><label>' <?php echo $arrayOrden[1] ?> '</label></div>
<div class="a3 total"><label>' <?php echo $arrayOrden[2] ?> '</label></div>
</div>

  <table class="tabla">
  <tr class="Pri"><th>Proceso</th><th>T. Llegada</th><th>T. Salida</th><th>T. Ejecucíon</th><th>Servicio T.</th><th style="color:white;">Espera E</th><th>T. Indice</th></tr>
  <tr class="Secs"><th>[A]</th><th><?php echo $l1 ?></th><th><?php echo $myArray2[0] ?></th><th><?php echo $ll1 ?></th><th><?php echo ($myArray2[0] - $l1) ?></th><th class="E"><?php echo ($myArray2[0] - $l1)-($ll1) ?></th><th><?php echo $r1 ?></th></tr>
  <tr class="Secs"><th>[B]</th><th><?php echo $l2 ?></th><th><?php echo $myArray2[1] ?></th><th><?php echo $ll2 ?></th><th><?php echo ($myArray2[1] - $l2) ?></th><th class="E"><?php echo ($myArray2[1] - $l2)-($ll2) ?></th><th><?php echo $r2 ?></th></tr>
  <tr class="Secs"><th>[C]</th><th><?php echo $l3 ?></th><th><?php echo $myArray2[2] ?></th><th><?php echo $ll3 ?></th><th><?php echo ($myArray2[2] - $l3) ?></th><th class="E"><?php echo ($myArray2[2] - $l3)-($ll3) ?></th><th><?php echo $r3 ?></th></tr>
 
  <tr class="Secs"><th></th><th></th><th></th><th>Medias</th><th><?php echo $promedio3 ?></th><th class="E"><?php echo $promedio2 ?></th><th><?php echo $promedio ?></th></tr>
</table>
  <?php
  }
  ?>

  <?php
  if(isset($_POST['regis4'])){
    $l1 = $_POST['l1'];
    $ll1 = $_POST['ll1'];
    $l2 = $_POST['l2'];
    $ll2 = $_POST['ll2'];
    $l3 = $_POST['l3'];
    $ll3 = $_POST['ll3'];
    $l4 = $_POST['l4'];
    $ll4 = $_POST['ll4'];
    $l5 = $l1;
    $l6 = $l2;
    $l7 = $l3;
    $l8 = $l4;
    $ll5 = $ll1;
    $ll6 = $ll2;
    $ll7 = $ll3;
    $ll8 = $ll4;
    $cambio = 0;

    $myArray = array($l5,$l6,$l7,$l8);
    $myArray2 = array(null,null,null,null);
    $myArray3 = array($ll5,$ll6,$ll7,$ll8);

    $my = array($l5,$l6,$l7,$l8);
    sort($my);

    for($a = 0; $a < 4; $a++){
      $valor = $my[$a];
      for($i = 0; $i<4; $i++){
        if($valor == $myArray[$i]){
          if($a == 0){
            $cambio = $myArray[$i] + $myArray3[$i];
            $myArray2[$i] = $cambio;
          }else{
            $cambio += $myArray3[$i];
            $myArray2[$i] = $cambio;
          }
          $myArray[$i] = null;
            break;
        }
      }
      $my[$a] = null;
    }

    $r1 = bcdiv(($ll1) / ($myArray2[0] - $l1), '1', 3);
    $r2 = bcdiv(($ll2) / ($myArray2[1] - $l2), '1', 3);
    $r3 = bcdiv(($ll3) / ($myArray2[2] - $l3), '1', 3);
    $r4 = bcdiv(($ll4) / ($myArray2[3] - $l4), '1', 3);

    $espera1 = ($myArray2[0] - $l1)-($ll1);
    $espera2 = ($myArray2[1] - $l2)-($ll2);
    $espera3 = ($myArray2[2] - $l3)-($ll3);
    $espera4 = ($myArray2[3] - $l4)-($ll4);

    $promedio = bcdiv((($r1+$r2+$r3+$r4)/4), '1', 3);
    $promedio2 = bcdiv(((($myArray2[0] - $l1)-($ll1)+($myArray2[1] - $l2)-($ll2)+($myArray2[2] - $l3)-($ll3)+($myArray2[3] - $l4)-($ll4))/4), '1', 3);
    $promedio3 = bcdiv(((($myArray2[0] - $l1)+($myArray2[1] - $l2)+($myArray2[2] - $l3)+($myArray2[3] - $l4))/4), '1', 3);
 
    //tiempo de llegada
  $la = $l1;
  $ls = $l2;
  $ld = $l3;
  $lf = $l4;
  $myArray = array($la,$ls,$ld,$lf);
  $arrayOrden = array(null,null,null,null);
  $arrayValor = array("A","B","C","D");
  $arrayLlegada = array($la,$ls,$ld,$lf);
  sort($arrayLlegada);
  for($a = 0; $a < 4; $a++){
    $valor = $arrayLlegada[$a];
    for($i = 0; $i<4; $i++){
      if($valor == $myArray[$i]){
          $arrayOrden[$a] = $arrayValor[$i];
          $myArray[$i] = null;
          break;
      }
    }
    $arrayLlegada[$a] = null;
  }
  ?>
  <div>
  <div class="a1 total"><label>' <?php echo $arrayOrden[0] ?> '</label></div>
  <div class="a2 total"><label>' <?php echo $arrayOrden[1] ?> '</label></div>
  <div class="a3 total"><label>' <?php echo $arrayOrden[2] ?> '</label></div>
  <div class="a4 total"><label>' <?php echo $arrayOrden[3] ?> '</label></div>
  </div>

  <table class="tabla">
  <tr class="Pri"><th>Proceso</th><th>T. Llegada</th><th>T. Salida</th><th>T. Ejecucíon</th><th>Servicio T.</th><th style="color:white;">Espera E</th><th>T. Indice</th></tr>
  <tr class="Secs"><th>[A]</th><th><?php echo $l1 ?></th><th><?php echo $myArray2[0] ?></th><th><?php echo $ll1 ?></th><th><?php echo ($myArray2[0] - $l1) ?></th><th class="E"><?php echo ($myArray2[0] - $l1)-($ll1) ?></th><th><?php echo $r1 ?></th></tr>
  <tr class="Secs"><th>[B]</th><th><?php echo $l2 ?></th><th><?php echo $myArray2[1] ?></th><th><?php echo $ll2 ?></th><th><?php echo ($myArray2[1] - $l2) ?></th><th class="E"><?php echo ($myArray2[1] - $l2)-($ll2) ?></th><th><?php echo $r2 ?></th></tr>
  <tr class="Secs"><th>[C]</th><th><?php echo $l3 ?></th><th><?php echo $myArray2[2] ?></th><th><?php echo $ll3 ?></th><th><?php echo ($myArray2[2] - $l3) ?></th><th class="E"><?php echo ($myArray2[2] - $l3)-($ll3) ?></th><th><?php echo $r3 ?></th></tr>
  <tr class="Secs"><th>[D]</th><th><?php echo $l4 ?></th><th><?php echo $myArray2[3] ?></th><th><?php echo $ll4 ?></th><th><?php echo ($myArray2[3] - $l4) ?></th><th class="E"><?php echo ($myArray2[3] - $l4)-($ll4) ?></th><th><?php echo $r4 ?></th></tr>
  <tr class="Secs"><th></th><th></th><th></th><th>Medias</th><th><?php echo $promedio3 ?></th><th class="E"><?php echo $promedio2 ?></th><th><?php echo $promedio ?></th></tr>
</table>

  <?php
  }
  ?>

  <?php
  if(isset($_POST['regis5'])){
    $l1 = $_POST['l1'];
    $ll1 = $_POST['ll1'];
    $l2 = $_POST['l2'];
    $ll2 = $_POST['ll2'];
    $l3 = $_POST['l3'];
    $ll3 = $_POST['ll3'];
    $l4 = $_POST['l4'];
    $ll4 = $_POST['ll4'];
    $lQ = $_POST['l5'];
    $llQ = $_POST['ll5'];

    $l5 = $l1;
    $l6 = $l2;
    $l7 = $l3;
    $l8 = $l4;
    $lQQ = $lQ;

    $ll5 = $ll1;
    $ll6 = $ll2;
    $ll7 = $ll3;
    $ll8 = $ll4;
    $llQQ = $llQ;
    $cambio = 0;

    $myArray = array($l5,$l6,$l7,$l8,$lQQ);
    $myArray2 = array(null,null,null,null,null);
    $myArray3 = array($ll5,$ll6,$ll7,$ll8,$llQQ);

    $my = array($l5,$l6,$l7,$l8,$lQQ);
    sort($my);

    for($a = 0; $a < 5; $a++){
      $valor = $my[$a];
      for($i = 0; $i<5; $i++){
        if($valor == $myArray[$i]){
          if($a == 0){
            $cambio = $myArray[$i] + $myArray3[$i];
            $myArray2[$i] = $cambio;
          }else{
            $cambio += $myArray3[$i];
            $myArray2[$i] = $cambio;
          }
          $myArray[$i] = null;
            break;
        }
      }
      $my[$a] = null;
    }
    $r1 = bcdiv(($ll1) / ($myArray2[0] - $l1), '1', 3);
    $r2 = bcdiv(($ll2) / ($myArray2[1] - $l2), '1', 3);
    $r3 = bcdiv(($ll3) / ($myArray2[2] - $l3), '1', 3);
    $r4 = bcdiv(($ll4) / ($myArray2[3] - $l4), '1', 3);
    $r5 = bcdiv(($llQ) / ($myArray2[4] - $lQ), '1', 3);

    $espera1 = ($myArray2[0] - $l1)-($ll1);
    $espera2 = ($myArray2[1] - $l2)-($ll2);
    $espera3 = ($myArray2[2] - $l3)-($ll3);
    $espera4 = ($myArray2[3] - $l4)-($ll4);
    $espera5 = ($myArray2[4] - $lQ)-($llQ);

    $promedio = bcdiv((($r1+$r2+$r3+$r4+$r5)/5), '1', 3);
    $promedio2 = bcdiv(((($myArray2[0] - $l1)-($ll1)+($myArray2[1] - $l2)-($ll2)+($myArray2[2] - $l3)-($ll3)+($myArray2[3] - $l4)-($ll4)+($myArray2[4] - $lQ)-($llQ))/5), '1', 3);
    $promedio3 = bcdiv(((($myArray2[0] - $l1)+($myArray2[1] - $l2)+($myArray2[2] - $l3)+($myArray2[3] - $l4)+($myArray2[4] - $lQ))/5), '1', 3);
 
//tiempo de llegada
$la = $l1;
$ls = $l2;
$ld = $l3;
$lf = $l4;
$lg = $lQ;

$myArray = array($la,$ls,$ld,$lf,$lg);
$arrayOrden = array(null,null,null,null,null);
$arrayValor = array("A","B","C","D","E");
$arrayLlegada = array($la,$ls,$ld,$lf,$lg);
sort($arrayLlegada);
for($a = 0; $a < 5; $a++){
  $valor = $arrayLlegada[$a];
  for($i = 0; $i<5; $i++){
    if($valor == $myArray[$i]){
        $arrayOrden[$a] = $arrayValor[$i];
        $myArray[$i] = null;
        break;
    }
  }
  $arrayLlegada[$a] = null;
}
?>
<div>
<div class="a1 total"><label>' <?php echo $arrayOrden[0] ?> '</label></div>
<div class="a2 total"><label>' <?php echo $arrayOrden[1] ?> '</label></div>
<div class="a3 total"><label>' <?php echo $arrayOrden[2] ?> '</label></div>
<div class="a4 total"><label>' <?php echo $arrayOrden[3] ?> '</label></div>
<div class="a5 total"><label>' <?php echo $arrayOrden[4] ?> '</label></div>
</div>

  <table class="tabla">
  <tr class="Pri"><th>Proceso</th><th>T. Llegada</th><th>T. Salida</th><th>T. Ejecucíon</th><th>Servicio T.</th><th style="color:white;">Espera E</th><th>T. Indice</th></tr>
  <tr class="Secs"><th>[A]</th><th><?php echo $l1 ?></th><th><?php echo $myArray2[0] ?></th><th><?php echo $ll1 ?></th><th><?php echo ($myArray2[0] - $l1) ?></th><th class="E"><?php echo ($myArray2[0] - $l1)-($ll1) ?></th><th><?php echo $r1 ?></th></tr>
  <tr class="Secs"><th>[B]</th><th><?php echo $l2 ?></th><th><?php echo $myArray2[1] ?></th><th><?php echo $ll2 ?></th><th><?php echo ($myArray2[1] - $l2) ?></th><th class="E"><?php echo ($myArray2[1] - $l2)-($ll2) ?></th><th><?php echo $r2 ?></th></tr>
  <tr class="Secs"><th>[C]</th><th><?php echo $l3 ?></th><th><?php echo $myArray2[2] ?></th><th><?php echo $ll3 ?></th><th><?php echo ($myArray2[2] - $l3) ?></th><th class="E"><?php echo ($myArray2[2] - $l3)-($ll3) ?></th><th><?php echo $r3 ?></th></tr>
  <tr class="Secs"><th>[D]</th><th><?php echo $l4 ?></th><th><?php echo $myArray2[3] ?></th><th><?php echo $ll4 ?></th><th><?php echo ($myArray2[3] - $l4) ?></th><th class="E"><?php echo ($myArray2[3] - $l4)-($ll4) ?></th><th><?php echo $r4 ?></th></tr>
  <tr class="Secs"><th>[E]</th><th><?php echo $lQ ?></th><th><?php echo $myArray2[4] ?></th><th><?php echo $llQ ?></th><th><?php echo ($myArray2[4] - $lQ) ?></th><th class="E"><?php echo ($myArray2[4] - $lQ)-($llQ) ?></th><th><?php echo $r5 ?></th></tr>
  <tr class="Secs"><th></th><th></th><th></th><th>Medias</th><th><?php echo $promedio3 ?></th><th class="E"><?php echo $promedio2 ?></th><th><?php echo $promedio ?></th></tr>
</table>
  <?php
  }
  ?>

  <?php
  if(isset($_POST['regis6'])){
    $l1 = $_POST['l1'];
    $ll1 = $_POST['ll1'];
    $l2 = $_POST['l2'];
    $ll2 = $_POST['ll2'];
    $l3 = $_POST['l3'];
    $ll3 = $_POST['ll3'];
    $l4 = $_POST['l4'];
    $ll4 = $_POST['ll4'];
    $lQ = $_POST['l5'];
    $llQ = $_POST['ll5'];
    $lW = $_POST['l6'];
    $llW = $_POST['ll6'];

    $l5 = $l1;
    $l6 = $l2;
    $l7 = $l3;
    $l8 = $l4;
    $lQQ = $lQ;
    $lWW = $lW;
    $ll5 = $ll1;
    $ll6 = $ll2;
    $ll7 = $ll3;
    $ll8 = $ll4;
    $llQQ = $llQ;
    $llWW = $llW;
    $cambio = 0;

    $myArray = array($l5,$l6,$l7,$l8,$lQQ,$lWW);
    $myArray2 = array(null,null,null,null,null,null);
    $myArray3 = array($ll5,$ll6,$ll7,$ll8,$llQQ,$llWW);

    $my = array($l5,$l6,$l7,$l8,$lQQ,$lWW);
    sort($my);
    for($a = 0; $a < 6; $a++){
      $valor = $my[$a];
      for($i = 0; $i<6; $i++){
        if($valor == $myArray[$i]){
          if($a == 0){
            $cambio = $myArray[$i] + $myArray3[$i];
            $myArray2[$i] = $cambio;
          }else{
            $cambio += $myArray3[$i];
            $myArray2[$i] = $cambio;
          }
          $myArray[$i] = null;
            break;
        }
      }
      $my[$a] = null;
    }
    $r1 = bcdiv(($ll1) / ($myArray2[0] - $l1), '1', 3);
    $r2 = bcdiv(($ll2) / ($myArray2[1] - $l2), '1', 3);
    $r3 = bcdiv(($ll3) / ($myArray2[2] - $l3), '1', 3);
    $r4 = bcdiv(($ll4) / ($myArray2[3] - $l4), '1', 3);
    $r5 = bcdiv(($llQ) / ($myArray2[4] - $lQ), '1', 3);
    $r6 = bcdiv(($llW) / ($myArray2[5] - $lW), '1', 3);

    $espera1 = ($myArray2[0] - $l1)-($ll1);
    $espera2 = ($myArray2[1] - $l2)-($ll2);
    $espera3 = ($myArray2[2] - $l3)-($ll3);
    $espera4 = ($myArray2[3] - $l4)-($ll4);
    $espera5 = ($myArray2[4] - $lQ)-($llQ);
    $espera6 = ($myArray2[5] - $lW)-($llW);
/////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    $promedio = bcdiv((($r1+$r2+$r3+$r4+$r5+$r6)/6), '1', 3);
    $promedio2 = bcdiv(((($myArray2[0] - $l1)-($ll1)+($myArray2[1] - $l2)-($ll2)+($myArray2[2] - $l3)-($ll3)+($myArray2[3] - $l4)-($ll4)+($myArray2[4] - $lQ)-($llQ)+($myArray2[5] - $lW)-($llW))/6), '1', 3);
    $promedio3 = bcdiv(((($myArray2[0] - $l1)+($myArray2[1] - $l2)+($myArray2[2] - $l3)+($myArray2[3] - $l4)+($myArray2[4] - $lQ)+($myArray2[5] - $lW))/6), '1', 3);
  
  //tiempo de llegada
  $la = $l1;
  $ls = $l2;
  $ld = $l3;
  $lf = $l4;
  $lg = $lQ;
  $lh = $lW;

  $myArray = array($la,$ls,$ld,$lf,$lg,$lh);
  $arrayOrden = array(null,null,null,null,null,null);
  $arrayValor = array("A","B","C","D","E","F");

  $arrayLlegada = array($la,$ls,$ld,$lf,$lg,$lh);
  sort($arrayLlegada);

  for($a = 0; $a < 6; $a++){
    $valor = $arrayLlegada[$a];
    for($i = 0; $i<6; $i++){
      if($valor == $myArray[$i]){
          $arrayOrden[$a] = $arrayValor[$i];
          $myArray[$i] = null;
          break;
      }
    }
    $arrayLlegada[$a] = null;
  }
  ?>
  <div>
  <div class="a1 total"><label>' <?php echo $arrayOrden[0] ?> '</label></div>
  <div class="a2 total"><label>' <?php echo $arrayOrden[1] ?> '</label></div>
  <div class="a3 total"><label>' <?php echo $arrayOrden[2] ?> '</label></div>
  <div class="a4 total"><label>' <?php echo $arrayOrden[3] ?> '</label></div>
  <div class="a5 total"><label>' <?php echo $arrayOrden[4] ?> '</label></div>
  <div class="a6 total"><label>' <?php echo $arrayOrden[5] ?> '</label></div>
  </div>
  <table class="tabla">
  <tr class="Pri"><th>Proceso</th><th>T. Llegada</th><th>T. Salida</th><th>T. Ejecucíon</th><th>Servicio T.</th><th style="color:white;">Espera E</th><th>T. Indice</th></tr>
  <tr class="Secs"><th>[A]</th><th><?php echo $l1 ?></th><th><?php echo $myArray2[0] ?></th><th><?php echo $ll1 ?></th><th><?php echo ($myArray2[0] - $l1) ?></th><th class="E"><?php echo $espera1 ?></th><th><?php echo $r1 ?></th></tr>
  <tr class="Secs"><th>[B]</th><th><?php echo $l2 ?></th><th><?php echo $myArray2[1] ?></th><th><?php echo $ll2 ?></th><th><?php echo ($myArray2[1] - $l2) ?></th><th class="E"><?php echo $espera2 ?></th><th><?php echo $r2 ?></th></tr>
  <tr class="Secs"><th>[C]</th><th><?php echo $l3 ?></th><th><?php echo $myArray2[2] ?></th><th><?php echo $ll3 ?></th><th><?php echo ($myArray2[2] - $l3) ?></th><th class="E"><?php echo $espera3 ?></th><th><?php echo $r3 ?></th></tr>
  <tr class="Secs"><th>[D]</th><th><?php echo $l4 ?></th><th><?php echo $myArray2[3] ?></th><th><?php echo $ll4 ?></th><th><?php echo ($myArray2[3] - $l4) ?></th><th class="E"><?php echo $espera4 ?></th><th><?php echo $r4 ?></th></tr>
  <tr class="Secs"><th>[E]</th><th><?php echo $lQ ?></th><th><?php echo $myArray2[4] ?></th><th><?php echo $llQ ?></th><th><?php echo ($myArray2[4] - $lQ) ?></th><th class="E"><?php echo $espera5 ?></th><th><?php echo $r5 ?></th></tr>
  <tr class="Secs"><th>[F]</th><th><?php echo $lW ?></th><th><?php echo $myArray2[5] ?></th><th><?php echo $llW ?></th><th><?php echo ($myArray2[5] - $lW) ?></th><th class="E"><?php echo $espera6 ?></th><th><?php echo $r6 ?></th></tr>
  <tr class="Secs"><th></th><th></th><th></th><th>Medias</th><th><?php echo $promedio3 ?></th><th class="E"><?php echo $promedio2 ?></th><th><?php echo $promedio ?></th></tr>
</table>
  <?php
  }
  
  ?>
  </div>
  <div class="madredos maa">
    <div class="hijouno">
        <?php
      if(isset($_POST['regis1'])){
        $l1 = $_POST['l1'];
        $ll1 = $_POST['ll1'];
        //tiempo de llegada
        $la = $l1;
        //tiempo de ejecucion
        $lla = $ll1;
        //
        $es1 = $espera1;

        $myArray = array($la);

        $arrayOrden = array(null);
        $ordenE = array(null);
        $ordenTE = array(null);
//////////////////////////////////////////////////////////////////////
        $arrayValor = array("A");
        $arrayE = array($lla);
        $arrayxE = array($es1);

        $arrayLlegada2 = array($la);
        sort($arrayLlegada2);
        $arrayLlegada = array($la);
        sort($arrayLlegada);
////////////////////////////////////////////////////////////////////////////////////
        for($a = 0; $a < 1; $a++){
          $valor = $arrayLlegada[$a];

          for($i = 0; $i<1; $i++){
            if($valor == $myArray[$i]){
                $arrayOrden[$a] = $arrayValor[$i];
                $ordenE[$a] = $arrayxE[$i];
                $ordenTE[$a] = $arrayE[$i];
                $myArray[$i] = null;
                break;
            }
          }
          $arrayLlegada[$a] = null;
        }
        /////////////////////////////////////////////////////////////////////////////////////////////////////
        $aE1 = (string)$ordenTE[0] . "%";

        $bE1 = (string)$ordenE[0] . "%";

        $cE1 = (string)$arrayLlegada2[0] . "%";
//////////////////////////////////////////////////////////////////////////////////
      ?>
      <div class="barras">
      <div class="grande"></div>
      <div class="grande"></div>
      <div class="grande"></div>
      <div class="grande"></div>
      <div class="grande"></div>
        <div class="grande">
        <div class="divi1"><?php echo $arrayOrden[0]?></div><div class="c7 total2"><?php echo $arrayLlegada2[0]?></div><div class="a7 total2"><label><?php echo $ordenE[0]?></label></div><div class="b7 total2"><?php echo $ordenTE[0]?></div>
        </div>
      </div>
      <?php
      }
      ?>

      <?php 
      if(isset($_POST['regis2'])){
        $l1 = $_POST['l1'];
        $ll1 = $_POST['ll1'];
        $l2 = $_POST['l2'];
        $ll2 = $_POST['ll2'];
        //tiempo de llegada
        $la = $l1;
        $ls = $l2;
        //tiempo de ejecucion
        $lla = $ll1;
        $lls = $ll2;
        //
        $es1 = $espera1;
        $es2 = $espera2;

        $myArray = array($la,$ls);

        $arrayOrden = array(null,null);
        $ordenE = array(null,null);
        $ordenTE = array(null,null);
//////////////////////////////////////////////////////////////////////
        $arrayValor = array("A","B");
        $arrayE = array($lla,$lls);
        $arrayxE = array($es1,$es2);

        $arrayLlegada2 = array($la,$ls);
        sort($arrayLlegada2);
        $arrayLlegada = array($la,$ls);
        sort($arrayLlegada);
////////////////////////////////////////////////////////////////////////////////////
        for($a = 0; $a < 2; $a++){
          $valor = $arrayLlegada[$a];

          for($i = 0; $i<2; $i++){
            if($valor == $myArray[$i]){
                $arrayOrden[$a] = $arrayValor[$i];
                $ordenE[$a] = $arrayxE[$i];
                $ordenTE[$a] = $arrayE[$i];
                $myArray[$i] = null;
                break;
            }
          }
          $arrayLlegada[$a] = null;
        }
        /////////////////////////////////////////////////////////////////////////////////////////////////////
        $aE1 = (string)$ordenTE[0] . "%";
        $aE2 = (string)$ordenTE[1] . "%";

        $bE1 = (string)$ordenE[0] . "%";
        $bE2 = (string)$ordenE[1] . "%";

        $cE1 = (string)$arrayLlegada2[0] . "%";
        $cE2 = (string)$arrayLlegada2[1] . "%";
//////////////////////////////////////////////////////////////////////////////////
      ?>
      <div class="barras">
      <div class="grande"></div>
      <div class="grande"></div>
      <div class="grande"></div>
      <div class="grande"></div>
        <div class="grande">
        <div class="divi1"><?php echo $arrayOrden[1]?></div><div class="c8 total2"><?php echo $arrayLlegada2[1]?></div><div class="a8 total2"><label><?php echo $ordenE[1]?></label></div><div class="b8 total2"><?php echo $ordenTE[1]?></div>
        </div>
        <div class="grande">
        <div class="divi1"><?php echo $arrayOrden[0]?></div><div class="c7 total2"><?php echo $arrayLlegada2[0]?></div><div class="a7 total2"><label><?php echo $ordenE[0]?></label></div><div class="b7 total2"><?php echo $ordenTE[0]?></div>
        </div>
      </div>
      <?php
      }
      ?>

      <?php
      if(isset($_POST['regis3'])){
        $l1 = $_POST['l1'];
        $ll1 = $_POST['ll1'];
        $l2 = $_POST['l2'];
        $ll2 = $_POST['ll2'];
        $l3 = $_POST['l3'];
        $ll3 = $_POST['ll3'];
        //tiempo de llegada
        $la = $l1;
        $ls = $l2;
        $ld = $l3;
        //tiempo de ejecucion
        $lla = $ll1;
        $lls = $ll2;
        $lld = $ll3;
        //
        $es1 = $espera1;
        $es2 = $espera2;
        $es3 = $espera3;

        $myArray = array($la,$ls,$ld);

        $arrayOrden = array(null,null,null);
        $ordenE = array(null,null,null);
        $ordenTE = array(null,null,null);
//////////////////////////////////////////////////////////////////////
        $arrayValor = array("A","B","C");
        $arrayE = array($lla,$lls,$lld);
        $arrayxE = array($es1,$es2,$es3);

        $arrayLlegada2 = array($la,$ls,$ld);
        sort($arrayLlegada2);
        $arrayLlegada = array($la,$ls,$ld);
        sort($arrayLlegada);
////////////////////////////////////////////////////////////////////////////////////
        for($a = 0; $a < 3; $a++){
          $valor = $arrayLlegada[$a];

          for($i = 0; $i<3; $i++){
            if($valor == $myArray[$i]){
                $arrayOrden[$a] = $arrayValor[$i];
                $ordenE[$a] = $arrayxE[$i];
                $ordenTE[$a] = $arrayE[$i];
                $myArray[$i] = null;
                break;
            }
          }
          $arrayLlegada[$a] = null;
        }
        /////////////////////////////////////////////////////////////////////////////////////////////////////
        $aE1 = (string)$ordenTE[0] . "%";
        $aE2 = (string)$ordenTE[1] . "%";
        $aE3 = (string)$ordenTE[2] . "%";

        $bE1 = (string)$ordenE[0] . "%";
        $bE2 = (string)$ordenE[1] . "%";
        $bE3 = (string)$ordenE[2] . "%";

        $cE1 = (string)$arrayLlegada2[0] . "%";
        $cE2 = (string)$arrayLlegada2[1] . "%";
        $cE3 = (string)$arrayLlegada2[2] . "%";
//////////////////////////////////////////////////////////////////////////////////
      ?>
      <div class="barras">
      <div class="grande"></div>
      <div class="grande"></div>
      <div class="grande"></div>
        <div class="grande">
        <div class="divi1"><?php echo $arrayOrden[2]?></div><div class="c9 total2"><?php echo $arrayLlegada2[2]?></div><div class="a9 total2"><label><?php echo $ordenE[2]?></label></div><div class="b9 total2"><?php echo $ordenTE[2]?></div>
        </div>
        <div class="grande">
        <div class="divi1"><?php echo $arrayOrden[1]?></div><div class="c8 total2"><?php echo $arrayLlegada2[1]?></div><div class="a8 total2"><label><?php echo $ordenE[1]?></label></div><div class="b8 total2"><?php echo $ordenTE[1]?></div>
        </div>
        <div class="grande">
        <div class="divi1"><?php echo $arrayOrden[0]?></div><div class="c7 total2"><?php echo $arrayLlegada2[0]?></div><div class="a7 total2"><label><?php echo $ordenE[0]?></label></div><div class="b7 total2"><?php echo $ordenTE[0]?></div>
        </div>
      </div>
      <?php
      }
      ?>

      <?php
      if(isset($_POST['regis4'])){
        $l1 = $_POST['l1'];
        $ll1 = $_POST['ll1'];
        $l2 = $_POST['l2'];
        $ll2 = $_POST['ll2'];
        $l3 = $_POST['l3'];
        $ll3 = $_POST['ll3'];
        $l4 = $_POST['l4'];
        $ll4 = $_POST['ll4'];
        //tiempo de llegada
        $la = $l1;
        $ls = $l2;
        $ld = $l3;
        $lf = $l4;
        //tiempo de ejecucion
        $lla = $ll1;
        $lls = $ll2;
        $lld = $ll3;
        $llf = $ll4;
        //
        $es1 = $espera1;
        $es2 = $espera2;
        $es3 = $espera3;
        $es4 = $espera4;

        $myArray = array($la,$ls,$ld,$lf);

        $arrayOrden = array(null,null,null,null);
        $ordenE = array(null,null,null,null);
        $ordenTE = array(null,null,null,null);
//////////////////////////////////////////////////////////////////////
        $arrayValor = array("A","B","C","D");
        $arrayE = array($lla,$lls,$lld,$llf);
        $arrayxE = array($es1,$es2,$es3,$es4);

        $arrayLlegada2 = array($la,$ls,$ld,$lf);
        sort($arrayLlegada2);
        $arrayLlegada = array($la,$ls,$ld,$lf);
        sort($arrayLlegada);
////////////////////////////////////////////////////////////////////////////////////
        for($a = 0; $a < 4; $a++){
          $valor = $arrayLlegada[$a];

          for($i = 0; $i<4; $i++){
            if($valor == $myArray[$i]){
                $arrayOrden[$a] = $arrayValor[$i];
                $ordenE[$a] = $arrayxE[$i];
                $ordenTE[$a] = $arrayE[$i];
                $myArray[$i] = null;
                break;
            }
          }
          $arrayLlegada[$a] = null;
        }
        /////////////////////////////////////////////////////////////////////////////////////////////////////
        $aE1 = (string)$ordenTE[0] . "%";
        $aE2 = (string)$ordenTE[1] . "%";
        $aE3 = (string)$ordenTE[2] . "%";
        $aE4 = (string)$ordenTE[3] . "%";

        $bE1 = (string)$ordenE[0] . "%";
        $bE2 = (string)$ordenE[1] . "%";
        $bE3 = (string)$ordenE[2] . "%";
        $bE4 = (string)$ordenE[3] . "%";

        $cE1 = (string)$arrayLlegada2[0] . "%";
        $cE2 = (string)$arrayLlegada2[1] . "%";
        $cE3 = (string)$arrayLlegada2[2] . "%";
        $cE4 = (string)$arrayLlegada2[3] . "%";
//////////////////////////////////////////////////////////////////////////////////
      ?>
      <div class="barras">
      <div class="grande"></div>
      <div class="grande"></div>
        <div class="grande">
        <div class="divi1"><?php echo $arrayOrden[3]?></div><div class="c10 total2"><?php echo $arrayLlegada2[3]?></div><div class="a10 total2"><label><?php echo $ordenE[3]?></label></div><div class="b10 total2"><?php echo $ordenTE[3]?></div>
        </div>
        <div class="grande">
        <div class="divi1"><?php echo $arrayOrden[2]?></div><div class="c9 total2"><?php echo $arrayLlegada2[2]?></div><div class="a9 total2"><label><?php echo $ordenE[2]?></label></div><div class="b9 total2"><?php echo $ordenTE[2]?></div>
        </div>
        <div class="grande">
        <div class="divi1"><?php echo $arrayOrden[1]?></div><div class="c8 total2"><?php echo $arrayLlegada2[1]?></div><div class="a8 total2"><label><?php echo $ordenE[1]?></label></div><div class="b8 total2"><?php echo $ordenTE[1]?></div>
        </div>
        <div class="grande">
        <div class="divi1"><?php echo $arrayOrden[0]?></div><div class="c7 total2"><?php echo $arrayLlegada2[0]?></div><div class="a7 total2"><label><?php echo $ordenE[0]?></label></div><div class="b7 total2"><?php echo $ordenTE[0]?></div>
        </div>
      </div>
      <?php
      }
      ?>

      <?php
      if(isset($_POST['regis5'])){
        $l1 = $_POST['l1'];
        $ll1 = $_POST['ll1'];
        $l2 = $_POST['l2'];
        $ll2 = $_POST['ll2'];
        $l3 = $_POST['l3'];
        $ll3 = $_POST['ll3'];
        $l4 = $_POST['l4'];
        $ll4 = $_POST['ll4'];
        $l5 = $_POST['l5'];
        $ll5 = $_POST['ll5'];
        //tiempo de llegada
        $la = $l1;
        $ls = $l2;
        $ld = $l3;
        $lf = $l4;
        $lg = $l5;
        //tiempo de ejecucion
        $lla = $ll1;
        $lls = $ll2;
        $lld = $ll3;
        $llf = $ll4;
        $llg = $ll5;
        //
        $es1 = $espera1;
        $es2 = $espera2;
        $es3 = $espera3;
        $es4 = $espera4;
        $es5 = $espera5;

        $myArray = array($la,$ls,$ld,$lf,$lg);

        $arrayOrden = array(null,null,null,null,null);
        $ordenE = array(null,null,null,null,null);
        $ordenTE = array(null,null,null,null,null);
//////////////////////////////////////////////////////////////////////
        $arrayValor = array("A","B","C","D","E");
        $arrayE = array($lla,$lls,$lld,$llf,$llg);
        $arrayxE = array($es1,$es2,$es3,$es4,$es5);

        $arrayLlegada2 = array($la,$ls,$ld,$lf,$lg);
        sort($arrayLlegada2);
        $arrayLlegada = array($la,$ls,$ld,$lf,$lg);
        sort($arrayLlegada);
////////////////////////////////////////////////////////////////////////////////////
        for($a = 0; $a < 5; $a++){
          $valor = $arrayLlegada[$a];

          for($i = 0; $i<5; $i++){
            if($valor == $myArray[$i]){
                $arrayOrden[$a] = $arrayValor[$i];
                $ordenE[$a] = $arrayxE[$i];
                $ordenTE[$a] = $arrayE[$i];
                $myArray[$i] = null;
                break;
            }
          }
          $arrayLlegada[$a] = null;
        }
        /////////////////////////////////////////////////////////////////////////////////////////////////////
        $aE1 = (string)$ordenTE[0] . "%";
        $aE2 = (string)$ordenTE[1] . "%";
        $aE3 = (string)$ordenTE[2] . "%";
        $aE4 = (string)$ordenTE[3] . "%";
        $aE5 = (string)$ordenTE[4] . "%"; 

        $bE1 = (string)$ordenE[0] . "%";
        $bE2 = (string)$ordenE[1] . "%";
        $bE3 = (string)$ordenE[2] . "%";
        $bE4 = (string)$ordenE[3] . "%";
        $bE5 = (string)$ordenE[4] . "%"; 

        $cE1 = (string)$arrayLlegada2[0] . "%";
        $cE2 = (string)$arrayLlegada2[1] . "%";
        $cE3 = (string)$arrayLlegada2[2] . "%";
        $cE4 = (string)$arrayLlegada2[3] . "%";
        $cE5 = (string)$arrayLlegada2[4] . "%"; 
//////////////////////////////////////////////////////////////////////////////////
      ?>
      <div class="barras">
      <div class="grande"></div>
        <div class="grande">
        <div class="divi1"><?php echo $arrayOrden[4]?></div><div class="c11 total2"><?php echo $arrayLlegada2[4]?></div><div class="a11 total2"><label><?php echo $ordenE[4]?></label></div><div class="b11 total2"><?php echo $ordenTE[4]?></div>
        </div>
        <div class="grande">
        <div class="divi1"><?php echo $arrayOrden[3]?></div><div class="c10 total2"><?php echo $arrayLlegada2[3]?></div><div class="a10 total2"><label><?php echo $ordenE[3]?></label></div><div class="b10 total2"><?php echo $ordenTE[3]?></div>
        </div>
        <div class="grande">
        <div class="divi1"><?php echo $arrayOrden[2]?></div><div class="c9 total2"><?php echo $arrayLlegada2[2]?></div><div class="a9 total2"><label><?php echo $ordenE[2]?></label></div><div class="b9 total2"><?php echo $ordenTE[2]?></div>
        </div>
        <div class="grande">
        <div class="divi1"><?php echo $arrayOrden[1]?></div><div class="c8 total2"><?php echo $arrayLlegada2[1]?></div><div class="a8 total2"><label><?php echo $ordenE[1]?></label></div><div class="b8 total2"><?php echo $ordenTE[1]?></div>
        </div>
        <div class="grande">
        <div class="divi1"><?php echo $arrayOrden[0]?></div><div class="c7 total2"><?php echo $arrayLlegada2[0]?></div><div class="a7 total2"><label><?php echo $ordenE[0]?></label></div><div class="b7 total2"><?php echo $ordenTE[0]?></div>
        </div>
      </div>
    
      <?php
      }
      ?>
      <?php
      if(isset($_POST['regis6'])){
        $l1 = $_POST['l1'];
        $ll1 = $_POST['ll1'];
        $l2 = $_POST['l2'];
        $ll2 = $_POST['ll2'];
        $l3 = $_POST['l3'];
        $ll3 = $_POST['ll3'];
        $l4 = $_POST['l4'];
        $ll4 = $_POST['ll4'];
        $l5 = $_POST['l5'];
        $ll5 = $_POST['ll5'];
        $l6 = $_POST['l6'];
        $ll6 = $_POST['ll6'];
        //tiempo de llegada
        $la = $l1;
        $ls = $l2;
        $ld = $l3;
        $lf = $l4;
        $lg = $l5;
        $lh = $l6;
        //tiempo de ejecucion
        $lla = $ll1;
        $lls = $ll2;
        $lld = $ll3;
        $llf = $ll4;
        $llg = $ll5;
        $llh = $ll6;
        //
        $es1 = $espera1;
        $es2 = $espera2;
        $es3 = $espera3;
        $es4 = $espera4;
        $es5 = $espera5;
        $es6 = $espera6;

        $myArray = array($la,$ls,$ld,$lf,$lg,$lh);

        $arrayOrden = array(null,null,null,null,null,null);
        $ordenE = array(null,null,null,null,null,null);
        $ordenTE = array(null,null,null,null,null,null);
//////////////////////////////////////////////////////////////////////
        $arrayValor = array("A","B","C","D","E","F");
        $arrayE = array($lla,$lls,$lld,$llf,$llg,$llh);
        $arrayxE = array($es1,$es2,$es3,$es4,$es5,$es6);

        $arrayLlegada2 = array($la,$ls,$ld,$lf,$lg,$lh);
        sort($arrayLlegada2);
        $arrayLlegada = array($la,$ls,$ld,$lf,$lg,$lh);
        sort($arrayLlegada);
////////////////////////////////////////////////////////////////////////////////////
        for($a = 0; $a < 6; $a++){
          $valor = $arrayLlegada[$a];

          for($i = 0; $i<6; $i++){
            if($valor == $myArray[$i]){
                $arrayOrden[$a] = $arrayValor[$i];
                $ordenE[$a] = $arrayxE[$i];
                $ordenTE[$a] = $arrayE[$i];
                $myArray[$i] = null;
                break;
            }
          }
          $arrayLlegada[$a] = null;
        }
        /////////////////////////////////////////////////////////////////////////////////////////////////////
        $aE1 = (string)$ordenTE[0] . "%";
        $aE2 = (string)$ordenTE[1] . "%";
        $aE3 = (string)$ordenTE[2] . "%";
        $aE4 = (string)$ordenTE[3] . "%";
        $aE5 = (string)$ordenTE[4] . "%"; 
        $aE6 = (string)$ordenTE[5] . "%";

        $bE1 = (string)$ordenE[0] . "%";
        $bE2 = (string)$ordenE[1] . "%";
        $bE3 = (string)$ordenE[2] . "%";
        $bE4 = (string)$ordenE[3] . "%";
        $bE5 = (string)$ordenE[4] . "%"; 
        $bE6 = (string)$ordenE[5] . "%";

        $cE1 = (string)$arrayLlegada2[0] . "%";
        $cE2 = (string)$arrayLlegada2[1] . "%";
        $cE3 = (string)$arrayLlegada2[2] . "%";
        $cE4 = (string)$arrayLlegada2[3] . "%";
        $cE5 = (string)$arrayLlegada2[4] . "%"; 
        $cE6 = (string)$arrayLlegada2[5] . "%";
//////////////////////////////////////////////////////////////////////////////////
      ?>
      <div class="barras">
        <div class="grande">
        <div class="divi1"><?php echo $arrayOrden[5]?></div><div class="c12 total2"><?php echo $arrayLlegada2[5]?></div><div class="a12 total2"><label><?php echo $ordenE[5]?></label></div><div class="b12 total2"><?php echo $ordenTE[5]?></div>
        </div>
        <div class="grande">
        <div class="divi1"><?php echo $arrayOrden[4]?></div><div class="c11 total2"><?php echo $arrayLlegada2[4]?></div><div class="a11 total2"><label><?php echo $ordenE[4]?></label></div><div class="b11 total2"><?php echo $ordenTE[4]?></div>
        </div>
        <div class="grande">
        <div class="divi1"><?php echo $arrayOrden[3]?></div><div class="c10 total2"><?php echo $arrayLlegada2[3]?></div><div class="a10 total2"><label><?php echo $ordenE[3]?></label></div><div class="b10 total2"><?php echo $ordenTE[3]?></div>
        </div>
        <div class="grande">
        <div class="divi1"><?php echo $arrayOrden[2]?></div><div class="c9 total2"><?php echo $arrayLlegada2[2]?></div><div class="a9 total2"><label><?php echo $ordenE[2]?></label></div><div class="b9 total2"><?php echo $ordenTE[2]?></div>
        </div>
        <div class="grande">
        <div class="divi1"><?php echo $arrayOrden[1]?></div><div class="c8 total2"><?php echo $arrayLlegada2[1]?></div><div class="a8 total2"><label><?php echo $ordenE[1]?></label></div><div class="b8 total2"><?php echo $ordenTE[1]?></div>
        </div>
        <div class="grande">
        <div class="divi1"><?php echo $arrayOrden[0]?></div><div class="c7 total2"><?php echo $arrayLlegada2[0]?></div><div class="a7 total2"><label><?php echo $ordenE[0]?></label></div><div class="b7 total2"><?php echo $ordenTE[0]?></div>
        </div>
      </div>
      <?php
      }
////////////////////////////////////////////////////////////////////////////////
      ?>
    </div>
    <div class="hijodos">
    <input class="btn" type="button" value="Refrescar" onclick="refreshPage()">
    <input class="btn" type="button" value="Inicio" onclick="changeStyle()">
    </div>
  </div>
  <script type="text/javascript">
  function refreshPage(){
      window.location.reload();
  } 
  </script>
</body>
<style>

:root {
    --ancho1: <?php echo $bE1 ?>;
    --ancho2: <?php echo $bE2 ?>;
    --ancho3: <?php echo $bE3 ?>;
    --ancho4: <?php echo $bE4 ?>;
    --ancho5: <?php echo $bE5 ?>;
    --ancho6: <?php echo $bE6 ?>;

    --ancho7: <?php echo $aE1 ?>;
    --ancho8: <?php echo $aE2 ?>;
    --ancho9: <?php echo $aE3 ?>;
    --ancho10: <?php echo $aE4 ?>;
    --ancho11: <?php echo $aE5 ?>;
    --ancho12: <?php echo $aE6 ?>;

    --ancho13: <?php echo $cE1 ?>;
    --ancho14: <?php echo $cE2 ?>;
    --ancho15: <?php echo $cE3 ?>;
    --ancho16: <?php echo $cE4 ?>;
    --ancho17: <?php echo $cE5 ?>;
    --ancho18: <?php echo $cE6 ?>;
}

body{
  margin: 0px;
 
}

.tabla{
  width:95%;
  margin: 70px auto 70px;
  border:solid;
  border-radius: 15px;
}

.Pri{
  background: dodgerblue;
  height: 40px;
}

.Secs{
  height: 40px;
}

.E{
  color: darkmagenta;
}

tr:nth-child(even){background-color: #f2f2f2}

.total{
  color: dodgerblue;
  text-align: center;
  position: absolute;
  animation-name: example;
  animation-fill-mode: forwards;
  animation-duration: 12s;
  transition: width 2s, height 2s, transform 2s;
}

@keyframes example {
  
  0%   {left:5%; top:22px; width: 50px;height: 20px; font-size: 15px; border: solid;background: white;transform: rotate(0deg);}

  33%  {left:45.5%; top:22px; width: 50px;height: 20px; border-radius: 50px; font-size: 15px; border: solid;background: white;transform: rotate(0deg);}
  35%  {left:45.5%; top:22px; width: 50px;height: 80px; border-radius: 10%;font-size: 0px;border: solid;background: white;}

  66%  {left:45.5%; top:450px; width: 50px;height: 20px; border-radius: 10%; font-size: 0px;border: solid;background: darkmagenta;transform: rotate(360deg);}
  70%  {left:45.5%; top:450px; width: 80px;height: 20px;border-radius: 50px;font-size: 15px;border: solid;background: white;transform: rotate(360deg);}

  99%  {left:85%; top:450px; width: 50px;height: 20px; font-size: 15px;border: solid;background: white;transform: rotate(360deg);}
  100%   {left:85%; top:450px; width: 0px;height: 0px; font-size: 0px; border-style: none; transform: rotate(360deg);}
}

.a1{
  animation-delay: 1s;  
}

.a2{
  animation-delay: 2s;
}

.a3{
  animation-delay: 3s;
}

.a4{
  animation-delay: 4s;
}

.a5{
  animation-delay: 5s; 
}
.a6{
  animation-delay: 6s; 
}

.total2{
  text-align: center;
  color: white;
  width: 0px;
  height: 21px;
  position: relative;
  float: left;
  animation-fill-mode: forwards;
  animation-duration: 4s;
  
}

@keyframes example11 {
  0% {width: 0px; background: white;}
  100% {width: var(--ancho1); background:darkmagenta;}
}

@keyframes example22 {
  0% {width: 0px; background: white;}
  100% {width: var(--ancho2); background:darkmagenta;}
}

@keyframes example33 {
  0% {width: 0px; background: white;}
  100% { width: var(--ancho3); background:darkmagenta;}
}

@keyframes example44 {
  0% {width: 0px; background: white;}
  100% {width: var(--ancho4); background:darkmagenta;}
}

@keyframes example55 {
  0% { width: 0px; background: white;}
  100% { width: var(--ancho5); background:darkmagenta;}
}

@keyframes example66 {
  0% { width: 0px; background: white;}
  100% { width: var(--ancho6); background:darkmagenta;}
}

@keyframes example111 {
  0% {width: 0px; background: white;}
  100% {width: var(--ancho7); background:dodgerblue;}
}

@keyframes example222 {
  0% {width: 0px; background: white;}
  100% {width: var(--ancho8); background:dodgerblue;}
}

@keyframes example333 {
  0% {width: 0px; background: white;}
  100% { width: var(--ancho9); background:dodgerblue;}
}

@keyframes example444 {
  0% {width: 0px; background: white;}
  100% {width: var(--ancho10); background:dodgerblue;}
}

@keyframes example555 {
  0% { width: 0px; background: white;}
  100% { width: var(--ancho11); background:dodgerblue;}
}

@keyframes example666 {
  0% { width: 0px; background: white;}
  100% { width: var(--ancho12); background:dodgerblue;}
}

@keyframes example1111 {
  0% {width: 0px; background: white;}
  100% {width: var(--ancho13); background:gray;}
}

@keyframes example2222 {
  0% {width: 0px; background: white;}
  100% {width: var(--ancho14); background:gray;}
}

@keyframes example3333 {
  0% {width: 0px; background: white;}
  100% { width: var(--ancho15); background:gray;}
}

@keyframes example4444 {
  0% {width: 0px; background: white;}
  100% {width: var(--ancho16); background:gray;}
}

@keyframes example5555 {
  0% { width: 0px; background: white;}
  100% { width: var(--ancho17); background:gray;}
}

@keyframes example6666 {
  0% { width: 0px; background: white;}
  100% { width: var(--ancho18); background:gray;}
}

.a7{
  border-bottom-right-radius: 20px;
  animation-delay: 0s;
  animation-name: example11;
}

.a8{
  border-bottom-right-radius: 20px;
  animation-delay: 1s;
  animation-name: example22;
}

.a9{
  border-bottom-right-radius: 20px;
  animation-delay: 3s;
  animation-name: example33;
}

.a10{
  border-bottom-right-radius: 20px;
  animation-delay: 6s;
  animation-name: example44;
}

.a11{
  border-bottom-right-radius: 20px;
  animation-delay: 9s;
  animation-name: example55;
}
.a12{
  border-bottom-right-radius: 20px;
  animation-delay: 12s;
  animation-name: example66;
}

.b7{
  animation-delay: 0s;
  animation-name: example111;
}

.b8{
  animation-delay: 1s;
  animation-name: example222;
}

.b9{
  animation-delay: 3s;
  animation-name: example333;
}

.b10{
  animation-delay: 6s;
  animation-name: example444;
}

.b11{
  animation-delay: 9s;
  animation-name: example555;
}
.b12{
  animation-delay: 12s;
  animation-name: example666;
}

.c7{
  border-bottom-right-radius: 20px;
  animation-delay: 0s;
  animation-name: example1111;
}

.c8{
  border-bottom-right-radius: 20px;
  animation-delay: 1s;
  animation-name: example2222;
}

.c9{
  border-bottom-right-radius: 20px;
  animation-delay: 3s;
  animation-name: example3333;
}

.c10{
  border-bottom-right-radius: 20px;
  animation-delay: 6s;
  animation-name: example4444;
}

.c11{
  border-bottom-right-radius: 20px;
  animation-delay: 9s;
  animation-name: example5555;
}
.c12{
  border-bottom-right-radius: 20px;
  animation-delay: 12s;
  animation-name: example6666;
}

.tubo{
  width: 15%;
  height: 3px;
  margin: 14px 0px 15px 20%;
  border: solid;
  border-top-left-radius: 20px;
  background-color: black;
  float: left;
}

.tubo2{
  width: 12%;
  height: 3px;
  margin: 14px 0px 15px 63%;
  border: solid;
  border-top-left-radius: 20px;
  background-color: black;
  float: left;
}

.tubo02{
  width: 15%;
  height: 15px;
}

.tubocom{
  width: 3px;
  height: 45px;
  margin: 20px 0px 0px 48.9%;
  border: solid;
  border-top-left-radius: 20px;
  background-color: black;
  clear: both;
}

.trian {
  width: 0;
  height: 0;
  border-right: 0px solid transparent;
  border-top: 20px solid transparent;
  border-left: 30px solid black;
  border-bottom: 20px solid transparent; 
  margin: 0px 0px 0px 0px;
  float: left;
}

.divaa{
  text-align: center;
  width: 20%;
  height: 250px;
  margin: 20px auto 0px auto;
  border-right: solid;
  border-left: solid;
  border-radius: 15px;
  background: white;
}

.tri {
  width: 0;
  height: 0;
  border-right: 0px solid transparent;
  border-top: 20px solid transparent;
  border-left: 30px solid black;
  border-bottom: 20px solid transparent; 
  margin: 0px 0px 0px 0px;
  float: left;
}

.tubocom2{
  width: 3px;
  height: 50px;
  margin: 10px 0px 0px 48.9%;
  border: solid;
  border-top-left-radius: 20px;
  border-bottom-right-radius: 20px;
  background-color: black;
}

.maa{
  border-radius: 10px;
  background-color: dodgerblue;
  position: relative;
  margin: 30px auto;
}

.madre{
  width: 90%;
  border-style: none solid solid none;
}

.madredos{
  height: 500px;
  width: 90%;
  border-style: solid none none solid;
}

.hijouno{
  width: 95%;
  height: 200px;
  margin: 0px auto 0px auto;
}

.hijodos{
  margin: 0px auto 0px auto;
  width: 95%;
  height: 50px;
}

.lab{
  border: solid;
  float: left;
 
}

.barras{
  margin-top: 92px;
  width: 100%;
  height: 170px;
  border-left: solid;
  border-bottom: solid;
  border-radius: 10px;
  background: white;
}

.divi1{
  position: relative;
  text-align: center;
  border: solid;
  width: 45px;
  height:16px;
  border-radius: 20px 20px 20px 0px;
  float: left;
  background:aqua;
}

.triri{
  padding-bottom: 110px;
}

.grande{
  position: relative;
 margin: 10px;
  width: 100%;
  height: 18px;
}

.btn{
  margin: 5px 0px 5px 0px;
  width: 100%;
  height: 35px;
  background: while;
  border-radius: 10px;
  border-style: none;
}
</style>
</html>
<!-- //////////////////////////////////////////////////////////-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>


</head>
<body>

  <div class="madre maa">
  <div class="tubo02"></div>
  <div class="tubo"></div>
  <div class="trian"></div>
  <div class="tubocom"></div>

  <div class="divaa">
  <div class="triri"></div>
  <label style="width: 45px; height:16px;">Proceso</label>
  </div>

  <div class="tubocom2"></div>
  <div class="tubo2"></div>
  <div class="tri"></div>

  <?php
  if(isset($_POST['regis1'])){
    $l1 = $_POST['l1'];
    $ll1 = $_POST['ll1'];

    $l5 = $l1;
  
    $ll5 = $ll1;
  
    $cambio = 0;

    $myArray = array($l5);
    $myArray2 = array(null);
    $myArray3 = array($ll5);

    $my = array($l5);
    sort($my);
    for($a = 0; $a < 1; $a++){
      $valor = $my[$a];
      for($i = 0; $i<1; $i++){
        if($valor == $myArray[$i]){
          if($a == 0){
            $cambio = $myArray[$i] + $myArray3[$i];
            $myArray2[$i] = $cambio;
          }else{
            $cambio += $myArray3[$i];
            $myArray2[$i] = $cambio;
          }
          $myArray[$i] = null;
            break;
        }
      }
      $my[$a] = null;
    }
    $r1 = bcdiv(($ll1) / ($myArray2[0] - $l1), '1', 3);

    $espera1 = ($myArray2[0] - $l1)-($ll1);
    if($espera1 <= 0){
        $espera1 = 0;
    }
   
 
    $promedio = bcdiv((($r1)/1), '1', 3);
    $promedio2 = bcdiv(((($myArray2[0] - $l1)-($ll1))/1), '1', 3);
    $promedio3 = bcdiv(((($myArray2[0] - $l1))/1), '1', 3);
?>
<div>
<div class="a1 total"><label>' A '</label></div>
</div>
  <table class="tabla">
  <tr class="Pri"><th>Proceso</th><th>T. Llegada</th><th>T. Salida</th><th>T. Ejecucíon</th><th>Servicio T.</th><th style="color:white;">Espera E</th><th>T. Indice</th></tr>
  <tr class="Secs"><th>[A]</th><th><?php echo $l1 ?></th><th><?php echo $myArray2[0] ?></th><th><?php echo $ll1 ?></th><th><?php echo ($myArray2[0] - $l1) ?></th><th class="E"><?php echo ($myArray2[0] - $l1)-($ll1) ?></th><th><?php echo $r1 ?></th></tr>
 
  <tr class="Secs"><th></th><th></th><th></th><th>Medias</th><th><?php echo $promedio3 ?></th><th class="E"><?php echo $promedio2 ?></th><th><?php echo $promedio ?></th></tr>
</table>
  <?php
  }
  ?>

  <?php 
  if(isset($_POST['regis2'])){
    $l1 = $_POST['l1'];
    $ll1 = $_POST['ll1'];
    $l2 = $_POST['l2'];
    $ll2 = $_POST['ll2'];

    $l5 = $l1;
    $l6 = $l2;
  
    $ll5 = $ll1;
    $ll6 = $ll2;
  
    $cambio = 0;

    $myArray = array($l5,$l6);
    $myArray2 = array(null,null);
    $myArray3 = array($ll5,$ll6);

    $my = array($l5,$l6);
    sort($my);
    for($a = 0; $a < 2; $a++){
      $valor = $my[$a];
      for($i = 0; $i<2; $i++){
        if($valor == $myArray[$i]){
          if($a == 0){
            $cambio = $myArray[$i] + $myArray3[$i];
            $myArray2[$i] = $cambio;
          }else{
            $cambio += $myArray3[$i];
if($myArray[$i] == $cambio){
                $cambio += $myArray3[$i];
                $myArray2[$i] = $cambio;
            }else{
                $myArray2[$i] = ($cambio);
            }
          }
          $myArray[$i] = null;
            break;
        }
      }
      $my[$a] = null;
    }
    $r1 = bcdiv(($ll1) / ($myArray2[0] - $l1), '1', 3);
    $r2 = bcdiv(($ll2) / ($myArray2[1] - $l2), '1', 3);

    $espera1 = ($myArray2[0] - $l1)-($ll1);
    $espera2 = ($myArray2[1] - $l2)-($ll2);
                       if($espera1 <= 0){
        $espera1 = 0;
    }
    if($espera2 <= 0){
        $espera2 = 0;
    }

 
    $promedio = bcdiv((($r1+$r2)/2), '1', 3);
    $promedio2 = bcdiv(((($myArray2[0] - $l1)-($ll1)+($myArray2[1] - $l2)-($ll2))/2), '1', 3);
    $promedio3 = bcdiv(((($myArray2[0] - $l1)+($myArray2[1] - $l2))/2), '1', 3);
//tiempo de llegada
$la = $l1;
$ls = $l2;
$myArray = array($la,$ls);
$arrayOrden = array(null,null);
$arrayValor = array("A","B");
$arrayLlegada = array($la,$ls);
sort($arrayLlegada);
for($a = 0; $a < 2; $a++){
  $valor = $arrayLlegada[$a];
  for($i = 0; $i<2; $i++){
    if($valor == $myArray[$i]){
        $arrayOrden[$a] = $arrayValor[$i];
        $myArray[$i] = null;
        break;
    }
  }
  $arrayLlegada[$a] = null;
}
?>
<div>
<div class="a1 total"><label>' <?php echo $arrayOrden[0] ?> '</label></div>
<div class="a2 total"><label>' <?php echo $arrayOrden[1] ?> '</label></div>
</div>
  <table class="tabla">
  <tr class="Pri"><th>Proceso</th><th>T. Llegada</th><th>T. Salida</th><th>T. Ejecucíon</th><th>Servicio T.</th><th style="color:white;">Espera E</th><th>T. Indice</th></tr>
  <tr class="Secs"><th>[A]</th><th><?php echo $l1 ?></th><th><?php echo $myArray2[0] ?></th><th><?php echo $ll1 ?></th><th><?php echo ($myArray2[0] - $l1) ?></th><th class="E"><?php echo ($myArray2[0] - $l1)-($ll1) ?></th><th><?php echo $r1 ?></th></tr>
  <tr class="Secs"><th>[B]</th><th><?php echo $l2 ?></th><th><?php echo $myArray2[1] ?></th><th><?php echo $ll2 ?></th><th><?php echo ($myArray2[1] - $l2) ?></th><th class="E"><?php echo ($myArray2[1] - $l2)-($ll2) ?></th><th><?php echo $r2 ?></th></tr>
 
  <tr class="Secs"><th></th><th></th><th></th><th>Medias</th><th><?php echo $promedio3 ?></th><th class="E"><?php echo $promedio2 ?></th><th><?php echo $promedio ?></th></tr>
</table>
  <?php
  }
  ?>

  <?php
  if(isset($_POST['regis3'])){
    $l1 = $_POST['l1'];
    $ll1 = $_POST['ll1'];
    $l2 = $_POST['l2'];
    $ll2 = $_POST['ll2'];
    $l3 = $_POST['l3'];
    $ll3 = $_POST['ll3'];

    $l5 = $l1;
    $l6 = $l2;
    $l7 = $l3;
  
    $ll5 = $ll1;
    $ll6 = $ll2;
    $ll7 = $ll3;
  
    $cambio = 0;
    $uno = 1;

    $myArray = array($l5,$l6,$l7);
    $myArray2 = array(null,null,null);
    $myArray3 = array($ll5,$ll6,$ll7);

    $my = array($l5,$l6,$l7);
    sort($my);
    for($a = 0; $a < 3; $a++){
      $valor = $my[$a];
      for($i = 0; $i<3; $i++){
        if($valor == $myArray[$i]){
          if($a == 0){
            $cambio = $myArray[$i] + $myArray3[$i];
            $myArray2[$i] = $cambio;
          }else{
            $cambio += $myArray3[$i];
            if($myArray[$i] == $cambio){
                $cambio += $myArray3[$i];
                $myArray2[$i] = $cambio;
            }else{
                $myArray2[$i] = ($cambio);
            }
          }
          $myArray[$i] = null;
            break;
        }
      }
      $my[$a] = null;
    }
    $r1 = bcdiv(($ll1) / ($myArray2[0] - $l1), '1', 3);
    $r2 = bcdiv(($ll2) / ($myArray2[1] - $l2), '1', 3);
    $r3 = bcdiv(($ll3) / ($myArray2[2] - $l3), '1', 3);
 
    $espera1 = ($myArray2[0] - $l1)-($ll1);
    $espera2 = ($myArray2[1] - $l2)-($ll2);
    $espera3 = ($myArray2[2] - $l3)-($ll3);
                    if($espera1 <= 0){
        $espera1 = 0;
    }
    if($espera2 <= 0){
        $espera2 = 0;
    }
    if($espera3 <= 0){
        $espera3 = 0;
    }
  

    $promedio = bcdiv((($r1+$r2+$r3)/3), '1', 3);
    $promedio2 = bcdiv(((($myArray2[0] - $l1)-($ll1)+($myArray2[1] - $l2)-($ll2)+($myArray2[2] - $l3)-($ll3))/3), '1', 3);
    $promedio3 = bcdiv(((($myArray2[0] - $l1)+($myArray2[1] - $l2)+($myArray2[2] - $l3))/3), '1', 3);

//tiempo de llegada
$la = $l1;
$ls = $l2;
$ld = $l3;
$myArray = array($la,$ls,$ld);
$arrayOrden = array(null,null,null);
$arrayValor = array("A","B","C");
$arrayLlegada = array($la,$ls,$ld);
sort($arrayLlegada);
for($a = 0; $a < 3; $a++){
  $valor = $arrayLlegada[$a];
  for($i = 0; $i<3; $i++){
    if($valor == $myArray[$i]){
        $arrayOrden[$a] = $arrayValor[$i];
        $myArray[$i] = null;
        break;
    }
  }
  $arrayLlegada[$a] = null;
}
?>
<div>
<div class="a1 total"><label>' <?php echo $arrayOrden[0] ?> '</label></div>
<div class="a2 total"><label>' <?php echo $arrayOrden[1] ?> '</label></div>
<div class="a3 total"><label>' <?php echo $arrayOrden[2] ?> '</label></div>
</div>

  <table class="tabla">
  <tr class="Pri"><th>Proceso</th><th>T. Llegada</th><th>T. Salida</th><th>T. Ejecucíon</th><th>Servicio T.</th><th style="color:white;">Espera E</th><th>T. Indice</th></tr>
  <tr class="Secs"><th>[A]</th><th><?php echo $l1 ?></th><th><?php echo $myArray2[0] ?></th><th><?php echo $ll1 ?></th><th><?php echo ($myArray2[0] - $l1) ?></th><th class="E"><?php echo ($myArray2[0] - $l1)-($ll1) ?></th><th><?php echo $r1 ?></th></tr>
  <tr class="Secs"><th>[B]</th><th><?php echo $l2 ?></th><th><?php echo $myArray2[1] ?></th><th><?php echo $ll2 ?></th><th><?php echo ($myArray2[1] - $l2) ?></th><th class="E"><?php echo ($myArray2[1] - $l2)-($ll2) ?></th><th><?php echo $r2 ?></th></tr>
  <tr class="Secs"><th>[C]</th><th><?php echo $l3 ?></th><th><?php echo $myArray2[2] ?></th><th><?php echo $ll3 ?></th><th><?php echo ($myArray2[2] - $l3) ?></th><th class="E"><?php echo ($myArray2[2] - $l3)-($ll3) ?></th><th><?php echo $r3 ?></th></tr>
 
  <tr class="Secs"><th></th><th></th><th></th><th>Medias</th><th><?php echo $promedio3 ?></th><th class="E"><?php echo $promedio2 ?></th><th><?php echo $promedio ?></th></tr>
</table>
  <?php
  }
  ?>

  <?php
  if(isset($_POST['regis4'])){
    $l1 = $_POST['l1'];
    $ll1 = $_POST['ll1'];
    $l2 = $_POST['l2'];
    $ll2 = $_POST['ll2'];
    $l3 = $_POST['l3'];
    $ll3 = $_POST['ll3'];
    $l4 = $_POST['l4'];
    $ll4 = $_POST['ll4'];
    $l5 = $l1;
    $l6 = $l2;
    $l7 = $l3;
    $l8 = $l4;
    $ll5 = $ll1;
    $ll6 = $ll2;
    $ll7 = $ll3;
    $ll8 = $ll4;
    $cambio = 0;

    $myArray = array($l5,$l6,$l7,$l8);
    $myArray2 = array(null,null,null,null);
    $myArray3 = array($ll5,$ll6,$ll7,$ll8);

    $my = array($l5,$l6,$l7,$l8);
    sort($my);

    for($a = 0; $a < 4; $a++){
      $valor = $my[$a];
      for($i = 0; $i<4; $i++){
        if($valor == $myArray[$i]){
          if($a == 0){
            $cambio = $myArray[$i] + $myArray3[$i];
            $myArray2[$i] = $cambio;
          }else{
            $cambio += $myArray3[$i];
if($myArray[$i] == $cambio){
                $cambio += $myArray3[$i];
                $myArray2[$i] = $cambio;
            }else{
                $myArray2[$i] = ($cambio);
            }
          }
          $myArray[$i] = null;
            break;
        }
      }
      $my[$a] = null;
    }

    $r1 = bcdiv(($ll1) / ($myArray2[0] - $l1), '1', 3);
    $r2 = bcdiv(($ll2) / ($myArray2[1] - $l2), '1', 3);
    $r3 = bcdiv(($ll3) / ($myArray2[2] - $l3), '1', 3);
    $r4 = bcdiv(($ll4) / ($myArray2[3] - $l4), '1', 3);

    $espera1 = ($myArray2[0] - $l1)-($ll1);
    $espera2 = ($myArray2[1] - $l2)-($ll2);
    $espera3 = ($myArray2[2] - $l3)-($ll3);
    $espera4 = ($myArray2[3] - $l4)-($ll4);
    
                if($espera1 <= 0){
        $espera1 = 0;
    }
    if($espera2 <= 0){
        $espera2 = 0;
    }
    if($espera3 <= 0){
        $espera3 = 0;
    }
    if($espera4 <= 0){
        $espera4 = 0;
    }


    $promedio = bcdiv((($r1+$r2+$r3+$r4)/4), '1', 3);
    $promedio2 = bcdiv(((($myArray2[0] - $l1)-($ll1)+($myArray2[1] - $l2)-($ll2)+($myArray2[2] - $l3)-($ll3)+($myArray2[3] - $l4)-($ll4))/4), '1', 3);
    $promedio3 = bcdiv(((($myArray2[0] - $l1)+($myArray2[1] - $l2)+($myArray2[2] - $l3)+($myArray2[3] - $l4))/4), '1', 3);
 
    //tiempo de llegada
  $la = $l1;
  $ls = $l2;
  $ld = $l3;
  $lf = $l4;
  $myArray = array($la,$ls,$ld,$lf);
  $arrayOrden = array(null,null,null,null);
  $arrayValor = array("A","B","C","D");
  $arrayLlegada = array($la,$ls,$ld,$lf);
  sort($arrayLlegada);
  for($a = 0; $a < 4; $a++){
    $valor = $arrayLlegada[$a];
    for($i = 0; $i<4; $i++){
      if($valor == $myArray[$i]){
          $arrayOrden[$a] = $arrayValor[$i];
          $myArray[$i] = null;
          break;
      }
    }
    $arrayLlegada[$a] = null;
  }
  ?>
  <div>
  <div class="a1 total"><label>' <?php echo $arrayOrden[0] ?> '</label></div>
  <div class="a2 total"><label>' <?php echo $arrayOrden[1] ?> '</label></div>
  <div class="a3 total"><label>' <?php echo $arrayOrden[2] ?> '</label></div>
  <div class="a4 total"><label>' <?php echo $arrayOrden[3] ?> '</label></div>
  </div>

  <table class="tabla">
  <tr class="Pri"><th>Proceso</th><th>T. Llegada</th><th>T. Salida</th><th>T. Ejecucíon</th><th>Servicio T.</th><th style="color:white;">Espera E</th><th>T. Indice</th></tr>
  <tr class="Secs"><th>[A]</th><th><?php echo $l1 ?></th><th><?php echo $myArray2[0] ?></th><th><?php echo $ll1 ?></th><th><?php echo ($myArray2[0] - $l1) ?></th><th class="E"><?php echo ($myArray2[0] - $l1)-($ll1) ?></th><th><?php echo $r1 ?></th></tr>
  <tr class="Secs"><th>[B]</th><th><?php echo $l2 ?></th><th><?php echo $myArray2[1] ?></th><th><?php echo $ll2 ?></th><th><?php echo ($myArray2[1] - $l2) ?></th><th class="E"><?php echo ($myArray2[1] - $l2)-($ll2) ?></th><th><?php echo $r2 ?></th></tr>
  <tr class="Secs"><th>[C]</th><th><?php echo $l3 ?></th><th><?php echo $myArray2[2] ?></th><th><?php echo $ll3 ?></th><th><?php echo ($myArray2[2] - $l3) ?></th><th class="E"><?php echo ($myArray2[2] - $l3)-($ll3) ?></th><th><?php echo $r3 ?></th></tr>
  <tr class="Secs"><th>[D]</th><th><?php echo $l4 ?></th><th><?php echo $myArray2[3] ?></th><th><?php echo $ll4 ?></th><th><?php echo ($myArray2[3] - $l4) ?></th><th class="E"><?php echo ($myArray2[3] - $l4)-($ll4) ?></th><th><?php echo $r4 ?></th></tr>
  <tr class="Secs"><th></th><th></th><th></th><th>Medias</th><th><?php echo $promedio3 ?></th><th class="E"><?php echo $promedio2 ?></th><th><?php echo $promedio ?></th></tr>
</table>

  <?php
  }
  ?>

  <?php
  if(isset($_POST['regis5'])){
    $l1 = $_POST['l1'];
    $ll1 = $_POST['ll1'];
    $l2 = $_POST['l2'];
    $ll2 = $_POST['ll2'];
    $l3 = $_POST['l3'];
    $ll3 = $_POST['ll3'];
    $l4 = $_POST['l4'];
    $ll4 = $_POST['ll4'];
    $lQ = $_POST['l5'];
    $llQ = $_POST['ll5'];

    $l5 = $l1;
    $l6 = $l2;
    $l7 = $l3;
    $l8 = $l4;
    $lQQ = $lQ;

    $ll5 = $ll1;
    $ll6 = $ll2;
    $ll7 = $ll3;
    $ll8 = $ll4;
    $llQQ = $llQ;
    $cambio = 0;
    

    $myArray = array($l5,$l6,$l7,$l8,$lQQ);
    $myArray2 = array(null,null,null,null,null);
    $myArray3 = array($ll5,$ll6,$ll7,$ll8,$llQQ);

    $my = array($l5,$l6,$l7,$l8,$lQQ);
    sort($my);

    for($a = 0; $a < 5; $a++){
      $valor = $my[$a];
      for($i = 0; $i<5; $i++){
        if($valor == $myArray[$i]){
          if($a == 0){
            $cambio = $myArray[$i] + $myArray3[$i];
            $myArray2[$i] = $cambio;
          }else{
              
              $cambio += $myArray3[$i];
if($myArray[$i] == $cambio){
                $cambio += $myArray3[$i];
                $myArray2[$i] = $cambio;
            }else{
                $myArray2[$i] = ($cambio);
            }
            
          }
          $myArray[$i] = null;
            break;
        }
      }
      $my[$a] = null;
    }
    
    
    $r1 = bcdiv(($ll1) / ($myArray2[0] - $l1), '1', 3);
    $r2 = bcdiv(($ll2) / ($myArray2[1] - $l2), '1', 3);
    $r3 = bcdiv(($ll3) / ($myArray2[2] - $l3), '1', 3);
    $r4 = bcdiv(($ll4) / ($myArray2[3] - $l4), '1', 3);
    $r5 = bcdiv(($llQ) / ($myArray2[4] - $lQ), '1', 3);

    $espera1 = ($myArray2[0] - $l1)-($ll1);
    $espera2 = ($myArray2[1] - $l2)-($ll2);
    $espera3 = ($myArray2[2] - $l3)-($ll3);
    $espera4 = ($myArray2[3] - $l4)-($ll4);
    $espera5 = ($myArray2[4] - $lQ)-($llQ);
    
        if($espera1 <= 0){
        $espera1 = 0;
    }
    if($espera2 <= 0){
        $espera2 = 0;
    }
    if($espera3 <= 0){
        $espera3 = 0;
    }
    if($espera4 <= 0){
        $espera4 = 0;
    }
    if($espera5 <= 0){
        $espera5 = 0;
    }
    

    $promedio = bcdiv((($r1+$r2+$r3+$r4+$r5)/5), '1', 3);
    $promedio2 = bcdiv(((($myArray2[0] - $l1)-($ll1)+($myArray2[1] - $l2)-($ll2)+($myArray2[2] - $l3)-($ll3)+($myArray2[3] - $l4)-($ll4)+($myArray2[4] - $lQ)-($llQ))/5), '1', 3);
    $promedio3 = bcdiv(((($myArray2[0] - $l1)+($myArray2[1] - $l2)+($myArray2[2] - $l3)+($myArray2[3] - $l4)+($myArray2[4] - $lQ))/5), '1', 3);
 
//tiempo de llegada
$la = $l1;
$ls = $l2;
$ld = $l3;
$lf = $l4;
$lg = $lQ;

$myArray = array($la,$ls,$ld,$lf,$lg);
$arrayOrden = array(null,null,null,null,null);
$arrayValor = array("A","B","C","D","E");
$arrayLlegada = array($la,$ls,$ld,$lf,$lg);
sort($arrayLlegada);
for($a = 0; $a < 5; $a++){
  $valor = $arrayLlegada[$a];
  for($i = 0; $i<5; $i++){
    if($valor == $myArray[$i]){
        $arrayOrden[$a] = $arrayValor[$i];
        $myArray[$i] = null;
        break;
    }
  }
  $arrayLlegada[$a] = null;
}
?>
<div>
<div class="a1 total"><label>' <?php echo $arrayOrden[0] ?> '</label></div>
<div class="a2 total"><label>' <?php echo $arrayOrden[1] ?> '</label></div>
<div class="a3 total"><label>' <?php echo $arrayOrden[2] ?> '</label></div>
<div class="a4 total"><label>' <?php echo $arrayOrden[3] ?> '</label></div>
<div class="a5 total"><label>' <?php echo $arrayOrden[4] ?> '</label></div>
</div>

  <table class="tabla">
  <tr class="Pri"><th>Proceso</th><th>T. Llegada</th><th>T. Salida</th><th>T. Ejecucíon</th><th>Servicio T.</th><th style="color:white;">Espera E</th><th>T. Indice</th></tr>
  <tr class="Secs"><th>[A]</th><th><?php echo $l1 ?></th><th><?php echo $myArray2[0] ?></th><th><?php echo $ll1 ?></th><th><?php echo ($myArray2[0] - $l1) ?></th><th class="E"><?php echo ($myArray2[0] - $l1)-($ll1) ?></th><th><?php echo $r1 ?></th></tr>
  <tr class="Secs"><th>[B]</th><th><?php echo $l2 ?></th><th><?php echo $myArray2[1] ?></th><th><?php echo $ll2 ?></th><th><?php echo ($myArray2[1] - $l2) ?></th><th class="E"><?php echo ($myArray2[1] - $l2)-($ll2) ?></th><th><?php echo $r2 ?></th></tr>
  <tr class="Secs"><th>[C]</th><th><?php echo $l3 ?></th><th><?php echo $myArray2[2] ?></th><th><?php echo $ll3 ?></th><th><?php echo ($myArray2[2] - $l3) ?></th><th class="E"><?php echo ($myArray2[2] - $l3)-($ll3) ?></th><th><?php echo $r3 ?></th></tr>
  <tr class="Secs"><th>[D]</th><th><?php echo $l4 ?></th><th><?php echo $myArray2[3] ?></th><th><?php echo $ll4 ?></th><th><?php echo ($myArray2[3] - $l4) ?></th><th class="E"><?php echo ($myArray2[3] - $l4)-($ll4) ?></th><th><?php echo $r4 ?></th></tr>
  <tr class="Secs"><th>[E]</th><th><?php echo $lQ ?></th><th><?php echo $myArray2[4] ?></th><th><?php echo $llQ ?></th><th><?php echo ($myArray2[4] - $lQ) ?></th><th class="E"><?php echo ($myArray2[4] - $lQ)-($llQ) ?></th><th><?php echo $r5 ?></th></tr>
  <tr class="Secs"><th></th><th></th><th></th><th>Medias</th><th><?php echo $promedio3 ?></th><th class="E"><?php echo $promedio2 ?></th><th><?php echo $promedio ?></th></tr>
</table>
  <?php
  }
  ?>

  <?php
  if(isset($_POST['regis6'])){
    $l1 = $_POST['l1'];
    $ll1 = $_POST['ll1'];
    $l2 = $_POST['l2'];
    $ll2 = $_POST['ll2'];
    $l3 = $_POST['l3'];
    $ll3 = $_POST['ll3'];
    $l4 = $_POST['l4'];
    $ll4 = $_POST['ll4'];
    $lQ = $_POST['l5'];
    $llQ = $_POST['ll5'];
    $lW = $_POST['l6'];
    $llW = $_POST['ll6'];

    $l5 = $l1;
    $l6 = $l2;
    $l7 = $l3;
    $l8 = $l4;
    $lQQ = $lQ;
    $lWW = $lW;
    $ll5 = $ll1;
    $ll6 = $ll2;
    $ll7 = $ll3;
    $ll8 = $ll4;
    $llQQ = $llQ;
    $llWW = $llW;
    $cambio = 0;

    $myArray = array($l5,$l6,$l7,$l8,$lQQ,$lWW);
    $myArray2 = array(null,null,null,null,null,null);
    $myArray3 = array($ll5,$ll6,$ll7,$ll8,$llQQ,$llWW);

    $my = array($l5,$l6,$l7,$l8,$lQQ,$lWW);
    sort($my);
    for($a = 0; $a < 6; $a++){
      $valor = $my[$a];
      for($i = 0; $i<6; $i++){
        if($valor == $myArray[$i]){
          if($a == 0){
            $cambio = $myArray[$i] + $myArray3[$i];
            $myArray2[$i] = $cambio;
          }else{
            $cambio += $myArray3[$i];
if($myArray[$i] == $cambio){
                $cambio += $myArray3[$i];
                $myArray2[$i] = $cambio;
            }else{
                $myArray2[$i] = ($cambio);
            }
          }
          $myArray[$i] = null;
            break;
        }
      }
      $my[$a] = null;
    }
    $r1 = bcdiv(($ll1) / ($myArray2[0] - $l1), '1', 3);
    $r2 = bcdiv(($ll2) / ($myArray2[1] - $l2), '1', 3);
    $r3 = bcdiv(($ll3) / ($myArray2[2] - $l3), '1', 3);
    $r4 = bcdiv(($ll4) / ($myArray2[3] - $l4), '1', 3);
    $r5 = bcdiv(($llQ) / ($myArray2[4] - $lQ), '1', 3);
    $r6 = bcdiv(($llW) / ($myArray2[5] - $lW), '1', 3);

    $espera1 = ($myArray2[0] - $l1)-($ll1);
    $espera2 = ($myArray2[1] - $l2)-($ll2);
    $espera3 = ($myArray2[2] - $l3)-($ll3);
    $espera4 = ($myArray2[3] - $l4)-($ll4);
    $espera5 = ($myArray2[4] - $lQ)-($llQ);
    $espera6 = ($myArray2[5] - $lW)-($llW);
    
            if($espera1 <= 0){
        $espera1 = 0;
    }
    if($espera2 <= 0){
        $espera2 = 0;
    }
    if($espera3 <= 0){
        $espera3 = 0;
    }
    if($espera4 <= 0){
        $espera4 = 0;
    }
    if($espera5 <= 0){
        $espera5 = 0;
    }
    if($espera6 <= 0){
    $espera6 = 0;
    }
/////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    $promedio = bcdiv((($r1+$r2+$r3+$r4+$r5+$r6)/6), '1', 3);
    $promedio2 = bcdiv(((($myArray2[0] - $l1)-($ll1)+($myArray2[1] - $l2)-($ll2)+($myArray2[2] - $l3)-($ll3)+($myArray2[3] - $l4)-($ll4)+($myArray2[4] - $lQ)-($llQ)+($myArray2[5] - $lW)-($llW))/6), '1', 3);
    $promedio3 = bcdiv(((($myArray2[0] - $l1)+($myArray2[1] - $l2)+($myArray2[2] - $l3)+($myArray2[3] - $l4)+($myArray2[4] - $lQ)+($myArray2[5] - $lW))/6), '1', 3);
  
  //tiempo de llegada
  $la = $l1;
  $ls = $l2;
  $ld = $l3;
  $lf = $l4;
  $lg = $lQ;
  $lh = $lW;

  $myArray = array($la,$ls,$ld,$lf,$lg,$lh);
  $arrayOrden = array(null,null,null,null,null,null);
  $arrayValor = array("A","B","C","D","E","F");

  $arrayLlegada = array($la,$ls,$ld,$lf,$lg,$lh);
  sort($arrayLlegada);

  for($a = 0; $a < 6; $a++){
    $valor = $arrayLlegada[$a];
    for($i = 0; $i<6; $i++){
      if($valor == $myArray[$i]){
          $arrayOrden[$a] = $arrayValor[$i];
          $myArray[$i] = null;
          break;
      }
    }
    $arrayLlegada[$a] = null;
  }
  ?>
  <div>
  <div class="a1 total"><label>' <?php echo $arrayOrden[0] ?> '</label></div>
  <div class="a2 total"><label>' <?php echo $arrayOrden[1] ?> '</label></div>
  <div class="a3 total"><label>' <?php echo $arrayOrden[2] ?> '</label></div>
  <div class="a4 total"><label>' <?php echo $arrayOrden[3] ?> '</label></div>
  <div class="a5 total"><label>' <?php echo $arrayOrden[4] ?> '</label></div>
  <div class="a6 total"><label>' <?php echo $arrayOrden[5] ?> '</label></div>
  </div>
  <table class="tabla">
  <tr class="Pri"><th>Proceso</th><th>T. Llegada</th><th>T. Salida</th><th>T. Ejecucíon</th><th>Servicio T.</th><th style="color:white;">Espera E</th><th>T. Indice</th></tr>
  <tr class="Secs"><th>[A]</th><th><?php echo $l1 ?></th><th><?php echo $myArray2[0] ?></th><th><?php echo $ll1 ?></th><th><?php echo ($myArray2[0] - $l1) ?></th><th class="E"><?php echo $espera1 ?></th><th><?php echo $r1 ?></th></tr>
  <tr class="Secs"><th>[B]</th><th><?php echo $l2 ?></th><th><?php echo $myArray2[1] ?></th><th><?php echo $ll2 ?></th><th><?php echo ($myArray2[1] - $l2) ?></th><th class="E"><?php echo $espera2 ?></th><th><?php echo $r2 ?></th></tr>
  <tr class="Secs"><th>[C]</th><th><?php echo $l3 ?></th><th><?php echo $myArray2[2] ?></th><th><?php echo $ll3 ?></th><th><?php echo ($myArray2[2] - $l3) ?></th><th class="E"><?php echo $espera3 ?></th><th><?php echo $r3 ?></th></tr>
  <tr class="Secs"><th>[D]</th><th><?php echo $l4 ?></th><th><?php echo $myArray2[3] ?></th><th><?php echo $ll4 ?></th><th><?php echo ($myArray2[3] - $l4) ?></th><th class="E"><?php echo $espera4 ?></th><th><?php echo $r4 ?></th></tr>
  <tr class="Secs"><th>[E]</th><th><?php echo $lQ ?></th><th><?php echo $myArray2[4] ?></th><th><?php echo $llQ ?></th><th><?php echo ($myArray2[4] - $lQ) ?></th><th class="E"><?php echo $espera5 ?></th><th><?php echo $r5 ?></th></tr>
  <tr class="Secs"><th>[F]</th><th><?php echo $lW ?></th><th><?php echo $myArray2[5] ?></th><th><?php echo $llW ?></th><th><?php echo ($myArray2[5] - $lW) ?></th><th class="E"><?php echo $espera6 ?></th><th><?php echo $r6 ?></th></tr>
  <tr class="Secs"><th></th><th></th><th></th><th>Medias</th><th><?php echo $promedio3 ?></th><th class="E"><?php echo $promedio2 ?></th><th><?php echo $promedio ?></th></tr>
</table>
  <?php
  }
  
  ?>
  </div>
  <div class="madredos maa">
    <div class="hijouno">
        <?php
      if(isset($_POST['regis1'])){
        $l1 = $_POST['l1'];
        $ll1 = $_POST['ll1'];
        //tiempo de llegada
        $la = $l1;
        //tiempo de ejecucion
        $lla = $ll1;
        //
        $es1 = $espera1;

        $myArray = array($la);

        $arrayOrden = array(null);
        $ordenE = array(null);
        $ordenTE = array(null);
//////////////////////////////////////////////////////////////////////
        $arrayValor = array("A");
        $arrayE = array($lla);
        $arrayxE = array($es1);

        $arrayLlegada2 = array($la);
        sort($arrayLlegada2);
        $arrayLlegada = array($la);
        sort($arrayLlegada);
////////////////////////////////////////////////////////////////////////////////////
        for($a = 0; $a < 1; $a++){
          $valor = $arrayLlegada[$a];

          for($i = 0; $i<1; $i++){
            if($valor == $myArray[$i]){
                $arrayOrden[$a] = $arrayValor[$i];
                $ordenE[$a] = $arrayxE[$i];
                $ordenTE[$a] = $arrayE[$i];
                $myArray[$i] = null;
                break;
            }
          }
          $arrayLlegada[$a] = null;
        }
        /////////////////////////////////////////////////////////////////////////////////////////////////////
        $aE1 = (string)$ordenTE[0] . "%";

        $bE1 = (string)$ordenE[0] . "%";

        $cE1 = (string)$arrayLlegada2[0] . "%";
//////////////////////////////////////////////////////////////////////////////////
      ?>
      <div class="barras">
      <div class="grande"></div>
      <div class="grande"></div>
      <div class="grande"></div>
      <div class="grande"></div>
      <div class="grande"></div>
        <div class="grande">
        <div class="divi1"><?php echo $arrayOrden[0]?></div><div class="c7 total2"><?php echo $arrayLlegada2[0]?></div><div class="a7 total2"><label><?php echo $ordenE[0]?></label></div><div class="b7 total2"><?php echo $ordenTE[0]?></div>
        </div>
      </div>
      <?php
      }
      ?>

      <?php 
      if(isset($_POST['regis2'])){
        $l1 = $_POST['l1'];
        $ll1 = $_POST['ll1'];
        $l2 = $_POST['l2'];
        $ll2 = $_POST['ll2'];
        //tiempo de llegada
        $la = $l1;
        $ls = $l2;
        //tiempo de ejecucion
        $lla = $ll1;
        $lls = $ll2;
        //
        $es1 = $espera1;
        $es2 = $espera2;

        $myArray = array($la,$ls);

        $arrayOrden = array(null,null);
        $ordenE = array(null,null);
        $ordenTE = array(null,null);
//////////////////////////////////////////////////////////////////////
        $arrayValor = array("A","B");
        $arrayE = array($lla,$lls);
        $arrayxE = array($es1,$es2);

        $arrayLlegada2 = array($la,$ls);
        sort($arrayLlegada2);
        $arrayLlegada = array($la,$ls);
        sort($arrayLlegada);
////////////////////////////////////////////////////////////////////////////////////
        for($a = 0; $a < 2; $a++){
          $valor = $arrayLlegada[$a];

          for($i = 0; $i<2; $i++){
            if($valor == $myArray[$i]){
                $arrayOrden[$a] = $arrayValor[$i];
                $ordenE[$a] = $arrayxE[$i];
                $ordenTE[$a] = $arrayE[$i];
                $myArray[$i] = null;
                break;
            }
          }
          $arrayLlegada[$a] = null;
        }
        /////////////////////////////////////////////////////////////////////////////////////////////////////
        $aE1 = (string)$ordenTE[0] . "%";
        $aE2 = (string)$ordenTE[1] . "%";

        $bE1 = (string)$ordenE[0] . "%";
        $bE2 = (string)$ordenE[1] . "%";

        $cE1 = (string)$arrayLlegada2[0] . "%";
        $cE2 = (string)$arrayLlegada2[1] . "%";
//////////////////////////////////////////////////////////////////////////////////
      ?>
      <div class="barras">
      <div class="grande"></div>
      <div class="grande"></div>
      <div class="grande"></div>
      <div class="grande"></div>
        <div class="grande">
        <div class="divi1"><?php echo $arrayOrden[1]?></div><div class="c8 total2"><?php echo $arrayLlegada2[1]?></div><div class="a8 total2"><label><?php echo $ordenE[1]?></label></div><div class="b8 total2"><?php echo $ordenTE[1]?></div>
        </div>
        <div class="grande">
        <div class="divi1"><?php echo $arrayOrden[0]?></div><div class="c7 total2"><?php echo $arrayLlegada2[0]?></div><div class="a7 total2"><label><?php echo $ordenE[0]?></label></div><div class="b7 total2"><?php echo $ordenTE[0]?></div>
        </div>
      </div>
      <?php
      }
      ?>

      <?php
      if(isset($_POST['regis3'])){
        $l1 = $_POST['l1'];
        $ll1 = $_POST['ll1'];
        $l2 = $_POST['l2'];
        $ll2 = $_POST['ll2'];
        $l3 = $_POST['l3'];
        $ll3 = $_POST['ll3'];
        //tiempo de llegada
        $la = $l1;
        $ls = $l2;
        $ld = $l3;
        //tiempo de ejecucion
        $lla = $ll1;
        $lls = $ll2;
        $lld = $ll3;
        //
        $es1 = $espera1;
        $es2 = $espera2;
        $es3 = $espera3;

        $myArray = array($la,$ls,$ld);

        $arrayOrden = array(null,null,null);
        $ordenE = array(null,null,null);
        $ordenTE = array(null,null,null);
//////////////////////////////////////////////////////////////////////
        $arrayValor = array("A","B","C");
        $arrayE = array($lla,$lls,$lld);
        $arrayxE = array($es1,$es2,$es3);

        $arrayLlegada2 = array($la,$ls,$ld);
        sort($arrayLlegada2);
        $arrayLlegada = array($la,$ls,$ld);
        sort($arrayLlegada);
////////////////////////////////////////////////////////////////////////////////////
        for($a = 0; $a < 3; $a++){
          $valor = $arrayLlegada[$a];

          for($i = 0; $i<3; $i++){
            if($valor == $myArray[$i]){
                $arrayOrden[$a] = $arrayValor[$i];
                $ordenE[$a] = $arrayxE[$i];
                $ordenTE[$a] = $arrayE[$i];
                $myArray[$i] = null;
                break;
            }
          }
          $arrayLlegada[$a] = null;
        }
        /////////////////////////////////////////////////////////////////////////////////////////////////////
        $aE1 = (string)$ordenTE[0] . "%";
        $aE2 = (string)$ordenTE[1] . "%";
        $aE3 = (string)$ordenTE[2] . "%";

        $bE1 = (string)$ordenE[0] . "%";
        $bE2 = (string)$ordenE[1] . "%";
        $bE3 = (string)$ordenE[2] . "%";

        $cE1 = (string)$arrayLlegada2[0] . "%";
        $cE2 = (string)$arrayLlegada2[1] . "%";
        $cE3 = (string)$arrayLlegada2[2] . "%";
//////////////////////////////////////////////////////////////////////////////////
      ?>
      <div class="barras">
      <div class="grande"></div>
      <div class="grande"></div>
      <div class="grande"></div>
        <div class="grande">
        <div class="divi1"><?php echo $arrayOrden[2]?></div><div class="c9 total2"><?php echo $arrayLlegada2[2]?></div><div class="a9 total2"><label><?php echo $ordenE[2]?></label></div><div class="b9 total2"><?php echo $ordenTE[2]?></div>
        </div>
        <div class="grande">
        <div class="divi1"><?php echo $arrayOrden[1]?></div><div class="c8 total2"><?php echo $arrayLlegada2[1]?></div><div class="a8 total2"><label><?php echo $ordenE[1]?></label></div><div class="b8 total2"><?php echo $ordenTE[1]?></div>
        </div>
        <div class="grande">
        <div class="divi1"><?php echo $arrayOrden[0]?></div><div class="c7 total2"><?php echo $arrayLlegada2[0]?></div><div class="a7 total2"><label><?php echo $ordenE[0]?></label></div><div class="b7 total2"><?php echo $ordenTE[0]?></div>
        </div>
      </div>
      <?php
      }
      ?>

      <?php
      if(isset($_POST['regis4'])){
        $l1 = $_POST['l1'];
        $ll1 = $_POST['ll1'];
        $l2 = $_POST['l2'];
        $ll2 = $_POST['ll2'];
        $l3 = $_POST['l3'];
        $ll3 = $_POST['ll3'];
        $l4 = $_POST['l4'];
        $ll4 = $_POST['ll4'];
        //tiempo de llegada
        $la = $l1;
        $ls = $l2;
        $ld = $l3;
        $lf = $l4;
        //tiempo de ejecucion
        $lla = $ll1;
        $lls = $ll2;
        $lld = $ll3;
        $llf = $ll4;
        //
        $es1 = $espera1;
        $es2 = $espera2;
        $es3 = $espera3;
        $es4 = $espera4;

        $myArray = array($la,$ls,$ld,$lf);

        $arrayOrden = array(null,null,null,null);
        $ordenE = array(null,null,null,null);
        $ordenTE = array(null,null,null,null);
//////////////////////////////////////////////////////////////////////
        $arrayValor = array("A","B","C","D");
        $arrayE = array($lla,$lls,$lld,$llf);
        $arrayxE = array($es1,$es2,$es3,$es4);

        $arrayLlegada2 = array($la,$ls,$ld,$lf);
        sort($arrayLlegada2);
        $arrayLlegada = array($la,$ls,$ld,$lf);
        sort($arrayLlegada);
////////////////////////////////////////////////////////////////////////////////////
        for($a = 0; $a < 4; $a++){
          $valor = $arrayLlegada[$a];

          for($i = 0; $i<4; $i++){
            if($valor == $myArray[$i]){
                $arrayOrden[$a] = $arrayValor[$i];
                $ordenE[$a] = $arrayxE[$i];
                $ordenTE[$a] = $arrayE[$i];
                $myArray[$i] = null;
                break;
            }
          }
          $arrayLlegada[$a] = null;
        }
        /////////////////////////////////////////////////////////////////////////////////////////////////////
        $aE1 = (string)$ordenTE[0] . "%";
        $aE2 = (string)$ordenTE[1] . "%";
        $aE3 = (string)$ordenTE[2] . "%";
        $aE4 = (string)$ordenTE[3] . "%";

        $bE1 = (string)$ordenE[0] . "%";
        $bE2 = (string)$ordenE[1] . "%";
        $bE3 = (string)$ordenE[2] . "%";
        $bE4 = (string)$ordenE[3] . "%";

        $cE1 = (string)$arrayLlegada2[0] . "%";
        $cE2 = (string)$arrayLlegada2[1] . "%";
        $cE3 = (string)$arrayLlegada2[2] . "%";
        $cE4 = (string)$arrayLlegada2[3] . "%";
//////////////////////////////////////////////////////////////////////////////////
      ?>
      <div class="barras">
      <div class="grande"></div>
      <div class="grande"></div>
        <div class="grande">
        <div class="divi1"><?php echo $arrayOrden[3]?></div><div class="c10 total2"><?php echo $arrayLlegada2[3]?></div><div class="a10 total2"><label><?php echo $ordenE[3]?></label></div><div class="b10 total2"><?php echo $ordenTE[3]?></div>
        </div>
        <div class="grande">
        <div class="divi1"><?php echo $arrayOrden[2]?></div><div class="c9 total2"><?php echo $arrayLlegada2[2]?></div><div class="a9 total2"><label><?php echo $ordenE[2]?></label></div><div class="b9 total2"><?php echo $ordenTE[2]?></div>
        </div>
        <div class="grande">
        <div class="divi1"><?php echo $arrayOrden[1]?></div><div class="c8 total2"><?php echo $arrayLlegada2[1]?></div><div class="a8 total2"><label><?php echo $ordenE[1]?></label></div><div class="b8 total2"><?php echo $ordenTE[1]?></div>
        </div>
        <div class="grande">
        <div class="divi1"><?php echo $arrayOrden[0]?></div><div class="c7 total2"><?php echo $arrayLlegada2[0]?></div><div class="a7 total2"><label><?php echo $ordenE[0]?></label></div><div class="b7 total2"><?php echo $ordenTE[0]?></div>
        </div>
      </div>
      <?php
      }
      ?>

      <?php
      if(isset($_POST['regis5'])){
        $l1 = $_POST['l1'];
        $ll1 = $_POST['ll1'];
        $l2 = $_POST['l2'];
        $ll2 = $_POST['ll2'];
        $l3 = $_POST['l3'];
        $ll3 = $_POST['ll3'];
        $l4 = $_POST['l4'];
        $ll4 = $_POST['ll4'];
        $l5 = $_POST['l5'];
        $ll5 = $_POST['ll5'];
        //tiempo de llegada
        $la = $l1;
        $ls = $l2;
        $ld = $l3;
        $lf = $l4;
        $lg = $l5;
        //tiempo de ejecucion
        $lla = $ll1;
        $lls = $ll2;
        $lld = $ll3;
        $llf = $ll4;
        $llg = $ll5;
        //
        $es1 = $espera1;
        $es2 = $espera2;
        $es3 = $espera3;
        $es4 = $espera4;
        $es5 = $espera5;

        $myArray = array($la,$ls,$ld,$lf,$lg);

        $arrayOrden = array(null,null,null,null,null);
        $ordenE = array(null,null,null,null,null);
        $ordenTE = array(null,null,null,null,null);
//////////////////////////////////////////////////////////////////////
        $arrayValor = array("A","B","C","D","E");
        $arrayE = array($lla,$lls,$lld,$llf,$llg);
        $arrayxE = array($es1,$es2,$es3,$es4,$es5);

        $arrayLlegada2 = array($la,$ls,$ld,$lf,$lg);
        sort($arrayLlegada2);
        $arrayLlegada = array($la,$ls,$ld,$lf,$lg);
        sort($arrayLlegada);
////////////////////////////////////////////////////////////////////////////////////
        for($a = 0; $a < 5; $a++){
          $valor = $arrayLlegada[$a];

          for($i = 0; $i<5; $i++){
            if($valor == $myArray[$i]){
                $arrayOrden[$a] = $arrayValor[$i];
                $ordenE[$a] = $arrayxE[$i];
                $ordenTE[$a] = $arrayE[$i];
                $myArray[$i] = null;
                break;
            }
          }
          $arrayLlegada[$a] = null;
        }
        /////////////////////////////////////////////////////////////////////////////////////////////////////
        $aE1 = (string)$ordenTE[0] . "%";
        $aE2 = (string)$ordenTE[1] . "%";
        $aE3 = (string)$ordenTE[2] . "%";
        $aE4 = (string)$ordenTE[3] . "%";
        $aE5 = (string)$ordenTE[4] . "%"; 

        $bE1 = (string)$ordenE[0] . "%";
        $bE2 = (string)$ordenE[1] . "%";
        $bE3 = (string)$ordenE[2] . "%";
        $bE4 = (string)$ordenE[3] . "%";
        $bE5 = (string)$ordenE[4] . "%"; 

        $cE1 = (string)$arrayLlegada2[0] . "%";
        $cE2 = (string)$arrayLlegada2[1] . "%";
        $cE3 = (string)$arrayLlegada2[2] . "%";
        $cE4 = (string)$arrayLlegada2[3] . "%";
        $cE5 = (string)$arrayLlegada2[4] . "%"; 
//////////////////////////////////////////////////////////////////////////////////
      ?>
      <div class="barras">
      <div class="grande"></div>
        <div class="grande">
        <div class="divi1"><?php echo $arrayOrden[4]?></div><div class="c11 total2"><?php echo $arrayLlegada2[4]?></div><div class="a11 total2"><label><?php echo $ordenE[4]?></label></div><div class="b11 total2"><?php echo $ordenTE[4]?></div>
        </div>
        <div class="grande">
        <div class="divi1"><?php echo $arrayOrden[3]?></div><div class="c10 total2"><?php echo $arrayLlegada2[3]?></div><div class="a10 total2"><label><?php echo $ordenE[3]?></label></div><div class="b10 total2"><?php echo $ordenTE[3]?></div>
        </div>
        <div class="grande">
        <div class="divi1"><?php echo $arrayOrden[2]?></div><div class="c9 total2"><?php echo $arrayLlegada2[2]?></div><div class="a9 total2"><label><?php echo $ordenE[2]?></label></div><div class="b9 total2"><?php echo $ordenTE[2]?></div>
        </div>
        <div class="grande">
        <div class="divi1"><?php echo $arrayOrden[1]?></div><div class="c8 total2"><?php echo $arrayLlegada2[1]?></div><div class="a8 total2"><label><?php echo $ordenE[1]?></label></div><div class="b8 total2"><?php echo $ordenTE[1]?></div>
        </div>
        <div class="grande">
        <div class="divi1"><?php echo $arrayOrden[0]?></div><div class="c7 total2"><?php echo $arrayLlegada2[0]?></div><div class="a7 total2"><label><?php echo $ordenE[0]?></label></div><div class="b7 total2"><?php echo $ordenTE[0]?></div>
        </div>
      </div>
    
      <?php
      }
      ?>
      <?php
      if(isset($_POST['regis6'])){
        $l1 = $_POST['l1'];
        $ll1 = $_POST['ll1'];
        $l2 = $_POST['l2'];
        $ll2 = $_POST['ll2'];
        $l3 = $_POST['l3'];
        $ll3 = $_POST['ll3'];
        $l4 = $_POST['l4'];
        $ll4 = $_POST['ll4'];
        $l5 = $_POST['l5'];
        $ll5 = $_POST['ll5'];
        $l6 = $_POST['l6'];
        $ll6 = $_POST['ll6'];
        //tiempo de llegada
        $la = $l1;
        $ls = $l2;
        $ld = $l3;
        $lf = $l4;
        $lg = $l5;
        $lh = $l6;
        //tiempo de ejecucion
        $lla = $ll1;
        $lls = $ll2;
        $lld = $ll3;
        $llf = $ll4;
        $llg = $ll5;
        $llh = $ll6;
        //
        $es1 = $espera1;
        $es2 = $espera2;
        $es3 = $espera3;
        $es4 = $espera4;
        $es5 = $espera5;
        $es6 = $espera6;

        $myArray = array($la,$ls,$ld,$lf,$lg,$lh);

        $arrayOrden = array(null,null,null,null,null,null);
        $ordenE = array(null,null,null,null,null,null);
        $ordenTE = array(null,null,null,null,null,null);
//////////////////////////////////////////////////////////////////////
        $arrayValor = array("A","B","C","D","E","F");
        $arrayE = array($lla,$lls,$lld,$llf,$llg,$llh);
        $arrayxE = array($es1,$es2,$es3,$es4,$es5,$es6);

        $arrayLlegada2 = array($la,$ls,$ld,$lf,$lg,$lh);
        sort($arrayLlegada2);
        $arrayLlegada = array($la,$ls,$ld,$lf,$lg,$lh);
        sort($arrayLlegada);
////////////////////////////////////////////////////////////////////////////////////
        for($a = 0; $a < 6; $a++){
          $valor = $arrayLlegada[$a];

          for($i = 0; $i<6; $i++){
            if($valor == $myArray[$i]){
                $arrayOrden[$a] = $arrayValor[$i];
                $ordenE[$a] = $arrayxE[$i];
                $ordenTE[$a] = $arrayE[$i];
                $myArray[$i] = null;
                break;
            }
          }
          $arrayLlegada[$a] = null;
        }
        /////////////////////////////////////////////////////////////////////////////////////////////////////
        $aE1 = (string)$ordenTE[0] . "%";
        $aE2 = (string)$ordenTE[1] . "%";
        $aE3 = (string)$ordenTE[2] . "%";
        $aE4 = (string)$ordenTE[3] . "%";
        $aE5 = (string)$ordenTE[4] . "%"; 
        $aE6 = (string)$ordenTE[5] . "%";

        $bE1 = (string)$ordenE[0] . "%";
        $bE2 = (string)$ordenE[1] . "%";
        $bE3 = (string)$ordenE[2] . "%";
        $bE4 = (string)$ordenE[3] . "%";
        $bE5 = (string)$ordenE[4] . "%"; 
        $bE6 = (string)$ordenE[5] . "%";

        $cE1 = (string)$arrayLlegada2[0] . "%";
        $cE2 = (string)$arrayLlegada2[1] . "%";
        $cE3 = (string)$arrayLlegada2[2] . "%";
        $cE4 = (string)$arrayLlegada2[3] . "%";
        $cE5 = (string)$arrayLlegada2[4] . "%"; 
        $cE6 = (string)$arrayLlegada2[5] . "%";
//////////////////////////////////////////////////////////////////////////////////
      ?>
      <div class="barras">
        <div class="grande">
        <div class="divi1"><?php echo $arrayOrden[5]?></div><div class="c12 total2"><?php echo $arrayLlegada2[5]?></div><div class="a12 total2"><label><?php echo $ordenE[5]?></label></div><div class="b12 total2"><?php echo $ordenTE[5]?></div>
        </div>
        <div class="grande">
        <div class="divi1"><?php echo $arrayOrden[4]?></div><div class="c11 total2"><?php echo $arrayLlegada2[4]?></div><div class="a11 total2"><label><?php echo $ordenE[4]?></label></div><div class="b11 total2"><?php echo $ordenTE[4]?></div>
        </div>
        <div class="grande">
        <div class="divi1"><?php echo $arrayOrden[3]?></div><div class="c10 total2"><?php echo $arrayLlegada2[3]?></div><div class="a10 total2"><label><?php echo $ordenE[3]?></label></div><div class="b10 total2"><?php echo $ordenTE[3]?></div>
        </div>
        <div class="grande">
        <div class="divi1"><?php echo $arrayOrden[2]?></div><div class="c9 total2"><?php echo $arrayLlegada2[2]?></div><div class="a9 total2"><label><?php echo $ordenE[2]?></label></div><div class="b9 total2"><?php echo $ordenTE[2]?></div>
        </div>
        <div class="grande">
        <div class="divi1"><?php echo $arrayOrden[1]?></div><div class="c8 total2"><?php echo $arrayLlegada2[1]?></div><div class="a8 total2"><label><?php echo $ordenE[1]?></label></div><div class="b8 total2"><?php echo $ordenTE[1]?></div>
        </div>
        <div class="grande">
        <div class="divi1"><?php echo $arrayOrden[0]?></div><div class="c7 total2"><?php echo $arrayLlegada2[0]?></div><div class="a7 total2"><label><?php echo $ordenE[0]?></label></div><div class="b7 total2"><?php echo $ordenTE[0]?></div>
        </div>
      </div>
      <?php
      }
////////////////////////////////////////////////////////////////////////////////
      ?>
    </div>
    <div class="hijodos">
    <input class="btn" type="button" value="Refrescar" onclick="refreshPage()">
    <input class="btn" type="button" value="Inicio" onclick="changeStyle()">
    </div>
  </div>
  <script type="text/javascript">
  function refreshPage(){
      window.location.reload();
  } 
  </script>
</body>
<style>

:root {
    --ancho1: <?php echo $bE1 ?>;
    --ancho2: <?php echo $bE2 ?>;
    --ancho3: <?php echo $bE3 ?>;
    --ancho4: <?php echo $bE4 ?>;
    --ancho5: <?php echo $bE5 ?>;
    --ancho6: <?php echo $bE6 ?>;

    --ancho7: <?php echo $aE1 ?>;
    --ancho8: <?php echo $aE2 ?>;
    --ancho9: <?php echo $aE3 ?>;
    --ancho10: <?php echo $aE4 ?>;
    --ancho11: <?php echo $aE5 ?>;
    --ancho12: <?php echo $aE6 ?>;

    --ancho13: <?php echo $cE1 ?>;
    --ancho14: <?php echo $cE2 ?>;
    --ancho15: <?php echo $cE3 ?>;
    --ancho16: <?php echo $cE4 ?>;
    --ancho17: <?php echo $cE5 ?>;
    --ancho18: <?php echo $cE6 ?>;
}

body{
  margin: 0px;
 
}

.tabla{
  width:95%;
  margin: 70px auto 70px;
  border:solid;
  border-radius: 15px;
}

.Pri{
  background: dodgerblue;
  height: 40px;
}

.Secs{
  height: 40px;
}

.E{
  color: darkmagenta;
}

tr:nth-child(even){background-color: #f2f2f2}

.total{
  color: dodgerblue;
  text-align: center;
  position: absolute;
  animation-name: example;
  animation-fill-mode: forwards;
  animation-duration: 12s;
  transition: width 2s, height 2s, transform 2s;
}

@keyframes example {
  
  0%   {left:5%; top:22px; width: 50px;height: 20px; font-size: 15px; border: solid;background: white;transform: rotate(0deg);}

  33%  {left:45.5%; top:22px; width: 50px;height: 20px; border-radius: 50px; font-size: 15px; border: solid;background: white;transform: rotate(0deg);}
  35%  {left:45.5%; top:22px; width: 50px;height: 80px; border-radius: 10%;font-size: 0px;border: solid;background: white;}

  66%  {left:45.5%; top:450px; width: 50px;height: 20px; border-radius: 10%; font-size: 0px;border: solid;background: darkmagenta;transform: rotate(360deg);}
  70%  {left:45.5%; top:450px; width: 80px;height: 20px;border-radius: 50px;font-size: 15px;border: solid;background: white;transform: rotate(360deg);}

  99%  {left:85%; top:450px; width: 50px;height: 20px; font-size: 15px;border: solid;background: white;transform: rotate(360deg);}
  100%   {left:85%; top:450px; width: 0px;height: 0px; font-size: 0px; border-style: none; transform: rotate(360deg);}
}

.a1{
  animation-delay: 1s;  
}

.a2{
  animation-delay: 2s;
}

.a3{
  animation-delay: 3s;
}

.a4{
  animation-delay: 4s;
}

.a5{
  animation-delay: 5s; 
}
.a6{
  animation-delay: 6s; 
}

.total2{
  text-align: center;
  color: white;
  width: 0px;
  height: 21px;
  position: relative;
  float: left;
  animation-fill-mode: forwards;
  animation-duration: 4s;
  
}

@keyframes example11 {
  0% {width: 0px; background: white;}
  100% {width: var(--ancho1); background:darkmagenta;}
}

@keyframes example22 {
  0% {width: 0px; background: white;}
  100% {width: var(--ancho2); background:darkmagenta;}
}

@keyframes example33 {
  0% {width: 0px; background: white;}
  100% { width: var(--ancho3); background:darkmagenta;}
}

@keyframes example44 {
  0% {width: 0px; background: white;}
  100% {width: var(--ancho4); background:darkmagenta;}
}

@keyframes example55 {
  0% { width: 0px; background: white;}
  100% { width: var(--ancho5); background:darkmagenta;}
}

@keyframes example66 {
  0% { width: 0px; background: white;}
  100% { width: var(--ancho6); background:darkmagenta;}
}

@keyframes example111 {
  0% {width: 0px; background: white;}
  100% {width: var(--ancho7); background:dodgerblue;}
}

@keyframes example222 {
  0% {width: 0px; background: white;}
  100% {width: var(--ancho8); background:dodgerblue;}
}

@keyframes example333 {
  0% {width: 0px; background: white;}
  100% { width: var(--ancho9); background:dodgerblue;}
}

@keyframes example444 {
  0% {width: 0px; background: white;}
  100% {width: var(--ancho10); background:dodgerblue;}
}

@keyframes example555 {
  0% { width: 0px; background: white;}
  100% { width: var(--ancho11); background:dodgerblue;}
}

@keyframes example666 {
  0% { width: 0px; background: white;}
  100% { width: var(--ancho12); background:dodgerblue;}
}

@keyframes example1111 {
  0% {width: 0px; background: white;}
  100% {width: var(--ancho13); background:gray;}
}

@keyframes example2222 {
  0% {width: 0px; background: white;}
  100% {width: var(--ancho14); background:gray;}
}

@keyframes example3333 {
  0% {width: 0px; background: white;}
  100% { width: var(--ancho15); background:gray;}
}

@keyframes example4444 {
  0% {width: 0px; background: white;}
  100% {width: var(--ancho16); background:gray;}
}

@keyframes example5555 {
  0% { width: 0px; background: white;}
  100% { width: var(--ancho17); background:gray;}
}

@keyframes example6666 {
  0% { width: 0px; background: white;}
  100% { width: var(--ancho18); background:gray;}
}

.a7{
  border-bottom-right-radius: 20px;
  animation-delay: 0s;
  animation-name: example11;
}

.a8{
  border-bottom-right-radius: 20px;
  animation-delay: 1s;
  animation-name: example22;
}

.a9{
  border-bottom-right-radius: 20px;
  animation-delay: 3s;
  animation-name: example33;
}

.a10{
  border-bottom-right-radius: 20px;
  animation-delay: 6s;
  animation-name: example44;
}

.a11{
  border-bottom-right-radius: 20px;
  animation-delay: 9s;
  animation-name: example55;
}
.a12{
  border-bottom-right-radius: 20px;
  animation-delay: 12s;
  animation-name: example66;
}

.b7{
  animation-delay: 0s;
  animation-name: example111;
}

.b8{
  animation-delay: 1s;
  animation-name: example222;
}

.b9{
  animation-delay: 3s;
  animation-name: example333;
}

.b10{
  animation-delay: 6s;
  animation-name: example444;
}

.b11{
  animation-delay: 9s;
  animation-name: example555;
}
.b12{
  animation-delay: 12s;
  animation-name: example666;
}

.c7{
  border-bottom-right-radius: 20px;
  animation-delay: 0s;
  animation-name: example1111;
}

.c8{
  border-bottom-right-radius: 20px;
  animation-delay: 1s;
  animation-name: example2222;
}

.c9{
  border-bottom-right-radius: 20px;
  animation-delay: 3s;
  animation-name: example3333;
}

.c10{
  border-bottom-right-radius: 20px;
  animation-delay: 6s;
  animation-name: example4444;
}

.c11{
  border-bottom-right-radius: 20px;
  animation-delay: 9s;
  animation-name: example5555;
}
.c12{
  border-bottom-right-radius: 20px;
  animation-delay: 12s;
  animation-name: example6666;
}

.tubo{
  width: 15%;
  height: 3px;
  margin: 14px 0px 15px 20%;
  border: solid;
  border-top-left-radius: 20px;
  background-color: black;
  float: left;
}

.tubo2{
  width: 12%;
  height: 3px;
  margin: 14px 0px 15px 63%;
  border: solid;
  border-top-left-radius: 20px;
  background-color: black;
  float: left;
}

.tubo02{
  width: 15%;
  height: 15px;
}

.tubocom{
  width: 3px;
  height: 45px;
  margin: 20px 0px 0px 48.9%;
  border: solid;
  border-top-left-radius: 20px;
  background-color: black;
  clear: both;
}

.trian {
  width: 0;
  height: 0;
  border-right: 0px solid transparent;
  border-top: 20px solid transparent;
  border-left: 30px solid black;
  border-bottom: 20px solid transparent; 
  margin: 0px 0px 0px 0px;
  float: left;
}

.divaa{
  text-align: center;
  width: 20%;
  height: 250px;
  margin: 20px auto 0px auto;
  border-right: solid;
  border-left: solid;
  border-radius: 15px;
  background: white;
}

.tri {
  width: 0;
  height: 0;
  border-right: 0px solid transparent;
  border-top: 20px solid transparent;
  border-left: 30px solid black;
  border-bottom: 20px solid transparent; 
  margin: 0px 0px 0px 0px;
  float: left;
}

.tubocom2{
  width: 3px;
  height: 50px;
  margin: 10px 0px 0px 48.9%;
  border: solid;
  border-top-left-radius: 20px;
  border-bottom-right-radius: 20px;
  background-color: black;
}

.maa{
  border-radius: 10px;
  background-color: dodgerblue;
  position: relative;
  margin: 30px auto;
}

.madre{
  width: 90%;
  border-style: none solid solid none;
}

.madredos{
  height: 500px;
  width: 90%;
  border-style: solid none none solid;
}

.hijouno{
  width: 95%;
  height: 200px;
  margin: 0px auto 0px auto;
}

.hijodos{
  margin: 0px auto 0px auto;
  width: 95%;
  height: 50px;
}

.lab{
  border: solid;
  float: left;
 
}

.barras{
  margin-top: 92px;
  width: 100%;
  height: 170px;
  border-left: solid;
  border-bottom: solid;
  border-radius: 10px;
  background: white;
}

.divi1{
  position: relative;
  text-align: center;
  border: solid;
  width: 45px;
  height:16px;
  border-radius: 20px 20px 20px 0px;
  float: left;
  background:aqua;
}

.triri{
  padding-bottom: 110px;
}

.grande{
  position: relative;
 margin: 10px;
  width: 100%;
  height: 18px;
}

.btn{
  margin: 5px 0px 5px 0px;
  width: 100%;
  height: 35px;
  background: while;
  border-radius: 10px;
  border-style: none;
}
</style>
</html>