@extends('layouts.app')
@section('content')

 <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1 "/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

 
 <div class="container ">
     <div class="back-to-top pull-right">
         <form class="" method="POST" action="{{route('valor.store')}}">
            @csrf
                <!--<div class="mb-3">-->
                <!--    <input class="form-control" type="text" name="nombre"-->
                <!--    placeholder="Nombre de Producto" id="nombre" value="">-->
                <!--</div>-->
<label>
    <input type="checkbox" name="val" id="val" value="2"> Enviar notificacion</label><br>
<button type="submit" name="" id="" class="btn text-white" style="background-color:#FC7426;">Enviar</button>
   </form>
</div>
                
                <!--<div class="col-3 mx-auto">-->
                <!--<button type="submit" name="" id="" class="btn text-white" style="background-color:#FC7426;">Crear</button>-->
                <!--</div>-->
</form>    
     </div>

 </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 