<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GASEOSAS</title>
</head>
<body>
    <?php
    $regalo = $_POST['cantidad']*2;
    $unidad = ($_POST['cantidad']*7.5);
    $importe = $unidad-($unidad*0.05);
    $descuento = $importe*0.07;
    $total = $importe - $descuento;
    ?> 

    <div class="generar-boleta">
        <h1>Gaseosas Spark</h1>
        <h2>Boleta</h2>
        <div class="tabla">
            <table border="2">
                <thead>
                    <tr>
                        <th width="200px">NOMBRE</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $_POST['nombre'] ?>   
                        <?php echo $_POST['apellido'] ?></td>
                    </tr>
                </tbody>
                <thead>
                    <tr>
                        <th width="150px">ASPECTO</th>
                        <th width="100px">TOTAL</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Costo por unidad: </td>
                        <td>7.50</td>
                    </tr>
                    <tr>
                        <td>Costo por la cantidad: </td>
                        <td><?php echo $unidad ?></td>
                    </tr>
                    <tr>
                        <td>Importe de compra: </td>
                        <td><?php echo $importe ?></td>
                    </tr>
                    <tr>
                        <td>Importe de descuento: </td>
                        <td><?php echo $descuento ?></td>
                    </tr>
                    <tr>
                        <td>Importe a pagar: </td>
                        <td><?php echo $total ?></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Obsequio: </th>
                        <th colspan="2"><?php echo $regalo . " UNIDADES"?></th>
                    </tr>
                </tfoot>
            </table> 
        </div>
            
    </div>
    <input type="reset" value="Regresar" onClick="history.go(-1);">
</body>
</html>