<?php date_default_timezone_set('America/Sao_Paulo'); ?>

<div class="admin_container">
  <div class="admin_button" onclick="criar_palestra();">Criar palestra</div>
</div>

<div id="criar_palestra_styled_input_container">
  <div class="styled_input">
    <form action="{{route('criarPalestra')}}" method="POST" onsubmit="if((document.getElementById('criar_palestra_date').value)>=('<?php echo date('Y-m-d\TH:i') ?>')){loading('Criando palestra');}">
      @csrf
      <input class="styled_warning" type="text" name="name" placeholder="Digite o nome da palestra" required></input>

      <button type="submit" class="styled_warning"> &#129122;</button>

      <input class="styled_warning" type="text" name="info" placeholder="Digite a descrição da palestra" required></input>

      <input class="styled_warning" type="url" name="link" placeholder="Link para material de apoio"></input>

      <div id="warning_date_container">
        <input type="datetime-local" id="criar_palestra_date" name="date" value="<?php echo date("Y-m-d H:i"); ?>" min="<?php echo date('Y-m-d\TH:i') ?>">
      </div>
    </form>
  </div>
</div>