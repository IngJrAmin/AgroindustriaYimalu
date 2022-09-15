<?php

if (isset($_POST['name'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $asunto = $_POST['asunto'];
  $message = $_POST['message'];
  $para = 'gerencia@agroindustriayimalu.com';

  if (isset($name) && isset($email) && isset($phone) && isset($asunto) && isset($message)) {

    $mensaje = '
    <html>
      <head>
        <title>Nuevo correo electrónico enviado desde la página web</title>
      </head>
      <body>
        <div>
          <h2><b>Remitente: </b>' . $name .  '</h2>
          <h4><b>Correo: </b>' . $email . '</h4>
          <h4><b>Teléfono: </b>' . $phone . '</h4>
          <h3><b>Asunto: </b>' . $asunto . '</h3>
        </div><hr>
        <div>
          <p><b>Mensaje: </b><br>' . $message . '</p>
        </div>
        <style>
          @import url("https://fonts.googleapis.com/css2?family=Poppins&display=swap");
          body { text-align: justify; font-family: "Poppins", sans-serif; padding: 40px 80px; }
        </style>
      </body>
    </html>
  ';

    $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
    $cabeceras .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

    $cabeceras .= 'To: Agroindustria Yimalu <gerencia@agroindustriayimalu.com>' . "\r\n";
    $cabeceras .= 'From: ' . $name . ' ' . $email . "\r\n";

    if (mail($para, mb_encode_mimeheader($asunto), $mensaje, $cabeceras)) {
      echo "
        <script>
          window.location.href='#contact';
            Swal.fire({
              icon: 'success',
              title: 'Your message was sent correctly!',
              text: 'We will reply to your email soon.'
            })
        </script>
      ";
    } else {
      echo "
        <script>
          window.location.href='#contact';
            Swal.fire({
              icon: 'error',
              title: 'Opps!',
              text: 'Something happened and your email was not sent correctly. Please try again.'
            })
        </script>
      ";
    }
  }
}

?>