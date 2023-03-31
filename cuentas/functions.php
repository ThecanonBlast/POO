<?php
class Conexion
{
    public $IDB = 0;
    public $IDA = 0;
    public $monto_trans = 0;
  

    function coger_datos($variable1, $variable2, $variable3){
        $this->IDA = $variable1;
        $this->IDB = $variable2;
        $this->monto_trans = $variable3;
        
    }
    
    
    function almacenar(){
        $conn = mysqli_connect("127.0.0.1:3306", "root", "", "banco");
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        
        $consulta = "SELECT saldo FROM usuarios";
        $resultado = mysqli_query($conn, $consulta);
        if ($resultado == true) {
            while ($row = $resultado->fetch_array()) {
                $saldo[] = $row['saldo'];
            }
        }
        
        $IDA = $this->IDA;
        $IDB = $this->IDB;

        $saldoA = $saldo[0]; $saldoB = $saldo[1];
        $monto_trans = $this->monto_trans;

        if ($monto_trans > $saldoA) {
            header("Location: ../mensajemalo.php");
        } else {
            $totalA = $saldoA - $monto_trans;
            $totalB = $saldoB + $monto_trans;
            $sql = "UPDATE usuarios SET saldo='$totalA' WHERE idusuario='$IDA';";
            if (mysqli_query($conn, $sql)) {
                $sql = "UPDATE usuarios SET saldo='$totalB' WHERE idusuario='$IDB';";
                if (mysqli_query($conn, $sql)) {
                    header("Location: ../mensaje.php");
                }
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
        mysqli_close($conn);
    }
}
