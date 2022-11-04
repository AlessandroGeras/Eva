{{--Listagem de Avisos Gerais na página inicial--}}

<html>

@if(count($warning)>0)
<div id="index_warning" class="w-5/6 fixed text-center z-30 border-2 border-solid border-black shadow-[0_0px_2px_rgba(0,0,0,0.3)] warning rounded-lg block py-2 px-2 font-sans sm:px-10 sm:py-5 sm:w-1/2 dark:warning_darkmode">
    <div class="h5 sm:h4 dark:text-gray-200">~ Aviso Geral ~</div><br>
    @foreach($warning as $aviso)
    <span class="text-xs sm:text-base dark:text-gray-200">{{$aviso->warning}}</span><br><br>
    @endforeach
    <button class="absolute top-[5px] right-[5px] border-2 border-gray-200  bg-gray-100 cursor-pointer" onclick="warning_close()">
        &#x2715;
    </button>
</div>
</div>
@endif

</html>
