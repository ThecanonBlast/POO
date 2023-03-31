<?php
    if (isset($_REQUEST['submit']))
    {
        if (isset($_REQUEST['id_A'], $_REQUEST['id_B'], $_REQUEST['monto']))
        {
            include_once('./functions.php');
            $Account = $_REQUEST['id_A'];
            $Bccount = $_REQUEST['id_B'];
            $plata = $_REQUEST['monto'];

            $envio = new Conexion();
            $envio -> coger_datos($Account, $Bccount, $plata);
            $envio -> almacenar();
        }
    }
?>