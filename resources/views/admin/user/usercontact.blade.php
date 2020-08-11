@extends('layout.main')
@section('css')
<style>
    .navbar-sidebar .navbar__list li.active > a {
      color: #555;
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
    <li><a href="#"><i class="fas fa-plus-circle"></i> Thông tin liên lạc</a></li>
  </ul>
  @endsection

@section('container')
<div class="page-container">
    <!-- MAIN CONTENT-->
    <div class="main-content">
      <h2 class="title-1 m-b-25" style="text-align:center">Liên hệ nhân viên</h2>
      <div class="main-container100" style="display: block;margin-left:auto;margin-right:auto">
        <div class="panel-body">
          <div style="padding:60px;">
            <form style="margin-bottom:25px;">
              <input type="text" name="" value="" class="form-control search-input" placeholder="Search here">
            </form>
              <div class="table-responsive table--no-card m-b-40">
                  <table class="table table-borderless table-striped table-earning">
                    <thead>
                      <tr>
                        <th>Mục lục</th>
                        <th>Mã người dùng</th>
                        <th>Mối quan hệ</th>
                        <th>Tên</th>
                        <th>Địa chỉ</th>
                        <th>SĐT</th>
                        <th>Email</th>
                        <th>CMND</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($user_contacts as $item)
                        <tr>
                        <td>{{$index++}}</td>
                        <td>{{$item->user_id}}</td>
                            <td>{{$item->relationship}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->address}}</td>
                            <td>{{$item->phone}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->identity_cart}}</td>
                          </tr>
                        @endforeach
                    </tbody>
                  </table>
              </div>
          </div>
      </div>
</div>

    </div>
    <!-- END MAIN CONTENT-->
</div>
<script src="https://kit.fontawesome.com/1d7a824463.js" crossorigin="anonymous"></script>
@endsection