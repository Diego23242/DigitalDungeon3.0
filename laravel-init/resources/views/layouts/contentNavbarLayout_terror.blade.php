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
                <li class="breadcrumb-item"><a href="#">Terror</a></li>
            </ol>
        </nav>
    </div>
        <div class="container">
            <h1 class="title">Terror</h1>
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="game-card">
                        <img src="https://ak.uecdn.es/p/110/thumbnail/entry_id/0_au5azqna/width/660/cache_st/1635680042/type/2/bgcolor/000000/0_au5azqna.jpg" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Blair Witch</h4>
                            <p class="card-text">Juego de terror psicológico</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                    <div class="game-card">
                        <img src="https://uvejuegos.com/img/caratulas/60078/OutlastBundleOfTerror.jpg" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Outlast</h4>
                            <p class="card-text">Juego de terror, trata de grabar sin que ellos te atrapen</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="game-card-descuento">
                        <div class="discount-indicator">10% de descuento</div>
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTxXxVCM9jZl9Y06COvo9OEbb64itcWUIb3YA&usqp=CAU" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Silent Hill</h4>
                            <p class="card-text">La pesadilla solo comienza</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                    <div class="game-card">
                        <img src="https://s3.us-east-2.amazonaws.com/ccp-prd-s3-uploads/2020/6/3/8ca4eb153a9d59259c67b32d6629e05076aeae5e.jpeg" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Alien Isolation</h4>
                            <p class="card-text">El ya viene</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="game-card-descuento">
                        <div class="discount-indicator">15% de descuento</div>
                        <img src="{{asset('assets/img/poppy1.jpg ')}}" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Poppy Playtime</h4>
                            <p class="card-text">Juego de terror indie</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                    <div class="game-card">
                        <img src="{{asset('assets/img/poppy2.jpg')}}" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Poppy Playtime chapter 2</h4>
                            <p class="card-text">Juego de terror indie</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="game-card">
                        <img src="{{asset('assets/img/poppy3.jpg')}}" alt="Juego 2">
                        <div class="card-body">
                            <h4 class="card-title">Poppy Playtime chapter 3</h4>
                            <p class="card-text">Juego de terror indei</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                    <div class="game-card">
                        <img src="{{asset('assets/img/bendy.jpg')}}" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Bendy and the Ink Machine</h4>
                            <p class="card-text">Terror indie</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <!-- Agrega más juegos aquí -->
            </div>
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
