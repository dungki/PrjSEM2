@extends('layout.main')
@section('css')
<style>
    .navbar-sidebar .navbar__list li.active > a {
      color: #555;
    }
    </style>
@endsection
@section('title')
    Quản Lý phòng ban
@endsection
@section('index')
<ul class="breadcrumb">
    <li><a href="#"><i class="fas fa-home"></i> Trang chủ</a></li>
    <li><a href="#"><i class="fas fa-user-cog"></i> Admin</a></li>
    <li><a href="#"><i class="fas fa-gift"></i>Phòng ban</a></li>
    <li><a href="#"><i class="fas fa-plus-circle"></i> Thiết lập</a></li>
  </ul>
@endsection
@section('container')
<div class="page-container">


    <!-- MAIN CONTENT-->
    <div class="main-content">
      <h2 class="title-1 m-b-25" style="text-align:center;">Quản lý</h2>
      <div class="main-container100" style="display: block;margin-left:auto;margin-right:auto">
        <div class="panel-body">
          <div style="padding:60px;">
            <form style="margin-bottom:25px;">
                <label for="search">Tìm Kiếm:</label>
              <input type="text" name="" value="" class="form-control search-input" placeholder="">
            </form>
              <div class="table-responsive table--no-card m-b-40">
                  <table class="table table-borderless table-striped table-earning">
                    <thead>
                      <tr style="text-align:center">
                        <th>ID</th>
                        <th>Tên</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                        
                          @foreach ($list as $item)
                          <tr>
                        <td style="text-align:center">{{$item->id}}</td>
                          <td style="text-align:center"><a href="{{ route('listUser') }}?department={{$item->id}}" >{{$item->department}}</a></td>
                          <td><a href="{{ route('deleteDepartment') }}?id={{$item->id}}" class="btn btn-danger">Xóa</a></td>
                        </tr>
                          @endforeach
                        
                    </tbody>
                  </table>
              </div>
              <form action="{{ route('addDepartment') }}" method="post">
                  {{ csrf_field() }}
                <div class="form-group">
                  <label for="name">Tên:</label>
                  <input required="true" type="text" class="form-control" name="department" id="name" placeholder="Enter new department">
                </div>
                <button type="submit" class="btn btn-dark">Lưu</button>
              </form>
          </div>
      </div>
</div>
    </div>
</div>
<script src="https://kit.fontawesome.com/1d7a824463.js" crossorigin="anonymous"></script>
@endsection