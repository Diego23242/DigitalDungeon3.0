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
                <li class="breadcrumb-item"><a href="{{ route('categorias') }}">Categorias</a></li>
                <li class="breadcrumb-item"><a href="#">Aventura</a></li>
            </ol>
        </nav>
        </div>
        <div class="container">
            <h1 class="title">Aventura</h1>
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="game-card">
                        <img src="{{asset('assets/img/Carátula oficial de Minecraft PC en 3DJuegos.jpg ')}}" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Minecraft</h4>
                            <p class="card-text">Mundo abierto</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                    <div class="game-card-descuento">
                        <div class="discount-indicator">10% de descuento</div>
                        <img src="{{asset('assets/img/Portal 2 (PC_Mac DVD) [Importación inglesa].jpg')}}" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Portal 2</h4>
                            <p class="card-text">El verdadero reto</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="game-card">
                        <img src="{{asset('assets/img/Crash Twinsanity.jpg')}}" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Crash Twinsanity</h4>
                            <p class="card-text">Juego en 2d</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                    <div class="game-card">
                        <img src="{{asset('assets/img/descarga (17).jpg')}}" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Zelda</h4>
                            <p class="card-text">La aventura comienza</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="game-card-descuento">
                        <div class="discount-indicator">20% de descuento</div>
                        <img src="{{asset('assets/img/reddead.jpg')}}" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Red Dead Redemption 2</h4>
                            <p class="card-text">Accion en el Viejo Oeste</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                    <div class="game-card">
                        <img src="https://image.api.playstation.com/vulcan/ap/rnd/202011/0919/cDHU28ds7cCvKAnVQo719gs0.png"
                            alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Hogwarts Legacy</h4>
                            <p class="card-text">RPG inmersivo de acción en mundo abierto.</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="game-card">
                        <img src="{{asset('assets/img/elder.jpg')}}" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">The Elder Scrolls® Online</h4>
                            <p class="card-text">RPG multijugador online y vive una aventura sin límites</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                    <div class="game-card">
                        <img src=" {{asset('assets/img/the-last-of-us-parte-1.jpg')}}"
                            alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">The Last of Us™ Parte I</h4>
                            <p class="card-text">Disfruta de la emotiva historia y los inolvidables personajes de The
                                Last of Us</p>
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
