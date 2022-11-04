<div id="form_pesquisar_palestras" class="hidden">
  <form method="GET" action="{{ route('lectures')}}" onsubmit="loading('Pesquisando palestras')">
    @csrf
    <input type="text" id="form_pesquisar_palestras_nome" name="search"> <br><br>
    <input type="submit" value="Pesquisar">
    <input type="button" value="Cancelar" id="cancelar_palestra_botao" onclick="pesquisar_palestra(this.id);">
  </form>
</div>