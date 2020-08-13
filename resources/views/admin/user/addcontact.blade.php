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
    Quản Lý nhân sự
@endsection
@section('index')

<ul class="breadcrumb">
    <li><a href="#"><i class="fas fa-home"></i> Trang chủ</a></li>
    <li><a href="#"><i class="fas fa-user-cog"></i> Admin</a></li>
    <li><a href="#"><i class="fas fa-gift"></i>Nhân sự</a></li>
    <li><a href="#"><i class="fas fa-plus-circle"></i> Thêm thông tin liên lạc</a></li>
  </ul>
  @endsection

@section('container')
<div class="page-container">
  

    <!-- MAIN CONTENT-->
    <div class="main-content">
        <h2 class="title-1 m-b-25" style="text-align:center;">Thêm liên lạc</h2>
          <div class="container" style="background:#333;padding: 60px;border-radius: 10px;">
                              <div class="panel-body" style="color:white;">
                                  <form class="" action="{{ route('postContact') }}" method="post">
                                    {{ csrf_field() }}
                                      <div class="form-group">
                                        <input required="true" type="text"  class="form-control" id="usr" readonly placeholder="id">
                                      </div>
                                      <div class="form-group">
                                        <label for="usr_id">Mã nhân viên:</label>
                                      <input required="true" type="text" value="{{$user_id}}" name="user_id" class="form-control" id="usr_id" placeholder="...">
                                      </div>
                                      <div class="form-group">
                                        <label for="rela">Mối quan hệ:</label>
                                        <select name="relationship" id="" class="form-control">
                                          <option value="người thân">--Chọn--</option>
                                          <option value="Bố">Bố</option>
                                          <option value="Mẹ">Mẹ</option>
                                          <option value="Anh/em trai">Anh/em trai</option>
                                          <option value="Chị gái">Chị gái</option>
                                          <option value="em gái">Em gái</option>
                                          <option value="Ông">Ông</option>
                                          <option value="Bà">Bà</option>
                                      </select>                                      </div>
                                      <div class="form-group">
                                        <label for="name">Tên:</label>
                                        <input required="true" type="text" class="form-control" name="name" id="name" placeholder="...">
                                      </div>
                                      <div class="form-group">
                                        <label for="address">Địa chỉ:</label>
                                        <input required="true" type="text" class="form-control" name="address" id="address" placeholder="...">
                                      </div>
                                      <div class="form-group">
                                        <label for="number">Số điện thoại:</label>
                                        <input required="true" type="text" class="form-control" name="phone" id="number" placeholder="...">
                                      </div>
                  <div class="form-group">
                                        <label for="email">Email:</label>
                                        <input required="true" type="text" class="form-control" name="email" id="email" placeholder="...">
                                      </div>
                  <div class="form-group">
                                        <label for="inden_card">CMND:</label>
                                        <input required="true" type="text" class="form-control" name="cmnd" id="inden_card" placeholder="...">
                                      </div>
                                      <button class="btn btn-secondary" type="submit" style="margin-top:15px;">Lưu</button>
                                  </form>
                              </div>
                      </div>

    </div>
</div>
<script src="https://kit.fontawesome.com/1d7a824463.js" crossorigin="anonymous"></script>
@endsection