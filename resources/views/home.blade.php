@extends('main')
@section('css')
    <!-- Linking CSS File -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <!-- Fontawesome link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Bootstrap link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
@stop

@section('content')
<!-- Hero or Showcase Section -->
<section class="hero d-flex flex-column align-items-center justify-content-center">
    <div class="text-center">
      <h1 class="h1 text-white fw-medium fst-italic">MindsBalance</h1>
      <h2 class="display-3 text-white fw-bold">A Place to Relieve Stress</h2>
      <a href="#skills" class="btn btn-lg fs-6 fw-medium mt-5 btn-primary p-3">Explore More</a>
    </div>
  </section>

  <!-- Skills Section -->
  <section class="container py-5" id="skills">
    <div class="row mt-4 py-3">
      <div class="col-12 d-flex flex-column text-center justify-content-center">
        <h2>ABOUT US</h2>
        <h5 class="text-secondary fw-normal py-2 fst-italic">Happy Mind, Happy Life</h5>
      </div>
    </div>
    <div class="row d-flex justify-content-between mx-0">
      <div class="card mt-5 d-flex flex-column align-items-center text-center bg-white p-4" style="width: 25rem">
        <i class="text-white bg-primary d-flex align-items-center justify-content-center fs-2 rounded-circle fa-solid fa-cart-shopping"></i>
        <h3 class="mt-4 h4">Effortless doctor search</h3>
        <p class="text-center">Offering comprehensive details on specialized doctors across diverse fields of expertise.</p>
      </div>
      <div class="card mt-5 d-flex flex-column align-items-center text-center bg-white p-4" style="width: 25rem">
        <i class="text-white bg-primary d-flex align-items-center justify-content-center fs-2 rounded-circle fa-solid fa-laptop"></i>
        <h3 class="mt-4 h4">24/7 Customer Service</h3>
        <p class="text-center">Ensuring 24/7 availability, our customer service stands by with quick and responsive support.</p>
      </div>
      <div class="card mt-5 d-flex flex-column align-items-center text-center bg-white p-4" style="width: 25rem">
        <i class="text-white bg-primary d-flex align-items-center justify-content-center fs-2 rounded-circle fa-solid fa-mobile-screen-button"></i>
        <h3 class="mt-4 h4">Easy to Access</h3>
        <p class="text-center">A multi-platform website ensures easy accessibility, allowing users to access it seamlessly anytime and anywhere.</p>
      </div>
    </div>
  </section>

  <!-- Portfolio Section -->
  <section class="container py-5" id="portfolio">
    <div class="row mt-4 py-3">
      <div class="col-12 d-flex flex-column text-center justify-content-center">
        <h2>DOCTORS</h2>
        <h5 class="text-secondary fw-normal py-2 fst-italic">Our Most Reccomended Doctors</h5>
      </div>
      <div class="row mt-5 mx-0 justify-content-center align-items-center">
        @foreach ($doctors as $doctor)
        <div class="col-lg-3 col-md-4 col-12 card-wrapper">
          <div class="card mt-4">
            <img src="{{ asset('img/'.$doctor->image) }}" class="img-fluid" alt="portfolio-img">
            <div class="card-body text-center">
              <h6 class="card-title">{{ $doctor->name }}</h6>
            </div>
            <button class="btn btn-primary"><a href="{{url('detail/'.$doctor->id)}}" style="color:white; text-decoration:none;">Detail</a></button>
          </div>
        </div>
        @endforeach
  </section>
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
@stop
