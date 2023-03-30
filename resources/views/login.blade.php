@extends('layout.layouts')
@section('titulo')
    Inicio de sesión
@endsection
@section('contenido')

      <div class="card">
        <div class="card-body">
          <form action="{{route('login')}}" method="POST">
            @csrf
            @if (session('mensaje'))
                <p style="color: red">{{session('mensaje')}}</p>
            @endif

          <!-- Email input -->
            <div class="form-outline m-4 p-3">
              <input type="email" id="email" name="email" class="form-control" />
              <label class="form-label" for="email">Correo electrónico</label>
            </div>
            @error('email')
            <p style="color:red;">{{$message}}</p>
            @enderror

            <!-- Password input -->
            <div class="form-outline m-4 p-3">
              <input type="password" id="password" name="password" class="form-control" />
              <label class="form-label" for="password">Contraseña</label>
            </div>
            @error('password')
            <p style="color:red;">{{$message}}</p>
            @enderror


            <!-- Submit button -->
            <button type="submit" class="btn btn-primary d-block mx-auto mb-4" style="background-color: #F20746;">
              Inicia sesión
            </button>

          </form>

      </div>
    </div>

@endsection
