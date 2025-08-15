    <style>
      /* Sin estilos personalizados para btn-close, usar solo btn-close-white de Bootstrap */
    </style>


@extends('base')
@section('contenido')

  <body>
    <div class="container mt-5">
      <div class="row justify-content-center align-items-end" style="gap: 32px;">
        <div class="col-md-5 d-flex flex-column align-items-center mb-4">
          <div style="width: 100%; max-width: 500px; height: 420px; background: #000; border-radius: 32px; box-shadow: 0 8px 32px rgba(0,0,0,0.18); display: flex; align-items: center; justify-content: center; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#modalEdicion1">
            <img src="{{ asset('imagenes/Edición_1.png') }}" alt="Edición 1" style="width: 100%; height: 100%; object-fit: contain; border-radius: 24px;">
          </div>
          <button class="btn btn-outline-light mt-3 px-5 py-2" style="font-size: 1.2rem; border-width: 2px; border-radius: 24px;">Comprar</button>
        </div>
        <div class="col-md-5 d-flex flex-column align-items-center mb-4">
          <div style="width: 100%; max-width: 500px; height: 420px; background: #fff; border-radius: 32px; box-shadow: 0 8px 32px rgba(0,0,0,0.18); display: flex; align-items: center; justify-content: center; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#modalCetmeC">
            <img src="{{ asset('imagenes/IMG_6075.png') }}" alt="CETME-C" style="width: 100%; height: 100%; object-fit: contain; border-radius: 24px;">
          </div>
    <!-- Modal para Edición 1 -->
    <div class="modal fade" id="modalEdicion1" tabindex="-1" aria-labelledby="modalEdicion1Label" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content" style="background: #000; border: 3px solid #fff; border-radius: 24px;">
          <div class="modal-header" style="border: none; background: #000; border-radius: 24px 24px 0 0;">
            <h5 class="modal-title text-white" id="modalEdicion1Label">Edición 1</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body d-flex justify-content-center align-items-center" style="background: #000; border-radius: 0 0 24px 24px;">
            <img src="{{ asset('imagenes/Edición_1.png') }}" alt="Edición 1" style="max-width: 100%; max-height: 70vh; border-radius: 24px; box-shadow: 0 8px 32px rgba(0,0,0,0.18);">
          </div>
        </div>
      </div>
    </div>

    <!-- Modal para CETME-C -->
    <div class="modal fade" id="modalCetmeC" tabindex="-1" aria-labelledby="modalCetmeCLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content" style="background: #000; border: 3px solid #fff; border-radius: 24px;">
          <div class="modal-header" style="border: none; background: #000; border-radius: 24px 24px 0 0;">
            <h5 class="modal-title text-white" id="modalCetmeCLabel">CETME-C</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body d-flex justify-content-center align-items-center" style="background: #000; border-radius: 0 0 24px 24px;">
            <img src="{{ asset('imagenes/IMG_6075.png') }}" alt="CETME-C" style="max-width: 100%; max-height: 70vh; border-radius: 24px; box-shadow: 0 8px 32px rgba(0,0,0,0.18);">
          </div>
        </div>
      </div>
    </div>
          <button class="btn btn-outline-light mt-3 px-5 py-2" style="font-size: 1.2rem; border-width: 2px; border-radius: 24px;">Comprar</button>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
@endsection
