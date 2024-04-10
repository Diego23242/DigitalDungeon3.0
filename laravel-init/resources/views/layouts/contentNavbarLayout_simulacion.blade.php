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
                <li class="breadcrumb-item"><a href="#">Simulación</a></li>
            </ol>
        </nav>
    </div>
    <div class="container">
        <h1 class="title">Simulacion</h1>
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
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
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="game-card">
                    <img src="https://m.media-amazon.com/images/I/71s3WY8EB4L._AC_UF1000,1000_QL80_.jpg" alt="Juego 1">
                    <div class="card-body">
                        <h4 class="card-title">Fishing Planet</h4>
                        <p class="card-text">Fishing Planet® es un simulador de pesca multijugador</p>
                        <a href="carrito.html" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
                <div class="game-card">
                    <img src="https://cdn-products.eneba.com/resized-products/ZnCbfaV_350x200_3x-0.jpg" alt="Juego 1">
                    <div class="card-body">
                        <h4 class="card-title">Arma 3</h4>
                        <p class="card-text">Combate realista en un enorme mundo abierto militar.</p>
                        <a href="carrito.html" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="game-card">
                    <img src="https://image.api.playstation.com/vulcan/ap/rnd/202305/1816/8e0bcf8f41de57812a8f462542b8147c8455972b8a8b298e.jpg"
                        alt="Juego 1">
                    <div class="card-body">
                        <h4 class="card-title">Hell Let Loose</h4>
                        <p class="card-text">Shooter bestial en primera persona ambientado en la II Guerra Mundial</p>
                        <a href="carrito.html" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
                <div class="game-card">
                    <img src="{{asset('assets/img/Counter Strike Global Offensive (CSGO).jpg')}}" alt="Juego 1">
                    <div class="card-body">
                        <h4 class="card-title">CSGO</h4>
                        <p class="card-text">Terroristas vs Swat</p>
                        <a href="carrito.html" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="game-card">
                    <img src="{{asset('assets/img/descarga (16).jpg')}}" alt="Juego 2">
                    <div class="card-body">
                        <h4 class="card-title">Dante´s Inferno</h4>
                        <p class="card-text">Batallas merievales</p>
                        <a href="carrito.html" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
                <div class="game-card-descuento">
                    <div class="discount-indicator">20% de descuento</div>
                    <img src="{{asset('assets/img/God of War, diez años de Dioses y venganzas.jpg')}}" alt="Juego 1">
                    <div class="card-body">
                        <h4 class="card-title">God of War</h4>
                        <p class="card-text">Destructor de dioses</p>
                        <a href="carrito.html" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
            <!-- Agrega más juegos aquí -->
        </div>
    </div>
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
