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
    <!-- END HEADER DESKTOP-->

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