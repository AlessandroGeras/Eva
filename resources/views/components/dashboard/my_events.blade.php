{{--Carrosel de palestras dos Usuários na página Minha Conta--}}
  
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


  <div class="my_events text-xs text-center dark:text-gray-200 sm:text-base">Meus Eventos</div>
  <div class="w-[70%] h-16 carousel carousel_my_events text-xs sm:w-[450px] sm:h-24 sm:text-base">
      @if (count($manylectures) > 0)
      @foreach($manylectures as $lecture)

      @php
      $time = strtotime("$lecture->date");
      $day = date('d', $time);
      $month = date('n', $time);
      @endphp

      <form action="{{ route('lecture', [$lecture->id])}}" method="GET">
          @csrf
          <div class="text-center center px-3 cursor-pointer" onclick="event.preventDefault();this.closest('form').submit();">
              <div>{{$lecture->name}}<br>{{$day}}/{{$month}}</div>
          </div>
      </form>
      @endforeach
      @else
      <form>
          @csrf
          <div class="text-center center">
          <div>Não há eventos disponíveis</div>
          </div>
      </form>
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