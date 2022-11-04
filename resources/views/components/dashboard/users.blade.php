{{--Opção para Profissionais e Administradores pesquisarem usuários na página Minha Conta--}}

<html>

{{--Botão para abrir a Pesquisa de Usuários--}}
<div class="pt-2.5 text-center">
  <div class="admin_button w-28 mb-5 text-xs px-0 py-0 sm:text-sm sm:px-2.5 py-2.5 dark:admin_button_darkmode dark:text-gray-200" onclick="users();">Usuários</div>
</div>

{{--Formulário de Pesquisa de Usuários--}}
<div id="users_styled_input_container" class="hidden">
  <div class="styled_input dark:styled_input_darkmode">
    <form class="w-full sm:ml-[7.5%]" action="{{route('dashboard')}}" method="GET" onsubmit="loading('Pesquisando usuário')">
      @csrf
      <input class="styled_warning dark:text-gray-200" type="text" name="search" placeholder="Digite o nome do usuário" required></input>
      <button type="submit" class="styled_warning"> &#10132;</button>
    </form>
  </div>

  {{--Listagem de usuários encontrados--}}
  @if(isset($users))
  <div class="styled_active text-center dark:text-gray-200">
    <script>
      users();
    </script>
    <br>
    @if (count($users) == 0)
    <span>Nenhum Usuário Encontrado</span><br>
        @endif

        @if (count($users) > 0)
        @if (count($users) == 1)
        <span>Usuário Encontrado<span><br>
        @endif
            @if (count($users) > 1)
            <span>Usuários Encontrados</span><br>
            @endif

                @foreach($users as $user_found)

                <div class="styled_input text-left dark:styled_input_darkmode">
                  <form class="w-full sm:ml-[7.5%]" action="{{ route('user', [$user_found->id])}}" method="GET">
                    @csrf
                    <input type="hidden" name="id" value="{{$user_found->id}}">
                    <input class="styled_warning" type="text" value="{{$user_found->name}}" readonly></input>
                    <button class="styled_warning" onclick="loading('Pesquisando informações do usuário')"> &#10132;</button>
                  </form>
                </div>
                @endforeach
  </div>
  @endif
  @endif
</div>
</div>
</div>