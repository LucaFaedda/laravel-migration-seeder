<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body class="bg-primary">
    <div class="container">
        <div class="row ">
            @foreach ($treno as $item)
            <div class="col-3 d-flex flex-wrap m-3">
               <div class="card">
                    <h5 class="card-header">{{$item['Codice_treno']}}</h5>
                    <div class="card-body">
                        <span class="card-text fw-bold">Partenza: </span><span>{{$item['Stazione_partenza']}}, {{$item['Orario_partenza']}}</span>
                        <br>
                        <span class="card-text fw-bold">Arrivo: </span><span>{{$item['Stazione_arrivo']}}, {{$item['Orario_arrivo']}}</span>
                        <br>
                        <span class="card-text fw-bold">Azienda: </span><span>{{$item['Azienda']}}</span>
                        <br>
                        <span class="card-text fw-bold">Numero Carrozze: </span><span>{{$item['Numero_carrozze']}}</span>
                        <div class="row">
                            <div class="col-5">
                                <p>@if ($item['In_orario'] == true)
                                    <span class="text-success">In orario</span>
                               
                                    @else
                                    <span class="text-danger">In ritardo</span>
                                    @endif 

                                </p>
                            </div>
                            <div class="col-5">
                                <p>@if ($item['Cancellato'] == true)
                                    <span class="text-success">Operativo</span>
                               
                                    @else
                                    <span class="text-danger fw-bold">Cancellato, ci scusiamo per il disagio</span>
                                    @endif 

                                </p>
                                
                            </div>
                        </div>
                    </div>
              </div>
            </div>
            @endforeach
        </div>
    </div>

</body>

</html>