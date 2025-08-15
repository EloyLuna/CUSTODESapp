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
        <a class="navbar-brand d-flex align-items-center" href="#">
          <img src="{{ asset('imagenes/Logo (1).png') }}" alt="CUSTODES" style="width: 150px; height: 150px; object-fit: contain; margin-top: -30px; margin-bottom: -30px;" class="d-inline-block align-top">
        </a>
        <ul class="nav justify-content-end">
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="#">
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

    <div style="height: 48px;"></div>
    <div class="container">
        <div class="row">
          <div class="col-6">
        <h1 class="text-white">Guerrilleros</h1>
        <p class="text-white text-align" style="text-align: justify;">Spanish Army a fundation in heritage, if there's a date to find the origins of the spanish army we need to go to the Independence war, XIX century BC, the napoleonic troops conquest all the spanish territory but is there where a small amount of mens whith a great war sould decided to defend the iberian land and fight against the french empire fighting in the shadows outnumbered and using the surprise a s a key advantage, precursors of special operations forces</p>
        <p class="text-white" style="text-align: justify;">The Guerrilleros were a group of Spanish soldiers who fought against the French occupation during the Peninsular War (1808-1814). They were known for their unconventional tactics, including ambushes and hit-and-run attacks, which made them a formidable force against the better-equipped French army.</p>
          </div>
          <div class="col-6 d-flex align-items-start justify-content-end">
  <img id="guerrilleras" src="{{ asset('imagenes/jollivet-una-guerrillera_01fb6224_241202165503_800x630.webp') }}" alt="Guerrilleras" width="500" height="500" style="border: 16px solid #fff; border-radius: 40px; box-shadow: 0 4px 24px rgba(0,0,0,0.12); object-fit: cover;">
          </div>
      </div>
    </div>

    <div class="container mt-5">
      <div class="row align-items-center">
        <div class="col-6">
          <img id="cetme-c" src="{{ asset('imagenes/Spanish_sailor_with_CETME_C_DN-SC-92-00563.jpg') }}" alt="CETME-C" width="450" height="450" style="border: 16px solid #fff; border-radius: 40px; box-shadow: 0 4px 24px rgba(0,0,0,0.12); object-fit: cover;">
        </div>
        <div class="col-6">
          <h2 class="text-white">Spanish Army, a fusion of tradition and present</h2>
          <p class="text-white" style="text-align: justify;">
            The Spanish Army has a rich history that dates back centuries. It has evolved through various conflicts and has been a key player in shaping the nation's identity. From the guerrilla tactics used during the Peninsular War to the modern-day forces, the Spanish Army has always adapted to the changing nature of warfare. Keeping pace with technological advancements and new military doctrines, it has transformed into a professional and capable fighting force but still retains its unique heritage and traditions. MOE, FGNE, GAR, units that connect the past with the present, embodying the spirit of the Spanish Army and Guerrilleros as part of Spanish military culture. CETME-C is a gun that materializes all of this in a piece of steel wood, blood sweat and tears. Present in battlefields as Sahara but it is present in the memory every spanish, "Chopo"was the first steel brother for every single soldier.
          </p>
        </div>
      </div>
    </div>

    <div class="container mt-5">
      <div style="border-bottom: 1px solid #fff; width: 100%; margin: 60px 0;"></div>
<div class="container">
  <p class="text-white" style="text-align: justify;">The Chopo is still in use as a training weapon for new recruits, allowing them to familiarize themselves with the handling and operation of the CETME-C in a controlled environment. Its legacy continues to influence the training methods and equipment used by the Spanish Army today. FGNE or MOE Special Operations still uses this weapon as part of their trainings. Why? This is something that we don´t know but what they are doing is keeping its legacy alive. As a memorial we have a cool concepts with same spirit, modern times and heritage.</p>
  
</div>
    <div class="container mt-5">
  <div class="d-flex justify-content-center align-items-center gap-4 flex-wrap" style="margin-bottom: 40px;">
    <a href="{{ url('/buy') }}">
      <img class="img-hoover-effect" src="{{ asset('imagenes/Edición_1.png') }}" alt="Logo" style="width: 420px; height: 480px; object-fit: cover; border-radius: 48px; border: 28px solid #fff; box-shadow: 0 8px 32px rgba(0,0,0,0.18); display: block; transition: transform 0.3s, box-shadow 0.3s;">
    </a>
    <div style="width: 420px; height: 480px; background: #fff; border-radius: 48px; box-shadow: 0 8px 32px rgba(0,0,0,0.18); display: flex; align-items: center; justify-content: center; padding: 18px;">
      <img class="img-hoover-effect" src="{{ asset('imagenes/IMG_6075.png') }}" alt="CETME-C" style="width: 100%; height: 100%; object-fit: contain; border-radius: 36px; border: 20px solid #fff; display: block; background: #fff; transition: transform 0.3s, box-shadow 0.3s;">
    </div>
    <style>
      .img-hoover-effect:hover {
        transform: scale(1.06) rotate(-2deg);
        box-shadow: 0 16px 48px rgba(0,0,0,0.25);
        z-index: 2;
      }
    </style>
  </div>
</div>

<div style="border-bottom: 1px solid #fff; width: 100%; margin: 60px 0;"></div>

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