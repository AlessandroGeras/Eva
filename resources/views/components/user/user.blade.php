{{--Visualização do usuário pesquisado por Profissionais e Administradores pela página Minha Conta --}}

<div class="-mt-24 inline-block w-full text-black text-center lg:mt-0" id="table_container">

  {{$slot}}

  {{--Tabela de informações do usuário--}}
  <table class="mx-auto my-6 text-xs sm:text-base dark:text-gray-200">
    <tr>
      <td colspan="2" class="bg-black text-sm text-white text-center sm:text-lg dark:bg-sky-900 dark:text-gray-200">{{$user->name}}</td>
    </tr>
    <tr class="dark:bg-gray-800">
      <td>Email</td>
      <td> {{$user->email}}</td>
    </tr>
    <tr class="dark:bg-gray-800">
      <td>Endereço</td>
      <td> {{$user->address}}</td>
    </tr>
    <tr class="dark:bg-gray-800">
      <td>Telefone</td>
      <td> {{$user->phone_number}}</td>
    </tr>
    @if (count($manylectures) > 0)
    <tr>
      <td colspan="2" class="bg-black text-sm text-white text-center sm:text-lg dark:bg-sky-900 dark:text-gray-200">Palestras Inscritas</td>
    </tr>
    @foreach($manylectures as $lecture)
    <tr class="bg-[#d6d6d6] text-xs sm:text-base dark:bg-gray-900 dark:text-gray-200">
      <td>Palestra</td>
      <td>{{$lecture->name}}</td>
    </tr>
    @endforeach
    @endif
    <tr class="bg-black text-sm text-white text-center sm:text-lg dark:bg-sky-900 dark:text-gray-200">
      <td colspan="2">Permissão:

        @switch($user->permission->role)
        @case('Administrator')
        Administrador
        @break

        @case('Professional')
        Profissional
        @break

        @case('User')
        Usuário
        @break
        @endswitch

      </td>
    </tr>
  </table>