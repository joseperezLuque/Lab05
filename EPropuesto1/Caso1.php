<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bonificaciones</title>
</head>
<body>
    <div class="cont">
        <h1>ARTELUX S.A.C.</h1>
        <h3>VENDEDOR</h3>
        <?php
            $bonificacion=$_POST['Hijos'] * 50;
            $sueldobruto=($_POST['venta'] * 0.075) + 600 + $bonificacion;
            $descuento=$sueldobruto*0.11;
            $sueldoneto=$sueldobruto-$descuento;

            echo "Nombre : " . $_POST['nombre']. "<br>";
            echo "Apellido : " . $_POST['apellido']. "<br>";
            echo "Total ventas : S/. ".$_POST['venta']. "<br>";
            echo "Bonificacion por hijos : S/. ". $bonificacion . "<br>";
            echo "Sueldo bruto : S/. ". $sueldobruto. "<br>";
            echo "Descuento: S/. ". $descuento. "<br>";
            echo "Sueldo Neto : S/. " . $sueldoneto . "<br>";
            
        ?>
    </div> 
    <input type="reset" value="Regresar" onClick="history.go(-1);">
</body>
</html>