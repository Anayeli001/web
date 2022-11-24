@extends('layouts.init')
@section('content')
<div class="conatiner">
    <div class="form">
       
        <div class="contact-info">
                <h3 class="contact_tittle">BIENVENID@</h3>
                <p class="contact_text">
                </p>

            <div class="contactos_info">
                <div class="contact_information">
              <i class="fas fa-2x fa-user"></i>
                    <p>alfaremex@gmail.com</p>
                </div>
                <div class="contact_information">
                <h1>  <i class="fas fa-mobile-alt"></i></h1>
                    <p>+52 77 13 38 11 33</p>
                </div>
                
            </div>
            <div class="social_media">
                <p></p>
                <div class="social-icons">
                        <img src="{{asset('img/favicon_higienika_office_peru.png')}}" alt="">
                        <p></p>
                </div>
            </div>
        </div>
       
       
       
       
        
        <div class="contact-form">
            <form method="POST" action="{{ route('register') }}" autocomplete="off">
            @csrf
              <p class="contact_tittle">Nombre</p>
                <div class="input-container">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="NOMBRE" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong><h6 style="color:yellow;">{{ __('Por favor digite bien su usuario o contraseña') }}</h6></strong>
                            </span>
                        @enderror
                </div>
                <p class="contact_tittle">Apellido Paterno</p>
                <div class="input-container">
                    <input id="apaterno" type="text" class="form-control @error('apaterno') is-invalid @enderror" name="apaterno" value="{{ old('apaterno') }}" required autocomplete="apellido paterno" placeholder="APELLIDO PATERNO" autofocus>
                        @error('apaterno')
                            <span class="invalid-feedback" role="alert">
                                <strong><h6 style="color:yellow;">{{ __('Por favor digite bien su usuario o contraseña') }}</h6></strong>
                            </span>
                        @enderror
                </div>
                <p class="contact_tittle">Apellido Materno</p>
                <div class="input-container">
                    <input id="amaterno" type="text" class="form-control @error('amaterno') is-invalid @enderror" name="amaterno" value="{{ old('amaterno') }}" required autocomplete="apellido materno" placeholder="APELLIDO MATERNO" autofocus>
                        @error('amaterno')
                            <span class="invalid-feedback" role="alert">
                                <strong><h6 style="color:yellow;">{{ __('Por favor digite bien su usuario o contraseña') }}</h6></strong>
                            </span>
                        @enderror
                </div>
                <p class="contact_tittle">Telefono</p>
                <div class="input-container">
                    <input id="telefono" type="text" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{ old('telefono') }}" required autocomplete="telefono" placeholder="TELEFONO" autofocus>
                        @error('telefono')
                            <span class="invalid-feedback" role="alert">
                                <strong><h6 style="color:yellow;">{{ __('Por favor digite bien su usuario o contraseña') }}</h6></strong>
                            </span>
                        @enderror
                </div>
                <p class="contact_tittle">Correo</p>
                <div class="input-container">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="EMAIL" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong><h6 style="color:yellow;">{{ __('Por favor digite bien su usuario o contraseña') }}</h6></strong>
                            </span>
                        @enderror
                </div>
                <p class="contact_tittle">Contraseña</p>
                <div class="input-container">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" placeholder="CONTRASEÑA" autofocus>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong><h6 style="color:yellow;">{{ __('Por favor digite bien su usuario o contraseña') }}</h6></strong>
                            </span>
                        @enderror
                </div>
                <p class="contact_tittle">Confirmar contraseña</p>
                <div class="input-container">
                    <input id="conpassword" type="password" class="form-control @error('conpassword') is-invalid @enderror" name="conpassword" value="{{ old('conpassword') }}" required autocomplete="conpassword" placeholder="CONFIRMAR CONTRASEÑA" autofocus>
                        @error('conpassword')
                            <span class="invalid-feedback" role="alert">
                                <strong><h6 style="color:yellow;">{{ __('Por favor digite bien su usuario o contraseña') }}</h6></strong>
                            </span>
                        @enderror
                </div>



               
                <input type="submit" value="Registrar" class="contact_btn">
                <input type="submit" href="{{ url('/') }}" type="" value="inicio" class="contact_btn">
               <br><br>
              

            </form>
            

        </div>
       
       
    </div>

</div>
<br><br><br><br><br><br><br>
@endsection 

