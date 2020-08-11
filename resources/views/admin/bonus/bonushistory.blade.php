@extends('layout.main')
@section('css')
<style>
    .navbar-sidebar .navbar__list li.active > a {
      color: #555;
    }
    </style>
@endsection
@section('title')
    Quản Lý trợ cấp + thưởng
@endsection
@section('index')
<ul class="breadcrumb">
    <li><a href="#"><i class="fas fa-home"></i> Trang chủ</a></li>
    <li><a href="#"><i class="fas fa-user-cog"></i> Admin</a></li>
    <li><a href="#"><i class="fas fa-gift"></i> Tiền thưởng  + Trợ cấp</a></li>
    <li><a href="#"><i class="fas fa-plus-circle"></i> Lịch sử</a></li>
  </ul>
@endsection
@section('container')
<div class="page-container">
 
    <!-- MAIN CONTENT-->
        <div class="main-content">
          <h2 class="title-1 m-b-25" style="text-align:center;">Lịch sử thưởng</h2>
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
                            <th>Tiêu đề</th>
                            <th>Số lượng</th>
                            <th>Số</th>
                            <th>Mã nhân viên</th>
                            <th>Mã tiền lương</th>
                          </tr>
                        </thead>
                        <tbody>
                            <tr>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                        </tbody>
                      </table>
                  </div>
                <a href="addb_history.html" class="btn btn-dark" style="border-radius:20px;"><i class="fas fa-plus"></i> Thêm mới</a>
              </div>
          </div>
    </div>
        </div>
    </div>
    <!-- END MAIN CONTENT-->
</div>
<script src="https://kit.fontawesome.com/1d7a824463.js" crossorigin="anonymous"></script>
@endsection