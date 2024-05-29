<header class="bg-dark d-flex align-content-center align-items-center py-5 px-5 text-white">
<div id="logo" class="text-center">
        <img src="{{ Vite::asset('public/images/dc-logo.png') }}" alt="">
    </div>
    <div id="main-menu">

        <nav class="navbar-nav container navbar-light">
            <ul class="list-unstyled d-flex justify-content-center gap-2 text-uppercase ps-5">
                <li class="nav-item">
                    <a class="nav-link {{Route::currentRouteName() == 'home' ? 'active' : ''}}" href="{{route('home')}}">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{Route::currentRouteName() == 'comics.index' ? 'active' : ''}}" href="{{route('comics.index')}}">
                        Comics
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{Route::currentRouteName() == 'comics.create' ? 'active' : ''}}"  href="{{route('comics.create')}}">
                        Add a comic
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    </header>