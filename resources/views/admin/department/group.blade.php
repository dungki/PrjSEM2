@extends('layout.main')
@section('css')
<style>
    .fc-event, .fc-event:hover {
          color: #fff !important;
          text-decoration: none;
    }
    .navbar-sidebar .navbar__list li.active > a {
      color: #555;
    }
    td{
        text-align: center;
    }
    </style>
@endsection
@section('index')
<ul class="breadcrumb">
    <li><a href="#"><i class="fas fa-home"></i> Trang chủ</a></li>
    <li><a href="#"><i class="fas fa-user-cog"></i> Admin</a></li>
    <li><a href="#"><i class="fas fa-gift"></i> Phòng ban</a></li>
    <li><a href="#"><i class="fas fa-plus-circle"></i>Quản lý</a></li>
  </ul>
@endsection
@section('title')
    Quản Lý phòng ban
@endsection
@section('container')
<div class="page-container">
  

    <!-- MAIN CONTENT-->
    <div class="main-content">
      <h2 class="title-1 m-b-25 pt-5" style="text-align:center;">Quản lý Phòng ban</h2>
        <div class="container" style="padding:20px;border-radius: 10px;">
            <div class="panel-body">
                <div class="form-group">
                  <form action="" method="GET" id="myform">
                    <label for="exampleFormControlSelect1"> Chọn mã phòng ban:</label>
                    <select class="form-control" style="width:15%" name="department_id" id="depa_id" onchange="$('#myform').submit()">
                        <option value="">--- Phòng ban ---</option>
                      @foreach ($departments as $item)
                    @if ($item->id == $department_id)
                    <option value="{{$item->id}}" selected='true'>{{$item->department}}</option> 
                    @else
                    <option value="{{$item->id}}" >{{$item->department}}</option>
                    @endif
                      @endforeach
                    </select>
                </div>
                <div class="form-group" style="display: none;visibility: hidden;">
                  <label for="name">Mã nhân sự:</label>
                <input required="true" type="text" name="userid" class="form-control" value="{{$userid}}" id="usr_id" placeholder="">
                </div>
            </form>
                <form class="" action="{{ route('setGroup') }}"  method="post">
                    {{ csrf_field() }}
                    <div class="form-group" style="display: none;visibility: hidden;">
                        <label for="exampleFormControlSelect1">Mã phòng ban:</label>
                        <select class="form-control" name="department_id" id="depa_id" onchange="$('#myform').submit()">
                          @foreach ($departments as $item)
                        @if ($item->id == $department_id)
                        <option value="{{$item->id}}" selected='true'>{{$item->department}}</option> 
                        @else
                        <option value="{{$item->id}}" >{{$item->department}}</option>
                        @endif
                          @endforeach
                        </select>
                    </div>
                    <div class="form-group" >
                      <label for="name">Mã nhân sự:</label>
                    <input required="true" type="text" name="userid" class="form-control" value="{{$userid}}" id="usr_id" placeholder="">
                    </div>
                    <button class="btn btn-dark" type="submit"  style="margin-top:15px;">Lưu</button>
                  </form>
            </div>
        </div>
        <div class="container" style="margin-top: 50px;">
            <div class="panel-body">
                <div class="table-responsive table--no-card m-b-40">
                <table class="table table-borderless table-striped table-earning">
                    <thead>
                      <tr style="text-align:center">
                        <th>Mã nhân sự</th>
                        <th>Tên</th>
                        <th>Phòng ban</th>
                      </tr>
                    </thead>
                    <tbody>
                        
                          @foreach ($data as $item)
                          <tr>
                          <td>{{$item->id}}</td>
                          <td>{{$item->name}}</td>
                          <td>{{$item->department}}</td>
                          @endforeach
                        
                    </tbody>
                  </table>
                  </div>
            </div>
        </div>
    </div>
</div>
<script src="https://kit.fontawesome.com/1d7a824463.js" crossorigin="anonymous"></script>
@endsection