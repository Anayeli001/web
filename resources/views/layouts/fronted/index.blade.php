
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="imagenes" href="{{asset('img/ico.jpg')}}">
    <title>AlfareMex | Sitio de ARTESANIA</title>

    <!--LINNK-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Open+Sans&display=swap" rel="stylesheet"> 

    <!-- Styles -->
    <link type="text/css" href="{{asset('css/style.css') }}" rel="stylesheet">
    <link type="text/css" href="{{asset('css/slick.css') }}" rel="stylesheet">
     <!-- chat -->
    <!-- src="//code.tidio.co/omryomdadqapei3eu4ilsretjror1xfz.js" async></script -->
    <script script src="//code.tidio.co/ielhw0ex5j14oiqae6qlyyn074xxhysh.js" async ></script>
</head>
<body> 
    @yield('redes')
        <section id="headerSection">
            @yield('navbar_top')
            @yield('navbar')
            @yield('banner')
        </section>
    @yield('cards_service')
    @yield('title')
        <div class="body_cards">
            @yield('cards')
        </div>
    @yield('title5')
    <br><br><br><br><br><br><br>

        @yield('Proveedores')
    @yield('title2')
    @yield('products')
    @yield('footer')
    @yield('modals')
    <!--SCRIPT-->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{asset('js/hgnka.js') }}"></script>
    <script src="{{asset('js/security.js') }}"></script>
    <script src="{{asset('js/provee.js') }}"></script>
    <script src="{{asset('js/slick.min.js') }}"></script><br>
    <script src="{{asset('js/typed.js') }}"></script><br>
    <script>
        var typed = new Typed('.type', {
        strings: ['<span><i></i></span> Encuentra los mejores productos que busca', 
                    '<span><i class="fas fa-coffee"></i></span> AlfareMex'], 
        typeSpeed:60,backSpeed:60,loop:true});
    </script><br>
    <script type="text/javascript" src="https://smartarget.online/loader.js?u=474ac831102c882718669ea8d32e721e6f3173f4"></script>
</body>






</html>
