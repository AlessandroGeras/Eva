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


  <h2 class="my_events">Palestras Ativas</h2>
  <div class="carousel carousel_my_events">
      @if (count($palestras) > 0) 
      @foreach($palestras as $palestra)

      @php
      $time = strtotime("$palestra->date");
      $day = date('d', $time);
      $month = date('n', $time);
      @endphp

      <div class="carousel_item" onclick="window.location = '/palestras/{{$palestra->id}}'">
          <h2>{{$palestra->name}}<br>{{$day}}/{{$month}}</h2>
      </div>
      @endforeach
      @else
      <div class="carousel_item">
          <h2>Não há eventos disponíveis</h2>
      </div>
      @endif
  </div>

  <script type="text/javascript">
      $(document).ready(function() {
          $('.carousel_my_events').slick({
              infinite: false,
              slidesToShow: 3,
              slidesToScroll: 3
          });
      });
  </script>

  </body>

  </html>