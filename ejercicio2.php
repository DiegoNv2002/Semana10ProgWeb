<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $anchura = $_POST["anchura"];
        $longitud = $_POST["longitud"];
        $costoPorMetroCuadrado = $_POST["costo"];

        // Cálculo del costo del terreno
        $area = $anchura * $longitud;
        $costoTerreno = $area * $costoPorMetroCuadrado;

        echo "<h2>Resultado:</h2>";
        echo "Anchura del terreno: $anchura metros<br>";
        echo "Longitud del terreno: $longitud metros<br>";
        echo "Costo por metro cuadrado: $ $costoPorMetroCuadrado/m²<br>";
        echo "Área del terreno: $area m²<br>";
        echo "Costo del terreno: $ $costoTerreno";
    }
    ?>