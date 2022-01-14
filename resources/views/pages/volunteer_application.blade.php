@extends('layouts.front_template')
@section('content')        
    <div class="hero-wrap" style="background-image: url({{asset('images/Donate-to-Winstons-Wish.jpg')}});" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
             <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="{{url('/')}}">Home</a></span> <span>Volunteer Application</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Become a Volunteer</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section-3 img" style="background-image: url({{asset('images/bg_3.jpg')}});">
        <div class="overlay"></div>

        <div class="container">
            <div class="row d-md-flex">
                <div class="col-md-6 d-flex ftco-animate">
                    <div class="img img-2 align-self-stretch" style="background-image: url({{asset('images/bg_4.jpg')}});"></div>
                </div>
                <!-- <form action="{{route('submit_donate')}}" method="post"> -->
                <div class="col-md-6 volunteer pl-md-5 ftco-animate">
                    <h1 class="mb-3">Be a <strong>Volunteer</strong></h1>
                    <form action="{{route ('volunteer.store')}}" method="post" class="volunter-form" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <h5><b>Your Full Name:</b></h5>
                            <input type="text" name="volunteer_name" class="form-control" placeholder="" required="required" />
                        </div>
                        <div class="form-group">
                            <h5><b>Full Address:</b></h5>
                            <input type="text" name="volunteer_address" class="form-control" placeholder="" required="required" />
                        </div>                                
                        <div class="form-group">
                            <h5><b>Contact Number:</b></h5>
                            <input type="tel" name="contact_number" class="form-control" placeholder="+880 1XXX NNNNNN" required="required" />
                        </div>
                        <div class="form-group">
                            <h5><b>Email:</b></h5>
                            <input type="email" name="volunteer_email" class="form-control" placeholder="" required="required" />
                        </div>
                        <div class="form-group">
                            <h5><b>Your Occupation:</b></h5>
                            <input type="text" name="volunteer_occupation" class="form-control" placeholder="Ex: Software Engineer" required="required" />
                        </div>
                        <div class="form-group">
                          <h5><b>Upload your profile photo</b></h5>
                          <input type="file" id="volunteer_image" name="volunteer_image">
                        </div>
                        <div class="form-group">
                          <input type="submit" value="Submit" class="btn btn-white py-3 px-5">
                        </div>
                    </form>
                </div>
                
            </div>    
        </div>
    </section>
@endsection