{{--Opções para o Administrador promover ou rebaixar usuários--}}

@if($user->permission->role=="User")
  <form class="flex center justify-around mt-10" action="{{ route('permission', [$user->id])}}" method="POST">
    @csrf
    <input type="hidden" name="role" value="Professional">

    <a class="button_professional text-white dark:text-gray-200 dark:button_professional_darkmode" href="#" onclick="this.closest('form').submit();loading('Promovendo usuário para profissional')">Promover para Profissional</a>
  </form>

  @endif
  @if($user->permission->role=="Professional")
  <form class="flex center justify-around mt-10" action="{{ route('permission', [$user->id])}}" method="POST">
    @csrf
    <input type="hidden" name="role" value="User">

    <a class="button_user text-white dark:text-gray-200 dark:button_user_darkmode" href="#" onclick="this.closest('form').submit();loading('Rebaixando profissional para usuário')">Rebaixar para Usuário</a>
  </form>
  @endif