{{--Título da página Palestras--}}

<html>
<div id="lectures_title" class="-mt-24 inline-block w-full lg:mt-0">
    {{$slot}}
    <div class="w-full sm:w-[450px] h-24 mx-auto my-6 gradient_panel dark:gradient_panel_darkmode">
        <div class="text-xl text-center dark:text-[#505739]">Palestras</div>
        <div class="styled_input dark:styled_input_darkmode">
            <form class="w-full sm:ml-[7.5%]" action="{{route('lectures')}}" method="GET" onsubmit="loading('Pesquisando palestras')">
                @csrf
                <input class="styled_warning dark:styled_warning_darkmode dark:text-gray-200" type="text" name="search" placeholder="Digite o nome da palestra"></input>
                <button type="submit" class="styled_warning"> &#10132;</button>
            </form>
        </div>
    </div>
</div>
</html>