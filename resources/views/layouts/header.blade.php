<div class="site-mobile-menu">
    <div class="site-mobile-menu-header">
    <div class="site-mobile-menu-close mt-3">
        <span class="icon-close2 js-menu-toggle"></span>
    </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div> <!-- .site-mobile-menu -->

<div class="site-navbar mt-4">
    <div class="container py-1">
        <div class="row align-items-center">
        <div class="col-8 col-md-8 col-lg-4">
            <h1 class="mb-0"><a href="/" class="text-white h2 mb-0"><strong>SAMESTA<span class="text-danger">.</span></strong></a></h1>
        </div>
        <div class="col-4 col-md-4 col-lg-8">
            <nav class="site-navigation text-right text-md-right" role="navigation">

            <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

            <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li class="active">
                @if (Route::has('login'))
                    @auth
                        <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    @endauth
                @endif
                <li><a href="{{ route('unit') }}">Unit</a></li>
                
                <li><a href="{{ route('news') }}">Berita</a></li>
                <li><a href="">Promosi</a></li>
                <li><a href="{{ route('contact') }}">Kontak</a></li>
                <li><a href="{{ route('complaint') }}">Pengaduan</a></li>

                @if (Route::has('login'))
                    @auth
                        <!-- <li><"remove""x-app-layouts></"remove"x-app-layout>li>      -->
                    @else
                        <li><a href="{{ route('login') }}">Log in</a></li>

                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @endif
                    @endauth
                </div>
                @endif

                <!-- <li class="has-children">
                    <a href="properties.html">Properties</a>
                    <ul class="dropdown arrow-top">
                        <li><a href="#">Condo</a></li>
                        <li><a href="#">Property Land</a></li>
                        <li><a href="#">Commercial Building</a></li>
                        <li class="has-children">
                        <a href="#">Sub Menu</a>
                        <ul class="dropdown">
                            <li><a href="#">Menu One</a></li>
                            <li><a href="#">Menu Two</a></li>
                            <li><a href="#">Menu Three</a></li>
                        </ul>
                        </li>
                    </ul>
                </li> -->
                
            </ul>
            </nav>
        </div>
        

        </div>
    </div>
    </div>
</div>