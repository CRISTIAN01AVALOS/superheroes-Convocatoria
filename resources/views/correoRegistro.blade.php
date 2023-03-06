<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="x-apple-disable-message-reformatting">
  <title></title>
  <!--[if mso]>
  <style>
    table {border-collapse:collapse;border-spacing:0;border:none;margin:0;}
    div, td {padding:0;}
    div {margin:0 !important;}
  </style>
  <noscript>
    <xml>
      <o:OfficeDocumentSettings>
        <o:PixelsPerInch>96</o:PixelsPerInch>
      </o:OfficeDocumentSettings>
    </xml>
  </noscript>
  <![endif]-->
  <style>
    table, td, div, h1, p {
      font-family: Arial, sans-serif;
    }
    @media screen and (max-width: 530px) {
      .unsub {
        display: block;
        padding: 8px;
        margin-top: 14px;
        border-radius: 6px;
        background-color: #555555;
        text-decoration: none !important;
        font-weight: bold;
      }
      .col-lge {
        max-width: 100% !important;
      }
    }
    @media screen and (min-width: 531px) {
      .col-sml {
        max-width: 27% !important;
      }
      .col-lge {
        max-width: 73% !important;
      }
    }
  </style>
</head>
<body style="margin:0;padding:0;word-spacing:normal;background-color:#939297;">
  <div role="article" aria-roledescription="email" lang="en" style="text-size-adjust:100%;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;background-color:#ab0033;">
    <table role="presentation" style="width:100%;border:none;border-spacing:0;">
      <tr>
        <td align="center" style="padding:0;">
          <!--[if mso]>
          <table role="presentation" align="center" style="width:600px;">
          <tr>
          <td>
          <![endif]-->
          <table role="presentation" style="width:94%;max-width:600px;border:none;border-spacing:0;text-align:left;font-family:Arial,sans-serif;font-size:16px;line-height:22px;">
            <tr style="color:#ab0033;">
              <td style="padding:40px 30px 30px 30px;text-align:center;font-size:24px;font-weight:bold;">
                <a href="#" style="text-decoration:none;"><img src="https://proyectoscete.tamaulipas.gob.mx/concursodedibujo/images/logo/logoTamaulipas2022bb.png" width="165" alt="Logo" style="width:165px;max-width:80%;height:auto;border:none;text-decoration:none;color:#ffffff;"></a>
              </td>
            </tr>
            <tr>
              <td style="padding:30px;background-color:#ffffff;">
                <h1 style="text-align: center;margin-top:0;margin-bottom:16px;font-size:26px;line-height:32px;font-weight:bold;letter-spacing:-0.02em;">¡Su registro fue exitoso!</h1>
                <p style="margin:0;">
                    <ul>
                        <li><b>Alumno:</b> {{ $info->nombre_alumno }} {{ $info->ap_paterno }} {{ $info->ap_materno }}</li>
                        <li><b>CURP:</b> {{ $info->curp }}</li>
                        <li><b>Escuela:</b> {{ $info->nombre_cct }}</li>
                        <li><b>Grado:</b> {{ $info->grado_alumno }}°</li>
                        <li><b>Grupo:</b> {{ $info->grupo_alumno }}</li>
                        <hr>
                        <li><b>Folio:</b> {{ $info->folio }}</li>
                        <li><b>Nombre del personaje:</b> {{ $info->nombre_personaje }}</li>
                        <li><b>Valores del personaje:</b> {{ $info->valores_personaje }}</li>
                        <li><b>Descripción del personaje:</b> {{ $info->descripcion_personaje }}</li>
                    </ul>
                </p>
              </td>
            </tr>
            <tr>
              <td style="padding:0;font-size:24px;line-height:28px;font-weight:bold;">
                <a href="http://www.example.com/" style="text-decoration:none;"><img src="https://assets.codepen.io/210284/1200x800-2.png" width="600" alt="" style="width:100%;height:auto;display:block;border:none;text-decoration:none;color:#363636;"></a>
              </td>
            </tr>
            <tr>
              <td style="padding:30px;text-align:center;font-size:12px;background-color:#646569;color:#cccccc;">
                {{-- <p style="margin:0 0 8px 0;"><a href="http://www.facebook.com/" style="text-decoration:none;"><img src="https://assets.codepen.io/210284/facebook_1.png" width="40" height="40" alt="f" style="display:inline-block;color:#cccccc;"></a> <a href="http://www.twitter.com/" style="text-decoration:none;"><img src="https://assets.codepen.io/210284/twitter_1.png" width="40" height="40" alt="t" style="display:inline-block;color:#cccccc;"></a></p> --}}
                <p style="margin:0;font-size:14px;line-height:20px;">&reg; Concurso de Dibujo 2023<br></p>
              </td>
            </tr>
          </table>
          <!--[if mso]>
          </td>
          </tr>
          </table>
          <![endif]-->
        </td>
      </tr>
    </table>
    <br><br><br>
  </div>
</body>
</html>

{{-- <!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Llamado de emergencia</title>
</head>
<body>

    <h2>Su registro ha sido exitoso</h2>
    <ul>
        <li>Alumno: {{ $info->nombre_alumno }} {{ $info->ap_paterno }} {{ $info->ap_materno }}</li>
        <li>Nombre del personaje: {{ $info->nombre_personaje }}</li>
        <li>Correo de verificación de registro</li>
    </ul>

</body>
</html> --}}