{{--Carrosel de consultas dos Usuários na página Minha Conta--}}

<head>
    <style>
        .slick-prev:before {
            color: #0c4a6e;
        }

        .slick-next:before {
            color: #0c4a6e;
        }
    </style>
</head>


<h2 class="my_events text-xs text-center dark:text-gray-200 sm:text-base">Consultas</h2>
<div class="w-[70%] h-16 carousel_appointments carousel text-xs sm:w-[450px] sm:h-24 sm:text-base">
    @if (count($manyappointments) > 0)
    @foreach($manyappointments as $appointment)

    @php
    $time = strtotime("$appointment->date");
    $day = date('d', $time);
    $month = date('n', $time);
    $professional = $appointment['professional'];
    $professional_name = explode(' ', $professional);
    @endphp

    <form action="{{ route('appointment', [$appointment->id])}}" method="GET">
        @csrf
        <div class="carousel_item text-center m-0 center cursor-pointer" onclick="event.preventDefault();this.closest('form').submit();">
            <div>{{$professional_name[0]}}<br>{{$professional_name[1]}}<br>{{$day}}/{{$month}}</div>
        </div>
    </form>
    @endforeach
    @else
    <form>
        @csrf
        <div class="carousel_item text-center m-0 center">
            <div>Não há eventos disponíveis</div>
        </div>
    </form>
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