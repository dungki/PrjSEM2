@extends('layout.main')
@section('css')
<style>
    .navbar-sidebar .navbar__list li.active > a {
      color: #555;
    }
    </style>
@endsection
@section('container')
<div class="page-container">

    <!-- MAIN CONTENT-->
    <div class="main-content">
      <h2 class="title-1 m-b-25" style="text-align:center">Tiền lương</h2>
      <div class="main-container100" style="display: block;margin-left:auto;margin-right:auto">
        <div class="panel-body">
          <div style="padding:60px;">
              <div class="table-responsive table--no-card m-b-40">
                  <table class="table table-borderless table-striped table-earning">
                    <thead>
                      <tr>
                        <th>Mã nhân viên</th>
                        <th>Tổng tiền lương</th>
                        <th>Bắt đầu lúc</th>
                        <th>Kết thúc lúc</th>
                        <th>Tổng ngày</th>
                        <th>Ngày trả lương</th>
                        <th>Tình trạng</th>s
                        <th></th>
                        <th></th>
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
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                    </tbody>
                  </table>
              </div>
          </div>
      </div>
</div>
    </div>
  </div>
    <!-- END MAIN CONTENT-->
</div>
<script src="https://kit.fontawesome.com/1d7a824463.js" crossorigin="anonymous"></script>
@endsection