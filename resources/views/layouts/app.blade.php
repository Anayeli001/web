
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="imagenes" href="{{asset('img/ico.jpg')}}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>AlfareMex |Panel administrativo</title>
     <!-- PWA  -->
     <meta name="theme-color" content="#6777ef"/>
    <link rel="apple-touch-icon" href="{{ asset('logo.PNG') }}">
    <link rel="manifest" href="{{ asset('/manifest.json') }}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <script src="{{ asset('dist/js/adminlte.js') }}"></script>

    
   

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- Styles -->
    <link href="{{ asset('dist/css/adminlte.min.css') }}" rel="stylesheet">
    <script src="{{ asset('/sw.js') }}"></script>

    @laravelPWA

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div id="app">
        <div class="wrapper">

            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                    </li>
                </ul>
                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">
                    <!-- Notifications Dropdown Menu -->
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <i class="far fa-bell"></i>
                            <span class="badge badge-warning navbar-badge">0</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <span class="dropdown-item dropdown-header">0 Notificaciones</span>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-envelope mr-2"></i> 1 nuevos mensajes
                                <span class="float-right text-muted text-sm">0</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-users mr-2"></i> 5 Peticiones de amistad
                                <span class="float-right text-muted text-sm">02 hrs</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-file mr-2"></i> 3 Nuevos informes
                                <span class="float-right text-muted text-sm">2 Dias</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item dropdown-footer">Ver todas las notificaciones</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <i class="fas fa-power-off"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            
                            <a class="" href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                    <button type="button" class="btn btn-outline-danger btn-lg btn-block">Cerrar Sesión</button>
                                </a> 
                            <div class="dropdown-divider"></div>
                            
                        </div>
                    </li>
                </ul>
            </nav>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <aside class="main-sidebar bg-light elevation-4">
                <!-- Brand Logo -->
                <a href="{{ url('/') }}" class="brand-link">
                    <img src="https://img2.rtve.es/imagenes/espana-directo-ultimo-alfarero-tajueco/1613071808577.jpg" alt="JLDIAZ logo" class="brand-image img-circle"
                        style="opacity: .8">
                    <h3><span class="brand-text font-weight-light">AlfareMex</span></h3>
                </a>

                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            <!-- img src="{{ asset('dist/img/avatar.png')}}" class="img-circle elevation-2" alt="User Image" -->
                            <img src="https://cdn.icon-icons.com/icons2/2483/PNG/512/user_icon_149851.png" class="img-circle elevation-2" alt="User Image">
                        </div>
                        <div class="info">
                            <a href="#" class="d-block">
                                @guest
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a>
                                @else
                                {{ Auth::user()->name }}
                                <a class="" href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                    <button type="button" class="btn btn-outline-danger">Cerrar Sesión</button>
                                </a> 

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                                @endguest
                            </a>
                        </div>
                    </div>

                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                            data-accordion="false">

                            <li class="nav-item">
                                <a href="{{url('home')}}" class="{{ Request::path() === '/home' ? 'nav-link active' : 'nav-link' }}">
                                    <i class="text-info  fas fa-home"></i>
                                    <p>Inicio</p>
                                </a>
                            </li>
                            @can('administrador')
                            
                            <li class="nav-item">
                                <a href="{{url('usuarios')}}"
                                    class="{{ Request::path() === 'usuarios' ? 'nav-link active ' : 'nav-link' }}">
                                    <i class="text-info  fas fa-users"></i>
                                    <p>
                                        Usuarios
                                        <?php $users_count = DB::table('users')->count(); ?>
                                        <span class="right badge badge-danger">{{ $users_count ?? '0' }}</span>
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item admin">
                                <a href="{{url('roles')}}"
                                    class="{{ Request::path() === 'roles' ? 'nav-link active' : 'nav-link' }}">
                                    <i class="text-info fas fa-user-tag"></i>
                                    <p>
                                        Roles    
                                    </p>
                                </a>
                            </li> 
                            <li class="nav-item admin">
                                <a href="{{url('clientes/todas')}}"
                                    class="{{ Request::path() === 'clientes/todas' ? 'nav-link active' : 'nav-link' }}">
                                    <i class="text-info fas fa-user-friends"></i>
                                    <p>
                                        Clientes
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item admin">
                                <a href="{{url('proveedores')}}"
                                    class="{{ Request::path() === 'proveedores' ? 'nav-link active' : 'nav-link' }}">
                                    <i class="text-info fas fa-user-friends"></i>
                                    <p>
                                        Proveedores
                                    </p>
                                </a>
                            </li>
                            <!-- li class="nav-item admin">
                                <a href="{{url('ofertas/todas')}}"
                                    class="{{ Request::path() === 'ofertas/todas' ? 'nav-link active' : 'nav-link' }}">
                                    <i class="text-info fas fa-star"></i>
                                    <p>
                                        Oferta del dia
                                    </p>
                                </a>
                            </li -->
                            <li class="nav-item admin">
                                <a href="{{url('Categorias')}}"
                                    class="{{ Request::path() === 'Categorias' ? 'nav-link active' : 'nav-link' }}">
                                    <i class="text-info fas fa-shopping-bag"></i>
                                    <p>
                                       Categorias de Producto
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item admin">
                                <a href="{{url('producto')}}"
                                    class="{{ Request::path() === 'producto' ? 'nav-link active' : 'nav-link' }}">
                                    <i class="text-info fas fa-shopping-basket"></i>
                                    <p>
                                      Productos
                                      <?php $product_count = DB::table('productos')->count(); ?>
                                        <span class="right badge badge-danger">{{ $product_count ?? '0' }}</span>
                                    </p>
                                </a>
                            </li>
                            @endcan 
                            
                            
                            
                            @can('personal')
                            <li class="nav-item admin">
                                <a href="{{url('ofertas/todas')}}"
                                    class="{{ Request::path() === 'ofertas/todas' ? 'nav-link active' : 'nav-link' }}">
                                    <i class="fas fa-user-friends"></i>
                                    <p>
                                        Oferata del dia
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item admin">
                                <a href="{{url('clientes/todas')}}"
                                    class="{{ Request::path() === 'clientes/todas' ? 'nav-link active' : 'nav-link' }}">
                                    <i class="fas fa-user-friends"></i>
                                    <p>
                                        clientes
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item admin">
                                <a href="{{url('producto')}}"
                                    class="{{ Request::path() === 'producto' ? 'nav-link active' : 'nav-link' }}">
                                    <i class="text-info fas fa-shopping-basket"></i>
                                    <p>
                                      Productos
                                      <?php $product_count = DB::table('productos')->count(); ?>
                                        <span class="right badge badge-danger">{{ $product_count ?? '0' }}</span>
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item admin">
                                <a href="{{url('Categorias')}}"
                                    class="{{ Request::path() === 'Categorias' ? 'nav-link active' : 'nav-link' }}">
                                    <i class="text-info fas fa-shopping-bag"></i>
                                    <p>
                                       Categorias de Producto
                                    </p>
                                </a>
                            </li>
                            @endcan
                           
                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper mt-6" style="background: white">
            <section class="content">
                    @yield('content')
                </section>
                <!-- Main content -->
                <section class="content">
                    @yield('contentUsu')
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
               
            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
               <h1>Hola  </h1>
            </aside>
            <!-- /.control-sidebar -->
        </div>
    </div>
    <script src="{{asset('js/responsive.js') }}"></script>
    <script>
        function countChars(obj){
        document.getElementById("charNum").innerHTML = obj.value.length+' caracteres';}
    </script>  
    
    <script>
    if (!navigator.serviceWorker.controller) {
        navigator.serviceWorker.register("/sw.js").then(function (reg) {
            console.log("Service worker has been registered for scope: " + reg.scope);
        });
    }
</script>
<script>
    if (!navigator.serviceWorker.controller) {
        navigator.serviceWorker.register("/sw.js").then(function (reg) {
            console.log("Service worker has been registered for scope: " + reg.scope);
        });
    }
</script>
</body>
</html>
