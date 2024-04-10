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
                <li class="breadcrumb-item  active" aria-current="page"><a href="">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('categorias') }}">Categorias</a></li>
                <li class="breadcrumb-item"><a href="#">Acción</a></li>
            </ol>
        </nav>
    </div>
    
        <div class="container">
            <h1 class="title">Accion</h1>
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="game-card-descuento">
                        <div class="discount-indicator">10% de descuento</div>
                        <img src="{{ asset('assets/img/Call of Duty_ Black Ops III [2015].jpg') }}" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Call Of Duty Black Ops 3</h4>
                            <p class="card-text">Multijugador de disparos.</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                    <div class="game-card">
                        <img src="{{ asset('assets/img/Counter Strike Global Offensive (CSGO).jpg') }}" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Counter Strike Global Offensive</h4>
                            <p class="card-text">Disparos por equipo</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="game-card">
                        <img src="{{ asset('https://image.api.playstation.com/vulcan/ap/rnd/202209/0617/eiXonwxcJH00bkGo3G6lUm9t.png') }}" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Rainbow Six® Siege</h4>
                            <p class="card-text">Shooter táctico realista.</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                    <div class="game-card-descuento">
                        <div class="discount-indicator">15% de descuento</div>
                        <img src="{{ asset('https://assetsio.reedpopcdn.com/co2dhb.jpg?width=1200&height=1200&fit=bounds&quality=70&format=jpg&auto=webp') }}" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">DayZ</h4>
                            <p class="card-text">Tierra plagada de zombis infectados</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="game-card">
                        <img src="{{ asset('assets/img/COD BO2.jpg') }}" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Call Of Duty Black Ops 2</h4>
                            <p class="card-text">Shooter de disparos</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                    <div class="game-card">
                        <img src="{{ asset('assets/img/pubg-battlegrounds.png') }}" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">PUBG: BATTLEGROUNDS</h4>
                            <p class="card-text">BattleRoyal</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="game-card">
                        <img src="{{ asset('assets/img/descarga (16).jpg') }}" alt="Juego 2">
                        <div class="card-body">
                            <h4 class="card-title">Dante's Inferno</h4>
                            <p class="card-text">Accion merieval</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                    <div class="game-card-descuento">
                        <div class="discount-indicator">20% de descuento</div>
                        <img src="{{ asset('assets/img/God of War, diez años de Dioses y venganzas.jpg') }}" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">God of War</h4>
                            <p class="card-text">Acaba con los Dioses</p>
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
