@extends('home1')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    @section('parte1')
    <h5>Registro de usuario</h5>
    <br>
    
    <form action="{{route('ingresarUsuario')}}" method="POST">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre</label>
                    </div> 
                </div>

                <div class="col-md-10" style="text-align:center">
                    <input type="text" class="form-control" name="usuarioNombre" id="exampleInputEmail1" aria-describedby="emailHelp" >          
                </div>
              
            </div>
            <br>
            <div class="row">
                <div class="col-md-2">
                  <div class="form-group">
                      <label for="exampleInputEmail1">Apellido</label>
                      
                  </div> 
                </div>
                <div class="col-md-10" style="text-align:center">
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >          
                </div>
                                
              </div>
              <br>
              <div class="row">
                <div class="col-md-2">
                  <div class="form-group">
                      <label for="exampleInputEmail1">Teléfono</label>
                      
                  </div> 
                </div>
                <div class="col-md-10" style="text-align:center">
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >          

                </div>
            </div>
                <br>
            <div class="row">
                <div class="col-md-2">
                    <div class="form-group">
                     <label for="exampleInputEmail1">Correo electrónico</label>                          
                    </div> 
                </div>
                <div class="col-md-10" style="text-align:center">
                    <input type="mail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >          
                </div>
            </div>                       
        <br>        
        <div class="row">
            <div class="col-md-2">
                <div class="form-group">
                 <label for="exampleInputEmail1">Contraseña </label>                          
                </div> 
            </div>
            <div class="col-md-10" style="text-align:center">
                <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >          
            </div>
        </div>
        <br>
        <button type="submit" class="btn btn-success">Ingresar</button>
      </form>
    @endsection
</body>
</html>