@extends('layout.main')
@section('css')
<style type="text/css">
    /* force class color to override the bootstrap base rule
       NOTE: adding 'url: #' to calendar makes this unneeded
     */
    .fc-event, .fc-event:hover {
          color: #fff !important;
          text-decoration: none;
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
      <h2 class="title-1 m-b-25" style="text-align:center;">Thêm lịch sử tiền thưởng</h2>
        <div class="container" style="background:#333;padding: 60px;border-radius: 10px;">
            <div class="panel-body" style="color:white;">
              <form class="" action="index.html" method="post">
                <div class="form-group">
                  <label for="id">Id:</label>
                  <input required="true" type="text" class="form-control" id="id" placeholder="...">
                </div>
                <div class="form-group">
                  <label for="title">Tiêu đề:</label>
                  <input required="true" type="text" class="form-control" id="title" placeholder="...">
                </div>
                <div class="form-group">
                  <label for="amount">Số lượng:</label>
                  <input required="true" type="text" class="form-control" id="amount" placeholder="...">
                </div>
                <div class="form-group">
                  <label for="num">Số:</label>
                  <input required="true" type="text" class="form-control" id="num" placeholder="...">
                </div>
                <div class="form-group">
                  <label for="usr_id">Mã người dùng:</label>
                  <input required="true" type="text" class="form-control" id="usr_id" placeholder="...">
                </div>
                <div class="form-group">
                  <label for="usr_id">Mã tiền thưởng:</label>
                  <input required="true" type="text" class="form-control" id="usr_id" placeholder="...">
                </div>
                <button class="btn btn-secondary" style="margin-top:15px;">Lưu</button>
              </form>
            </div>
        </div>
    </div>
</div>
<script src="https://kit.fontawesome.com/1d7a824463.js" crossorigin="anonymous"></script>
@endsection