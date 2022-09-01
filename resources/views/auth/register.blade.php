@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="nombre" class="col-md-4 col-form-label text-md-end">Nombre Completo</label>

                            <div class="col-md-6">
                                <input id="Nombre_completo" type="text" class="form-control @error('Nombre_completo') is-invalid @enderror" name="Nombre_completo" value="{{ old('Nombre_completo') }}" required autocomplete="Nombre_completo">

                                @error('Nombre_completo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="Ape_pat" class="col-md-4 col-form-label text-md-end">Apellido Paterno</label>

                            <div class="col-md-6">
                                <input id="Ape_pat" type="text" class="form-control @error('Ape_pat') is-invalid @enderror" name="Ape_pat" value="{{ old('Ape_pat') }}" required autocomplete="Ape_pat">

                                @error('Ape_pat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="Ape_mat" class="col-md-4 col-form-label text-md-end">Apellido Materno</label>

                            <div class="col-md-6">
                                <input id="Ape_mat" type="text" class="form-control @error('Ape_mat') is-invalid @enderror" name="Ape_mat" value="{{ old('Ape_mat') }}" required autocomplete="Ape_mat">

                                @error('Ape_mat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="Acceso" class="col-md-4 col-form-label text-md-end">Acceso</label>

                            <div class="col-md-6">
                                <select name="Acceso" id="Acceso" class="form-control">
                                     <option value="">SELECCIONE OPCION:</option>
                                     <option value="0">INACTIVO</option>
                                     <option value="1">ACTIVO</option>
                                </select>

                                @error('Acceso')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="perfil" class="col-md-4 col-form-label text-md-end">Perfil</label>

                            <div class="col-md-6">
                                <select name="perfil" id="perfil" class="form-control">
                                    <option value="">SELECCIONE OPCION:</option>
                                     <option value="1">ADMINISTRADOR</option>
                                     <option value="2">CAPTURISTA</option>
                                    
                                </select>

                                @error('perfil')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
