<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600&display=swap" rel="stylesheet">
  <title>transferencia</title>
</head>

<body>
  <div class="login-box">
    <form action="cuentas/identificar.php" method="post" id="loginform">
      <div class="user-box">
        <input type="text" required name="id_A">
        <label>id del remitente (1) </label>
      </div>
      <div class="user-box">
        <input type="" required name="id_B">
        <label >id del destinatario (2)</label>
      </div>
      <div class="user-box">
        <input type="" required name="monto">
        <label>dinero a enviar</label>
      </div>
      <button type="submit" name="submit" class="btn">
        ENVIAR
</button>

    </form>
  </div>
</body>

</html>