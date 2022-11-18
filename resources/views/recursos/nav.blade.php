<nav class="navbar navbar-expand-lg bg-white shadow-sm border mb-4">

    <div class="container">

        <div class="p-3">
            <a class="navbar-brand m-2" href="{{ route('home') }}">{{ config('app.name') }}</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="nav nav-pills">

                <li class="nav-item"><a class="nav-link {{ setActive('about') }}"
                        href="{{ route('about') }}">@lang('About')</a></li><br>

                <li class="nav-item"><a class="nav-link {{ setActive('home') }}"
                        href="{{ route('home') }}">@lang('Home')</a></li><br>

                <li class="nav-item"><a class="nav-link {{ setActive('projects.index') }}"
                        href="{{ route('projects.index') }}">@lang('proyectos')</a></li><br>

                <li class="nav-item"><a class="nav-link {{ setActive('contact') }}"
                        href="{{ route('contact') }}">@lang('Contact')</a></li><br>

                @guest{{-- //si no existe un usuario autenticado entonces: --}}
                <li class="nav-item"><a class="nav-link {{ setActive('login') }}"
                        href="{{ route('login') }}">@lang('Login')</a></li> 
                        <li class="nav-item"><a class="nav-link {{ setActive('register') }}"
                        href="{{ route('register') }}">@lang('register')</a></li> 
                        {{-- mostrar acceso a login --}}
            @else
                {{-- si ya esta logeado entonces --}}
                <li class="nav-item"><a class="nav-link {{ setActive('login') }}" href="{{ route('about') }}">
                        @auth{{-- //verifica si existe un usuario autenticado --}}
                        {{ auth()->user()->name }} {{-- //extrae el nombre del usuario autenticado --}}
                    @endauth
                </a></li>

            <li class="nav-item"><a class="nav-link {{ setActive('login') }}" href="#"
                    onclick="event.preventDefault(); /* crear un enlace a cerrar sesion */
                      document.getElementById('logout-form').submit();">Cerrar
                    Sesion</a></li>
        @endguest

    </ul>

</div>

</div>
</nav>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
@csrf
</form>
