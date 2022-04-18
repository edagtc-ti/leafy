

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Envio de Cotización</title>
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

    {{ $company->name }}
  
    , informamos que su cotización ha sido emitida exitosamente..</p>

<ul>

</ul>

<table border=0>
    <tr>
          
        @if($quotation-> establishment -> web_address=='www.tsl.pe')
            <td width="20%">
                <div class="company_logo_box">
                    <img src="data:{{mime_content_type(public_path("storage/uploads/logos/logo_20602143016.png"))}};base64, {{base64_encode(file_get_contents(public_path("storage/uploads/logos/logo_20602143016.png")))}}" alt="TSL OPERADOR LOGISTICO S.A.C" class="company_logo" style="max-width: 150px;">
                </div>
            </td>
        @else
            <td width="20%">
                {{--<img src="{{ asset('logo/logo.jpg') }}" class="company_logo" style="max-width: 150px">--}}
            </td>
        @endif
                      
        <td> 
            <h1>{{ $quotation->user->name }}<h1>
            <h3>Asesor de ventas</h3>
            {{ $quotation->user->email }}
            <br>
            @php
            if($quotation-> establishment -> web_address=='www.tsl.pe'){
                @endphp
                <h4>TSL OPERADOR LOGISTICO S.A.C</h4>
                RUC 20602143016<br>
                @php
            }
            @endphp
            Of. {{ $quotation-> establishment -> address }} Telf.: {{ $quotation->establishment->telephone }}<br>
            {{ $quotation-> establishment -> trade_address}}<br>
            Website : {{ $quotation-> establishment -> web_address}}
            
        </td>
      
    </tr>
    
</table>

</body>
</html>