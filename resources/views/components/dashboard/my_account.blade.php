{{--Link para trocar dados pessoais e senha de todas as contas--}}

<html>
<div class="-mt-24 inline-block w-full text-black text-center text-xs sm:text-base lg:mt-0 dark:text-gray-200" id="my_account">
  {{$slot}}
  <div class="flex w-full sm:w-[450px] h-24 my-6 mx-auto gradient_panel dark:gradient_panel_darkmode">    
    <div class="w-2/5 h-8 center"><div><a href="{{route('user-info')}}">Alterar dados </a></div></div>
    <div class="w-1/5 h-24"><div class="mt-4 mb-1 mx-auto">Minha conta</div><img class="w-12 h-12 mx-auto dark:brightness-75" src="assets/img/site/avatar.png"></div>
    <div class="w-2/5 h-8 center"><h5><a href="{{route('password')}}">Alterar senha</a></h5></div>
  </div>
</div>
</html>