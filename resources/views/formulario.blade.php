@extends('layout.layouts')
@section('titulo')
    Regístrate
@endsection
@section('contenido')

        <div class="card">
          <div class="card-body">
              <form action="/formulario" method="POST">
                @csrf


                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row m-4 p-3">
                  <div class="col">
                    <div class="form-outline">
                      <input type="text" id="name" name="name" class="form-control" />
                      <label class="form-label" for="name">Nombre completo</label>
                    </div>
                  </div>
                  @error('name')
                  <p style="color:red;">{{$message}}</p>
                  @enderror

                  <div class="col">
                    <div class="form-outline">
                      <input type="text" id="username" name="username" class="form-control" />
                      <label class="form-label" for="username">Nombre de usuario</label>
                    </div>
                  </div>
                  @error('username')
                  <p style="color:red;">{{$message}}</p>
                  @enderror
                </div>

                <div class="row m-4 p-3">
                  <!-- Email input -->
                  <div class="col">
                    <div class="form-outline ">
                      <input type="email" id="email" name="email" class="form-control" />
                      <label class="form-label" for="email">Correo electrónico</label>
                    </div>
                  </div>
                  @error('email')
                  <p style="color:red;">{{$message}}</p>
                  @enderror

                  <!-- Password input -->
                  <div class="col">
                    <div class="form-outline">
                      <input type="password" id="password" name="password" class="form-control" />
                      <label class="form-label" for="password">Contraseña</label>
                    </div>
                  </div>
                  @error('password')
                  <p style="color:red;">{{$message}}</p>
                  @enderror
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary d-block mx-auto mb-4" style="background-color: #F20746;">Crear cuenta</button>

              </form>

          </div>
        </div>
@endsection

