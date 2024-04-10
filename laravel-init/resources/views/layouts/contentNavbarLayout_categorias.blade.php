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
                <li class="breadcrumb-item"><a href="#">Categorias</a></li>
            </ol>
        </nav>
    </div>
    <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <a href="{{ route('accion') }}" class="card-link">
                        <div class="card">
                            <img src="{{ asset('assets/img/Call of Duty_ Black Ops III [2015].jpg') }}" class="card-img-top" alt="Juego 1">
                            <div class="card-body">
                                <h5 class="card-title">Accion</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <a href="{{ route('aventura') }}" class="card-link">
                        <div class="card">
                            <img src="{{asset('assets/img/reddead.jpg')}}" class="card-img-top" alt="Juego 1">
                            <div class="card-body">
                                <h5 class="card-title">Aventura</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <a href="{{ route('retro') }}" class="card-link">
                        <div class="card">
                            <img src="{{asset('assets/img/donkey.jpg ')}}" class="card-img-top" alt="Juego 1">
                            <div class="card-body">
                                <h5 class="card-title">Retro</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <a href="{{ route('plataformas') }}" class="card-link">
                        <div class="card">
                            <img src="https://upload.wikimedia.org/wikipedia/en/0/04/Hollow_Knight_first_cover_art.webp" class="card-img-top" alt="Juego 1">
                            <div class="card-body">
                                <h5 class="card-title">Plataformas</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <a href="{{ route('terror') }}" class="card-link">
                        <div class="card">
                            <img src="{{asset('assets/img/poppy1.jpg')}}" class="card-img-top" alt="Juego 1">
                            <div class="card-body">
                                <h5 class="card-title">Terror</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <a href="{{ route('simulacion') }}" class="card-link">
                        <div class="card">
                            <img src="https://cdn-products.eneba.com/resized-products/ZnCbfaV_350x200_3x-0.jpg" class="card-img-top" alt="Juego 1">
                            <div class="card-body">
                                <h5 class="card-title">Simulación</h5>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-6 col-md-6 mb-4">
                    <a href="{{ route('estrategia') }}" class="card-link">
                        <div class="card">
                            <img src="https://i.ytimg.com/vi/vAbY68o_8ew/maxresdefault.jpg" class="card-img-top" alt="Juego 1">
                            <div class="card-body">
                                <h5 class="card-title">Estrategia</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 col-md-6 mb-4">
                    <a href="{{ route('carros') }}" class="card-link">
                        <div class="card">
                            <img src="https://cdn.akamai.steamstatic.com/steam/apps/635260/capsule_616x353.jpg?t=1694001671" class="card-img-top" alt="Juego 1">
                            <div class="card-body">
                                <h5 class="card-title">Carros</h5>
                            </div>
                        </div>
                    </a>
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
