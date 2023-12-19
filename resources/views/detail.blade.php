@extends('main')
@section('css')
    <!-- Linking CSS File -->
    <link rel="stylesheet" href="{{ asset('css/detail.css') }}" />
    <!-- Fontawesome link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Bootstrap link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
@stop

@section('content')
<section class="about-us">
    <div class="about">
      <img src="{{ asset('img/'.$doctor->image) }}" class="pic" />
      <div class="text">
        <h3 class="mb-4">{{ $doctor->name }}</h3>
        <p>{{ $doctor->shortDesc }}</p>
        <p>Email: {{ $doctor->email }}</p>
        <p>Phone: {{ $doctor->phone }}</p>
      </div>
    </div>
  </section>
@stop
