@php
$inscritos = 0;
$users="<br>";

foreach($manyusers as $userJoined){
$route=route('user', $userJoined['id']);
$inscritos++;
if($inscritos%2==0){
$users=$users."<a class='palestra_users' href='$route'><li class='inscritos_par'>".$userJoined['name']."</li></a>";
}
else{
$users=$users."<a class='palestra_users' href='$route'><li class='inscritos_impar'>".$userJoined['name']."</li></a>";
}
}
@endphp

<div id="palestra_actions">
@if($user->permission->role!=('Usuário'))
  <div id="inscritos">Inscritos <br>
    &#128101; {{$inscritos}}<br>
    <ul>
      @php
      if($inscritos>0){
      echo $users."</ul>";
      }
    else{
    echo "</ul>";
    }
    @endphp
    <br>
  </div>
  @endif
  <div id="anexos">
    @if ($palestra->link)
    Material de apoio <br>
    &#128279;
    <a href="{{$palestra->link}}" target="_blank">{{$palestra->link}}</a>

    @else
    &#128279; Não há material de apoio
    @endif
    <br><br>
  </div>

  @if($user->permission->role==('Usuário'))
  <div id="inscrito">
    <span>@if ($inscrito == true)
      Você está inscrito neste evento
      @else
      Você não está inscrito neste evento
      @endif</span> <br><br>
  </div>
  @endif

  <div id="palestra_botões">
  @if($user->permission->role!=('Usuário'))
    <a class="button_edit" id="editar_palestra_botao" href="#" onclick="editar_palestra(this.id,'{{ $palestra->id }}','{{ $palestra->name }}','{{ $palestra->info }}','{{ $palestra->date }}')">Editar</a>

    <!-- Exclusão de palestras desabilitada
    <form action="/palestras/destroy/{{ $palestra->id }}" method="POST">
      @csrf
      @method("DELETE")
      <a class="button_delete" href="#" onclick="let resultado = confirm('Deseja realmente excluir a palestra?');
          if (resultado) {
            this.closest('form').submit();loading('Excluindo palestra');return false;
          };">Excluir</a>
    </form>
        -->
    @endif

    @if($user->permission->role==('Usuário'))
    @if ($inscrito == false)
    <form action="/palestras/join/{{ $palestra->id }}" method="POST">
      @csrf
      <a class="button_join" href="#" onclick="this.closest('form').submit();loading('Confirmando presença')">Confirmar Presença</a>
    </form>

    @else
    <form action="/palestras/leave/{{ $palestra->id }}" method="POST">
      @csrf
      @method("DELETE")
      <a class="button_leave" href="#" onclick="
            this.closest('form').submit();loading('Confirmando saída');return false; ">Abandonar Evento</a>
    </form>
    @endif
    @endif
  </div>
</div>