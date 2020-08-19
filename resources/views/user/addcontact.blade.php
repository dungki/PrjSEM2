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
    
    <title>Thêm liên hệ</title>
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
                            <a class="js-arrow" href="{{ route('profile') }}?id={{ Auth::user()->id }}">
                                <i class="fa fa-user" aria-hidden="true"></i>Thông tin cá nhân</a>
                        </li>
                        <li>
                            <a href="{{ route('userListSalary') }}">
                               <i class="fa fa-usd" aria-hidden="true"></i>Salary</a>
                        </li>
                        <li>
                            <a href="{{ route('clock', ['id'=>1]) }}">
                                <i class="fa fa-clock-o" aria-hidden="true"></i>Quản lý công nhật</a>
                        </li>
                        <li>
                            <a class="js-arrow" href="#">
                                <i class="fas fa-gift"></i>Trợ cấp + Thưởng</a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="{{ route('userBonusList') }}"><i class="fas fa-bars"></i>Danh sách</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('userbonusHistory') }}"><i class="fas fa-history"></i>Lịch sử</a>
                                    </li>
                                </ul>
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
                                <li><a href="#"><i class="fas fa-plus"></i> Thêm thông tin liên hệ</a></li>
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
                                            <img src="{{ asset('user/images/icon/userlogo.jpg')}}" alt=" {{ Auth::user()->name }}" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"> {{ Auth::user()->name }}</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="{{ asset('user/images/icon/userlogo.jpg')}}" alt=" {{ Auth::user()->name }}" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"> {{ Auth::user()->name }}</a>
                                                    </h5>
                                                    <span class="email"> {{ Auth::user()->email }}</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="{{ route('profile') }}?id={{ Auth::user()->id }}">
                                                        <i class="zmdi zmdi-account"></i>Tài khoản</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                              document.getElementById('logout-form').submit();">
                                                 <i class="zmdi zmdi-power"></i>Đăng xuất
                                             </a>
                                             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
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
            <div class="main-content">
                <h2 class="title-1 m-b-25" style="text-align:center;">Thêm liên lạc</h2>
                  <div class="container" style="background:#f8f9fa;;padding: 60px;border-radius: 10px;">
                                      <div class="panel-body" style="color:#333;">
                                          <form class="" action="{{ route('postContact') }}" method="post">
                                            {{ csrf_field() }}
                                              <div class="form-group" style="display: none;">
                                              <input required="true" type="text" name="id"  class="form-control" value="{{$contact->id}}" id="usr" readonly placeholder="id">
                                              </div>
                                              <div class="form-group" style="display: none;">
                                                <label for="usr_id">Mã nhân viên:</label>
                                              <input required="true" type="text" value="{{Auth::id()}}" name="user_id" value="{{$contact->user_id}}" class="form-control" id="usr_id" readonly>
                                              </div>
                                              <div class="form-group">
                                                <label for="rela">Mối quan hệ:</label>
                                                <select name="relationship" id="" class="form-control">
                                                    <option value="người thân" >--Chọn--</option>
                                                    <option value="Bố">Bố</option>
                                                    <option value="Mẹ">Mẹ</option>
                                                    <option value="Anh/em trai">Anh/em trai</option>
                                                    <option value="Chị gái">Chị gái</option>
                                                    <option value="em gái">Em gái</option>
                                                    <option value="Ông">Ông</option>
                                                    <option value="Bà">Bà</option>
                                                </select>
                                              </div>
                                              <div class="form-group">
                                                <label for="name">Tên:</label>
                                                <input required="true" type="text" value="{{$contact->name}}" class="form-control" name="name" id="name" placeholder="...">
                                              </div>
                                              <div class="form-group">
                                                <label for="address">Địa chỉ:</label>
                                                <input required="true" type="text" class="form-control" value="{{$contact->address}}" name="address" id="address" placeholder="...">
                                              </div>
                                              <div class="form-group">
                                                <label for="number">Số điện thoại:</label>
                                                <input required="true" type="text" class="form-control" name="phone" id="phone" value="{{$contact->phone}}" placeholder="..." onkeyup="checkPhone()">
                                                <span style="padding-left: 2%;color: red;display: none;" id="warnning"></span>
                                              </div>
                          <div class="form-group">
                                                <label for="email">Email:</label>
                                                <input required="true" type="email" class="form-control" value="{{$contact->email}}" name="email" id="email" onkeyup="checkEmail()" placeholder="...">
                                                <span style="padding-left: 2%;color: red;display: none;" id="warnning-email"></span>
                                            </div>
                          <div class="form-group">
                                                <label for="inden_card">CMND:</label>
                                                <input required="true" type="text" class="form-control" value="{{$contact->identity_cart}}" name="cmnd" id="cmnd" placeholder="..." onkeyup="checkCMND()">
                                                <span style="padding-left: 2%;color: red;display: none;" id="warnning-cmnd"></span>
                                              </div>
                                              <button class="btn btn-secondary"  style="margin-top:15px;">Lưu</button>
                                          </form>
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
    <script>
        function checkPhone() {
          document.getElementById("warnning").style.display="inline";
          var x, text,a;
          var ischeck = false;
          x = document.getElementById("phone").value;
          a = x.split("");

          for(var i = 0; i < a.length; i++) {
             if (isNaN(a[i]) || a[i] < 0 || a[i] > 9) {
                document.getElementById("warnning").style.display="inline";
            text = "Lỗi ! -> Số điện thoại phải là số";
            ischeck = true;
            break;
          } 
        }
        if(!ischeck){
            document.getElementById("warnning").style.display="none";
        }
        if(a.length !=10){
            document.getElementById("warnning").style.display="inline";
            text = "Lỗi ! -> Độ dài số điện thoại bằng 10 ";
          }
          document.getElementById("warnning").innerHTML = text;
        }
        function checkCMND() {
          document.getElementById("warnning-cmnd").style.display="inline";
          var x, text,a;
          var ischeck = false;
          x = document.getElementById("cmnd").value;
          a = x.split("");

          for(var i = 0; i < a.length; i++) {
             if (isNaN(a[i]) || a[i] < 0 || a[i] > 9) {
                document.getElementById("warnning-cmnd").style.display="inline";
            text = "Lỗi ! -> Số chứng minh nhân dân phải là số và không chứa ký tự đặc biệt ";
            ischeck = true;
            break;
          } 
        }
        var isLength = false;
        if(a.length !=9 && a.length !=12){
            document.getElementById("warnning-cmnd").style.display="inline";
            text = "Lỗi ! -> Độ dài chứng minh nhân dân là 9 hoặc 12 số ";
            isLength =true;
          }
          else if(a.length !=9 && a.length ==12){
            var isLength = false;
          }else if(a.length ==9 && a.length !=12){
            var isLength = false;
          }
        if(!ischeck && !isLength){
            document.getElementById("warnning-cmnd").style.display="none";
        }
      
          document.getElementById("warnning-cmnd").innerHTML = text;
        }
        function checkEmail() { 
    var email = document.getElementById('email'); 
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/; 
    var text;
    if (!filter.test(email.value)) { 
      document.getElementById("warnning-email").style.display="inline";
        text = "Lỗi ! -> Email không hợp lệ";
    }   else{
      document.getElementById("warnning-email").style.display="none";
    }
    document.getElementById("warnning-email").innerHTML = text;
} 
        </script>
</body>
<!-- end document-->
<footer>
    <div id="footer" class="copyright" style="background:#d2d2d2;position: relative;padding-top: 4%;">
       
        <i class="fa fa-facebook-official w3-hover-opacity" style="padding-right:20px;font-size:30px"></i>
        <i class="fa fa-instagram w3-hover-opacity"style="padding-right:20px;font-size:30px"></i>
        <i class="fa fa-snapchat w3-hover-opacity"style="padding-right:20px;font-size:30px"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity"style="padding-right:20px;font-size:30px"></i>
        <i class="fa fa-twitter w3-hover-opacity"style="padding-right:20px;font-size:30px"></i>
        <i class="fa fa-linkedin w3-hover-opacity"style="padding-right:20px;font-size:30px"></i>
        <p>Project : HRM</p>
    </div>
  </footer>
</html>
