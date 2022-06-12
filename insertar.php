<?php 
    if ($_POST) {
        $fecha=$_POST['fecha'];
        $Gas=$_POST['Gas'];
        $litros=$_POST['cantidad'];
        $precio=$_POST['precio'];
        $descuento=$_POST['des'];
        $total=$_POST['aPagar'];            
        
        include_once 'BD.php';
        
        $agregar='INSERT INTO gasolina value (?,?,?,?,?,?)';
        $inser=$pdo->prepare($agregar);
        
        if ($inser->execute(array($fecha,$Gas,$litros,$precio,$descuento,$total))){
            header('location:inicio.php');
        }

    }else{
            header('location:ControlVentas.php');
    }     


?>
?>