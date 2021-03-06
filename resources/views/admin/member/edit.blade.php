@extends('admin.layouts.admin_template')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Member Application
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Member Application</li>
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
              <h3 class="box-title">Edit Member Application</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ url('admin/member').'/'.$data['single_info']->id }}" method="PUT">
              {{ method_field('PUT') }}
              @csrf
              <input type="hidden"  name="id" value="{{ $data['single_info']->id }}" />
              <div class="box-body">
                <div class="form-group">
                  <label for="member_name">Name</label>
                  <input type="text" class="form-control" id="exampleInputName" name="member_name" value="{{old('name') ?? $data['single_info']->name }}" placeholder="">
                </div>
                <div class="form-group">
                  <label for="email_address">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" name="member_email" value="{{old('email') ?? $data['single_info']->email }}" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="contact_number">Contact number</label>
                  <input type="tel" class="form-control" id="phone" name="contact_number" value="{{old('contact_number') ?? $data['single_info']->contact_number }}" placeholder="+880-1234567890">
                </div>
                <div class="form-group">
                  <label for="birthdate">Date of birth</label>
                  <input type="date" class="form-control" id="birthday" name="member_birthdate" value="{{old('dob') ?? $data['single_info']->dob }}">
                  <p><strong>Note:</strong> type="date" is not supported in Internet Explorer 11 or prior Safari 14.1.</p>
                </div>
                <div class="form-group">
                  <label for="member_occupation">Occupation</label>
                  <input type="text" class="form-control" id="occupation" name="member_occupation" value="{{old('occupation') ?? $data['single_info']->occupation }}" placeholder="Your occupation">
                </div>
                <div class="form-group">
                  <label for="member_aggrement">Aggrement</label>
                  <input type="number" class="form-control" id="aggrement" name="member_aggrement" value="{{old('aggrement', $data['single_info']->aggrement) }}" placeholder="Your aggrement">
                </div>
                <div class="form-group">
                  <label for="member_image">Upload profile picture</label>
                  <input type="file" id="member_image" name="member_image">
                </div>
                <!-- <div class="checkbox">
                  <label>
                    <input type="checkbox"> Check me out
                  </label>
                </div> -->
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
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