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
                        <li class="breadcrumb-item"><a href="{{ route('vplataformas') }}">Plataformas</a></li>
                        <li class="breadcrumb-item"><a href="#">PlayStation</a></li>
                    </ol>
            </nav>
            <div class="container">
                <h1 class="title">Juegos</h1>
                <div class="row">
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
                        <div class="game-card">
                            <img src="{{asset('assets/img/god_of_war.jpg')}}" alt="Juego 1">
                            <div class="card-body">
                                <h4 class="card-title">God of War Ragnarok</h4>
                                <p class="card-text">Viaje del Dios de la Guerra</p>
                                <a href="carrito.html" class="btn btn-primary">Comprar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="game-card">
                            <img src="{{asset('assets/img/gran_turismo.jpg')}}" alt="Juego 1">
                            <div class="card-body">
                                <h4 class="card-title">Gran Turismo</h4>
                                <p class="card-text">Juego de Carreras</p>
                                <a href="carrito.html" class="btn btn-primary">Comprar</a>
                            </div>
                        </div>
                        <div class="game-card-descuento">
                            <div class="discount-indicator">15% de descuento</div>
                            <img src="{{asset('assets/img/spiderman.jpg ')}}" alt="Juego 1">
                            <div class="card-body">
                                <h4 class="card-title">Spiderman 2</h4>
                                <p class="card-text">Juega como Spiderman</p>
                                <a href="carrito.html" class="btn btn-primary">Comprar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="game-card">
                            <img src="{{asset('assets/img/one_punch_man.jpg')}}" alt="Juego 1">
                            <div class="card-body">
                                <h4 class="card-title">One Punch Man</h4>
                                <p class="card-text">Juego de Peleas</p>
                                <a href="carrito.html" class="btn btn-primary">Comprar</a>
                            </div>
                        </div>
                        <div class="game-card">
                            <img src="{{asset('assets/img/god_of_war_nino.jpg')}}" alt="Juego 1">
                            <div class="card-body">
                                <h4 class="card-title">God of War</h4>
                                <p class="card-text">Lucha como el Dios de la Guerra</p>
                                <a href="carrito.html" class="btn btn-primary">Comprar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="game-card">
                            <img src="{{asset('assets/img/the_last_of_us.jpg')}}" alt="Juego 2">
                            <div class="card-body">
                                <h4 class="card-title">The Last of Us</h4>
                                <p class="card-text">Juego de zombis</p>
                                <a href="carrito.html" class="btn btn-primary">Comprar</a>
                            </div>
                        </div>
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
