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
                    <span style="padding-top:16px;padding-bottom:16px;font-size:24px;color:#246ED1;font-family:Arial,Helvetica,sans-serif;font-weight:bold">
                        Hola, Pepito:
                    </span><br>
                    </td>
                </tr>

                <tr>
                    <td style="padding-top:12px;padding-bottom:10px">
                    <span style="font-size:12px;color:#212529;font-family:Arial,Helvetica,sans-serif;">
                        <p style="font-size: 13px;font-weight:bold">Usted recibio una nueva transacción.<br> Su billetera a sido abonada S/. 3000.00 </p>  <span> Puede acceder a su historial de compras en línea en cualquier momento.</span>
                    </span>
                    </td>
                </tr>

                <tr bgcolor="#E8E8E8">
                    <td style="padding:20px;font-size:12px;line-height:17px;color:#212529;font-family:Arial,Helvetica,sans-serif">
                        <table width="420" cellspacing="4">
                            <tbody><tr><td width="200"><div align="right"><b>ID de pago:&nbsp;&nbsp;</b></div></td><td width="202">1422</td></tr>
                            <tr><td width="200"><div align="right"><b>Pagador:&nbsp;&nbsp;</b></div></td><td width="202">Feederico</td></tr>
                            <tr>
                              <td width="200"><div align="right"><b>Correo Electronico:&nbsp;&nbsp;</b></div></td>
                              <td width="202"><span >f15@outlook.com</span></td>
                            </tr>
                            <tr>
                              <td width="200"><div align="right"><b>Monto:&nbsp;&nbsp;</b></div></td>
                              <td width="202"><span>S/. 3000.00</span></td>
                            </tr>
                            <tr>
                              <td width="200">&nbsp;</td>
                              <td width="202">&nbsp;</td>
                            </tr>
                            <tr>
                              <td width="200"><div align="right"><b>Fecha Confirmada&nbsp;&nbsp;</b></div></td>
                              <td width="202">Lunes Enero 05 22:08:32 2018</td>
                            </tr>
                        </tbody></table>
                    </td>
                </tr>


                <tr>
                    <td style="font-size:12px;color:#6d7880;padding-top:16px;padding-bottom:60px">
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
