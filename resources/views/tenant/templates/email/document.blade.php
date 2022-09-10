<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <title>Envio de Comprobante de Pago Electrónico</title>
    <style>
        body {
            color: #000;
        }
        ul {
            list-style: none;
        }
    </style>
</head>
<body>
<p>Estimad@: 
    @if($document->customer)
        {{ $document->customer->name }}
    @else
        {{ $document->supplier->name }}
    @endif
    , informamos que su comprobante electrónico ha sido emitido exitosamente.</p>
<p>Los datos de su comprobante electrónico son:</p>
<ul>
    <li>Razon social: {{ $company->name }}</li>
    <li>Teléfono: {{ $document->establishment->telephone }}</li>
{{--    <li>Tipo de comprobante: {{ $document->document_type->description }}</li>--}}
    <li>Fecha de emisión: {{ $document->date_of_issue->format('d/m/Y') }}</li>
    <li>Nro. de comprobante: {{ $document->series.'-'.$document->number }}</li>
    <li>Total: {{ $document->total }}</li>
    <li>{{$_SERVER['APP_URL']}}</li>
</ul>


<table cellpadding="0" cellspacing="0" class="sc-gPEVay eQYmiW" style="vertical-align: -webkit-baseline-middle; font-size: medium; font-family: Arial;">
<tbody>
    <tr>
        <td>
            <table cellpadding="0" cellspacing="0" class="sc-gPEVay eQYmiW" style="vertical-align: -webkit-baseline-middle; font-size: medium; font-family: Arial;">
            <tbody>
                <tr>
                    <td width="150" style="vertical-align: middle;">
    <!-- <span class="sc-kgAjT cuzzPp" style="margin-right: 20px; display: block;">
    <img src="{{$_SERVER['APP_URL'].'/storage/uploads/logos/'.$company->logo}}" role="presentation" width="130" class="sc-cHGsZl bHiaRe" style="display:block;max-width: 130px;">
    </span> -->
                    </td>
                    <td style="vertical-align: middle;">
    <h3 color="#000000" class="sc-fBuWsC eeihxG" style="margin: 0px; font-size: 18px; color: rgb(0, 0, 0);"><span>{{ $document->user->name }}</span></h3>
    <p color="#000000" font-size="medium" class="sc-fMiknA bxZCMx" style="margin: 0px; color: rgb(0, 0, 0); font-size: 14px; line-height: 22px;"><span>Asesor de ventas</span></p>
    <p color="#000000" font-size="medium" class="sc-dVhcbM fghLuF" style="margin: 0px; font-weight: 500; color: rgb(0, 0, 0); font-size: 14px; line-height: 22px;"><span>{{ $company->name }}<br>{{ 'RUC '.$company->number }}</span></p></td>
    <td width="30"><div style="width: 30px;"></div></td><td color="#14ca47" direction="vertical" width="1" class="sc-jhAzac hmXDXQ" style="width: 1px; border-bottom: none; border-left: 1px solid rgb(20, 202, 71);"></td>
    <td width="30"><div style="width: 30px;"></div></td><td style="vertical-align: middle;"><table cellpadding="0" cellspacing="0" class="sc-gPEVay eQYmiW" style="vertical-align: -webkit-baseline-middle; font-size: medium; font-family: Arial;"><tbody><tr height="25" style="vertical-align: middle;"><td width="30" style="vertical-align: middle;">
    <table cellpadding="0" cellspacing="0" class="sc-gPEVay eQYmiW" style="vertical-align: -webkit-baseline-middle; font-size: medium; font-family: Arial;"><tbody><tr><td style="vertical-align: bottom;"><span color="#14ca47" width="11" class="sc-jlyJG bbyJzT" style="display: block; background-color: rgb(20, 202, 71);">
    <img src="https://cdn2.hubspot.net/hubfs/53/tools/email-signature-generator/icons/phone-icon-2x.png" color="#14ca47" width="13" class="sc-iRbamj blSEcj" style="display: block; background-color: rgb(20, 202, 71);"></span></td></tr></tbody></table></td><td style="padding: 0px; color: rgb(0, 0, 0);">
    <!-- <a href="tel:2612245" color="#000000" class="sc-gipzik iyhjGb" style="text-decoration: none; color: rgb(0, 0, 0); font-size: 12px;"><span>2612245</span></a> |  -->
    <a color="#000000" class="sc-gipzik iyhjGb" style="text-decoration: none; color: rgb(0, 0, 0); font-size: 12px;"><span>{{ $document->establishment->telephone }}</span></a></td></tr>
    <tr height="25" style="vertical-align: middle;"><td width="30" style="vertical-align: middle;"><table cellpadding="0" cellspacing="0" class="sc-gPEVay eQYmiW" style="vertical-align: -webkit-baseline-middle; font-size: medium; font-family: Arial;"><tbody><tr>
        <td style="vertical-align: bottom;"><span color="#14ca47" width="11" class="sc-jlyJG bbyJzT" style="display: block; background-color: rgb(20, 202, 71);">
        <img src="https://cdn2.hubspot.net/hubfs/53/tools/email-signature-generator/icons/email-icon-2x.png" color="#14ca47" width="13" class="sc-iRbamj blSEcj" style="display: block; background-color: rgb(20, 202, 71);">
    </span></td></tr></tbody></table></td><td style="padding: 0px;">
    <a href="mailto:{{ $document->user->email }}" color="#000000" class="sc-gipzik iyhjGb" style="text-decoration: none; color: rgb(0, 0, 0); font-size: 12px;"><span>{{ $document->user->email }}</span></a></td></tr>
    <tr height="25" style="vertical-align: middle;"><td width="30" style="vertical-align: middle;"><table cellpadding="0" cellspacing="0" class="sc-gPEVay eQYmiW" style="vertical-align: -webkit-baseline-middle; font-size: medium; font-family: Arial;"><tbody><tr>
        <td style="vertical-align: bottom;"><span color="#14ca47" width="11" class="sc-jlyJG bbyJzT" style="display: block; background-color: rgb(20, 202, 71);">
        <img src="https://cdn2.hubspot.net/hubfs/53/tools/email-signature-generator/icons/link-icon-2x.png" color="#14ca47" width="13" class="sc-iRbamj blSEcj" style="display: block; background-color: rgb(20, 202, 71);">
    </span></td></tr></tbody></table></td><td style="padding: 0px;">
    <a href="{{ $document-> establishment -> web_address}}" color="#000000" class="sc-gipzik iyhjGb" style="text-decoration: none; color: rgb(0, 0, 0); font-size: 12px;"><span>{{ $document-> establishment -> web_address}}</span></a></td></tr>
    <tr height="25" style="vertical-align: middle;"><td width="30" style="vertical-align: middle;"><table cellpadding="0" cellspacing="0" class="sc-gPEVay eQYmiW" style="vertical-align: -webkit-baseline-middle; font-size: medium; font-family: Arial;"><tbody><tr><td style="vertical-align: bottom;"><span color="#14ca47" width="11" class="sc-jlyJG bbyJzT" style="display: block; background-color: rgb(20, 202, 71);">
    <img src="https://cdn2.hubspot.net/hubfs/53/tools/email-signature-generator/icons/address-icon-2x.png" color="#14ca47" width="13" class="sc-iRbamj blSEcj" style="display: block; background-color: rgb(20, 202, 71);"></span></td></tr></tbody></table></td><td style="padding: 0px;">
    <span color="#000000" class="sc-csuQGl CQhxV" style="font-size: 12px; color: rgb(0, 0, 0);"><span>Of. {{ $document-> establishment -> address }}</span></span></td></tr></tbody></table></td></tr></tbody></table></td></tr><tr><td>
        <table cellpadding="0" cellspacing="0" class="sc-gPEVay eQYmiW" style="vertical-align: -webkit-baseline-middle; font-size: medium; font-family: Arial; width: 100%;"><tbody><tr><td height="30"></td></tr><tr>
            <td color="#14ca47" direction="horizontal" height="1" class="sc-jhAzac hmXDXQ" style="width: 100%; border-bottom: 1px solid rgb(20, 202, 71); border-left: none; display: block;"></td></tr><tr>
                <td height="30"></td></tr></tbody></table></td></tr><tr><td>
                    <table cellpadding="0" cellspacing="0" class="sc-gPEVay eQYmiW" style="vertical-align: -webkit-baseline-middle; font-size: medium; font-family: Arial; width: 100%;"><tbody><tr><td style="text-align: right; vertical-align: top;"><table cellpadding="0" cellspacing="0" class="sc-gPEVay eQYmiW" style="vertical-align: -webkit-baseline-middle; font-size: medium; font-family: Arial; display: inline-block;"><tbody><tr style="text-align: right;"><td>
                        <a href="//facebook.com" color="#88143b" class="sc-hzDkRC kpsoyz" style="display: inline-block; padding: 0px; background-color: rgb(136, 20, 59);">
                        <img src="https://cdn2.hubspot.net/hubfs/53/tools/email-signature-generator/icons/facebook-icon-2x.png" alt="facebook" color="#88143b" height="24" class="sc-bRBYWo ccSRck" style="background-color: rgb(136, 20, 59); max-width: 135px; display: block;"></a></td><td width="5"><div></div></td><td>
                        <a href="//instagram.com" color="#88143b" class="sc-hzDkRC kpsoyz" style="display: inline-block; padding: 0px; background-color: rgb(136, 20, 59);">
                        <img src="https://cdn2.hubspot.net/hubfs/53/tools/email-signature-generator/icons/instagram-icon-2x.png" alt="instagram" color="#88143b" height="24" class="sc-bRBYWo ccSRck" style="background-color: rgb(136, 20, 59); max-width: 135px; display: block;"></a></td><td width="5"><div></div></td></tr></tbody></table></td></tr></tbody></table></td></tr><tr>
                            <td height="30"></td></tr><tr><td style="text-align: center;">
    <span style="display: block; text-align: center;"><a target="_blank" rel="noopener noreferrer" href="//" color="#0db565" class="sc-fAjcbJ byigni" style="border-width: initial; border-style: none; border-color: initial; display: inline-block; background-color: transparent; color: rgb(255, 255, 255); font-weight: 700; text-decoration: none; text-align: center; line-height: 1; font-size: 12px; border-radius: 3px;">
    <img src="https://i.pinimg.com/originals/c3/04/14/c304140615e5fd62d8aea666ce588e9e.jpg" style="display:block;text-decoration: none; max-width: 728px;"></a></span></td></tr></tbody></table>

<table>
<tr>
       <b>AVISO LEGAL:</b> La presente información se envía únicamente a la persona a la que va dirigida y puede contener información de carácter confidencial o privilegiada. 
    Cualquier modificación, retransmisión, difusión u otro uso de esta información por personas o entidades distintas a la persona a la que va dirigida está prohibida. 
    Si usted lo ha recibido por error, por favor contacte con el remitente y borre el mensaje de cualquier ordenador. 
    <b>{{ $company->name }}</b> no asume ninguna responsabilidad derivada del hecho de que terceras personas puedan llegar a conocer el contenido de este mensaje durante su transmisión.


<br><br>
Sistema de facturación electrónica desarrollado por <a href="https://sistemaintegradoleafy.ml/" target="_blank"><b>Leafy</b></a> 
</td>
</tr>


</table>



</body>
</html>