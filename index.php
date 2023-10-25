<?php
/* Un programa que genere 2 tiradas de 3 dados(simulando 2 jugadores). 
Muestre las dos tiradas y me diga cual tiene mayor puntuación(sumando las tiradas) */


include("funciones/funciones.php");

$numeroTiradas = 3;

$arrayj1 = []; //almacenamos las jugadas de jugador 1, tirada 1
$arrayj12 = []; //almacenamos las jugadas de jugador 1, tirada 2

$arrayj2 = []; //almacenamos las jugadas de jugador 1, tirada 1
$arrayj22 = []; //almacenamos las jugadas de jugador 1, tirada 2


//tiradas jugador 1


while ($numeroTiradas > 0) {

    //tirada 1

    $numeroTiradas--;

    $numero1 = random_int(1, 6);
    array_push($arrayj1, $numero1);

    //Tirada 2

    $numero2 = random_int(1, 6);
    array_push($arrayj12, $numero2);
}


//tiradas jugador 2


$numeroTiradas = 3;

while ($numeroTiradas > 0) {

    $numeroTiradas--;

    //tirada 1

    $numero3 = random_int(1, 6);
    array_push($arrayj2, $numero3);

    //Tirada 2

    $numero4 = random_int(1, 6);
    array_push($arrayj22, $numero4);
}

//Tratamos los totales de cada Jugador

$resultado1 = totalJugador($arrayj1, $arrayj12);
$resultado2 = totalJugador($arrayj2, $arrayj22);




?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla HTML</title>
    <link rel="stylesheet" href="estilos/estilos.css">
</head>

<body>
    <h2>JUEGO DE LOS DADOS</h2>
    <p><span>Normas:</span></s> Dos tiradas de tres dados, gana el que mas puntos sume</p>
    <div class="contenedor">
        <img src="imagenes/imgDados.jpg" alt="imagen generica de juego de dados" width="200px" height="200px">
    </div>

  
    <table id="tabla1" border="1">
        <tr>
            <th class="tirada">Tirada 1, Jugador 1</th>
            <?= printDados($arrayj1); ?>
        </tr>
        <tr>
            <th class="tirada">Tirada 2, Jugador 1</th>
            <?= printDados($arrayj12); ?>
        </tr>
        <tr>
            <th class="fin">Total Jugador 1 -> <?php echo totalJugador($arrayj1, $arrayj12) ?> Puntos</th>

        </tr>
    </table>

    <table id="tabla2" border="1">
        <tr>
            <th class="tirada">Tirada 1, Jugador 2</th>
            <?= printDados($arrayj2); ?>
        </tr>
        <tr>
            <th class="tirada">Tirada 2, Jugador 2</th>
            <?= printDados($arrayj22); ?>
        </tr>
        <tr>
            <th  class="fin">Total Jugador 2 -> <?php echo totalJugador($arrayj2, $arrayj22) ?> Puntos</th>

        </tr>
    </table>
   

    <h2 id="ganaJugador"><span><?php echo ganador($resultado1, $resultado2); ?></span></h2>
</body>

</html>