<div id="form_editar_palestra_container">
  <div id="form_editar_palestra">
    <form method="POST" action="{{ route('editarPalestra', [$palestra->id])}}" id="form_editar_palestra" onsubmit="if((document.getElementById('form_editar_palestra_date').value)>=('<?php echo date('Y-m-d\TH:i') ?>')){loading('Editando palestra');}">
      @csrf
      @method("PUT")
      <input type="text" id="form_editar_palestra_name" name="name" maxlength="20" value="{{$palestra->name}}"><br><br>
      <textarea id="form_editar_palestra_info" name="info" rows="10" cols="25" maxlength="400">{{$palestra->info}}</textarea> <br><br>
      <input type="datetime-local" id="form_editar_palestra_date" name="date" min="<?php echo date('Y-m-d\TH:i') ?>" value="{{$palestra->date}}"> <br><br>
      <input type="submit" value="Editar">
      <input type="button" value="Cancelar" id="cancelar_palestra_botao" onclick="editar_palestra()">
    </form>
  </div>
</div>