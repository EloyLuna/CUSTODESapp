

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CUSTODES</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
     <link rel="stylesheet" href="{{ asset('css/estilos') }}">
  </head>
  <style>

    body{
      background-color: #000000;
      font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode',Verdana, sans-serif
    }
  </style>
  <body>
    <nav class="navbar navbar-dark px-4 py-1">
      <div class="container" style="padding-top: 0.2rem; padding-bottom: 0.2rem;">
        <a class="navbar-brand d-flex align-items-center" href="{{ url('/inicio') }}">
          <img src="{{ asset('imagenes/Logo (1).png') }}" alt="CUSTODES" style="width: 150px; height: 150px; object-fit: contain; margin-top: -30px; margin-bottom: -30px;" class="d-inline-block align-top">
        </a>
        <ul class="nav justify-content-end">
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="{{ url('/buy') }}">
              <img src="{{ asset('imagenes/icons8-buy-48.png') }}" alt="" width="35" height="35" class="d-inline-block align-top">
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
            <img src="{{ asset('imagenes/icons8-instagram-50.png') }}" alt="" width="35" height="35" class="d-inline-block align-top">
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">
              <img src="{{ asset('imagenes/icons8-facebook-50.png') }}" alt="" width="35" height="35" class="d-inline-block align-top">
            </a>
          </li>
        </ul>
      </div>
      <div style="border-bottom: 1px solid #fff; width: 100%;"></div>
    </nav>
    @yield('contenido')
    <footer style="background: #000; color: #fff; padding: 32px 0 16px 0; text-align: center; font-size: 1rem; margin-top: 60px;">
      <div style="margin-bottom: 12px;">
        <a href="#" style="color: #fff; text-decoration: underline; margin: 0 12px;">Aviso Legal</a>
        <a href="#" style="color: #fff; text-decoration: underline; margin: 0 12px;">Política de Privacidad</a>
        <a href="#" style="color: #fff; text-decoration: underline; margin: 0 12px;">Política de Cookies</a>
      </div>
      <div style="font-size: 0.95rem; opacity: 0.8;">
        © 2025 Diseñado en España por Custodes
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
  </body>
  </html>
 