@extends('layout.main')
@section('css')
<style>
    .eye-hover{
      color:#333
    }
    .eye-hover:hover{
      color:#333
    }
    .fc-event, .fc-event:hover {
          color: #fff !important;
          text-decoration: none;
    }
  </style>
@endsection
@section('title')
    Quản Lý nhân sự
@endsection
@section('index')

<ul class="breadcrumb">
    <li><a href="#"><i class="fas fa-home"></i> Trang chủ</a></li>
    <li><a href="#"><i class="fas fa-user-cog"></i> Admin</a></li>
    <li><a href="#"><i class="fas fa-gift"></i>Nhân sự</a></li>
    <li><a href="#"><i class="fas fa-plus-circle"></i> Thêm nhân sự</a></li>
  </ul>
  @endsection

@section('container')
<div class="page-container">
  

    <!-- MAIN CONTENT-->
    <div class="main-content">
      <h2 class="title-1 m-b-25" style="text-align:center;">Thêm nhân viên</h2>
      <div class="container" style="border-radius: 10px;">
          <div class="panel-body" style="color:black;">
            <form class="" action="{{ route('postUser') }}" method="POST">
                {{ csrf_field() }}
                <div class="row">
                  <div class="col-sm-5">
                    <div class="form-group" style="display;">
                      <label for="name">Mã nhân sự:</label>
                      <input required="true" type="text" class="form-control" id="usr" readonly placeholder="id">
                  </div>
                  <div class="form-group">
                    <label for="email">Email:</label>
                    <input required="true" type="text" name="email" class="form-control" id="email" placeholder="...">
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <div class="input-group" id="show_hide_password">
                      <input class="form-control" name="password" type="password">
                      <div class="input-group-addon">
                          <a class="eye-hover" href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                      </div>
                  </div>
              </div>
                  </div>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <label for="name">Tên:</label>
                      <input required="true" type="text" name="name" class="form-control" id="name" placeholder="...">
                  </div>
                  <div class="form-group">
                      <label for="personId">CMND:</label>
                      <input required="true" type="text" name="cmnd" class="form-control" id="inden_card" placeholder="...">
                  </div>
                  
                  <div class="form-group">
                      <label for="address">Địa chỉ:</label>
                      <input required="true" type="text" name="address" class="form-control" id="address" placeholder="...">
                  </div>
                  <div class="form-group">
                      <label for="number">Số điện thoại:</label>
                      <input required="true" type="text" name="phone" class="form-control" id="number" placeholder="...">
                  </div>
                  <div class="form-group">
                      <label for="number">Ngày sinh:</label>
                      <input required="true" type="date" name="birtday" class="form-control" id="birthday" placeholder="...">
                  </div>
                  <div class="form-group">
                      <label for="join_at">Tham gia tại:</label>
                      <input required="true" type="date" name="join_day" class="form-control" id="join_at" placeholder="...">
                  </div>
                  <div class="form-group">
                      <label for="salary_hour">Tiền lương:</label>
                      <input required="true" type="number" name="salary" class="form-control" id="salary_hour" placeholder="...">
                  </div>
                  <div class="form-group">
                      <label for="exampleFormControlSelect1">Loại nhân viên:</label>
                      <select class="form-control" id="type_usr_id">
                          <option value="1">Toàn thời gian</option>
                          <option value='2'>Bán thời gian</option>
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="exampleFormControlSelect1">Vai trò:</label>
                      <select class="form-control" id="role">
                          <option value="1">admin</option>
                          <option value="2">Quản lí</option>
                          <option value="3">NHân viên</option>
                      </select>
                  </div>
                  
                  <button class="btn btn-secondary" style="margin-top:15px;">Lưu</button>
              </div>
            </form>
          </div>
      </div>
      <script>
          if ({{$message}}!= '') {
            window.alert({{$message}});
          }
      </script>
    </div>
</div>
<script src="https://kit.fontawesome.com/1d7a824463.js" crossorigin="anonymous"></script>
@endsection