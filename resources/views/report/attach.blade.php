@extends('layouts.app')

@section('content')
@guest 
<h1>Register Or Login</h1>
@else
<!-- End Navbar -->
<div class="content">
  <div class="container-fluid">
    <div class="container-fluid">
      <div class="card card-plain">
        <div class="card-header card-header-primary">
          <h4 class="card-title">Attached Files</h4>
        </div>
<div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                </div>
            </div>
            <div class="row">
  
      @foreach ($reports as $image)
          
     
<div class="col-md-4">
        <div class="card profile-card-2">
             <div class="card-body pt-5">
                 
                     
                 
                <img src="{{ asset('storage/uploads/'.$image['image']) }}" alt="profile-image" class="card-img profile" width="200px" height="200px";/>
                
                <p class="card-title">Description: {{ $image['description'] }}</p>
             </div>
        </div>
    </div>   
    @endforeach
            </div>
        </div>
        @endguest
@endsection
