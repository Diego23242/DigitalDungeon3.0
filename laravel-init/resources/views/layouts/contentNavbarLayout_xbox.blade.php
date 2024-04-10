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
                <li class="breadcrumb-item"><a href="#">Xbox</a></li>
            </ol>
        </nav>
        <div class="container">
            <h1 class="title">Juegos</h1>
            <div class="row">
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
                    <div class="game-card">
                        <img src="{{asset('assets/img/kof.jpg')}}" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">The King of Fighters</h4>
                            <p class="card-text">Juego de Peleas</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="game-card">
                        <img src="{{asset('assets/img/two.jpg')}}" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Army of Two The  Devil's Cartel</h4>
                            <p class="card-text">Acción con Tiro</p>
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
                    <div class="game-card">
                        <img src="{{asset('assets/img/devil.jpg')}}" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Devil May Cry HD Collection</h4>
                            <p class="card-text">Hack and Slash</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                    <div class="game-card">
                        <img src="{{asset('assets/img/devil5.jpg')}}" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Devil May Cry 5</h4>
                            <p class="card-text">Hack and Slash</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="game-card">
                        <img src="{{asset('assets/img/Tekken.jpg')}}" alt="Juego 2">
                        <div class="card-body">
                            <h4 class="card-title">Tekken 7</h4>
                            <p class="card-text">Juego de Peleas</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                    <div class="game-card-descuento">
                        <div class="discount-indicator">20% de descuento</div>
                        <img src="{{asset('assets/img/metro.jpg')}}" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Metro Exodus</h4>
                            <p class="card-text">Acción con Tiro</p>
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
