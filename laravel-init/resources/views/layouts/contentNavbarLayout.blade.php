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
    <!-- Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('assets/img/banner Minecraft.jpg')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{asset('assets/img/Banner COD.jpg ')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{asset('assets/img/Ziggurat.jpg')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{asset('assets/img/Loop Hero.jpg')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{asset('assets/img/banner Battelfield.jpg')}}" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <br>
    <!-- News Section -->
    <div class="container mt-5 text-dark">
        <center> <h2>Noticias</h2></center>
        <div class="row">
            <div class="col-md-4">
                <div class="card text-dark card-border"> 
                    <img src="{{asset('assets/img/noticias1.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">PlayStation 5 ha vendido aproximadamente el doble que Xbox Series en todo el mundo</h5>
                        <p class="card-text">Take-Two, la matriz de las desarrolladoras de videojuegos como Grand Theft Auto 6 y NBA 2K, afirma que se han vendido 77 millones de consolas de última generación hasta el 31 de diciembre.</p>
                        <a href="#" class="btn btn-primary">Leer más</a>
                    </div>
                </div><br>
            </div>
            <div class="col-md-4">
                <div class="card text-dark  card-border">
                    <img src="{{asset('assets/img/noticias2.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Ubisoft está organizando sus estrenos teniendo en cuenta el lanzamiento de GTA 6</h5>
                        <p class="card-text">Yves Guillemot, director ejecutivo de la firma de Assassin's Creed y Far Cry, afirma que el estreno de Grand Theft Auto 6 será positivo para Ubisoft y el resto de la industria.</p>
                        <a href="#" class="btn btn-primary">Leer más</a>
                    </div>
                </div><br>
            </div>
            <div class="col-md-4">
                <div class="card text-dark  card-border">
                    <img src="{{asset('assets/img/noticias3.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Así es Tiny Glade, un precioso y relajante juego de construcción que se ha hecho viral en TikTok</h5>
                        <p class="card-text">Crea dioramas preciosos en pequeños escenarios de naturaleza exuberante con este prometedor título para PC que recuerda a Townscaper y Cloud Gardens.</p>
                        <a href="#" class="btn btn-primary">Leer más</a>
                    </div>
                </div><br>
            </div>
        </div>
    </div>
    <div class="container mt-5 text-light">
        <div class="row">
            <div class="col-md-4">
                <div class="card text-dark  card-border">
                    <img src="{{asset('assets/img/noticias4.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">'GTA 6 no saldrá antes de abril de 2025', aseguran los analistas tras el informe fiscal de Take-Two</h5>
                        <p class="card-text">Take-Two Interactive ha rebajado las expectativas de ingreso del año fiscal 2025 en 1000 millones de dólares, lo que para los analistas indica que GTA 6 no estará disponible a principios de año.</p>
                        <a href="#" class="btn btn-primary">Leer más</a>
                    </div>
                </div><br>
            </div>
            <div class="col-md-4">
                <div class="card text-dark  card-border">
                    <img src="{{asset('assets/img/noticias5.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Las Tortugas Ninja ya están en Fortnite: Tráiler gameplay, evento 'Cowabunga' y precio del lote</h5>
                        <p class="card-text">¿En qué consiste el evento de las Tortugas Ninja en Fortnite? Os contamos todo sobre 'Cowabunga': novedades en el gameplay, misiones, nuevas skins y más.</p>
                        <a href="#" class="btn btn-primary">Leer más</a>
                    </div>
                </div><br>
            </div>
            <div class="col-md-4">
                <div class="card text-dark  card-border">
                    <img src="{{asset('assets/img/noticias6.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Homeworld 3 se vuelve a retrasar a un mes de su lanzamiento y confirma que tendrá Denuvo</h5>
                        <p class="card-text">El equipo está recibiendo comentarios por su demo y unas pruebas internas, y hará cambios para ofrecer la mejor experiencia.</p>
                        <a href="#" class="btn btn-primary">Leer más</a>
                    </div>
                </div><br>
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
