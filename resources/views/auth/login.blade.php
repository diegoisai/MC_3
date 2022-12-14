@extends('layouts.form')
@section('content')
    <div class="container mt--8 pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">
                <div class="card bg-gradient-white shadow border-0">
                    <div class="card-body px-lg-5 py-lg-5">

                        @if ($errors->any())
                            <div class="text-center text-muted mb-2">
                                <h4>No se pudo iniciar sesion</h4>
                            </div>

                            <div class="alert alert-danger mb-4" role="alert">
                                La direccion de correo electronico o contraseña no son correctos
                            </div>
                        @else
                            <div class="text-center text-muted mb-4">
                                <h2 style="color: rgb(2, 2, 2)">Iniciar Sesion</h2>
                            </div>
                        @endif


                        <form role="form" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group mb-3">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                    </div>
                                    <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                                        type="email" name="email" :value="old('email')" required
                                        placeholder="Correo Electronico">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                        type="password" name="password" required autocomplete="current-password"
                                        placeholder="Contraseña">
                                </div>
                            </div>
                            <div class="custom-control custom-control-alternative custom-checkbox">
                                <input class="custom-control-input" name="remember" id=" remember" type="checkbox">
                                <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="remember"
                                    {{ old('remember') ? 'checked' : '' }}> {{ __('Recordarme') }}
                                <span class="form-check-sign">
                                    <span class="check"></span>
                                </span>
                            </label>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-info my-4">Iniciar</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-6">
                        <a href="{{ route('password.request') }}" class="text-light"><small>Olvidaste tu
                                Contraseña?</small></a>
                    </div>
                    <div class="col-6 text-right">
                        <a href="{{ route('register') }}" class="text-light"><small>Crear nueva cuenta</small></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
