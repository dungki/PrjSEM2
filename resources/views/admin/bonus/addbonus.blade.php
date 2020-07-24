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
@section('container')
<div class="page-container">
    <!-- HEADER DESKTOP-->
    <header class="header-desktop">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="header-wrap">
                  <ul class="breadcrumb">
                    <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                    <li><a href="#"><i class="far fa-chart-bar"></i> Statistics</a></li>
                    <li><a href="#"><i class="far fa-id-card"></i> Personnels</a></li>
                    <li><i class="fas fa-graduation-cap"></i> Aptech Computer Education</li>
                  </ul>
                    <div class="header-button">
                        <div class="noti-wrap">
                            <div class="noti__item js-item-menu">
                                <i class="zmdi zmdi-comment-more"></i>
                                <span class="quantity">1</span>
                                <div class="mess-dropdown js-dropdown">
                                    <div class="mess__title">
                                        <p>You have 2 news message</p>
                                    </div>
                                    <div class="mess__item">
                                        <div class="image img-cir img-40">
                                            <img src="images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                        </div>
                                        <div class="content">
                                            <h6>Michelle Moreno</h6>
                                            <p>Have sent a photo</p>
                                            <span class="time">3 min ago</span>
                                        </div>
                                    </div>
                                    <div class="mess__item">
                                        <div class="image img-cir img-40">
                                            <img src="images/icon/avatar-04.jpg" alt="Diane Myers" />
                                        </div>
                                        <div class="content">
                                            <h6>Diane Myers</h6>
                                            <p>You are now connected on message</p>
                                            <span class="time">Yesterday</span>
                                        </div>
                                    </div>
                                    <div class="mess__footer">
                                        <a href="#">View all messages</a>
                                    </div>
                                </div>
                            </div>
                            <div class="noti__item js-item-menu">
                                <i class="zmdi zmdi-email"></i>
                                <span class="quantity">1</span>
                                <div class="email-dropdown js-dropdown">
                                    <div class="email__title">
                                        <p>You have 3 New Emails</p>
                                    </div>
                                    <div class="email__item">
                                        <div class="image img-cir img-40">
                                            <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                        </div>
                                        <div class="content">
                                            <p>Meeting about new dashboard...</p>
                                            <span>Cynthia Harvey, 3 min ago</span>
                                        </div>
                                    </div>
                                    <div class="email__item">
                                        <div class="image img-cir img-40">
                                            <img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                        </div>
                                        <div class="content">
                                            <p>Meeting about new dashboard...</p>
                                            <span>Cynthia Harvey, Yesterday</span>
                                        </div>
                                    </div>
                                    <div class="email__item">
                                        <div class="image img-cir img-40">
                                            <img src="images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                        </div>
                                        <div class="content">
                                            <p>Meeting about new dashboard...</p>
                                            <span>Cynthia Harvey, April 12,,2018</span>
                                        </div>
                                    </div>
                                    <div class="email__footer">
                                        <a href="#">See all emails</a>
                                    </div>
                                </div>
                            </div>
                            <div class="noti__item js-item-menu">
                                <i class="zmdi zmdi-notifications"></i>
                                <span class="quantity">3</span>
                                <div class="notifi-dropdown js-dropdown">
                                    <div class="notifi__title">
                                        <p>You have 3 Notifications</p>
                                    </div>
                                    <div class="notifi__item">
                                        <div class="bg-c1 img-cir img-40">
                                            <i class="zmdi zmdi-email-open"></i>
                                        </div>
                                        <div class="content">
                                            <p>You got a email notification</p>
                                            <span class="date">April 12, 2018 06:50</span>
                                        </div>
                                    </div>
                                    <div class="notifi__item">
                                        <div class="bg-c2 img-cir img-40">
                                            <i class="zmdi zmdi-account-box"></i>
                                        </div>
                                        <div class="content">
                                            <p>Your account has been blocked</p>
                                            <span class="date">April 12, 2018 06:50</span>
                                        </div>
                                    </div>
                                    <div class="notifi__item">
                                        <div class="bg-c3 img-cir img-40">
                                            <i class="zmdi zmdi-file-text"></i>
                                        </div>
                                        <div class="content">
                                            <p>You got a new file</p>
                                            <span class="date">April 12, 2018 06:50</span>
                                        </div>
                                    </div>
                                    <div class="notifi__footer">
                                        <a href="#">All notifications</a>
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
                                                <i class="zmdi zmdi-account"></i>Account</a>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__footer">
                                        <a href="#">
                                            <i class="zmdi zmdi-power"></i>Logout</a>
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
      <h2 class="title-1 m-b-25" style="text-align:center;">Add bonus</h2>
        <div class="container" style="background:#333;padding: 60px;border-radius: 10px;">
            <div class="panel-body" style="color:white;">
              <form class="" action="index.html" method="post">
                <div class="form-group">
                  <label for="id">Id:</label>
                  <input required="true" type="text" class="form-control" id="id" placeholder="...">
                </div>
                <div class="form-group">
                  <label for="title">Title:</label>
                  <input required="true" type="text" class="form-control" id="title" placeholder="...">
                </div>
                <div class="form-group">
                  <label for="amount">Amount:</label>
                  <input required="true" type="text" class="form-control" id="amount" placeholder="...">
                </div>
                <div class="form-group">
                  <label for="num">Num:</label>
                  <input required="true" type="text" class="form-control" id="num" placeholder="...">
                </div>
                <div class="form-group">
                  <label for="usr_id">User id:</label>
                  <input required="true" type="text" class="form-control" id="usr_id" placeholder="...">
                </div>
                <button class="btn btn-secondary" style="margin-top:15px;">Save</button>
              </form>
            </div>
        </div>
    </div>
</div>

@endsection