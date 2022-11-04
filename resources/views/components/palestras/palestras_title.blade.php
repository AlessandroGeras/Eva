<div id="palestras_title" class="no_margin">
    <div id="palestras_panel">
        <h2>Palestras</h2>
        <div class="styled_input">
            <form action="{{route('palestras')}}" method="GET" onsubmit="loading('Pesquisando palestras')">
                @csrf
                <input class="styled_warning" type="text" name="search" placeholder="Digite o nome da palestra"></input>
                <button type="submit" class="styled_warning"> &#129122;</button>
            </form>
        </div>
    </div>
</div>