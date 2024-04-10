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
                <li class="breadcrumb-item"><a href="#">Estrategia</a></li>
            </ol>
        </nav>
    </div>
    <body>
        <div class="container">
            <h1 class="title">Estrategia</h1>
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="game-card">
                        <img style="width: 300px; height: 300px;"
                            src="https://1.bp.blogspot.com/-P-CCmK0Wncw/W1CapTZU17I/AAAAAAAAa_M/H4VyeqllIYQH-JCUAf02JJH99w0eMBmmQCLcBGAs/s1600/pic2601683_md.jpg"
                            alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Mysterium</h4>
                            <p class="card-text">Encuentra pistas del asesino</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                    <div class="game-card-descuento">
                        <div class="discount-indicator">10% de descuento</div>
                        <img style="width: 300px; height: 300px;"
                            src="https://cdn.ligadegamers.com/imagenes/mejores-juegos-estrategia-pc-og.jpg"
                            alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title"> Age Of Empires</h4>
                            <p class="card-text">Estrategia en la era merieval</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="game-card">
                        <img style="width: 300px; height: 300px;" 
                        src=" {{asset('assets/img/Bad North.jpg')}}" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Bad North</h4>
                            <p class="card-text">Bad North es un roguelite táctico en tiempo real encantador pero brutal
                            </p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                    <div class="game-card">
                        <img style="width: 300px; height: 300px;" 
                        src=" {{asset('assets/img/Fallout Shelter.jpg')}} " alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title"> Fallout Shelter</h4>
                            <p class="card-text">Fallout Shelter te pone al mando de un refugio subterráneo Vault-Tec de
                                última generación.</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="game-card-descuento">
                        <div class="discount-indicator">15% de descuento</div>
                        <img style="width: 300px; height: 300px;"
                            src="https://i.ytimg.com/vi/vAbY68o_8ew/maxresdefault.jpg" alt="Juego 2">
                        <div class="card-body">
                            <h4 class="card-title">EVE Online</h4>
                            <p class="card-text">Conquista el universo</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                    <div class="game-card">
                        <img style="width: 300px; height: 300px;"
                            src="https://cdn.cloudflare.steamstatic.com/steam/apps/1142710/header.jpg?t=1703199063"
                            alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Warhammer</h4>
                            <p class="card-text">El imperio te necesita</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="game-card">
                        <img style="width: 300px; height: 300px;"
                            src=" {{asset('assets/img/Football Manager.jpg')}}" alt="Juego 2">
                        <div class="card-body">
                            <h4 class="card-title">Football Manager 2024</h4>
                            <p class="card-text">Ponte en el lugar de un auténtico directivo y gestiona los mejores
                                equipos del mundo </p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                    <div class="game-card">
                        <img style="width: 300px; height: 300px;"
                            src="{{asset('assets/img/Halo Wars 2.jpg')}}"
                            alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Halo Wars 2</h4>
                            <p class="card-text">Es la experiencia Halo con la que has soñado: controlar ejércitos
                                enteros de Marines, Warthogs, tanques Scorpion y Spartans</p>
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
