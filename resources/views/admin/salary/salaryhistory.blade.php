@extends('layout.main')
@section('css')
<style>
    .navbar-sidebar .navbar__list li.active > a {
      color: #555;
  }
</style>
@endsection
@section('index')
<ul class="breadcrumb">
    <li><a href="#"><i class="fas fa-home"></i> Trang chủ</a></li>
    <li><a href="#"><i class="fas fa-user-cog"></i> Admin</a></li>
    <li><a href="#"><i class="fas fa-dollar-sign"></i> Lương</a></li>
    <li><a href="#"><i class="fas fa-bars"></i> Danh sách đã trả</a></li>
  </ul>
@endsection
@section('container')
<div class="page-container">

        <!-- MAIN CONTENT-->
        <div class="main-content">
          <h2 class="title-1 m-b-25" style="text-align:center">Salary</h2>
          <div class="main-container100" style="display: block;margin-left:auto;margin-right:auto">
            <div class="panel-body">
              <div style="padding:60px;">
                  <div class="table-responsive table--no-card m-b-40">
                      <table class="table table-borderless table-striped table-earning">
                        <thead>
                          <tr>
                            <th>Tên</th>
                            <th>Tổng lương</th>
                            <th>Ngày bắt đầu</th>
                            <th>Ngày hoàn thành</th>
                            <th>Ngày trả lương</th>
                            <th>Trạng thái</th>
                            <th>người thực hiện</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($salaries as $item)
                        <tr>
                           <td>{{$item->name}}</td>
                           <td>{{$item->total_salary}}</td>
                           <td>{{$item->started_at}}</td>
                           <td>{{$item->finished_at}}</td>
                           <td>{{$item->pay_day}}</td>
                           <td>{{($item->status==1)?"Chưa trả":"Đã trả"}}</td>
                           <td><a href="{{ route('userDetail') }}?id={{$item->payBy_id}}">
                            @foreach ($users as $b)
                              {{($b->id == $item->payBy_id)?$b->name:""}}
                            @endforeach

                           </a></td>
                           <td><a class="btn btn-danger" href="{{ route('reactiveSalary') }}?id={{$item->id}}&userid={{$item->user_id}}">Khôi Phục</a></td>
                       </tr>
                       @endforeach
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