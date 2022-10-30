<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link href="indexcss.css" rel="stylesheet">-->
    <title>Document</title>
    <style>

body{
  background:dodgerblue;
}

.segundo{
  border-radius: 15px;
  background: rgba(0, 0, 0, 0.821);
  border-style: none;
  width: 28%;
  height: 395px;
  
}

.principal{
  border-radius: 20px;
  background:url(fifo.png);
  background-size:cover;
  border-style: none;
  width: 68%;
  height: 400px;
  margin: 20px auto;
  padding: 40px;
}

.numero{
  text-align: center;
  font-size: 60px;
  width: 97%;
  height: 100px;
  border-radius: 15px;
 margin: 90px auto 20px auto;
 border-style: none;
}

.boton{
  border-style: none;
  width: 97%;
  height: 70px;
  border-radius: 15px;
  margin: 0px auto 0px auto;
  font-size: 18px;
}

.leibol{
  margin: 20px auto;
  width: 615px;
  font-size: 50px;
}

.aa{
        width: 50%;
    margin: 0px auto;
}
</style>
</head>

<body>
<div class="leibol"><label><b>Simulador del Metodo FIFO</b></label></div>

<div class="principal">

<div class="segundo">
<div class="aa">
  <form action="alldatos.php" method="POST">
    <input class="numero" value="1" type="number" id="quantity" name="datonumber" min="1" max="6" onkeydown="return false"><br/>
    <input type="submit" class="boton" name="datos" value="Enviar">
  </form>
</div>
</div>
</div>
</body>
</html>

