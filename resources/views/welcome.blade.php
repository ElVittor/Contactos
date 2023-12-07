<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Contactos</title>
    </head>

    <body>
      @if ($errors->any())
        <div class="alert alert-danger">
          <strong>Whoops!</strong> Hubo algunos problemas con tu entrada.<br><br>
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
          </ul>
          @endif
              
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        
        <h1>Nuevo</h1>
        <form action="{{ route('contactos.store') }}" method="POST" class="row g-3">
            @csrf
            <div class="col-md-6">
              <label for="inNombre" class="form-label">Nombre</label>
              <input type="text" class="form-control" id="innombre" name="innombre" placeholder="">
            </div>
            <div class="col-md-6">
              <label for="inap" class="form-label">Apellido Paterno</label>
              <input type="text" class="form-control" id="inap" name="inap" placeholder="">
            </div>
            <div class="col-12">
              <label for="inam" class="form-label">Apellido Materno</label>
              <input type="text" class="form-control" id="inam" name="inam" placeholder="">
            </div>
            <div class="col-12">
              <label for="incorreo" class="form-label">Correo</label>
              <input type="text" class="form-control" id="incorreo" name="incorreo" placeholder="">
            </div>
            <div class="col-md-6">
              <label for="intel" class="form-label">Teléfono</label>
              <input type="text" class="form-control" id="intel" name="intel" placeholder="">
            </div>
            <button type="submit" class="btn btn-success">Guardar</button>
          </form>
@foreach($contactos as $item)
    <form action="{{ route('contactos.update', $item->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="col-md-6">
          <label for="inNombre" class="form-label">Nombre</label>
          <input type="text" class="form-control" id="innombre" name="innombre" placeholder="{{$item->nombre}}">

        </div>
        <div class="col-md-6">
          <label for="inap" class="form-label">Apellido Paterno</label>
          <input type="text" class="form-control" id="inap" name="inap" placeholder="{{$item->ap}}">
        </div>
        <div class="col-12">
          <label for="inam" class="form-label">Apellido Materno</label>
          <input type="text" class="form-control" id="inam" name="inam" placeholder="{{$item->am}}">
        </div>
        <div class="col-12">
          <label for="incorreo" class="form-label">Correo</label>
          <input type="text" class="form-control" id="incorreo" name="incorreo" placeholder="{{$item->correo}}">
        </div>
        <div class="col-md-6">
          <label for="intel" class="form-label">Teléfono</label>
          <input type="text" class="form-control" id="intel" name="intel" placeholder="{{$item->telefono}}">
        </div>
        <button type="submit" class="btn btn-success">Guardar cambios</button>
      </form>
      <form action="{{ route('contactos.destroy', $item->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que quieres eliminar este contacto?')">Borrar</button>
    </form>
    
@endforeach

</body>
</html>
