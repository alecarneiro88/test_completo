<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backend</title>
</head>
<body>
    <h1>Calculadora</h1>
    <form method="$_GET">
    <input type="number" name="a" placeholder="numero 1">
    <input type="number" name="b" placeholder="numero 2">  
    <select name="operacion">
        <option value="sumar">Sumar</option>
        <option value="restar">Restar</option>
        <option value="multiplicar">Multiplicar</option>
        <option value="dividir">Dividir</option>
    </select>
    <button type="submit">RESULTADO</button>
    </form>
    <?php

    if (isset($_GET['operacion']) && isset($_GET['a']) && isset($_GET['b'])) {
        $operacion = $_GET['operacion'];
        $a = (float) $_GET['a'];
        $b = (float) $_GET['b'];
        $resultado = null;
    switch($operacion){
        case  "sumar":
            $resultado = $a + $b;
            break;
        case "restar":
            $resultado = $a - $b;
            break;
        case "multiplicar":
            $resultado = $a * $b;
            break;
        case "dividir":
            $resultado = $a / $b;
            break;
            default:
            echo "<p>Error: Operación no válida.</p>";
            exit;

    }
    echo "<p>$resultado</p>";
}
    ?>
</body>
</html>