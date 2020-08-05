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
    <title>@yield('title')</title>
    <!-- Fontfaces CSS-->
    <link href="{{ asset('admin/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('admin/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('admin/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('admin/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset('admin/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{ asset('admin/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('admin/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('admin/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('admin/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('admin/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('admin/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    <!-- FullCalendar -->
    <link href="{{ asset('admin/vendor/fullcalendar-3.10.0/fullcalendar.css')}}" rel="stylesheet" media="all" />

    <!-- Main CSS-->
    <link href="{{ asset('admin/css/theme.css')}}" rel="stylesheet" media="all">



</head>

@yield('css')

<!-- animsition overrides all click events on clickable things like a,
      since calendar doesn't add href's be default,
      it leads to odd behaviors like loading 'undefined'
      moving the class to menus lead to only the menu having the effect -->
<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        @include('layout.header')
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="https://img.icons8.com/cute-clipart/64/000000/user-shield.png"/>
                </a>
                <h3>My admin</h3>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a class="js-arrow" href="index.html">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <!-- <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="index.html">Dashboard 1</a>
                                </li>
                                <li>
                                    <a href="index2.html">Dashboard 2</a>
                                </li>
                                <li>
                                    <a href="index3.html">Dashboard 3</a>
                                </li>
                                <li>
                                    <a href="index4.html">Dashboard 4</a>
                                </li>
                            </ul> -->
                        </li>
                        <li>
                            <a class="js-arrow" href="#">
                                <i class="fas fa-users"></i>Quản lý nhân sự</a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="{{ route('listUser') }}"><i class="fas fa-info-circle"></i>Danh sách người dùng</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('reactivateUser') }}"><i class="fas fa-plus-circle"></i>tái kích hoạt</a>
                                    </li>
                                </ul>
                        </li>
                        <li>
                            <a class="js-arrow" href="#">
                                <i class="fas fa-building"></i>Quản lý phòng ban</a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="{{ route('showGroup') }}"><i class="fas fa-sliders-h"></i>Quản lý</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('showDepartment') }}"><i class="fas fa-tasks"></i>Thiết lập </a>
                                    </li>
                                </ul>
                        </li>
                        <li>
                            <a href="salary.html">
                                <i class="fas fa-yen-sign"></i>Lương</a>
                        </li>
                        <li>
                            <a class="js-arrow" href="#">
                                <i class="fas fa-gift"></i>Trợ cấp + Thưởng</a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="{{ route('show') }}"><i class="fas fa-bars"></i>Danh sách</a>
                                    </li>
                                    <li>
                                        <a href=""><i class="fas fa-history"></i>Lịch sử</a>
                                    </li>
                                </ul>
                        </li>
                        {{-- <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="far fa-calendar"></i>Timesheet</a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href=""><i class="fas fa-bars"></i></i>Timesheet list</a>
                                    </li>
                                    <li>
                                        <a href=""><i class="fas fa-history"></i>History</a>
                                    </li>
                                </ul>
                        </li> --}}
                        <!-- <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
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
                        </li> -->
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
       @yield('container')

    </div>

@include('layout.footer')

    <!-- <form class="" action="index.html" method="post">
      <div class="form-group">
        <label for="exampleFormControlSelect1">Department id:</label>
        <select class="form-control" id="depa_id">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
      </div>
      <div class="form-group">
        <label for="name">User id:</label>
        <input required="true" type="text" class="form-control" id="usr_id">
      </div>
      <button class="btn btn-dark">Save</button>
    </form> -->
    <!-- Jquery JS-->
    <script src="{{ asset('admin/vendor/jquery-3.2.1.min.js') }}"></script>
    <!-- Bootstrap JS-->
    <script src="{{ asset('admin/vendor/bootstrap-4.1/popper.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
    <!-- Vendor JS       -->
    <script src="{{ asset('admin/vendor/slick/slick.min.js') }}">
    </script>
    <script src="{{ asset('admin/vendor/wow/wow.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/animsition/animsition.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}">
    </script>
    <script src="{{ asset('admin/vendor/counter-up/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/counter-up/jquery.counterup.min.js') }}">
    </script>
    <script src="{{ asset('admin/vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('admin/vendor/chartjs/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/select2/select2.min.js') }}"></script>

    <!-- full calendar requires moment along jquery which is included above -->
    <script src="{{ asset('admin/vendor/fullcalendar-3.10.0/lib/moment.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/fullcalendar-3.10.0/fullcalendar.js') }}"></script>

    <!-- Main JS-->
    <script src="{{ asset('admin/js/main.js') }}"></script>

    <script type="text/javascript">
$(function() {
  // for now, there is something adding a click handler to 'a'
  var tues = moment().day(2).hour(19);

  // build trival night events for example data
  var events = [
    {
      title: "Special Conference",
      start: moment().format('YYYY-MM-DD'),
      url: '#'
    },
    {
      title: "Doctor Appt",
      start: moment().hour(9).add(2, 'days').toISOString(),
      url: '#'
    }

  ];

  var trivia_nights = []

  for(var i = 1; i <= 4; i++) {
    var n = tues.clone().add(i, 'weeks');
    console.log("isoString: " + n.toISOString());
    trivia_nights.push({
      title: 'Trival Night @ Pub XYZ',
      start: n.toISOString(),
      allDay: false,
      url: '#'
    });
  }

  // setup a few events
  $('#calendar').fullCalendar({
    header: {
      left: 'prev,next today',
      center: 'title',
      right: 'month,agendaWeek,agendaDay,listWeek'
    },
    events: events.concat(trivia_nights)
  });
});

$(document).ready(function() {
    $("#show_hide_password a").on('click', function(event) {
        event.preventDefault();
        if($('#show_hide_password input').attr("type") == "text"){
            $('#show_hide_password input').attr('type', 'password');
            $('#show_hide_password i').addClass( "fa-eye-slash" );
            $('#show_hide_password i').removeClass( "fa-eye" );
        }else if($('#show_hide_password input').attr("type") == "password"){
            $('#show_hide_password input').attr('type', 'text');
            $('#show_hide_password i').removeClass( "fa-eye-slash" );
            $('#show_hide_password i').addClass( "fa-eye" );
        }
    });
});
    </script>


</body>

</html>
<!-- end document-->
