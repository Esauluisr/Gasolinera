<?php 
    include_once 'BD.php';
    $cons = $pdo->prepare('SELECT fecha,TRUNCATE(SUM(total),2) FROM gasolina GROUP BY fecha;');
    $cons->execute();
    $result = $cons->fetchAll();   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/estilototales.css">
    <link rel="stylesheet" href="style/tabla.CSS">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

    <title>Ventas Totales </title>
</head>
<body>
    
    <nav>
        <div class="wrapper">
        <div class="logo"><a href="inicio.php">Inicio </a></div>
        <ul class="nav-links">
        <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>
        <li><a href="#">Ventas Totales </a></li>
        <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
        </div>
    </nav>
    
    <div class="contenedor">
        <h1>Ventas Del Dia </h1></br>
        <div id="main-container">
        <table>
            <th>Fecha</th>
            <th>Total</th>
            <?php foreach ($result as $dato): ?>
            <tr>
                <td><?php echo $dato['fecha']; ?></td>
                <td><?php echo $dato['TRUNCATE(SUM(total),2)']; ?></td>
            </tr>    
            <?php endforeach; ?>        
        </table> 

        </div>

    </div>
</body>
</html>