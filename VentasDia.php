<?php 
    include_once 'BD.php';
    $consultar = $pdo->prepare('select * from gasolina order by fecha desc;');
    $consultar->execute();
    $imprimr = $consultar->fetchAll(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/estilosventasdia.CSS">
    <link rel="stylesheet" href="style/tabla.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

    <title>Ventas Por Dia </title>
</head>
<body>
    <nav>
        <div class="wrapper">
        <div class="logo"><a href="inicio.php">Inicio </a></div>
        <ul class="nav-links">
        <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>
        <li><a href="#">Ventas Por Dia </a></li>
        <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
        </div>
    </nav>
    
    <div class="contenedor">
        <h1>Ventas Del Dia </h1></br>
        <div id="main-container">
            <table>
                <th>Fecha</th>
                <th>Gasolina</th>
                <th>Litros</th>
                <th>Precio</th>
                <th>Descuento</th>
                <th>Total</th>

                <?php foreach ($imprimr as $dato): ?>
                <tr>
                    <td><?php echo $dato['fecha'];?></td>
                    <td><?php echo $dato['Gasolina'];?></td>
                    <td><?php echo $dato['Litros'];?></td>
                    <td><?php echo $dato['precio'];?></td>
                    <td><?php echo $dato['descuento'];?></td>
                    <td><?php echo $dato['total'];?></td>
                </tr>
                <?php endforeach; 
                ?>
            </table>  

        </div>

    </div>
</body>
</html>