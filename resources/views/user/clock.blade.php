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
    
    <title>Timesheet</title>
     <style>
    #clock , #countdown{
        text-align: center;
        font-weight: bold;
        color: #fff;
        font-size: 30px;
    }
    span{
        cursor:pointer;
    }
    #start,
    #finish {
        color: black;
        font-size: 25px;
        font-weight: bold;
    }

    .clock-vs-countdown{
        padding-bottom: 0;
    }
    </style>
<link href="{{ asset('admin/css/theme.css')}}" rel="stylesheet" media="all">

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

    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        
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
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Profile</a>
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="calendar.html">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map.html">
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
                    <img src="{{ asset('user/images/icon/logo1.png')}}" alt="Aptech Fpt" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="profile.html">
                                <i class="fa fa-user" aria-hidden="true"></i>profile</a>
                        </li>
                        <li>
                            <a href="salary.html">
                               <i class="fa fa-usd" aria-hidden="true"></i>Salary</a>
                        </li>
                        <li>
                            <a href="timesheet.html">
                                <i class="fa fa-clock-o" aria-hidden="true"></i>Timesheet</a>
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
                          <ul class="breadcrumb">
                            <li><a href="#"><i class="fas fa-home"></i> Trang chủ</a></li>
                            <li><a href="#"><i class="fas fa-user-cog"></i> TimeSheet</a></li>
                            <li><a href="#"><i class="fas fa-gift"></i> </a></li>
                          </ul>
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
            <style>
                table, th, td{
                    border-collapse: collapse;
                }    
            </style>
              <div class="main-content">
              <h2 class="title-1 m-b-25" style="text-align:center">TimeSheet</h2>
              <div class="main-container100">
                <div class="panel-body">
                  <div class="panel-body text-center">
            <table class="table table-bordered">
                <thead>
                    <tr style="background: teal;">
                        <th colspan="5">
                            <div id="clock"></div>
                        </th>
                    </tr>
                    <tr style="background: teal;">
                        <th colspan="5">
                            <div id="countdown" style="position: relative;top: 9px;">Stopwatch</div>
                            <p id="tips100" style="color: #292929;margin-top: 5px;font-style: italic;">(Click " <span id="span">Start</span> " to begin)</p>
                        </th>
                    </tr>
                    <tr>
                        <th>Check In</th>
                        <th>Check Out</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <td>
                        <input class="text-center" type="text" id="start" value="" name="start" readonly>
                    </td>
                    <td>
                        <input class="text-center"type="text" id="finish" value="" name="finish" readonly>
                    </td>
                    <td>
                        <button type="button" class="btn btn-info" style="margin-left: 12px;" id="start1"  onclick="starts()">Start</button>
                        <button type="button" class="btn btn-info" style="visibility: hidden; margin-left: -78px;" id="finish1" onclick="post()">Finish</button>
                    </td>
 
                </tbody>
            </table>
        
        </div>
                </div>
                <div style="margin-top: 20px;margin-bottom: 20px"></div>
                <div class="panel-body">
                    <div class="panel-body text-center">
              <table class="table table-bordered">
                  <thead>
                      <tr>
                          <th>No</th>
                          <th>Ngày làm</th>
                          <th>Checkin</th>
                          <th>Checkout</th>
                          <th>resttime</th>
                          <th>Số giờ làm</th>
                          <th>Lương</th>
                          <th>Hệ số lương</th>
                          <th>Nhân viên</th>
                      </tr>
                  </thead>
                  <tbody>
                  @foreach ($timesheets as $item)
                      <tr>
                        <td>{{$index++}}</td>
                      <td>{{$item->work_date}}</td>
                        <td>{{$item->checkin}}</td>
                        <td>{{$item->checkout}}</td>
                        <td>{{$item->resttime}}</td>
                        <td>{{$item->working_time}}</td>
                        <td>{{$item->amount}}</td>
                        <td>{{$data->salary}} vnd/giờ</td>
                        <td>{{$data->name}}</td>
                      </tr>
                  @endforeach
                  <tr>
                    <td>-</td>
                  <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>Tổng : </td>
                    <td>{{$total_salary}}</td>
                    <td>VND</td>
                    <td>-</td>
                  </tr>
                  </tbody>
              </table>
          
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
<script type="text/javascript">
    let clock = document.getElementById('clock');
    let timer = null;
    var ds = new Date();
        var hs ;
        var ms ;
        var ss ;
        var hf ;
        var mf ;
        var sf ;
        var msec=0
        var sec=0
        var min=0
        var hour=0
        document.getElementById('span').onclick=function() {starts()};
    function starts() {
        var d = new Date();
         hs = d.getHours();
         ms = d.getMinutes();
         ss = d.getSeconds();
        document.getElementById("start").value = (hs < 10 ? "0" : "") + hs + ":" + (ms < 10 ? "0" : "") + ms + ":" + (ss <
            10 ? "0" : "") + ss;
        timer = setInterval(runClock, 1000);
        console.log(d);
        document.getElementById("start1").style.visibility="hidden";
        document.getElementById('finish1').style.visibility="visible";
        document.getElementById("tips100").style.visibility="hidden";
        start();
        

    }
function start() {
    go=setTimeout("start()",9);
    document.getElementById('countdown').textContent=hour+":"+min+":"+sec;
                msec++
                if(msec==100)
                {
                msec=0
                sec++
                }
                if(sec==60)
                {
                sec=0  
                min++
                }
                if(min==60)
                {
                    min=0
                hour++
                }
}
    function finish() { 
        var d = new Date();
         hf = d.getHours();
         mf = d.getMinutes();
         sf = d.getSeconds();      
        document.getElementById("finish").value = (hf < 10 ? "0" : "") + hf + ":" + (mf < 10 ? "0" : "") + mf + ":" + (
            sf < 10 ? "0" : "") + sf;
        timer = setInterval(runClock, 1000);
        console.log(d);

    }
function post() {
    finish()
     var checkout = (((sf)/60)+mf)/60+hf
     var checkin = (((ss)/60)+ms)/60+hs
     var resttime;
     if (checkin < 12 && checkout > 13.5) {
        resttime = 1.5;
     }else{
        resttime = 0;
     }
     var timeWorking = checkout - checkin - resttime;
     
     
     $.post('{{ route('addTimesheet') }}', {
            '_token': '{{ csrf_token() }}',
            'checkin': checkin,
            'checkout': checkout,
            'timeWorking': timeWorking,
            'resttime' : resttime
        }, function(data) {
            location.reload();
        });
    
}
    timer = setInterval(runClock, 1000);

    function runClock() {

        clock.textContent = new Date().toLocaleTimeString();
    }
    </script>
    <script src="https://kit.fontawesome.com/1d7a824463.js" crossorigin="anonymous"></script>
</body>
<!-- end document-->
</html>
