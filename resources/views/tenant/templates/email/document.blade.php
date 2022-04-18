<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
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
       
        @if($company->logo)
            <td width="20%">
                <div class="company_logo_box">
                    <img src="data:{{mime_content_type(public_path("storage/uploads/logos/{$company->logo}"))}};base64, {{base64_encode(file_get_contents(public_path("storage/uploads/logos/{$company->logo}")))}}" alt="{{$company->name}}" class="company_logo" style="max-width: 150px;">
                </div>
            </td>
        @else
            <td width="20%">
                {{--<img src="{{ asset('logo/logo.jpg') }}" class="company_logo" style="max-width: 150px">--}}
            </td>
        @endif

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

    </tr>
    
</table>



</body>
</html>