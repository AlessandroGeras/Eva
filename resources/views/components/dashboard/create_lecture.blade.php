{{--Criar Palestra dos Profissionais e Administradores na página Minha Conta--}}

<html>

<?php date_default_timezone_set('America/Sao_Paulo'); ?>

{{--Botão para abrir o formulário de criação de Palestras--}}
<div class="pt-2.5 text-center">
  <div class="admin_button w-28 text-xs px-0 py-0 sm:text-sm sm:px-2.5 py-2.5 dark:admin_button_darkmode dark:text-gray-200" onclick="create_lecture();">Criar palestra</div>
</div>

{{--Formulário de Criação de Palestras--}}
<div id="create_lecture_styled_input_container" class="hidden">
  <div class="styled_input dark:styled_input_darkmode">
    <form class="w-full sm:ml-[7.5%]" action="{{route('create-lecture')}}" method="POST" onsubmit="if((document.getElementById('create_lecture_date').value)>=('<?php echo date('Y-m-d\TH:i') ?>')){loading('Criando palestra');}">
      @csrf
      <input class="styled_warning dark:text-gray-200" type="text" name="name" placeholder="Digite o nome da palestra" maxlength="20" required></input>

      <button type="submit" class="styled_warning"> &#10132;</button>

      <input class="styled_warning  dark:text-gray-200" type="text" name="info" placeholder="Descrição da palestra" required></input>

      <input class="styled_warning dark:text-gray-200" type="url" name="link" placeholder="Link para material externo"></input>

      <div id="warning_date_container" class="text-center -ml-[20%]">
        <input type="datetime-local" class="dark:calendar_darkmode dark:text-gray-200" id="create_lecture_date" name="date" value="<?php echo date("Y-m-d H:i"); ?>" min="<?php echo date('Y-m-d\TH:i') ?>">
      </div>
    </form>
  </div>
</div>

</html>