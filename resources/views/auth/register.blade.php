@extends('layouts.registro')

@section('content')

<div class="container mt--8 pb-5">
    <!-- Table -->
    <div class="row justify-content-center">
      <div class="col-lg-6 col-md-8">
        <div class="card bg-secondary shadow border-0">

          <div class="card-body px-lg-6 py-lg-6">

            @if($errors->any())

            <div class="text-center text-muted mb-2">
                <h4>No es posible Registrarse</h4>
              </div>

            <div class="alert alert-danger mb-4" role="alert">
                Los datos no son validoskw
            </div>
            @else
            <div class="text-center text-muted mb-4">
                <h5>Crear una cuenta nueva</h5>
              </div>
            @endif

            <form role="form" method="POST" action="{{ route('register') }}">
                @csrf

              <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                  </div>
                  <input class="form-control" placeholder="Nombre" type="text" class="{{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name"
                  :value="old('name')" required autofocus autocomplete="name">
                </div>
              </div>

              <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                  </div>
                  <input class="form-control" placeholder="Correo Electronico" type="email" class="{{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email"
                  :value="old('email')" required >
                </div>
              </div>

              <div class="form-group">
                <div class="input-group input-group-alternative">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                  </div>
                  <input class="form-control" placeholder="Contraseña" type="password" class="{{ $errors->has('password') ? 'is-invalid' : '' }}" type="password"
                  name="password" required autocomplete="new-password">
                </div>
              </div>

              <div class="form-group">
                <div class="input-group input-group-alternative">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                  </div>
                  <input placeholder=" Confirmar Contraseña" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password">
                </div>
              </div>

              <div class="row my-4">
                <div class="col-12">
                  <div class="custom-control custom-control-alternative custom-checkbox">
                    <input class="custom-control-input" id="customCheckRegister" type="checkbox">
                    <label class="custom-control-label" for="customCheckRegister">
                      <span class="text-muted">Acepto las <a href="#!">Politicas de privacidad</a></span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-primary mt-4">Crear cuenta</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
