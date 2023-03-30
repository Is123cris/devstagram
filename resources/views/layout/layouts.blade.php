<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página</title>


    <link rel="stylesheet" href="{{asset('css/mdb.min.css')}}">


    <link rel="stylesheet" href="{{asset('css/estiloYo.css')}}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.js"></script>

    <script src="{{asset('js/mdb.min.js')}}"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

</head>
<body>

    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg" style="background-color: #000;">
          <div class="d-flex justify-content-center align-items-center">
            <button
              class="navbar-toggler bg-light m-3"
              type="button"
              data-mdb-toggle="collapse"
              data-mdb-target="#navbarExample01"
              aria-controls="navbarExample01"
              aria-expanded="false"
              aria-label="Toggle navigation"
            ><i class="bi bi-list"></i></button>
            <div class="collapse navbar-collapse" id="navbarExample01">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
 
                @guest
                <li class="nav-item active">
                  <a class="nav-link text-white fw-bold" aria-current="page" href="http://127.0.0.1:8000/">Inicio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white fw-bold" aria-current="page" href="http://127.0.0.1:8000/login">Inicio de sesión</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white fw-bold" aria-current="page" href="http://127.0.0.1:8000/formulario">Crear cuenta</a>
                </li>
                @endguest
                
                @auth
                  <div class="d-flex align-items-center">
                    <p>
                      <h3 class="text-white">{{auth()->user()->username}}</h3>
                    </p>
                    <form action="{{route('logout')}}" method="POST">
                      @csrf
                      <button type="submit" class="btn btn-link px-3 me-2">
                        Cerrar sesión
                      </button>
                    </form>
                  </div>

                  <a type="button" href="{{route('post.create')}}" class="btn btn-link m-2">
                    <i class="fas fas-camera-retro"></i>
                    Crear viaje
                  </a>
                @endauth
              </ul>
            </div>
          </div>
        </nav>
        <!-- Navbar -->

        <!-- Background image -->
        <div
          class="p-5 text-center bg-image"
          style="
            background-image: url('https://i.natgeofe.com/n/6c02ad5a-977b-4f12-b9c0-02ffb0736e07/metropolitan-cathedral-zocalo-mexico-city_16x9.JPG');
            height: 400px;
          "
        >
          <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
            <div class="d-flex justify-content-center align-items-center h-100">
              <div class="text-white">
                
              </div>
            </div>
          </div>
        </div>
        <!-- Background image -->
      </header>

      <div class="container mt-5 mb-5">
        <h1>@yield('titulo')</h1>
        <hr class="hr">
        @yield('contenido')
      </div>


      <section class="">
        <!-- Footer -->
        <footer class="text-center text-white" style="background-color: #000;">

          <!-- Copyright -->
          <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2023 Holi:
            <a class="text-white" href="https://github.com/Rck23">isabelcristina.com</a>
          </div>
          <!-- Copyright -->
        </footer>
        <!-- Footer -->
      </section>

</body>
</html>
