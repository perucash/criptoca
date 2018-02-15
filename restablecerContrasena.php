<?php  
include('crearToken.php');

$destino='goblue030796@gmail.com';
$desde='From: Criptocash<info@criptocash.com>'."\r\n";
$desde.='Content-type:text/html;charset=UTF-8';
$asunto='Confirmación de correo';
$mensaje='
<html>
<head>
<title>Tocken de acceso a Criptocash</title>
</head>
<body>
<table style="width:538px;background-color:#393836" align="center" cellspacing="0" cellpadding="0">
    <tbody><tr>
        <td style="height:65px;background-color:#246ED1;border-bottom:1px solid #ffffff;" align="center">
             <img src="http://criptocash.com/integracion/images/cripto.png" alt="" style="display:block" class="m_3968579693696874809mobileHide CToWUd" width="250px"  border="0">

        </td>
    </tr>
    <tr>
        <td bgcolor="#ffffff" style="border-bottom:1px solid #ffffff;">
            <table width="470" border="0" align="center" cellpadding="0" cellspacing="0" style="padding-left:5px;padding-right:5px;padding-bottom:10px">

                <tbody><tr bgcolor="#ffffff" >
                    <td style="padding-top:32px">
                    <span style="padding-top:16px;padding-bottom:16px;font-size:20px;color:#246ED1;font-family:Arial,Helvetica,sans-serif;font-weight:bold">
                        Restablecer tu contraseña de Criptocash
                    </span><br>
                    </td>
                </tr>

                <tr>
                    <td style="padding-top:12px;padding-bottom:10px">
                    <span style="font-size:15px;color:#212529;font-family:Arial,Helvetica,sans-serif;">
                        <span> Hemos recibido su solicitud para restablecer la contraseña de su cuenta Bitpay. Para continuar, siga el siguiente enlace.</span>
                    </span>
                    </td>
                </tr>

                <tr>
                     <td align="center">
                        <table class="m_3776455216365057673m_-8437388677446195775emailButton" style="border-radius:3px;background-color:#246ED1"  cellspacing="0" cellpadding="0" border="0" align="center">
                          <tbody><tr>
                             <td style="text-align:center" valign="middle" align="center"><a href="https://criptocash.com/integracion/mailCorrecto.php?token='.urlencode($licencia).'" style="color:#ffffff;background:#0078D7;border-radius:4px;padding-left:20px;padding-right:20px;width:250px;display:block;font-size:18px;font-weight:bold;line-height:50px;text-align:center;text-decoration:none;font-family:helvetica,arial;"; >Cambiar Contraseña</a> </td>
                               </tr>
                         </tbody></table>
                     </td>
                </tr>

                <tr>
                     <td style="text-align:left;color:#777777;font-family:Arial,sans-serif;font-size:13px!important; padding-top: 15px;" align="center"> Si no solicitaste este mensaje, por favor , ignóralo.
                     </td>
                  </tr>
                                    

                <tr>
                    <td style="font-size:12px;color:#6d7880;padding-top:16px;padding-bottom:32px">
                         El equipo <span class="il">de</span> Criptocash<br>
                         <a style="color:#8f98a0" >https://help.criptocash.com</a><br>
                    </td>
                </tr>
            </tbody></table>
        </td>
    </tr>
    <tr> 
            <td bgcolor="#246ED1">

                    <table width="460" height="55" border="0" align="center" cellpadding="0" cellspacing="0">

                        <tbody><tr valign="center">
                            
                            <td width="350" valign="center">
                                <span style="color:#ffffff  ;font-size:9px;font-family:Verdana,Arial,Helvetica,sans-serif">©2017 - 2018. Todos los derechos reservados. </span>
                            </td>
                        </tr>
                    </tbody></table>
            </td>
    </tr>


</tbody></table>
</body>
</html>
';

if(mail($destino, $asunto, $mensaje, $desde)){
	echo 'Mensaje ha sido enviado con token: '.$licencia;
}
else{
	echo 'Hubo un error enviando correo';
}

?>
