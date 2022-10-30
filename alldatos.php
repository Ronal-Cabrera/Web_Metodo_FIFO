<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
body{
  background:cornflowerblue;
}

.dato{
  border-style: none;
  text-align: center;
  font-size: 15px;
  width: 120px;
  height: 40px;
  border-radius: 15px;
  margin: 0px 0px 0px 315px;
}

.divPrimer{
  border-style: solid;
  width: 60%;
  margin: 50px auto;
  border-radius: 15px;
  background: url(internet.jpeg);
  background-size: cover;
}

.resgistrar{
  border-style: none;
  font-size: 15px;
  width: 130px;
  height: 40px;
  border-radius: 15px;
  margin: 10px 0px 0px 90px;
}

h3{
  color: white;
}

.numero{
  text-align: center;
  font-size: 30px;
  width: 50px;
  height: 50px;
  border-radius: 15px;
 margin: 10px 23px 8px 23px;
 border-style: none;
 background-color: white;
 color: black;
}

.cuadrar{
  margin: auto;
  width: 310px;
}

label{
  margin: 10px 0px 5px 110px;
  font-size: 20px;
  color: white;
}
    </style>
</head>
<body>

<?php
if(isset($_POST['datos'])){

$Number = $_POST['datonumber'];
if($Number == null){
  header("Location: index.php");
}

if($Number == 1){

  ?>
  <div class="divPrimer">
    <div class="cuadrar">
      <form action="control.php" method="POST">
        <label></label><br/>
        <label>T. llegada | T. ejecución</label><br/>
        <label class="numero" style="border: solid white;">' A '</label>
        <input class="numero" value="0" type="number" id="quantity" name="l1" min="0" max="45" onkeydown="return false">
        <input class="numero" value="1" type="number" id="quantity" name="ll1" min="1" max="9" onkeydown="return false"><br/>
        <input type="submit" class="resgistrar" name="regis1" value="Enviar">
      </form>
    </div>
    <a href="index.php"><h3 style="margin: 10px 10px;">Regresar </h3></a>
  </div>
  <?php

}else if($Number == 2){

  ?>
  <div class="divPrimer">
    <div class="cuadrar">
      <form action="control.php" method="POST">
        <label></label><br/>
        <label>T. llegada | T. ejecución</label><br/>
        <label class="numero" style="border: solid white;">' A '</label>
        <input class="numero" value="0" type="number" id="quantity" name="l1" min="0" max="45" onkeydown="return false">
        <input class="numero" value="1" type="number" id="quantity" name="ll1" min="1" max="9" onkeydown="return false"><br/>
        <label class="numero" style="border: solid white;">' B '</label>
        <input class="numero" value="0" type="number" id="quantity" name="l2" min="0" max="45" onkeydown="return false">
        <input class="numero" value="1" type="number" id="quantity" name="ll2" min="1" max="9" onkeydown="return false"><br/>
        <input type="submit" class="resgistrar" name="regis2" value="Enviar">
      </form>
    </div>
    <a href="index.php"><h3 style="margin: 10px 10px;">Regresar </h3></a>
  </div>
  <?php

}else if($Number == 3){

  ?>
<div class="divPrimer">
    <div class="cuadrar">
      <form action="control.php" method="POST">
        <label></label><br/>
        <label>T. llegada | T. ejecución</label><br/>
        <label class="numero" style="border: solid white;">' A '</label>
        <input class="numero" value="0" type="number" id="quantity" name="l1" min="0" max="45" onkeydown="return false">
        <input class="numero" value="1" type="number" id="quantity" name="ll1" min="1" max="9" onkeydown="return false"><br/>
        <label class="numero" style="border: solid white;">' B '</label>
        <input class="numero" value="0" type="number" id="quantity" name="l2" min="0" max="45" onkeydown="return false">
        <input class="numero" value="1" type="number" id="quantity" name="ll2" min="1" max="9" onkeydown="return false"><br/>
        <label class="numero" style="border: solid white;">' C '</label>
        <input class="numero" value="0" type="number" id="quantity" name="l3" min="0" max="45" onkeydown="return false">
        <input class="numero" value="1" type="number" id="quantity" name="ll3" min="1" max="9" onkeydown="return false"><br/>
        <input type="submit" class="resgistrar" name="regis3" value="Enviar">
      </form>
    </div>
    <a href="index.php"><h3 style="margin: 10px 10px;">Regresar </h3></a>
  </div>
  <?php

}else if($Number == 4){

  ?>
  <div class="divPrimer">
    <div class="cuadrar">
      <form action="control.php" method="POST">
        <label></label><br/>
        <label>T. llegada | T. ejecución</label><br/>
        <label class="numero" style="border: solid white;">' A '</label>
        <input class="numero" value="0" type="number" id="quantity" name="l1" min="0" max="45" onkeydown="return false">
        <input class="numero" value="1" type="number" id="quantity" name="ll1" min="1" max="9" onkeydown="return false"><br/>
        <label class="numero" style="border: solid white;">' B '</label>
        <input class="numero" value="0" type="number" id="quantity" name="l2" min="0" max="45" onkeydown="return false">
        <input class="numero" value="1" type="number" id="quantity" name="ll2" min="1" max="9" onkeydown="return false"><br/>
        <label class="numero" style="border: solid white;">' C '</label>
        <input class="numero" value="0" type="number" id="quantity" name="l3" min="0" max="45" onkeydown="return false">
        <input class="numero" value="1" type="number" id="quantity" name="ll3" min="1" max="9" onkeydown="return false"><br/>
        <label class="numero" style="border: solid white;">' D '</label>
        <input class="numero" value="0" type="number" id="quantity" name="l4" min="0" max="45" onkeydown="return false">
        <input class="numero" value="1" type="number" id="quantity" name="ll4" min="1" max="9" onkeydown="return false"><br/>
        <input type="submit" class="resgistrar" name="regis4" value="Enviar">
      </form>
    </div>
    <a href="index.php"><h3 style="margin: 10px 10px;">Regresar </h3></a>
  </div>
  <?php

}else if($Number == 5){

?>
<div class="divPrimer">
    <div class="cuadrar">
      <form action="control.php" method="POST">
        <label></label><br/>
        <label>T. llegada | T. ejecución</label><br/>
        <label class="numero" style="border: solid white;">' A '</label>
        <input class="numero" value="0" type="number" id="quantity" name="l1" min="0" max="45" onkeydown="return false">
        <input class="numero" value="1" type="number" id="quantity" name="ll1" min="1" max="9" onkeydown="return false"><br/>
        <label class="numero" style="border: solid white;">' B '</label>
        <input class="numero" value="0" type="number" id="quantity" name="l2" min="0" max="45" onkeydown="return false">
        <input class="numero" value="1" type="number" id="quantity" name="ll2" min="1" max="9" onkeydown="return false"><br/>
        <label class="numero" style="border: solid white;">' C '</label>
        <input class="numero" value="0" type="number" id="quantity" name="l3" min="0" max="45" onkeydown="return false">
        <input class="numero" value="1" type="number" id="quantity" name="ll3" min="1" max="9" onkeydown="return false"><br/>
        <label class="numero" style="border: solid white;">' D '</label>
        <input class="numero" value="0" type="number" id="quantity" name="l4" min="0" max="45" onkeydown="return false">
        <input class="numero" value="1" type="number" id="quantity" name="ll4" min="1" max="9" onkeydown="return false"><br/>
        <label class="numero" style="border: solid white;">' E '</label>
        <input class="numero" value="0" type="number" id="quantity" name="l5" min="0" max="45" onkeydown="return false">
        <input class="numero" value="1" type="number" id="quantity" name="ll5" min="1" max="9" onkeydown="return false"><br/>
        <input type="submit" class="resgistrar" name="regis5" value="Enviar">
      </form>
    </div>
    <a href="index.php"><h3 style="margin: 10px 10px;">Regresar </h3></a>
  </div>
<?php

}else if($Number == 6){

  ?>
<div class="divPrimer">
    <div class="cuadrar">
      <form action="control.php" method="POST">
        <label></label><br/>
        <label>T. llegada | T. ejecución</label><br/>
        <label class="numero" style="border: solid white;">' A '</label>
        <input class="numero" value="0" type="number" id="quantity" name="l1" min="0" max="45" onkeydown="return false">
        <input class="numero" value="1" type="number" id="quantity" name="ll1" min="1" max="9" onkeydown="return false"><br/>
        <label class="numero" style="border: solid white;">' B '</label>
        <input class="numero" value="0" type="number" id="quantity" name="l2" min="0" max="45" onkeydown="return false">
        <input class="numero" value="1" type="number" id="quantity" name="ll2" min="1" max="9" onkeydown="return false"><br/>
        <label class="numero" style="border: solid white;">' C '</label>
        <input class="numero" value="0" type="number" id="quantity" name="l3" min="0" max="45" onkeydown="return false">
        <input class="numero" value="1" type="number" id="quantity" name="ll3" min="1" max="9" onkeydown="return false"><br/>
        <label class="numero" style="border: solid white;">' D '</label>
        <input class="numero" value="0" type="number" id="quantity" name="l4" min="0" max="45" onkeydown="return false">
        <input class="numero" value="1" type="number" id="quantity" name="ll4" min="1" max="9" onkeydown="return false"><br/>
        <label class="numero" style="border: solid white;">' E '</label>
        <input class="numero" value="0" type="number" id="quantity" name="l5" min="0" max="45" onkeydown="return false">
        <input class="numero" value="1" type="number" id="quantity" name="ll5" min="1" max="9" onkeydown="return false"><br/>
        <label class="numero" style="border: solid white;">' F '</label>
        <input class="numero" value="0" type="number" id="quantity" name="l6" min="0" max="45" onkeydown="return false">
        <input class="numero" value="1" type="number" id="quantity" name="ll6" min="1" max="9" onkeydown="return false"><br/>
        <input type="submit" class="resgistrar" name="regis6" value="Enviar">
      </form>
    </div>
    <a href="index.php"><h3 style="margin: 10px 10px;">Regresar </h3></a>
  </div>
  <?php

}
}
?>
</body>
</html>