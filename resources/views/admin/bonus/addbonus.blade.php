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
@section('title')
    Quản Lý trợ cấp + thưởng
@endsection
@section('index')
<ul class="breadcrumb">
    <li><a href="#"><i class="fas fa-home"></i> Trang chủ</a></li>
    <li><a href="#"><i class="fas fa-user-cog"></i> Admin</a></li>
    <li><a href="#"><i class="fas fa-gift"></i> Tiền thưởng</a></li>
    <li><a href="#"><i class="fas fa-plus-circle"></i> Thêm tiền thưởng</a></li>
  </ul>
@endsection
@section('container')
<div class="page-container">
   

    <!-- MAIN CONTENT-->
    <div class="main-content">
      <h2 class="title-1 m-b-25" style="text-align:center;">Thêm tiền thưởng</h2>
        <div class="container" style="padding: 60px;border-radius: 10px;">
            <div class="panel-body" style="color:black;">
              <form class="" action="{{ route('insertBonus') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group" style="visibility: hidden;display:none">
                  <label for="id">Id:</label>
                  <input required="true" type="text" class="form-control" value="{{$data->id}}" name="id" id="id" placeholder="" readonly>
                </div>
                <div class="form-group">
                  <label for="title">Tiêu đề:</label>
                  <input required="true" type="text" class="form-control" name="title" value=" {{$data->title}} "id="title" placeholder="">
                </div>
                <div class="form-group">
                  <label for="amount">Tiền thưởng + trợ cấp:</label>
                  <input required="true" type="text" class="form-control" name="amount" value="{{$data->amount}}"  id="amount" placeholder="">
                </div>
                <div class="form-group">
                  <label for="num">Số lần:</label>
                  <input required="true" type="text" value="{{$data->num}}" class="form-control" name="num" id="num" placeholder="">
                </div>
                <div class="form-group">
                  <label for="usr_id">Nhân viên:</label>
                  <select class="form-control" style="width:25%" id="role" name="usr_id">
                    @foreach ($users as $item)
                        <option  {{($userid==$item->id)?'selected':''}} value="{{$item->id}}">{{$item->name}} ( ID : {{$item->id}} )</option>
                    @endforeach
                      
                  </select>
              </div>
                <button class="btn btn-dark" type="submit" style="margin-top:15px;">Lưu</button>
              </form>
            </div>
        </div>
    </div>
</div>
<script src="https://kit.fontawesome.com/1d7a824463.js" crossorigin="anonymous"></script>
@endsection