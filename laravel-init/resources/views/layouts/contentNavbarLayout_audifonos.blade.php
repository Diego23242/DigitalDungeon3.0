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
                <li class="breadcrumb-item"><a href="#">Audifonos</a></li>
            </ol>
        </nav>
    </div>
    <div class="container">
            <h1 class="title">Audifonos</h1>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="game-card-descuento">
                        <div class="discount-indicator">10% de descuento</div>
                        <img src="{{asset('assets/img/audifonos1.jpg ')}}" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Skullcandy Hesh Evo Cascos Over-Ear Inalámbricos</h4>
                            <p class="card-text">$1,668.14</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                    <div class="game-card">
                        <img src="{{asset('assets/img/audifonos2.jpg')}}" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">HyperX HHSS1C-KB-WT/G HyperX Cloud Stinger Core </h4>
                            <p class="card-text">$1,099.00</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="game-card">
                        <img src="{{asset('assets/img/audifonos3.jpg')}}" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Logitech G733 LIGHTSPEED Audífonos Inalámbricos Gaming</h4>
                            <p class="card-text">$2,788.32</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                    <div class="game-card-descuento">
                        <div class="discount-indicator">15% de descuento</div>
                        <img src="{{asset('assets/img/audifonos4.jpg')}}" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Akane Audífonos Inalámbricos </h4>
                            <p class="card-text">$699.00</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="game-card">
                        <img src="{{asset('assets/img/audifonos5.jpg')}}" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">JBL Audífonos Gamer</h4>
                            <p class="card-text">$673.00</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                    <div class="game-card">
                        <img src="{{asset('assets/img/audifonos6.jpg')}}" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Game Factor HSB600 Audifonos Inalambricos Gamer</h4>
                            <p class="card-text">$415.00</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="game-card">
                        <img src="{{asset('assets/img/audifonos7.jpg')}}" alt="Juego 2">
                        <div class="card-body">
                            <h4 class="card-title">Razer BlackShark V2 Pro - Blanco Audifonos gamer inalámbricos</h4>
                            <p class="card-text">$3,433.62</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="game-card-descuento">
                        <div class="discount-indicator">20% de descuento</div>
                        <img src="{{asset('assets/img/audifonos8.jpg ')}}" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">HyperX Cloud II Wireless Audífonos Inalámbricos </h4>
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
