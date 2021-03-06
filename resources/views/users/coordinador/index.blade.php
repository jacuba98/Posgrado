@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Solicitudes de Carta de Postulación</h2>
        </div>
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

        @foreach ($documento as $documentos)

          <div class="col-lg-3 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="{{ asset('img/pdf.png') }}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Proyecto {{ $documentos->id}}</h4>
              <p>{{ $documentos->sender_id}}</p>
              <a href="{{ route('coordinador.show',$documentos->id)}}" class="details-link" title="More Details"><i class="bx bx-bullseye"></i></a>
            </div>
          </div>

        @endforeach

        </div>
      </div>
    </section>
  </div>
</div>
@endsection
