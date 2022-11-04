{{--Carrosel de palestras dos Profissionais e Administradores na página Minha Conta--}}

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


<div class="my_events text-xs text-center dark:text-gray-200 sm:text-base">Palestras Ativas</div>
<div class="w-[70%] h-16 carousel carousel_my_events text-xs sm:w-[450px] sm:h-24 sm:text-base">
    @if (count($lectures) > 0)
    @foreach($lectures as $lecture)

    @php
    $time = strtotime("$lecture->date");
    $day = date('d', $time);
    $month = date('n', $time);
    @endphp

    <form action="{{ route('lecture', [$lecture->id])}}" method="GET">
        @csrf
        <div class="carousel_item text-center m-0 center px-3 cursor-pointer" onclick="event.preventDefault();this.closest('form').submit();">
            <h2>{{$lecture->name}}<br>{{$day}}/{{$month}}</h2>
        </div>
    </form>
    @endforeach
    @else
    <div class="carousel_item text-center m-0 center">
        <h2>Não há eventos disponíveis</h2>
    </div>
    @endif
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('.carousel_my_events').slick({
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