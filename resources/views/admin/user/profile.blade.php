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
@section('title')
    Quản Lý nhân sự
@endsection
@section('container')
<div class="page-container">
    <!-- HEADER DESKTOP-->
    <header class="header-desktop">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="header-wrap">
                    <ul class="breadcrumb">
                    <li><a href="#"><i class="fas fa-home"></i> Trang chủ</a></li>
                    <li><a href="#"><i class="fas fa-user-cog"></i> Admin</a></li>
                    <li><a href="#"><i class="fas fa-gift"></i> Tiền thưởng</a></li>
                    <li><a href="#"><i class="fas fa-plus-circle"></i> Thêm tiền thưởng</a></li>
                    </ul>
                    <form class="form-header" action="" method="POST">
                    </form>
                    <div class="header-button">
                        <div class="noti-wrap">
                            <div class="noti__item js-item-menu">
                                <i class="zmdi zmdi-comment-more"></i>
                                <span class="quantity">1</span>
                                <div class="mess-dropdown js-dropdown">
                                <div class="email__title">
                                        <p>Bạn có 3 tin nhắn mới</p>
                                    </div>
                                    <div class="email__item">
                                        <div class="image img-cir img-40">
                                            <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                        </div>
                                        <div class="content">
                                            <p>Thông báo cuộc họp...</p>
                                            <span>Cynthia Harvey, 3 phút trước</span>
                                        </div>
                                    </div>
                                    <div class="email__item">
                                        <div class="image img-cir img-40">
                                            <img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                        </div>
                                        <div class="content">
                                            <p>Thông báo về cuộc họp...</p>
                                            <span>Cynthia Harvey, Hôm qua</span>
                                        </div>
                                    </div>
                                    <div class="email__item">
                                        <div class="image img-cir img-40">
                                            <img src="images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                        </div>
                                        <div class="content">
                                            <p>Thông báo về cuộc họp...</p>
                                            <span>Cynthia Harvey, 20-12-2018</span>
                                        </div>
                                    </div>
                                    <div class="email__footer">
                                        <a href="#">Xem tất cả tin nhắn</a>
                                    </div>
                                </div>
                            </div>
                            <div class="noti__item js-item-menu">
                                <i class="zmdi zmdi-notifications"></i>
                                <span class="quantity">3</span>
                                <div class="notifi-dropdown js-dropdown">
                                    <div class="notifi__title">
                                        <p>Bạn có 3 thông báo mới</p>
                                    </div>
                                    <div class="notifi__item">
                                        <div class="bg-c1 img-cir img-40">
                                            <i class="zmdi zmdi-email-open"></i>
                                        </div>
                                        <div class="content">
                                            <p>Bạn có thông báo mới</p>
                                            <span class="date">20-12-2018 06:50</span>
                                        </div>
                                    </div>
                                    <div class="notifi__item">
                                        <div class="bg-c2 img-cir img-40">
                                            <i class="zmdi zmdi-account-box"></i>
                                        </div>
                                        <div class="content">
                                            <p>Tài khoản của bạn đã bị khóa</p>
                                            <span class="date">20-012-2018 06:50</span>
                                        </div>
                                    </div>
                                    <div class="notifi__item">
                                        <div class="bg-c3 img-cir img-40">
                                            <i class="zmdi zmdi-file-text"></i>
                                        </div>
                                        <div class="content">
                                            <p>Bạn có 1 tệp tin mới</p>
                                            <span class="date">20-12-2018 06:50</span>
                                        </div>
                                    </div>
                                    <div class="notifi__footer">
                                        <a href="#">Tất cả thông báo</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="account-wrap">
                            <div class="account-item clearfix js-item-menu">
                                <div class="image">
                                    <img src="https://scontent.fhan3-2.fna.fbcdn.net/v/t1.0-9/95540311_238543303916983_8374609954258026496_n.jpg?_nc_cat=107&_nc_sid=09cbfe&_nc_ohc=TNk-atK6M9QAX-poT8t&_nc_ht=scontent.fhan3-2.fna&oh=7f420774a0311e552f6ed468e1c5efd8&oe=5F3B2BB3" alt="PlusThicc" />
                                </div>
                                <div class="content">
                                    <a class="js-acc-btn" href="#">Admin</a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    <div class="info clearfix">
                                        <div class="image">
                                            <a href="#">
                                                <img src="https://scontent.fhan3-2.fna.fbcdn.net/v/t1.0-9/95540311_238543303916983_8374609954258026496_n.jpg?_nc_cat=107&_nc_sid=09cbfe&_nc_ohc=TNk-atK6M9QAX-poT8t&_nc_ht=scontent.fhan3-2.fna&oh=7f420774a0311e552f6ed468e1c5efd8&oe=5F3B2BB3" alt="PlusThicc" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="name">
                                                <a href="#">Admin</a>
                                            </h5>
                                            <span class="email">admin@gmail.com</span>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-account"></i>Tài khoản</a>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__footer">
                                        <a href="#">
                                            <i class="zmdi zmdi-power"></i>Đăng xuất</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- HEADER DESKTOP-->

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
<script src="https://kit.fontawesome.com/1d7a824463.js" crossorigin="anonymous"></script>
@endsection