<?php date_default_timezone_set('America/Sao_Paulo'); ?>

<div id="form_criar_palestras" class="hidden">
    <form action="/criar_palestra" method="POST" enctype="multipart/form-data" onsubmit="if((document.getElementById('form_criar_palestras_date').value)>=('<?php echo date('Y-m-d\TH:i') ?>')){loading('Criando palestra');}">
        @csrf
        <input type="text" name="name" placeholder="Digite o nome da palestra" maxlength="20"> <br><br>

        <textarea name="info" rows="10" cols="29" maxlength="400" placeholder="Digite a descrição da palestra"></textarea> <br><br>
       
        <input type="url" name="link" placeholder="Link para material de apoio"><br><br>

        <input type="datetime-local" name="date" id="form_criar_palestras_date" value="<?php echo date("Y-m-d H:i"); ?>" min="<?php echo date('Y-m-d\TH:i') ?>"> <br><br>

        <input type="submit" value="Criar">

        <input type="button" value="Cancelar" id="cancelar_palestra_botao" onclick="criar_palestra(this.id)">
    </form>
</div>
