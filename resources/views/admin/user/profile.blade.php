@extends('layout.main')
@section('css')
<style media="screen">
    .styling100{
      margin-left: 10px;
      line-height: 35px;
    }

    .info-1{
      padding: 20px;
    }

    .btn-styling{
        font-size: 18px;
        color: #f54242;
        border: 2px solid;
        padding: 4px;   
        border-radius: 5px;
        line-height: 7px;
        font-weight: 600;
        float: right; 
        
    }
    #footer{
    margin-left: 0;
}
    .btn-styling:hover{
        color: #f54242;    
    }

  </style>
@endsection
@section('index')

<ul class="breadcrumb">
    <li><a href="#"><i class="fas fa-home"></i> Trang chủ</a></li>
    <li><a href="#"><i class="fas fa-user-cog"></i> Admin</a></li>
    <li><a href="#"><i class="fas fa-gift"></i>Nhân sự</a></li>
    <li><a href="#"><i class="fas fa-plus-circle"></i> Thông tin chi tiết</a></li>
  </ul>
  @endsection

@section('title')
    Quản Lý nhân sự
@endsection
@section('container')
<div class="page-container">


    <!-- MAIN CONTENT-->
    <div class="main-content" style="line-height: 25px;">

  <div class="container-fluid" style="font-size:18px;">
    <div class="row">
        <div class="col-sm-5">
            <img src="{{ asset('user/images/icon/avatar-04.jpg') }}" class="rounded-circle" style="margin-left: auto; margin-right: auto; display: block;" alt="Cinque Terre" width="200" height="100">
            <div class="main-info" style="margin-top: 40px; padding: 10px; ">
                <div class="info-1" style="margin-bottom: 25px ;">
                <h3 style="margin-bottom:15px;"><i class="far fa-grin-beam"></i> Giới thiệu</h3>
                <li class="styling100">Giới thiệu: Nam</li>
                <li class="styling100">Ngày sinh: {{$user->birthday}}</li>
                <li class="styling100">Tình trạng: {{($user->status == 1)?'active':'false'}}</li>
                </div>
                <div class="info-1" style="margin-bottom: 25px;">
                    <h3 style="margin-bottom:15px;"><i class="far fa-thumbs-up"></i> Sở thích</h3>
                    <li class="styling100">Hát</li>
                    <li class="styling100">live stream dọa bắn súng</li>
                    <li class="styling100">tấu hài</li>
                </div>
                <div class="info-1" style="margin-bottom: 25px;">
                    <h3 style="margin-bottom:15px;"><i class="fas fa-map-marker-alt"></i> Liên hệ</h3>
                    <li class="styling100">Địa chỉ: {{$user->address}}</li>
                    <li class="styling100">Số điện thoại: {{$user->phone}}</li>
                    <li class="styling100">Email: {{$user->email}}</li>
                <li  class="styling100"><a href="{{ route('showContact') }}?userid={{$user->id}}">Liên hệ</a></li>
                </div>
            </div>
        </div>
        <div class="col-sm-7">
            <div class="main-infor2">
                <div class="name-info" style="margin-bottom: 90px; margin-top: 80px;">
            <h2>{{$user->name}}</h2>
            <span>Supreme adviser to President Donald Trump</span>
                </div>
                <div class="info-1" style="margin-bottom: 25px; margin-right: 500px;">
                    <h3 style="margin-bottom:15px;"><i class="fas fa-book"></i> Phòng ban</h3>
                    @foreach ($departments  as $item)
                    <li class="styling100">{{$item->department}}  <a class="btn-styling" href="{{ route('deleteGroup') }}?grid={{$item->id}}&userid={{$user->id}}">&times</a></li> 
                    @endforeach
                    <li class="styling100"><a class="btn btn-light" href="{{ route('showGroup') }}?userid={{$user->id}}">+</a></li>
                    </div>
                <div class="info-1" style="margin-bottom: 25px;">
                    <h3><i class="fas fa-university"></i> Giáo dục</h3>
                    <li class="styling100">Tốt nghiệp khoa bắn súng</li>
                    <li class="styling100">Tốt nghiệp Đại học Harvard</li>
                </div>
                <div class="info-1" style="margin-bottom: 25px;">
                    <h3 style="margin-bottom:15px;"><i class="fas fa-running"></i> Kĩ năng</h3>
                    <li class="styling100">Trình độ bắn súng cao</li>
                    <li class="styling100">VÕ thuật</li>
                </div>
                <div class="info-1" style="margin-bottom: 25px;">
                    <h3 style="margin-bottom:15px;"><i class="fas fa-chalkboard-teacher"></i> Chuyên môn</h3>
                    <li class="styling100">Xem bói</li>
                </div>
                <div class="info-1" style="margin-bottom: 25px;">
                    <h3 style="margin-bottom:15px;"><i class="fas fa-graduation-cap"></i> Kinh nghiệm</h3>
                    <li class="styling100">Từng là cố vấn cho cựu tổng thống Obama</li>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection