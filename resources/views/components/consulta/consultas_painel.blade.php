@php
$time = strtotime("$consulta->date");
$day = date('d', $time);
$month = date('n', $time);
$month_pt_BR = $months[$month];
@endphp

<div id="consultas_container">
    <h2>Consulta {{$day}} de {{$month_pt_BR}}<br>
        Dr./Dra. {{$consulta->profissional}}</h2>
    <div id="consultas_background">
        <h3>{{$consulta->consulta}}</h3>
    </div>
    <div id="consulta_anexo">
    @if ($consulta->link)
    Material de apoio <br>
    &#128279;
    <a href="{{$consulta->link}}" target="_blank">{{$consulta->link}}</a>

    @else
    &#128279; Não há material de apoio
    @endif
    <br><br>
  </div>
</div>