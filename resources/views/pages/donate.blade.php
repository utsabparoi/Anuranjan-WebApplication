@extends('layouts.app')
@section('content')        
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Donate Now</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Home</a>
                        <a href="">Donate</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
        
        <!-- Donate Start -->
        <div class="container">
            <div class="donate" data-parallax="scroll" data-image-src="{{asset('img/donate.jpg')}}">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="donate-content">
                            <div class="section-header">
                                <p>Donate Now</p>
                                <h2>Let's donate to needy people for better lives</h2>
                            </div>
                            <div class="donate-text">
                                <p>
                                    Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non. Aliquam metus tortor, auctor id gravida, viverra quis sem. Curabitur non nisl nec nisi maximus. Aenean convallis porttitor. Aliquam interdum at lacus non blandit.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="donate-form">
                            <form action="{{route('submit_donate')}}" method="post">
                                @csrf
                                <div class="control-group">
                                    <input type="text" name="user_name" class="form-control" placeholder="Name" required="required" />
                                </div>
                                <div class="control-group">
                                    <input type="email" name="user_email" class="form-control" placeholder="Email" required="required" />
                                </div>
                                <div class="control-group">
                                    <input type="tel" name="user_contact" class="form-control" placeholder="Phone" required="required" />
                                </div>
                                <div class="control-group">
                                    <h5>Date of Birth:</h5>
                                    <input type="date" name="user_dob" class="form-control" placeholder="Date of Birth" required="required" />
                                </div>
                                <div class="control-group">
                                    <input type="text" name="user_occupation" class="form-control" placeholder="Occupation" required="required" />
                                </div>
                                <h5>Would you like to member of our organization?</h5>
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-custom active">
                                        <input type="radio" name="user_membership"> YES
                                    </label>
                                    <label class="btn btn-custom">
                                        <input type="radio" name="user_membership"> NO
                                    </label>
                                </div>
                                <h5>Aggrement for:</h5>
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-custom active">
                                        <input type="radio" name="user_aggrement"> Not Interested
                                    </label>
                                    <label class="btn btn-custom active">
                                        <input type="radio" name="user_aggrement"> 1 year
                                    </label>
                                    <label class="btn btn-custom">
                                        <input type="radio" name="user_aggrement"> 2 years
                                    </label>
                                    <label class="btn btn-custom">
                                        <input type="radio" name="user_aggrement"> 3 years
                                    </label>
                                </div>
                                <!-- <div class="control-group">
                                    <input type="text" class="form-control" placeholder="Aggrement" required="required" />
                                </div> -->
                                <h5>Please make your donation for better tomorrow:</h5>
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-custom">
                                        <input type="radio" name="user_amount"> $10
                                    </label>
                                    <label class="btn btn-custom active">
                                        <input type="radio" name="user_amount"> $20
                                    </label>
                                    <label class="btn btn-custom">
                                        <input type="radio" name="user_amount"> $30
                                    </label>
                                </div>
                                <div>
                                    <button class="btn btn-custom" type="submit">Donate Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Donate End -->
@endsection