<?php
    try {
        $pdo=new PDO('mysql:host=localhost;dbname=pwebgasolina','root','');
        //echo 'Conectado';
    } catch (PDOException $e) {
        print "¡Error!: " . $e->getMessage() . "<br/>";
        die();
    }
?>