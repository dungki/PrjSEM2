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
@section('index')
<ul class="breadcrumb">
  <li><a href="#"><i class="fas fa-home"></i> Trang chủ</a></li>
  <li><a href="#"><i class="fas fa-user-cog"></i> Admin</a></li>
  <li><a href="#"><i class="fas fa-gift"></i> Tiền thưởng  + Trợ cấp</a></li>
  <li><a href="#"><i class="fas fa-plus-circle"></i> Lịch sử</a></li>
</ul>
@endsection
@section('container')
<div class="page-container">

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
                  <th>Tiêu đề</th>
                  <th>Số tiền</th>
                  <th>Số lần</th>
                  <th>Thưởng nhân viên</th>
                  <th>Trạng thái</th>
                  <th>Người thực hiện</th>
                  <th>Thời gian</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($salary_mores_histories as $item)
                <tr>
                  <td>{{$item->title}}</td>
                  <td>{{$item->amount}}</td>
                  <td>{{$item->num}}</td>
                  <td><a  href="{{ route('userDetail') }}?id={{$item->user_id}}">
                   {{$item->name}}
                 </a></td>
                 <td>{{($item->status==0)?"Thêm":(($item->status==1)?"Sửa":(($item->status==2)?"Xóa":""))}}</td>
                 <td><a href="{{ route('userDetail') }}?id={{$item->bonus_by_id}}">
                  @foreach ($users as $b)
                  {{($b->id == $item->bonus_by_id)?$b->name:""}}
                  @endforeach

                </a></td>
                <td>{{$item->updated_at}}</td>
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