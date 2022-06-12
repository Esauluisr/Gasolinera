<?php 
    if($_POST){      
        $costo=$_POST["cantidad"]*$_POST['precio'];
        $descuento=$costo*$_POST['des'];
        $aPagar=$costo-$descuento;
        $aPagar=round($aPagar,2);      
    }else{
        header('Location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/estilospagar.css">
    <link href="" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Precio Total</title>
</head>
<body>
    <form  action="insertar.php" method="post" id='formulario'>
        <h1 class="card">Total a pagar <br/> <?php echo $aPagar;?></h1>

        <input type="hidden" value='<?php echo $_POST['fecha'];?>' name='fecha'>
        <input type="hidden" value='<?php echo $_POST['Gas']; ?>' name="Gas">
        <input type="hidden" value="<?php echo $_POST['cantidad']; ?>" name="cantidad"> 
        <input type="hidden" value="<?php echo $_POST['precio']; ?>" name="precio"> 
        <input type="hidden" value="<?php echo $costo; ?>" name="subtotal">
        <input type="hidden" value="<?php echo $_POST['des']*100; ?>" name="des">
        <input type="hidden" value="<?php echo $aPagar; ?>" name="aPagar"> 
        <input type="submit" value="Finalizar venta" id="finalizar">
    </form>
</body>
</html>