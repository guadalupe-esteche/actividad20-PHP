
<html>

<head></head>

<body>
<form method="post" action="">
    Ingrese su nombre:
    <input type="text" name="nombre" id="nombre">
    <br>
    Ingrese su edad:
    <input type="number" name="edad" id="edad">
    <br>
    <input type="submit" value="confirmar">
  </form>
  <br><hr>

  <form action="" method="post">
    Ingrese su nombre:
    <input type="text" name="nombre" id="nombre">
    <br>
    Seleccione segun corresponda:
    <br>
    <input type="radio" name="radio1" value="noEstudio">no tiene estudios
    <br>
    <input type="radio" name="radio1" value="estudioPrim">estudios primarios
    <br>
    <input type="radio" name="radio1" value="estudioSec">estudios secundarios
    <br>
    <input type="submit" value="confirmar">
    <br><hr>
  </form>

  <form action="" method="post">
    Ingrese nombre:
    <input type="text" name="nombre" id="nombre">
    <br>
    Seleccione segun deportes que practica:
    <br>
    <input type="checkbox" name="check1">futbol
    <br>
    <input type="checkbox" name="check2">basquet
    <br>
    <input type="checkbox" name="check1">tenis
    <br>
    <input type="checkbox" name="check2">voley
    <br>
    <input type="submit" name="confirmar">
    <br><hr>
  </form>

  <form method="post" action="pagina2.php">
    Ingrese el nombre:
    <input type="text" name="nombre">
    <br>
    Seleccione en que rango se ubica sus ingresos:
    <select name="ingresos">
      <option value="1">1-1000</option>
      <option value="2">1001-3000</option>
      <option value="3">>3000</option>
    </select>
    <br>
    <input type="submit" value="confirmar">
    <br><hr>
  </form>
    <?php 
    function mostrarTiposDatos(){
        $edad = 25;
        $estatura = 1.5;
        $booleano = true;
        $nombre = "Pedro";
        //Muestro los valores
        echo "<h2><strong>Mostrar Valores </strong></h2>";
        echo "Entero: $edad <br>";
        echo "Float: $estatura  <br>";
        echo "String: $nombre  <br>";
        echo "Booleano: $booleano <br>";
        echo "<br>";

        }
    mostrarTiposDatos();

    <?php
#ejericio 4
echo "<h3>Ejercicio 4: Mensaje</h3>";

function mostrarNumeroAleatorio() {
    // Generar un número aleatorio entre 1 y 100
    $num = rand(1, 100);
  
    // Mostrar el número generado
    echo "<p>El número generado es: <strong>$num</strong></p>";

    // Verificar si es menor, igual o mayor a 50
     if ($num < 50) {
         echo "<p>El número es menor a 50.</p>";
      } elseif ($num == 50) {
          echo "<p>El número es igual a 50.</p>";
     } else {
      echo "<p>El número es mayor a 50.</p>";
  }
}

mostrarNumeroAleatorio();
?>


    #ejercicio5
    $dia = 22; //Se declara una variable de tipo integer.
    $sueldo = 22.11; //Se declara una variable de tipo double.
    $nombre = "guada"; //Se declara una variable de tipo string.
    $exite = true; //Se declara una variable boolean.

    echo "Variable entera:";
    echo $dia;
    echo "<br>";
    echo "Variable double:";
    echo $sueldo;
    echo "<br>";
    echo "Variable string:";
    echo $nombre;
    echo "<br>";
    echo "Variable boolean:";
    echo $exite;

    #ejercicio6
    $diaCumple = 22;
    $mesCumple = 11;
    $años = 21;
    echo "<br>";
    echo "<br>";
    echo "Mi cumpleaños es el día $diaCumple, del mes $mesCumple. Cumplo $años años";
    echo "<br>";

    #ejercicio7
    $num = rand(1,3);
    if ($num == 3){
        echo "Numero: 3";
    }
    else if ($num == 2){
        echo "Numero: 2";
    }
    else {
        echo "Numero: 1";
    }

    #ejericio8    
    function tablaMultiplicarFor(){
        echo "<h3>TABLA DE MULTIPLAR DEL 2: Estructuras repetitivas</h3>";
        echo "Tabla de Multiplar del 2 For";
        echo "<br>";
        for ($f = 1; $f <= 10; $f++) {
            echo "2 x $f = " . (2 * $f) . "<br>";
        }
        echo "<br><hr>";
    }
    tablaMultiplicarFor();

    function tablaMultiplicarWhile(){
        echo "Tabla de Multiplar del 2 While";
        echo "<br>";
        $f = 1;
        while ($f <= 10) {
            echo "2 x $f = " . (2 * $f) . "<br>";
            $f++;
        }
        echo "<br><hr>";
    }
    tablaMultiplicarWhile();

    function tablaMultiplicarDoWhile(){
        echo "Tabla de Multiplar del 2 Do While";
        echo "<br>";
        $a = 1;
        do {
            echo "2 x $a = " . (2 * $a) . "<br>";
            $a++;
        } while ($a <= 10);
    }
    tablaMultiplicarDoWhile();
    echo "<br>";

    #ejercicio9
    function procesarDatos() {
        #verificar si se han enviado los datos del formulario
    if (isset($_POST['nombre']) && isset($_POST['edad'])) {
        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];

        if ($edad >= 18) {
            echo "$nombre es mayor de edad";
        } else {
            echo "$nombre es menor de edad";
        }
    }
}

#ejecutar la función si el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    procesarDatos();
    }

#ejercicio10
    function verificar(){
         #verificar si el formulario ha sido enviado y si existe el campo 'radio1'
     if (isset($_POST['nombre']) && isset($_POST['radio1'])) {
        $nombre = $_POST['nombre'];
        $radio1 = $_POST['radio1'];

        if ($radio1 == "noEstudio") {
            echo "$nombre ha seleccionado la opción: No tiene estudios";
        } elseif ($radio1 == "estudioPrim") {
            echo "$nombre ha seleccionado la opción: Estudios primarios";
        } else {
            echo "$nombre ha seleccionado la opción: Estudios secundarios";
        }
    }
    }

#ejecutar la función si el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    verificar();
}
echo "<br>";

#ejercicio11
$cant = 0;
  if (isset($_REQUEST['check1'])) {
    $cant++;
  }
  if (isset($_REQUEST['check2'])) {
    $cant++;
  }
  if (isset($_REQUEST['check3'])) {
    $cant++;
  }
  if (isset($_REQUEST['check4'])) {
    $cant++;
  }
  echo $_REQUEST['nombre'];
  echo " practica $cant deportes.";

#ejercicio12

function comprobar(){
    echo $_REQUEST['nombre'];
    if ($_REQUEST['ingresos'] == 3) {
    echo " debe pagar impuestos.";
    } else {
    echo " no debe pagar impuestos a las ganancias.";
    }
}
    ?>
</body>
</html>
