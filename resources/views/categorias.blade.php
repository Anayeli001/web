@extends('layouts.fronted.categorias')
@section('redes')

@endsection
@section('navbar_top')
<div class="header-top">
    <div class="container d-flex justify-content-between">
        <div class="d-inline-flex ml-auto">
            
        </div>
    </div>
</div>
@endsection
@section('navbar')
    <header>
    <a href="#" class="logo">
        <h2 style="color: white" class="imgtamaño">AlfareMex</h2>
        <!--<img  class="imgtamaño" src="{{ asset('img/jldm.png')}}" alt="JLDM ! Proyects">-->
    </a>
    <div class="menu-toggle" ></div>
        <nav>
            <ul>
                <li><a href="{{ url('/')}}" >INICIO</a></li>
                <li><a href="{{ url('/contact')}}">CONTÁCTENOS</a></li>
                <li><a class="active" href="{{ url('/productos')}}">PRODUCTOS</a></li>
                <li><a href="{{ url('/nosotros')}}">NOSOTROS</a></li>
                 <li>
                    @guest
                    <a href="{{ route('login') }}">LOGIN</a>
                    @else
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-user"></i>
                    <span class="badge badge-warning navbar-badge">{{ Auth::user()->name }}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <div class="dropdown-divider"></div>
                    <a href="{{ url('/home')}}" class="dropdown-item">
                        <i class="fas fa-envelope mr-2"></i>Mi cuenta
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" class="dropdown-item dropdown-footer">
                        Cerrar Sesión
                    </a>
                </div>
                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                    style="display: none;">
                    @csrf
                </form>
                @endguest 
            </li>
            </ul>
        </nav>
        <div class="clearfix"></div>
    </header>
@endsection
@section('banner')
<div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="hero-text">
                    <h4>ARTESANIA <span>-Sitio Web-</span></h4>
					    <br><br>
                        <p class="tipeo1">VARIEDAD DE PRODUCTOS</p>
                        <p class="tipeo2"><span class="type"></span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 
@section('products')
<div class="main">
    <h1 class="title_category">Escoja una de nuestras categorías</h1>
    <hr class="style4">
    <ul class="cards">
        @foreach($categorias as $categoria)
      <li class="cards_item">
        <div class="card">
          <div class="card_image"><img  src="https://mlm-s2-p.mlstatic.com/616526-MLM28452714069_102018-O.jpg" height="100"></div>
          <div class="card_content">
            <h1 class="card_title">{{$categoria->name}}</h1>
            <hr>
            <p class="card_text">{{$categoria->descripcion}}</p> 
            <a class="btn card_btn" href="{{ route('searchCategory' , $categoria->slug)}}"> 
                Productos
            </a>
          </div>
        </div>
      </li>
      @endforeach
    </ul>
  </div>
@endsection

@section('footer')
<footer class="footer">
    <div class="l-footer">
        <img  class="footer_img" src="{{asset('img/ico.jpg')}}" alt="AlfareMex">
        <h2 style="color: white" class="footer_img">AlfareMex</h2>
    <p>
    </p>
    </div>
        <ul class="r-footer">
            <li>
            <h2>Social</h2>
                <ul class="box">
                    <li class="button_social">
                        <i class="fab mr-2 fa-facebook"></i>
                        <a href="#" target="_blank">Facebook</a>
                    </li>
                    <li class="button_social">
                    <i class="fab mr-2 fa-twitter"></i>
                        <a href="#">Twitter</a>
                    </li>
                    <li class="button_social">
                        <i class="fab mr-2 fa-instagram"></i>
                        <a href="#" target="_blank">Instagram</a>
                    </li>
                    <li class="button_social">
                        <i class="fab mr-2 fa-linkedin-in"></i>
                        <a href="#" target="_blank">Linkedin</a>
                    </li>
                </ul>
            </li>
            <li class="features">
            <h2>Información</h2>
            <ul class="box">












            
            <div class="modal fade bd-example-modal">
  <div class="modal-dialog" role="document">
        
      </div>
      <div class="modal-body" >
      <center><h1 class="modal-title"><center>POLÍTICA DE PRIVACIDAD</center></h1></center>
        <p>
            El presente Política de Privacidad establece los términos en que AlfareMex usa y protege la información que es proporcionada por sus usuarios al momento de utilizar su sitio web. Esta compañía está comprometida con la seguridad de los datos de sus usuarios. Cuando le pedimos llenar los campos de información personal con la cual usted pueda ser identificado, lo hacemos asegurando que sólo se empleará de acuerdo con los términos de este documento. Sin embargo esta Política de Privacidad puede cambiar con el tiempo o ser actualizada por lo que le recomendamos y enfatizamos revisar continuamente esta página para asegurarse que está de acuerdo con dichos cambios.
<center><h1>Información que es recogida</h1></center>
Nuestro sitio web podrá recoger información personal por ejemplo: Nombre,  información de contacto como  su dirección de correo electrónica e información demográfica. Así mismo cuando sea necesario podrá ser requerida información específica para procesar algún pedido o realizar una entrega o facturación. <br><br>

<center><h1>Uso de la información recogida</h1></center>
Nuestro sitio web emplea la información con el fin de proporcionar el mejor servicio posible, particularmente para mantener un registro de usuarios, de pedidos en caso que aplique, y mejorar nuestros productos y servicios.  Es posible que sean enviados correos electrónicos periódicamente a través de nuestro sitio con ofertas especiales, nuevos productos y otra información publicitaria que consideremos relevante para usted o que pueda brindarle algún beneficio, estos correos electrónicos serán enviados a la dirección que usted proporcione y podrán ser cancelados en cualquier momento.
AlfareMex está altamente comprometido para cumplir con el compromiso de mantener su información segura. Usamos los sistemas más avanzados y los actualizamos constantemente para asegurarnos que no exista ningún acceso no autorizado. <br><br>

<center><h1>Cookies</h1></center>
Una cookie se refiere a un fichero que es enviado con la finalidad de solicitar permiso para almacenarse en su ordenador, al aceptar dicho fichero se crea y la cookie sirve entonces para tener información respecto al tráfico web, y también facilita las futuras visitas a una web recurrente. Otra función que tienen las cookies es que con ellas las web pueden reconocerte individualmente y por tanto brindarte el mejor servicio personalizado de su web.
Nuestro sitio web emplea las cookies para poder identificar las páginas que son visitadas y su frecuencia. Esta información es empleada únicamente para análisis estadístico y después la información se elimina de forma permanente. Usted puede eliminar las cookies en cualquier momento desde su ordenador. Sin embargo las cookies ayudan a proporcionar un mejor servicio de los sitios web, estás no dan acceso a información de su ordenador ni de usted, a menos de que usted así lo quiera y la proporcione directamente . Usted puede aceptar o negar el uso de cookies, sin embargo la mayoría de navegadores aceptan cookies automáticamente pues sirve para tener un mejor servicio web. También usted puede cambiar la configuración de su ordenador para declinar las cookies. Si se declinan es posible que no pueda utilizar algunos de nuestros servicios.
<br><br>

<center><h1>Enlaces a Terceros</h1></center>
Este sitio web pudiera contener en laces a otros sitios que pudieran ser de su interés. Una vez que usted de clic en estos enlaces y abandone nuestra página, ya no tenemos control sobre al sitio al que es redirigido y por lo tanto no somos responsables de los términos o privacidad ni de la protección de sus datos en esos otros sitios terceros. Dichos sitios están sujetos a sus propias políticas de privacidad por lo cual es recomendable que los consulte para confirmar que usted está de acuerdo con estas.
<br><br>

<center><h1>Control de su información personal</h1></center>
<p>En cualquier momento usted puede restringir la recopilación o el uso de la información personal que es proporcionada a nuestro sitio web.  Cada vez que se le solicite rellenar un formulario, como el de alta de usuario, puede marcar o desmarcar la opción de recibir información por correo electrónico.  En caso de que haya marcado la opción de recibir nuestro boletín o publicidad usted puede cancelarla en cualquier momento.
Esta compañía no venderá, cederá ni distribuirá la información personal que es recopilada sin su consentimiento, salvo que sea requerido por un juez con un orden judicial.</p><br>

<p>AlfareMex Se reserva el derecho de cambiar los términos de la presente Política de Privacidad en cualquier momento.</p>
</p>
 </div>
 <div class="modal-footer">
  <button type="button" class="btn btn-danger" data-dismiss="modal">Aceptar</button>
</div>   
</div>
    <a href=""  data-toggle="modal" data-target=".bd-example-modal">Politica de Privacidad</a>  
 </ul>
            </li>
                















            <li class="features">
                <h2>Procedimiento de Pagos</h2>
                <ul class="box">
                    <li><a type="button" class="btn btn-outline-info" href="#">Ver mas</a></li>
                </ul>
                </li>
        </ul>
        <div class="b-footer">
            <p>Todos los Derechos reservados by <a href="#" target="_blank">©AlfareMex-2022</a></p>
        </div>
</footer>
@endsection
