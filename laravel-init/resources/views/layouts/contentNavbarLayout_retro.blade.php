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
                <li class="breadcrumb-item"><a href="#">Retro</a></li>
            </ol>
        </nav>
        </div>
        <div class="container">
            <h1 class="title">Retro</h1>
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="game-card">
                        <img src="{{asset('assets/img/mariobros.png')}}" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Super Mario Bros</h4>
                            <p class="card-text">Juego de plataformas</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                    <div class="game-card">
                        <img src="{{asset('assets/img/contra.jpg')}}" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Contra</h4>
                            <p class="card-text">Disparos en 2d</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="game-card">
                        <img src="https://i.3djuegos.com/juegos/15536/the_king_of_fighters___039_97_global_match/fotos/ficha/the_king_of_fighters___039_97_global_match-4004267.webp"
                            alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">The King of Fighters '97 Global Match</h4>
                            <p class="card-text">Peleas 1 vs 1</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                    <div class="game-card">
                        <img src="{{asset('assets/img/sonic.png')}}" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Sonic the Hedgehog 2</h4>
                            <p class="card-text">Aventura en 2d</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="game-card">
                        <img src="{{asset('assets/img/metalslug.jpg')}}" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Metal Slug</h4>
                            <p class="card-text">Accion en 2d</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                    <div class="game-card">
                        <img src="{{asset('assets/img/MetalSlug2.jpg')}}"
                            alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Metal Slug 2</h4>
                            <p class="card-text">Accion pura</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="game-card">
                        <img src="{{asset('assets/img/metal3.jpg')}}" alt="Juego 2">
                        <div class="card-body">
                            <h4 class="card-title">Metal Slug 3</h4>
                            <p class="card-text">Pura diversion y accion</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                    <div class="game-card-descuento">
                        <div class="discount-indicator">15% de descuento</div>
                        <img src="{{asset('assets/img/donkey.jpg ')}}" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Donkey Kong Country</h4>
                            <p class="card-text">Accion en plataformas</p>
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
