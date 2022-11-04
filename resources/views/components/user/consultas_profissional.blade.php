<head>
    <style>
        .slick-prev:before {
            color: #265097;
        }

        .slick-next:before {
            color: #265097;
        }
    </style>
</head>


<h2 class="my_events">Consultas</h2>
<div class="carousel_consultas">
    @php
    $count=0;
    @endphp    

    @if (count($manyconsultas) > 0)
    @foreach($manyconsultas as $consulta)
    @if($currentUser->name==$consulta->profissional)

    @php
    $count++;
    @endphp

    @php
    $time = strtotime("$consulta->date");
    $day = date('d', $time);
    $month = date('n', $time);
    $paciente = $user['name'];
    $paciente_name = explode(' ', $paciente);
    @endphp
    <form action="{{ route('consulta', [$consulta->id])}}" method="GET" onsubmit="loading('Procurando informações da consulta')">
        <div class="carousel_item" onclick="event.preventDefault();this.closest('form').submit();">
            <h2>{{$paciente_name[0]}}<br>{{$paciente_name[1]}}<br>{{$day}}/{{$month}}</h2>
        </div>
    </form>
    @endif
    @endforeach

    @if($count==0)
    <div class="carousel_item">
        <h2>Não há eventos disponíveis</h2>
    </div>
    @endif
    
    @else
    <div class="carousel_item">
        <h2>Não há eventos disponíveis</h2>
    </div>
    @endif    
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('.carousel_consultas').slick({
            infinite: false,
            slidesToShow: 3,
            slidesToScroll: 3
        });
    });
</script>

</body>

</html>
