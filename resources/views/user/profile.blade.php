<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Thông tin</title>

    <!-- Fontfaces CSS-->
    <link href="{{ asset('user/css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('user/vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('user/vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('user/vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset('user/vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"

        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- user/vendor CSS-->
    <link href="{{ asset('user/vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('user/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('user/vendor/wow/animate.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('user/vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('user/vendor/slick/slick.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('user/vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('user/vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset('user/css/theme.css') }}" rel="stylesheet" media="all">

</head>

<body class="animsition">

  <style media="screen">
    .styling100{
      margin-left: 10px;
      line-height: 35px;
    }

    .info-1{
      padding: 20px;
    }
    

  </style>

    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo1.png" alt="Aptech" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="{{ route('profile') }}">
                                <i class="fas fa-tachometer-alt"></i>Profile</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="button.html">Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.html">Typography</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo1.png" alt="Aptech Fpt" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fa fa-user" aria-hidden="true"></i>Thông tin</a>
                        </li>
                        <li>
                            <a href="#">
                               <i class="fa fa-usd" aria-hidden="true"></i>Tiền lương</a>
                        </li>
                        <li>
                            <a href="{{ route('clock') }}">
                                <i class="fa fa-clock-o" aria-hidden="true"></i>Bảng chấm công</a>
                        </li>
                        <li class="has-sub">
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="button.html">Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.html">Typography</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span class="quantity">1</span>
                                        <div class="mess-dropdown js-dropdown">
                                        <div class="mess__title">
                                                <p>Bạn có 2 tin nhắn mới</p>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="{{ asset('user/images/icon/avatar-06.jpg')}}" alt="Michelle Moreno" />
                                                </div>
                                                <div class="content">
                                                    <h6>Michelle Moreno</h6>
                                                    <p>Đã gửi 1 ảnh</p>
                                                    <span class="time">3 phút trước</span>
                                                </div>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="{{ asset('user/images/icon/avatar-04.jpg')}}" alt="Diane Myers" />
                                                </div>
                                                <div class="content">
                                                    <h6>Diane Myers</h6>
                                                    <p>Bạn đã kết nối bây giờ có thể nhắn tin</p>
                                                    <span class="time">Hôm qua</span>
                                                </div>
                                            </div>
                                            <div class="mess__footer">
                                                <a href="#">Xem tất cả tin nhắn</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                        <span class="quantity">1</span>
                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title">
                                                <p>Bạn có 3 tin nhắn mới</p>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="{{ asset('user/images/icon/avatar-06.jpg')}}" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Thông báo về cuộc họp...</p>
                                                    <span>Cynthia Harvey, 3 phút trước</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="{{ asset('user/images/icon/avatar-05.jpg')}}" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Thông báo về cuộc họp...</p>
                                                    <span>Cynthia Harvey, hôm qua</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="{{ asset('user/images/icon/avatar-04.jpg')}}" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Thông báo về cuộc họp...</p>
                                                    <span>Cynthia Harvey, 20/12/2018</span>
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
                                                <p>Bạn có 3 tin nhắn</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Bạn có thông báo mới</p>
                                                    <span class="date">20/12/2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                               
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Bạn có 1 tệp tin mới</p>
                                                    <span class="date">20/12/2018 06:50</span>
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
                                            <img src="{{ asset('user/images/icon/userlogo.jpg')}}" alt="Duong Thanh Binh" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">Duong Thanh Binh</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="{{ asset('user/images/icon/userlogo.jpg')}}" alt="Duong Thanh Binh" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">Duong Thanh Binh</a>
                                                    </h5>
                                                    <span class="email">dbinh7766@gmail.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Tài khoản</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Cài đặt</a>
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
                                    <li class="styling100">{{$item->department}}</li> 
                                    @endforeach
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
        </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="{{ asset('user/vendor/jquery-3.2.1.min.js') }}"></script>
    <!-- Bootstrap JS-->
    <script src="{{ asset('user/vendor/bootstrap-4.1/popper.min.js') }}"></script>
    <script src="{{ asset('user/vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
    <!-- V.endor JS       -->
    <script src="{{ asset('user/vendor/slick/slick.min.js') }}">
    </script>
    <script src="{{ asset('user/vendor/wow/wow.min.js') }}"></script>
    <script src="{{ asset('user/vendor/animsition/animsition.min.js') }}"></script>
    <script src="{{ asset('user/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}">
    </script>
    <script src="{{ asset('user/vendor/counter-up/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('user/vendor/counter-up/jquery.counterup.min.js') }}">
    </script>
    <script src="{{ asset('user/vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('user/vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('user/vendor/chartjs/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('user/vendor/select2/select2.min.js') }}">
    </script>

    <!-- Main JS-->
    <script src="{{ asset('user/js/main.js') }}"></script>
    <script src="https://kit.fontawesome.com/1d7a824463.js" crossorigin="anonymous"></script>

</body>

</html>
<!-- end document-->
