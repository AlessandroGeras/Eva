{{--Seção para verificar se o Usuário está inscrito na palestra na página Palestra--}}
  
  {{$slot}}
  
  @php
  $registered = false;
  @endphp

  @isset($manylectures)
  @foreach($manylectures as $speech)
  @if(($speech->id)==($lecture->id))

  @php
  $registered = true;
  @endphp
  
  @endif
  @endforeach
  @endisset

  <div class="mx-auto text-sm text-center lg:text-lg dark:text-gray-200">
    <span>@if ($registered == true)
      Você está inscrito neste evento
      @else
      Você não está inscrito neste evento
      @endif</span> <br><br>
  </div>

  {{--Mostrar botões Ingressar e Abandonar a palestra para usuários--}}
  <div class="flex justify-around mt-2.5 mb-5 mx-auto">
    @if ($registered == false)
    <form action="{{ route('join', [$lecture->id])}}" method="POST">
      @csrf
      <a class="button_join text-white dark:text-gray-200 dark:button_join_darkmode" href="#" onclick="this.closest('form').submit();loading('Confirmando presença')">Confirmar Presença</a>
    </form>

    @else
    <form action="{{ route('leave', [$lecture->id])}}" method="POST">
      @csrf
      @method("DELETE")
      <a class="button_leave text-white dark:text-gray-200 dark:button_leave_darkmode" href="#" onclick="
            this.closest('form').submit();loading('Confirmando saída');return false; ">Abandonar Evento</a>
    </form>
    @endif
  </div>
  </div>