{{--Aviso Geral dos Administradores na página Minha Conta--}}

<html>

<?php date_default_timezone_set('America/Sao_Paulo'); ?>

{{--Botão para abrir os Avisos Gerais--}}
<div class="p-2.5 text-center font-bold dark:text-gray-200">Painel Administrativo</div>
<div class="text-center">
  <div class="admin_button w-28 text-xs px-0 py-0 sm:text-sm sm:px-2.5 py-2.5 dark:admin_button_darkmode dark:text-gray-200" onclick="warning();">Aviso Geral</div>
</div>

{{--Formulário de criação dos Avisos Gerais--}}
<div id="warning_styled_input_container" class="hidden">
  <div class="styled_input dark:styled_input_darkmode">
    <form class="w-full sm:ml-[7.5%]" action="{{route('warning')}}" method="POST" onsubmit="if((document.getElementById('warning_date').value)>=('<?php echo date('Y-m-d\TH:i') ?>')){loading('Criando aviso geral');}">>
      @csrf
      <input class="styled_warning dark:text-gray-200" type="text" name="warning" placeholder="Digite o aviso geral" maxlength="175" required></input>
      <button type="submit" class="styled_warning"> &#10132;</button>
      <div id="warning_date_container" class="text-center">
        <input type="datetime-local" id="warning_date" class="dark:calendar_darkmode dark:text-gray-200" name="date" value="<?php echo date("Y-m-d H:i"); ?>" min="<?php echo date('Y-m-d\TH:i') ?>">
      </div>
    </form>
  </div>

  {{--Listagem de Avisos Gerais ativos--}}
  <div class="styled_active text-center dark:text-gray-200">
    @if(count($warning)>0)
    <br>
    <span>Aviso Geral Ativo</span><br>
    @foreach($warning as $message)

    <div class="styled_input text-left dark:styled_input_darkmode">
    <form class="w-full sm:ml-[7.5%]" action="{{ route('warning-destroy', [$message->id])}}" method="POST">
      @csrf
      @method("DELETE")
      <input class="styled_warning" type="text" name="warning" value="{{$message->warning}}" readonly></input>
      <button type="submit" class="styled_warning" onclick="loading('Excluindo aviso geral')"> &#x2715;</button>      
    </form>
    </div>

    @endforeach
    @endif
  </div>
</div>

</html>
