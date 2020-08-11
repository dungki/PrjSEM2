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
    <li><a href="#"><i class="fas fa-plus-circle"></i>Danh sách</a></li>
  </ul>
  @endsection

@section('container')
<div class="page-container">


    <!-- MAIN CONTENT-->
    <div class="main-content">
                  <h2 class="title-1 m-b-25" style="text-align:center;">Nhân viên</h2>
                  <div class="main-container100" style="display: block;margin-left:auto;margin-right:auto">
                    <div class="panel-body">
                      <div style="padding:60px;">
                        <form method="GET"  action="#" style="margin-bottom:25px;">
                          <input type="text" name="s"  class="form-control search-input" placeholder="Search here">
                        </form>
                          <div class="table-responsive table--no-card m-b-40">
                              <table class="table table-borderless table-striped table-earning">
                                <thead>
                                  <tr>
                                    <th>ID</th>
                                    <th>Tên</th>
                                    <th>Trạng thái</th>
                                    <th>Email</th>
                                    <th>Mật khẩu</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                  </tr>
                                </thead>
                                <tbody>
                                    
                                   @foreach ($users as $item)
                                   <tr>
                                    <td><a href="{{ route('userDetail') }}?id={{$item->id}}">{{$item->id}}</a></td>
                                       <td>{{$item->name}}</td>
                                       <td>{{($item->status==1)?"Hoạt động":"Đã nghỉ"}}</td>
                                       <td>{{$item->email}}</td>
                                       <td>{{$item->password}}</td>
                                    <td><a class="btn btn-primary" href="{{ route('showForm') }}?userid={{$item->id}}">Thưởng</a></td>
                                    <td><a class="btn btn-primary" href="{{ route('showContact') }}?userid={{$item->id}}">Liên hệ</a></td>

                                    <td><a class="btn btn-primary" href="{{ route('addContact') }}?userid={{$item->id}}">+ Liên hệ</a></td>
                                    <td><a class="btn btn-danger" href="{{ route('deleteUser') }}?userid={{$item->id}}">Xóa</a></td>

                                </tr>
                                   @endforeach
                                   
                                </tbody>
                              </table>
                          </div>
                        <a href="{{ route('addUser') }}" class="btn btn-dark" style="border-radius:20px"><i class="fas fa-plus"></i> Thêm nhân viên</a>
                      </div>
                  </div>
            </div>
    </div>
    <!-- END MAIN CONTENT-->
</div>
<script src="https://kit.fontawesome.com/1d7a824463.js" crossorigin="anonymous"></script>
@endsection