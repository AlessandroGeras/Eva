{{--Timeline da página Palestras--}}

<html>
{{--Conteiner geral da timeline--}}  
<div id="main_container_timeline" class="overflow-auto h-[500px] mt-2">

  @if (count($lectures) == 0)
  <div class="relative w-full text-center text-black dark:text-gray-200">
    @if($search)
    Não foi encontrada nenhuma palestra com a palavra "{{$search}}"
    @else
    Não foi encontrada nenhuma palestra!
    @endif
  </div>
  @endif

  {{--Conteiner da timeline--}}
  <div class="relative max-w-[1200px] mx-auto after:content-[''] after:absolute after:w-[0.1px] after:bg-gray-400 after:top-0 after:bottom-0 after:ml-0 after:-left-[10px] after:dark:bg-gray-600 sm:after:left-[50%]">

    @if (count($lectures) > 0)
    @php
    $count=0;
    $color=0;
    @endphp

    @foreach($lectures as $lecture)

    @php
    $time = strtotime("$lecture->date");
    $day = date('d', $time);
    $month = date('n', $time);
    $month_pt_BR = $months[$month];
    @endphp

    {{--
    ***Lógica da Timeline***
    A timeline é formada por um looping de 4 iterações que se repete se for necessário para alocar os container de informação ao lado esquerdo da timeline ou ao lado direito. O objetivo é simplesmente estético para gerar 4 cores diferentes, duas para cada lado. Existem um contador, funções de par e impar e switchs para realizar a lógica de posicionamento. Números pares são alocados do lado esquerdo e o resto do lado direito
    ***
    --}}

    @if($count%2==0)

    @switch($color)
    @case(0)
    <form action="{{ route('lecture', [$lecture->id])}}" method="GET">
    @csrf
    <div class="timeline timeline_left parent_color0 dark:parent_color0_darkmode" onclick="event.preventDefault();this.closest('form').submit();">
      <div class="relative rounded-none pt-0.5">
      </form>
        @break        

        @case(2)
        <form action="{{ route('lecture', [$lecture->id])}}" method="GET">
        @csrf
        <div class="timeline timeline_left parent_color2 dark:parent_color2_darkmode" onclick="event.preventDefault();this.closest('form').submit();">
          <div class="relative rounded-none pt-0.5">
          </form>
            @break
            @endswitch

            <div class="block sm:flex text-white dark:text-gray-200">
              <div class="day float-left relative h6 -top-[6px] pt-1 px-1 pb-6 sm:text-lg sm:pb-1 sm:ml-2 lg:text-xl">{{ $day}}</div>
              <div class="text-xs relative -top-[4.5px] left-[5px] font-mono pt-2 sm:pt-2.5 lg:pt-1.5 lg:ml-2 lg:text-lg">{{ $month_pt_BR }}</div>
              <div class="relative font-poiret text-base text-center font-bold -top-[8.5px] left-[2.5px] sm:text-sm sm:top-[3px] sm:left-[15px] md:ml-2 lg:text-xl lg:pt-1.5 lg:pl-4 lg:-top-[5px] lg:ml-1">{{ $lecture['name'] }}</div>
            </div>
            <div class="text-sm bg-white text-justify text-black py-2.5 px-3.5 sm:text-sm lg:text-base dark:bg-gray-800 dark:text-gray-500">
              {{ $lecture['info'] }}
            </div>
          </div>
          @php
          $count++;
          $color++;
          @endphp
        </div>

        @else

        @switch($color)
        @case(1)
        <form action="{{ route('lecture', [$lecture->id])}}" method="GET">
        @csrf
        <div class="timeline timeline_right parent_color1 dark:parent_color1_darkmode" onclick="event.preventDefault();this.closest('form').submit();">
          <div class="relative rounded-none pt-0.5">
          </form>
            @break

            @case(3)
            <form action="{{ route('lecture', [$lecture->id])}}" method="GET">
            @csrf
            <div class="timeline timeline_right parent_color3 dark:parent_color3_darkmode" onclick="event.preventDefault();this.closest('form').submit();">
              <div class="relative rounded-none pt-0.5">
              </form>
                @break
                @endswitch

            <div class="block sm:flex text-white dark:text-gray-200">
              <div class="day float-left relative h6 -top-[6px] pt-1 px-1 pb-6 sm:text-lg sm:pb-1 sm:ml-2 lg:text-xl">{{ $day}}</div>
              <div class="text-xs relative -top-[4.5px] left-[5px] font-mono pt-2 sm:pt-2.5 lg:pt-1.5 lg:ml-2 lg:text-lg">{{ $month_pt_BR }}</div>
              <div class="relative font-poiret text-base text-center font-bold -top-[8.5px] left-[2.5px] sm:text-sm sm:top-[3px] sm:left-[15px] md:ml-2 lg:text-xl lg:pt-1.5 lg:pl-4 lg:-top-[5px] lg:ml-1">{{ $lecture['name'] }}</div>
            </div>
            <div class="text-sm bg-white text-justify text-black py-2.5 px-3.5 sm:text-sm lg:text-base dark:bg-gray-800 dark:text-gray-500">
              {{ $lecture['info'] }}
            </div>
          </div>
              @php
              $count++;
              $color++;
              @endphp
            </div>

            @php
            if($color>3){
            $color=0;
            }
            @endphp

            @endif
            @endforeach
            @endif

          </div>
        </div>

</html>