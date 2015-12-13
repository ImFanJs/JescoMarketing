@extends('app')

@section('titulo', 'Contacto')

@section('content')

<div>
                                
    <ul class="list-unstyled slide">
        <li><img src="images/tel.jpg"/></li>
    </ul>

</div>

<div class="text-center mision bloque up"><h2>Contacto</h2></div>

<div class="container-fluid">
  <div class="row espacio">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading text-center">Envianos tus datos y nosotros nos ponemos en contacto de inmediato.</div>
        <div class="panel-body">
          @if (count($errors) > 0)
            <div class="alert alert-danger">
              <strong>Whoops!</strong> Al parecer algo está mal.<br><br>
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif

          <form class="form-horizontal" role="form" method="POST" action="{{ url('/welcome/contacto') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group">
              <label class="col-md-4 control-label">Nombre</label>
              <div class="col-md-6">
                <input type="text" class="form-control" name="nombre" value="{{ old('name') }}">
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label">Correo electrónico</label>
              <div class="col-md-6">
                <input type="email" class="form-control" name="email" value="{{ old('email') }}">
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label">Teléfono</label>
              <div class="col-md-6">
                <input type="number" class="form-control" name="telefono" value="{{ old('telefono') }}">
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label">Mensaje</label>
              <div class="col-md-6">
                <textarea class="form-control" name="mensaje" value="{{ old('mensaje') }}"></textarea>
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                  Enviar
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>* Todos tus datos estan protegidos y nunca serán proporcionados a nadie más.
    </div>
  </div>
</div>

@endsection
