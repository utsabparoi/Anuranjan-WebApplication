@extends('admin.layouts.admin_template')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Custom Donation
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Custom Donation</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Custom Donation</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{route ('donation.store')}}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="member_name">Name</label>
                  <input type="text" class="form-control" id="exampleInputName" name="member_name" placeholder="Enter name">
                </div>
                <div class="form-group">
                  <label for="email_address">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" name="member_email" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="contact_number">Contact number</label>
                  <input type="tel" class="form-control" id="phone" name="contact_number" placeholder="+880-1234567890">
                </div>
                <div class="form-group">
                  <label for="member_occupation">Occupation</label>
                  <input type="text" class="form-control" id="occupation" name="occupation" placeholder="Your occupation">
                </div>
                <div class="form-group">
                  <label for="member_occupation">Donation Amount</label>
                  <input type="text" class="form-control" id="occupation" name="donation_amount" placeholder="Your occupation">
                </div>
                <!-- <div class="checkbox">
                  <label>
                    <input type="checkbox"> Check me out
                  </label>
                </div> -->
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" onclick="return confirm('Member Added Successfully')">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
</div>

@endsection