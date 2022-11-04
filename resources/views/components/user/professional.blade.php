{{--Formulário de cadastro de consulta para Profissionais--}}

<style>
  textarea::placeholder {
    color: #505739;
  }
</style>

@if($user->permission->role=="User")
<div class="styled_input dark:styled_input_darkmode">
  <form class="mx-auto" action="{{ route('appointment-store', [$user->id])}}" method="POST" onsubmit="loading('Cadastrando informações da consulta')">
    @csrf
    <input type="hidden" name="professional" value="{{$currentUser->name}}">

    <input type="hidden" name="date" value="<?php echo date("Y-m-d H:i"); ?>">

    <textarea class="styled_warning w-full h-20 placeholder:text-xs dark:text-gray-200" name="appointment" placeholder="Registrar dados da consulta" required></textarea>

    <hr>

    <input class="styled_warning dark:text-gray-200" type="url" name="link" placeholder="Link para material externo"></input>

    <button type="submit" class="styled_warning"> &#10132;</button>
  </form>
</div>
@endif
