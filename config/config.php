<?php

    define("CLIENT_ID","test&currency=USD&intent=capture&enable-funding=venmo");
    define("CURRENCY","MXN");
    define("KEY_TOKEN","APR.wqc354*");
    define("MONEDA", "$");

    session_start();

    $num_cart = 0;
    if(isset($_SESSION['carrito']['productos'])){
        $num_cart = count ($_SESSION['carrito']['productos']);
    }
?>