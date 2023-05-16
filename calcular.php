<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Clase 9 | Ejercicios</title>
</head>
<body>
    <!-- Seccion del NAV de BOOSTRAP-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="#">Clase 9 | Ejercicios</a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Arimetica</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="colores.php">Colores</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="comparar.php">Comparar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tablas.php">Tablas de Multiplicar</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>

<!-- Se crea la seccion de operaciones aritmeticas junto a un FORM -->
<section>
<h2>Operaciones Matemáticas</h2>
  <form method="POST" action="calcular.php">
    <label for="numero1">Número 1:</label>
    <input type="number" name="numero1" required>
    <br>
    <label for="numero2">Número 2:</label>
    <input type="number" name="numero2" required>
    <br>
    <label for="operacion">Operación:</label>
    <select name="operacion">
      <option value="suma">Suma</option>
      <option value="resta">Resta</option>
      <option value="division">División</option>
      <option value="multiplicacion">Multiplicación</option>
    </select>
    <input type="submit" value="Calcular">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];
    $operacion = $_POST["operacion"];

    //Creamos un switch para las operaciones arimeticas.
  switch ($operacion) {
    case "suma":
        $resultado = $numero1 + $numero2;
        break;
      case "resta":
        $resultado = $numero1 - $numero2;
        break;
        //Se valida la division por cero.
      case "division":
        if ($numero2 != 0) {
          $resultado = $numero1 / $numero2;
        } else {
          $resultado = "Error: No se puede dividir por cero";
        }
        break;
      case "multiplicacion":
        $resultado = $numero1 * $numero2;
        break;
      default:
        $resultado = "Operación inválida";
        break;
      }
      //Se imprime el resultado.
  echo "El resultado de la operación es: " . $resultado;
}
?>
</section>

<br>
<hr>

<footer>
    <br>
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    Alumno Brandon Vidal - Profesor Pedro Gatica | Programación Web <br>Santo Tomas © 2020 Copyright:
    <a class="text-white" href="https://www.santotomas.cl/">SantoTomas.com</a>
  </div>
  <!-- Copyright -->
</footer>
  
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>