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
                <li class="breadcrumb-item"><a href="{{ route('accesorios') }}">Accesorios</a></li>
                <li class="breadcrumb-item"><a href="#">Mandos</a></li>
            </ol>
        </nav>
    </div>
    <div class="container">
            <h1 class="title">Mandos</h1>
            <div class="row">
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
                    <div class="game-card">
                        <img src="{{asset('assets/img/mando2.jpg')}}" class="card-img-top" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Control Inalámbrico Dualsense Midnight Black - Playstation 5 </h4>
                            <p class="card-text">$1,339.00</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="game-card">
                        <img src="{{asset('assets/img/mando3.jpg ')}}" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Control alámbrico PowerA Advantage para Xbox Series X|S </h4>
                            <p class="card-text">$828.69</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                    <div class="game-card-descuento">
                        <div class="discount-indicator">15% de descuento</div>
                        <img src="{{asset('assets/img/mando4.jpg')}}" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">KAMYSEN Pro Mando para Nintendo Switch </h4>
                            <p class="card-text">$359.00</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="game-card">
                        <img src="{{asset('assets/img/mando5.jpg')}}" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">PowerA Control  para Nintendo Switch </h4>
                            <p class="card-text">$658.15</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                    <div class="game-card">
                        <img src="{{asset('assets/img/mando6.jpg')}}" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Cargador para Controles de PS5</h4>
                            <p class="card-text">$415.00</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="game-card">
                        <img src="{{asset('assets/img/mando7.jpg')}}" alt="Juego 2">
                        <div class="card-body">
                            <h4 class="card-title">Control Inalámbrico Xbox </h4>
                            <p class="card-text">$1,099.00</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
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
