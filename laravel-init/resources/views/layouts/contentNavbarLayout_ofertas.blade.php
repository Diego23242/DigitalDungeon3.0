@isset($pageConfigs)
{!! Helper::updatePageConfig($pageConfigs) !!}
@endisset
@php
$configData = Helper::appClasses();
@endphp
@extends('layouts/commonMaster' )

@php
/* Display elements */
$contentNavbar = ($contentNavbar ?? true);
$isNavbar = ($isNavbar ?? true);
$isMenu = ($isMenu ?? true);
$isFlex = ($isFlex ?? false);
$isFooter = ($isFooter ?? true);
$customizerHidden = ($customizerHidden ?? '');
$pricingModal = ($pricingModal ?? false);

/* HTML Classes */
$menuFixed = (isset($configData['menuFixed']) ? $configData['menuFixed'] : '');
$navbarFixed = (isset($configData['navbarFixed']) ? $configData['navbarFixed'] : '');
$footerFixed = (isset($configData['footerFixed']) ? $configData['footerFixed'] : '');
$menuCollapsed = (isset($configData['menuCollapsed']) ? $configData['menuCollapsed'] : '');

/* Content classes */
$container = ($container ?? 'container-xxl');

@endphp

@section('layoutContent')
<div class="layout-wrapper layout-content-navbar {{ $isMenu ? '' : 'layout-without-menu' }}">
  <div class="layout-container">

    @if ($isMenu)
    @include('layouts/sections/menu/verticalMenu')
    @endif


    <!-- Layout page -->
    <div class="layout-page">
      <!-- BEGIN: Navbar-->
      @if ($isNavbar)
      @include('layouts/sections/navbar/navbar')
      @endif
      <!-- END: Navbar-->


      <!-- Content wrapper -->
      <div class="content-wrapper">
      <div class="container mt-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item  active" aria-current="page"><a href="{{ route('inicio') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Ofertas</a></li>
            </ol>
        </nav>
    </div>
    <div class="container">
        <h1 class="title">OFERTAS!!!</h1>
        <br>
        <h1 class="title">Juegos</h1>
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="game-card-descuento">
                    <div class="discount-indicator">10% de descuento</div>
                    <img src="{{asset('assets/img/Call of Duty_ Black Ops III [2015].jpg')}} " alt="Juego 1">
                    <div class="card-body">
                        <h4 class="card-title">Call Of Duty Black Ops 3</h4>
                        <p class="card-text">Multijugador de disparos.</p>
                        <a href="carrito.html" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
                <div class="game-card-descuento">
                    <div class="discount-indicator">15% de descuento</div>
                    <img src="https://assetsio.reedpopcdn.com/co2dhb.jpg?width=1200&height=1200&fit=bounds&quality=70&format=jpg&auto=webp" alt="Juego 1">
                    <div class="card-body">
                        <h4 class="card-title">DayZ</h4>
                        <p class="card-text">Tierra plagada de zombis infectados</p>
                        <a href="carrito.html" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="game-card-descuento">
                    <div class="discount-indicator">20% de descuento</div>
                    <img src="{{asset('assets/img/God of War, diez años de Dioses y venganzas.jpg ')}}" alt="Juego 1">
                    <div class="card-body">
                        <h4 class="card-title">God of War</h4>
                        <p class="card-text">Acaba con los Dioses</p>
                        <a href="carrito.html" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
                <div class="game-card-descuento">
                    <div class="discount-indicator">10% de descuento</div>
                    <img src="{{asset('assets/img/Portal 2 (PC_Mac DVD) [Importación inglesa].jpg ')}}"  alt="Juego 1">
                    <div class="card-body">
                        <h4 class="card-title">Portal 2</h4>
                        <p class="card-text">El verdadero reto</p>
                        <a href="carrito.html" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="game-card-descuento">
                    <div class="discount-indicator">20% de descuento</div>
                    <img src="{{asset('assets/img/reddead.jpg ')}}" alt="Juego 1">
                    <div class="card-body">
                        <h4 class="card-title">Red Dead Redemption 2</h4>
                        <p class="card-text">Accion en el Viejo Oeste</p>
                        <a href="carrito.html" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
                <div class="game-card-descuento">
                    <div class="discount-indicator">15% de descuento</div>
                    <img src="{{asset('assets/img/donkey.jpg')}}" alt="Juego 1">
                    <div class="card-body">
                        <h4 class="card-title">Donkey Kong Country</h4>
                        <p class="card-text">Accion en plataformas</p>
                        <a href="carrito.html" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="game-card-descuento">
                    <div class="discount-indicator">20% de descuento</div>
                    <img src="https://upload.wikimedia.org/wikipedia/en/0/04/Hollow_Knight_first_cover_art.webp"
                        alt="Juego 1">
                    <div class="card-body">
                        <h4 class="card-title">Hollow Knight</h4>
                        <p class="card-text">Mejor juego de plataformas</p>
                        <a href="carrito.html" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
                <div class="game-card-descuento">
                    <div class="discount-indicator">10% de descuento</div>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTxXxVCM9jZl9Y06COvo9OEbb64itcWUIb3YA&usqp=CAU" alt="Juego 1">
                    <div class="card-body">
                        <h4 class="card-title">Silent Hill</h4>
                        <p class="card-text">La pesadilla solo comienza</p>
                        <a href="carrito.html" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="game-card-descuento">
                    <div class="discount-indicator">15% de descuento</div>
                    <img src="{{asset('assets/img/poppy1.jpg')}}" alt="Juego 1">
                    <div class="card-body">
                        <h4 class="card-title">Poppy Playtime</h4>
                        <p class="card-text">Juego de terror indie</p>
                        <a href="carrito.html" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
                <div class="game-card-descuento">
                    <div class="discount-indicator">20% de descuento</div>
                    <img src="https://sm.ign.com/ign_latam/cover/c/cities-sky/cities-skylines-ii_zba9.jpg"
                        alt="Juego 1">
                    <div class="card-body">
                        <h4 class="card-title">Cities: Skylines II</h4>
                        <p class="card-text">Construye una ciudad y haz que prospere con el constructor de ciudades más
                            realista.</p>
                        <a href="carrito.html" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="game-card-descuento">
                    <div class="discount-indicator">10% de descuento</div>
                    <img src="https://img.hype.games/cdn/46770c84-f794-4912-a3c7-ab4accc21c10COVER%20Forza%20Horizon%205%20Standard%20Edition.png"
                        alt="Juego 1">
                    <div class="card-body">
                        <h4 class="card-title">Forza Horizon 5</h4>
                        <p class="card-text">Explora los vibrantes paisajes del mundo abierto de México</p>
                        <a href="carrito.html" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
                <div class="game-card-descuento">
                    <div class="discount-indicator">20% de descuento</div>
                    <img src="https://cdn1.epicgames.com/spt-assets/3786d94efeb348db95de16abba81e9e3/download-wrc-generations--the-fia-wrc-official-game-offer-7ihrm.jpg"
                        alt="Juego 1">
                    <div class="card-body">
                        <h4 class="card-title">WRC Generations – The FIA WRC Official Game</h4>
                        <p class="card-text">Afronta los desafíos del simulador de rallies más completo, realista y
                            exigente</p>
                        <a href="carrito.html" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="game-card-descuento">
                    <div class="discount-indicator">10% de descuento</div>
                    <img src="https://store-images.s-microsoft.com/image/apps.49179.14582624973508592.26c5f6f2-2820-4a48-be81-6d152bc5356c.48e78113-cb56-4723-8970-c4dd6a8e9ebb?q=90&w=480&h=270"
                        alt="Juego 1">
                    <div class="card-body">
                        <h4 class="card-title">Forza Horizon 4</h4>
                        <p class="card-text">Las estaciones dinámicas lo cambian todo en el mejor festival
                            automovilístico del mundo.</p>
                        <a href="carrito.html" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
                <div class="game-card-descuento">
                    <div class="discount-indicator">15% de descuento</div>
                    <img src="{{asset('assets/img/spiderman.jpg')}}" alt="Juego 1">
                    <div class="card-body">
                        <h4 class="card-title">Spiderman 2</h4>
                        <p class="card-text">Juega como Spiderman</p>
                        <a href="carrito.html" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="game-card-descuento">
                    <div class="discount-indicator">10% de descuento</div>
                    <img src="{{asset('assets/img/halo_reach.jpg')}}" alt="Juego 1">
                    <div class="card-body">
                        <h4 class="card-title">Halo Reach</h4>
                        <p class="card-text">Shooter con Multijugador</p>
                        <a href="carrito.html" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
                <div class="game-card-descuento">
                    <div class="discount-indicator">15% de descuento</div>
                    <img src="{{asset('assets/img/far_cry.jpg')}}" alt="Juego 1">
                    <div class="card-body">
                        <h4 class="card-title">Far Cry 6</h4>
                        <p class="card-text">Juego de Supervivencia</p>
                        <a href="carrito.html" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="game-card-descuento">
                    <div class="discount-indicator">20% de descuento</div>
                    <img src="{{asset('assets/img/metro.jpg ')}}" alt="Juego 1">
                    <div class="card-body">
                        <h4 class="card-title">Metro Exodus</h4>
                        <p class="card-text">Acción con Tiro</p>
                        <a href="carrito.html" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="game-card-descuento">
                    <div class="discount-indicator">10% de descuento</div>
                    <img src="{{asset('assets/img/final_fantasy.jpg')}}" alt="Juego 1">
                    <div class="card-body">
                        <h4 class="card-title">Final Fantasy 7</h4>
                        <p class="card-text">Juego de Rol</p>
                        <a href="carrito.html" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="game-card-descuento">
                    <div class="discount-indicator">20% de descuento</div>
                    <img src="{{asset('assets/img/gta5.jpg')}}" alt="Juego 1">
                    <div class="card-body">
                        <h4 class="card-title">Grand Theft Auto 5</h4>
                        <p class="card-text">Juego de Mundo Abierto</p>
                        <a href="carrito.html" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
            <!-- Agrega más juegos aquí -->
        </div>
    </div>

    <div class="container">
        <h1 class="title">Accesorios</h1>
        <div class="row">

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="game-card-descuento">
                    <div class="discount-indicator">10% de descuento</div>
                    <img src="{{asset('assets/img/audifonos1.jpg')}}" alt="Juego 1">
                    <div class="card-body">
                        <h4 class="card-title">Skullcandy Hesh Evo Cascos Over-Ear Inalámbricos</h4>
                        <p class="card-text">$1,668.14</p>
                        <a href="carrito.html" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
                <div class="game-card-descuento">
                    <div class="discount-indicator">20% de descuento</div>
                    <img src="{{asset('assets/img/mandos8.jpg ')}}" alt="Juego 1">
                    <div class="card-body">
                        <h4 class="card-title">Control inalámbrico DualSense</h4>
                        <p class="card-text">$1,390.00</p>
                        <a href="carrito.html" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="game-card-descuento">
                    <div class="discount-indicator">15% de descuento</div>
                    <img src="{{asset('assets/img/mando4.jpg')}}" alt="Juego 1">
                    <div class="card-body">
                        <h4 class="card-title">KAMYSEN Pro Controller Inalámbrico</h4>
                        <p class="card-text">$359.00</p>
                        <a href="carrito.html" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
                <div class="game-card-descuento">
                    <div class="discount-indicator">15% de descuento</div>
                    <img src="{{asset('assets/img/audifonos4.jpg')}}" alt="Juego 1">
                    <div class="card-body">
                        <h4 class="card-title">Akane Audífonos Inalámbricos de Diadema Bluetooth</h4>
                        <p class="card-text">$699.00</p>
                        <a href="carrito.html" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="game-card-descuento">
                    <div class="discount-indicator">10% de descuento</div>
                    <img src="{{asset('assets/img/mando1.jpg')}}" alt="Juego 1">
                    <div class="card-body">
                        <h4 class="card-title">PowerA Enhanced Wired Controller para Xbox Series X | S</h4>
                        <p class="card-text">$575.00</p>
                        <a href="carrito.html" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
                <div class="game-card-descuento">
                    <div class="discount-indicator">20% de descuento</div>
                    <img src="{{asset('assets/img/audifonos8.jpg ')}}" alt="Juego 1">
                    <div class="card-body">
                        <h4 class="card-title">HyperX Cloud II Wireless Audífonos Inalámbricos Para Videojuegos</h4>
                        <p class="card-text">$1,840.00</p>
                        <a href="carrito.html" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
            <!-- Agrega más juegos aquí -->
        </div>
    </div>
        <br>
        <!-- Content -->
        @if ($isFlex)
        <div class="{{$container}} d-flex align-items-stretch flex-grow-1 p-0">
          @else
          <div class="{{$container}} flex-grow-1 container-p-y">
            @endif

            @yield('content')

            <!-- pricingModal -->
            @if ($pricingModal)
            @include('_partials/_modals/modal-pricing')
            @endif
            <!--/ pricingModal -->

          </div>
          <!-- / Content -->

          <!-- Footer -->
          @if ($isFooter)
          @include('layouts/sections/footer/footer')
          @endif
          <!-- / Footer -->
          <div class="content-backdrop fade"></div>
        </div>
        <!--/ Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>

    @if ($isMenu)
    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
    @endif
    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>
  </div>
  <!-- / Layout wrapper -->
  @endsection
