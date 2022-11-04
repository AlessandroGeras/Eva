<div id="main_container_timeline">
@if (count($palestras) == 0) 
<div id="fail_search">
  @if($search) 

    Não foi encontrada nenhuma palestra com a palavra "{{$search}}"

  @else
    Não foi encontrada nenhuma palestra!

  @endif
</div>
@endif

<div class="main_timeline">
@if (count($palestras) > 0)    

  @php
  $count=0;
  $color=0;
  @endphp

  @foreach($palestras as $palestra)

  @php
  $time = strtotime("$palestra->date");
  $day = date('d', $time);
  $month = date('n', $time);
  $month_pt_BR = $months[$month];
  @endphp

  @if($count%2==0)

  @switch($color)
  @case(0)  
  <div class="timeline timeline_left parent_color0" onclick="window.location = '/palestras/{{$palestra->id}}'">
    <div class="timeline_data child_color0">
      @break

      @case(2)
      <div class="timeline timeline_left parent_color2"  onclick="window.location = '/palestras/{{$palestra->id}}'">
        <div class="timeline_data child_color2">
          @break

          @endswitch

          <div class="palestras_data">
            <h2>{{ $day}}</h2>
            <h4>{{ $month_pt_BR }}</h4>
            <h5>{{ $palestra['name'] }}</h5>
          </div>
          <div class="palestras_info">
            {{ $palestra['info'] }}
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
      <div class="timeline timeline_right parent_color1"  onclick="window.location = '/palestras/{{$palestra->id}}'">
        <div class="timeline_data child_color1">
          @break

          @case(3)
          <div class="timeline timeline_right parent_color3"  onclick="window.location = '/palestras/{{$palestra->id}}'">
            <div class="timeline_data child_color3">
              @break

              @endswitch

              <div class="palestras_data">
                <h2>{{ $day }}</h2>
                <h4>{{ $month_pt_BR }}</h4>
                <h5>{{ $palestra['name'] }}</h5>
              </div>
              <div class="palestras_info">
                {{ $palestra['info'] }}
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
