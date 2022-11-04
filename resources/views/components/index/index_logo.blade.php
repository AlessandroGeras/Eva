{{--Seção de Boas Vindas da página Principal--}}

{{--Função rand para mensagem aleatória do dia--}}
@php
$count = count($messages);
$rand = rand(0,$count-1);
@endphp

<html>    
<div id="index_logo" class="inline-block w-full -mt-24 h-40 bg-zinc-900 sm:h-52 lg:mt-0 dark:bg-sky-900">
    {{$slot}}
    <div id="index_login" class="block m-auto center -mt-9">
        <div class="h4 text-center text-white sm:text-6xl dark:text-gray-200">Bem vindo ao Eva</div> 

        @guest
        <div class="flex m-auto w-20 text-black p-2 sm:p-4">
            <a class="mx-auto block text-black bg-white"href="{{route('login')}}">
                <div class="text-black text-xs p-1 sm:p-2 sm:text-base">LOGIN</div>
            </a>
        </div>
        @endguest

    </div>
</div>
<div class="h6 text-center bg-blue-500 text-gray-200 sm:text-base dark:bg-sky-800">
    "{{$messages[$rand]}}"
</div>
</html>