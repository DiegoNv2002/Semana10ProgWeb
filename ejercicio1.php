/*Elaborar un programa que calcule el costo de producción de un artículo, teniendo como
datos la descripción y el número de unidades producidas. El costo se calcula multiplicando
el número de unidades producidas por un factor de costo de materiales de 3.5 y sumándole
al producto un costo fijo de 10700*/
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $descripcion = $_POST["descripcion"];
        $unidades = $_POST["unidades"];
        $factorcostoMateriales = 3.5;
        $costofijo = 10700;
        $costoProduccion = $unidades * $factorcostoMateriales + $costofijo;

        echo "<h2>Resultado:</h2>";
        echo "Descripcion del artículo: $descripcion<br>";
        echo "Numero de unidades producidas: $unidades<br>";
        echo "Costo de produccion: $costoProduccion";
    }
?>