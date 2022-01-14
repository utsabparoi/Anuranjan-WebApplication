@extends('admin.layouts.admin_template')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        View Member Request
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">View Member Request</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="box">
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Member Id</th>
                <th>Member Name</th>
                <th>Email Address</th>
                <th>Phone</th>
                <th>Aggrement</th>
                <th>Member Image</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($data as $row)
                <tr>
                  <td>{{$row->id}}</td>    
                  <td>{{$row->name}}</td>
                  <td>{{$row->email}}</td>
                  <td>{{$row->contact_number}}</td>
                  <td>{{$row->aggrement}}</td>
                  <!-- <td>{{$row->member_photo}}</td> -->
                  <td align="center">
                    @if($row->member_photo != null)
                    <img src="{{ asset('uploads/member/thumbnail').'/'.$row->member_photo }}" alt="" width="80px">
                    @else
                    <img src="{{ asset('uploads/member/no_member.png') }}" alt="" width="50px" height="50px">
                    @endif
                  </td>
                  <td>
                    <button onclick="window.location=''" class="btn btn-info mb-2">Approve</button>
                    <button onclick="window.location=''" class="btn btn-danger mb-2">Reject</button>
 
                    <!-- <form id="deleteMember_{{$row->id}}" action="{{ url('/')}}/admin/member/{{$row->id}}" style="display: inline;" method="POST">
                      {{ method_field('DELETE') }}
                      @csrf
                      <input class="btn btn-danger deleteLink" name="{{ $row->name }}" id="{{$row->id}}" data-toggle="modal" data-target="#modal-danger" deleteID="{{$row->id}}" value="Delete" style="width: 100px;">
                    </form> -->

                  </td>                 
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<div class="modal modal-danger fade" id="modal-danger">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Delete Member</h4>
      </div>
      <div class="modal-body">
        <p>Do you really want to delete this<b class="catname"></b> member?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-outline submitDeleteModal">Submit</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

<script type="text/javascript">
  $(document).ready(function() {
    $('#example1').DataTable({
      "order": [],
    });

    $('.deleteLink').click(function() {
      var member_name = $(this).attr('name');
      var member_id = $(this).attr('id');
      console.log(member_name);
      $('#modal-danger .memname').empty();
      $('#modal-danger .memname').append(member_name);
      $('#modal-danger .submitDeleteModal').attr('id', member_id)
    });

    $('.submitDeleteModal').click(function() {
      var member_id = $(this).attr('id');
      $('#deleteMember_' + member_id).submit();
    });
  });
</script>
@endsection