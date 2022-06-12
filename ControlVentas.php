<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/estilos.css">
	<link href="" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Control de venta</title>
</head>
<body>
    

    <form action="PrecioTotal.php" method="post" id='formulario' >
		
        <h2>CONTROL DE VENTA </h2>

        <p>Fecha:
            <input required type="date" name="fecha">
        </p>

        <p>Tipo: 
        <select required class="form-select" name="Gas" id="Gasolina">                        
            <option value="Magna">Magna</option>
            <option value="Premium">Premium</option>
        </select>
        </p>

        <p>Precio:
            <input required type="text" name="precio" id="precio">
        </p>

        <p>Cantidad:
            <input required type="number" name="cantidad"> 
        </p>

        <p>Descuento:
            <select required class="form-select" name="des">
            <option value="0">0%</option>
            <option value="0.1">10%</option>
            <option value="0.2">20%</option>
            </select>
        </p>

        <div id="botones">
            <button type="reset">Cancelar</button>
            <button type="submit">Pagar</button>
        </div>
    
    </form>
    <script>
        Gasolina=document.getElementById('Gasolina');
        precio=document.getElementById('precio')
        Gasolina.addEventListener('change', function() {
        switch (Gasolina.value) {
            case 'Magna':
                precio.value='20.65';
                break;         
            case 'Premium':
                precio.value='22.56';
                break;                                 
            }             
        })
    </script>
</body>
</html>
