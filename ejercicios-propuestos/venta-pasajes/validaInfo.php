<?php
    $nombre=$_POST['txtnombre'];
    $apellido=$_POST['txtapellido'];
    $fecha = $_POST['fecha'];
    $origen=$_POST['origen'];
    $destino=$_POST['destino'];

    $precio=120;
    $año=explode('-',$fecha);
    $edad=date("Y")-$año[0];

    echo "<h1>Compra pasaje de avion</h1><hr>";
    echo "<h4>Datos de compra</h4>";
    echo "Precio standar del boleto: <b> $precio  </b><br>";
    echo "Nombre: $nombre $apellido <br>";
    echo "Fecha de nacimiento: $fecha <br>";
    echo "Edad: $edad <br>";
    echo "Lugar de origen: $origen <br>";
    echo "Lugar de destino: $destino <br>";
    
    if (date("Y") - $año[0] <= 2) {
        $precio=0;
    }else if(date("Y") - $año[0]<=17){
        $precio=$precio*0.75;
    }else{
        $precio=$precio;
    }

    echo "Total a pagar: <b>$ $precio <b/>";

?>