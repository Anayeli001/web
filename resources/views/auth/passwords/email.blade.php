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
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Dirección de correo electrónico') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-check-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="contact_btn">
                                    {{ __('Enviar enlace de restablecimiento de contraseña') }}
                                </button>
                            </div>
                        </div>
                    </form>
                        <br>    <br>    <br>
                       </div>
            </div>
        </div>
    </div>
</div>
@endsection