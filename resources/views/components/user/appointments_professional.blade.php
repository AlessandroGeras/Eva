{{--Carrosel de consultas do Profissonal em relação ao usuário pesquisado--}}

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


<h2 class="my_events text-xs text-center dark:text-gray-200 sm:text-base">Consultas</h2>
<div class="w-[70%] h-16 carousel_appointments carousel text-xs sm:w-[450px] sm:h-24 sm:text-base">
    @php
    $count=0;
    @endphp    

    @if (count($manyappointments) > 0)
    @foreach($manyappointments as $appointment)
    @if($currentUser->name==$appointment->professional)

    @php
    $count++;
    @endphp

    @php
    $time = strtotime("$appointment->date");
    $day = date('d', $time);
    $month = date('n', $time);
    $username = $user['name'];
    $username = explode(' ', $username);
    @endphp
    <form action="{{ route('appointment', [$appointment->id])}}" method="GET" onsubmit="loading('Procurando informações da consulta')">
        <div class="carousel_item text-center m-0 center cursor-pointer" onclick="event.preventDefault();this.closest('form').submit();">
            <h2>{{$username[0]}}<br>{{$username[1]}}<br>{{$day}}/{{$month}}</h2>
        </div>
    </form>
    @endif
    @endforeach

    @if($count==0)
    <div class="carousel_item text-center m-0 center">
        <h2>Não há eventos disponíveis</h2>
    </div>
    @endif
    
    @else
    <div class="carousel_item text-center m-0 center">
        <h2>Não há eventos disponíveis</h2>
    </div>
    @endif    
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('.carousel_appointments').slick({
            infinite: false,
            slidesToShow: 3,
            slidesToScroll: 3,
            responsive: [{
                breakpoint: 640,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                }
            }]
        });
    });
</script>

</body>

</html>
