{{--Editar Palestra dos Profissionais e Administradores na página Palestra--}}

<?php date_default_timezone_set('America/Sao_Paulo'); ?>

{{--Botão para abrir o formulário de edição de Palestras--}}
<div class="-mt-2 text-center mb-5">
  <div class="admin_button text-xs px-2.5 py-0 sm:text-sm sm:px-2.5 py-2.5 dark:admin_button_darkmode dark:text-gray-200" onclick="edit_lecture('{{ $lecture->name }}','{{ $lecture->info }}','{{ $lecture->date }}','{{ $lecture->link }}')">Editar palestra</div>
</div>

{{--Formulário de Edição de Palestras--}}
<div id="edit_lecture" class="hidden">
  <div class="styled_input dark:styled_input_darkmode">
    <form action="{{ route('edit-lecture', [$lecture->id])}}" method="POST" onsubmit="if((document.getElementById('edit_lecture_date').value)>=('<?php echo date('Y-m-d\TH:i') ?>')){loading('Editando palestra');}">
      @csrf
      @method("PUT")
      <input class="styled_warning dark:text-gray-200" id="edit_lecture_name" type="text" name="name" placeholder="Digite o nome da palestra" maxlength="20" required></input>

      <button type="submit" class="styled_warning"> &#10132;</button>

      <input class="styled_warning dark:text-gray-200" id="edit_lecture_info" type="text" name="info" placeholder="Digite a descrição da palestra" required></input>

      <input class="styled_warning dark:text-gray-200" id="edit_lecture_link" type="url" name="link" placeholder="Link para conteúdo extra"></input>

      <div id="warning_date_container" class="text-center -ml-[20%]">
        <input type="datetime-local" class="dark:text-gray-200 dark:calendar_darkmode" id="edit_lecture_date" name="date" value="<?php echo date("Y-m-d H:i"); ?>" min="<?php echo date('Y-m-d\TH:i') ?>">
      </div>
    </form>
  </div>
</div>