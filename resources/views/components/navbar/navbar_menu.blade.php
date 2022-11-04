{{--Navbar no Layout principal--}}

<div id="navbar_menu" class="mobile_close w-full h-full block text-black bg-sky-900 float-left lg:float-right lg:w-[800px] lg:bg-transparent dark:text-gray-200">
  <ul class="font-bold center text-center justify-center leading-none lg:flex lg:dark:text-gray-200">
    <li><a class="link dark:hover:text-black" href="{{ route('index')}}">INICIO</a></li>
    <li><a class="link dark:hover:text-black" href="{{ route('eva')}}">PROJETO EVA</a></li>
    <li><a class="link dark:hover:text-black" href="{{ route('lectures')}}">PALESTRAS</a></li>

    @guest
    <li><a class="link dark:hover:text-black" href="{{ route('login')}}">LOGIN</a></li>
    <li><a class="link dark:hover:text-black" href="{{ route('register')}}">CADASTRAR</a></li>
    @endguest

    @auth
    <li><a class="link dark:hover:text-black" href="{{ route('dashboard')}}">MINHA CONTA</a></li>
    <li>
      <form action="{{ route('logout')}}" method="POST">
        @csrf
        <a class="link cursor-pointer lg:mt-12 dark:hover:text-black" onclick="event.preventDefault();this.closest('form').submit();">LOGOUT</a>
      </form>
    </li>
    @endauth

  </ul>
</div>
