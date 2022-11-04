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
  @if (count($manyconsultas) > 0) 
      @foreach($manyconsultas as $consulta)      
    
      @php
      $time = strtotime("$consulta->date");
      $day = date('d', $time);
      $month = date('n', $time);
      $profissional = $consulta['profissional'];
      $profissional_name = explode(' ', $profissional);
      @endphp

      <div class="carousel_item" onclick="window.location = '/dashboard/consulta/{{$consulta->id}}'">
          <h2>{{$profissional_name[0]}}<br>{{$profissional_name[1]}}<br>{{$day}}/{{$month}}</h2>
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
          $('.carousel_consultas').slick({
              infinite: false,
              slidesToShow: 3,
              slidesToScroll: 3
          });
      });
  </script>

  </body>

  </html>