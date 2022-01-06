@extends('layouts.front_template')
@section('content')        
    <div class="hero-wrap" style="background-image: url({{asset('images/UN0382261-1500x1000.jpg')}});" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
             <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="{{url('/')}}">Home</a></span> <span>Donate</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Donations</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section-3 img" style="background-image: url({{asset('images/bg_3.jpg')}});">
        <div class="overlay"></div>

        <div class="container">
            <div class="col-md-12 d-flex"">
                <div class="block-18 color-2 align-items-stretch">
                  <div class="text">
                    <h3 class="mb-2">Would you like to be a member of our organization?</h3>
                    <!-- <p style="color:black">Even the all-powerful Pointing has no control about the blind texts.</p> -->
                    <p><a href="{{route('pages','donate')}}" class="btn btn-white px-3 py-2 mt-2">Member Application</a></p>
                  </div>
                </div>
            </div>
            <div class="row d-md-flex">
                <div class="col-md-6 d-flex ftco-animate">
                    <div class="img img-2 align-self-stretch" style="background-image: url({{asset('images/ph_1877_99952.jpg')}});"></div>
                </div>
                <!-- <form action="{{route('submit_donate')}}" method="post"> -->
                <div class="col-md-6 volunteer pl-md-5 ftco-animate">
                    <h1 class="mb-3">Be a <strong>Donor</strong></h1>
                    <form action="{{route('submit_donate')}}" method="post" class="volunter-form">
                        @csrf
                        <div class="form-group">
                            <h5><b>Your Full Name:</b></h5>
                            <input type="text" name="user_name" class="form-control" placeholder="" required="required" />
                        </div>
                        <div class="form-group">
                            <h5><b>Email Address:</b></h5>
                            <input type="email" name="user_email" class="form-control" placeholder="" required="required" />
                        </div>                                
                        <div class="form-group">
                            <h5><b>Contact Number:</b></h5>
                            <input type="tel" name="user_contact" class="form-control" placeholder="+880 1XXX NNNNNN" required="required" />
                        </div>
                        <!-- <div class="form-group">
                            <h5>Date of Birth:</h5>
                            <input type="date" name="user_dob" class="form-control" placeholder="Date of Birth" required="required" />
                        </div> -->
                        <div class="form-group">
                            <h5><b>Your Occupation:</b></h5>
                            <input type="text" name="user_occupation" class="form-control" placeholder="Ex: Software Engineer" required="required" />
                        </div>
                        <!-- <h5>Would you like to member of our organization?</h5>
                        <div>
                            <label for="yes">
                                <input type="radio" name="user_membership" value="Yes"><b style="color:black"> YES</b>
                            </label>
                            <label for="no">
                                <input type="radio" name="user_membership" value="No"><b style="color:black"> NO</b>
                            </label>
                        </div>
                        <div class="form-group">
                          <h5>Make sure your aggrement:</h5>
                          <input type="number" name="user_aggrement" class="form-control" id="aggrement" placeholder="year">
                        </div> -->
                        <h5><b>Please make your donation for better tomorrow:</b></h5>
                        <div class="form-group">
                          <input type="number" name="user_amount" class="form-control" id="donation" placeholder="$">
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