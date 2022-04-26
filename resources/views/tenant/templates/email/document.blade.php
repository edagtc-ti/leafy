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
</ul>


<table border=0>
    <tr>       
        <td>
            <img
            src="{{$_SERVER['APP_URL'].'/storage/uploads/logos/'.$company->logo}}"
            style="display:block"
            alt="{{$company->name}}" 
            class="company_logo" 
            style="240px 120px;"
                />
        </td>
        <td>
            <h1>{{ $document->user->name }}<h1>
            <h3>Asesor de ventas</h3>
            {{ $document->user->email }}
            <br>
            <h4>{{ $company->name }}</h4>
            {{ 'RUC '.$company->number }}<br>
            Of. {{ $document-> establishment -> address }} Telf.: {{ $document->establishment->telephone }}<br>
            {{ $document-> establishment -> trade_address}}<br>
            Website : {{ $document-> establishment -> web_address}}
        </td>
    <tr>
        <td colspan=3>

    <b>AVISO LEGAL:</b> La presente información se envía únicamente a la persona a la que va dirigida y puede contener información de carácter confidencial o privilegiada. 
    Cualquier modificación, retransmisión, difusión u otro uso de esta información por personas o entidades distintas a la persona a la que va dirigida está prohibida. 
    Si usted lo ha recibido por error, por favor contacte con el remitente y borre el mensaje de cualquier ordenador. 
    <b>{{ $company->name }}</b> no asume ninguna responsabilidad derivada del hecho de que terceras personas puedan llegar a conocer el contenido de este mensaje durante su transmisión.
    </td></tr>


</table>



</body>
</html>