@extends('main')
@section('css')
    <!-- Linking CSS File -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <!-- Fontawesome link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Bootstrap link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
@stop

@section('content')
<section class="py-5" id="contact">
    <div class="container-xxl py-5">
      <div class="col-12 d-flex flex-column text-center justify-content-center">
        <h2 class="text-white">CONTACT US</h2>
        <h5 class="text-white fw-normal py-2 fst-italic">Need Help? Fill in this form and we will respond within 24-48 hours.</h5>
      </div>
      <div class="row pt-4 mt-5">
        <div class="col-12">
          <form action="#" method="POST">
            <div class="row d-flex justify-content-center">
              <div class="col-lg-6">
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="floatingInput" placeholder="Enter Name*" required>
                  <label for="floatingInput">Enter Name*</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="email" class="form-control" id="floatingEmail" placeholder="Enter Email*" required>
                  <label for="floatingEmail">Enter Email*</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="number" class="form-control" id="floatingPassword" placeholder="Enter Phone*" required>
                  <label for="floatingPassword">Enter Phone*</label>
                </div>
              </div>
              <div class="form-floating col-lg-6">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingMessage" style="height: 205px" required></textarea>
                <label for="floatingMessage" class="px-4">Enter Message*</label>
              </div>
              <div class="col-12 mt-5 d-flex justify-content-center">
                <button class="btn btn-lg btn-outline-light">SEND MESSAGE</button>
              </div>
            </div>

          </form>
        </div>
      </div>
     </div>
   </section>
@stop
