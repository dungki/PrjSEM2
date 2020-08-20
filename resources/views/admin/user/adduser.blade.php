@extends('layout.main')
@section('css')
<style>
    .eye-hover{
      color:#333
    }
    .eye-hover:hover{
      color:#333
    }
    .fc-event, .fc-event:hover {
          color: #fff !important;
          text-decoration: none;
    }
  </style>
@endsection
@section('title')
    Quản Lý nhân sự
@endsection
@section('index')

<ul class="breadcrumb">
    <li><a href="#"><i class="fas fa-home"></i> Trang chủ</a></li>
    <li><a href="#"><i class="fas fa-user-cog"></i> Admin</a></li>
    <li><a href="#"><i class="fas fa-user-tie"></i> Nhân sự</a></li>
    <li><a href="#"><i class="fas fa-plus-circle"></i> Thêm nhân sự</a></li>
  </ul>
  @endsection

@section('container')
<div class="page-container">
  

    <!-- MAIN CONTENT-->
    <div class="main-content">
      <h2 class="title-1 m-b-25" style="text-align:center;">Thêm nhân viên</h2>
      <div class="container" style="border-radius: 10px;">
          <div class="panel-body" style="color:black;">
            <form class="" action="{{ route('postUser') }}" method="POST">
                {{ csrf_field() }}
                <div class="row">
                  <div class="col-sm-5">
                    <div class="form-group" style="display:none;">
                      <label for="name">Mã nhân sự:</label>
                      <input required="true" type="text" class="form-control" id="usr" readonly placeholder="id">
                  </div>
                  <div class="form-group">
                    <label for="email">Email:</label>
                    <input required="true" type="email" name="email" class="form-control" id="email" onkeyup="checkEmail()" placeholder="...">
                    <span style="padding-left: 2%;color: red;display: none;" id="warnning-email"></span>
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <div class="input-group" id="show_hide_password">
                      <input class="form-control" name="password" type="password">
                      <div class="input-group-addon">
                          <a class="eye-hover" href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                      </div>
                  </div>
              </div>
                  </div>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <label for="name">Tên:</label>
                      <input required="true" type="text" name="name" class="form-control" id="name" placeholder="...">
                  </div>
                  <div class="form-group">
                      <label for="personId" >Giới tính:</label>
                      <select name="gender"  class="form-control"> 
                         <option value="Nam">Nam</option>
                         <option value="Nữ">Nữ</option>
                      </select>
                  </div>
                  
                  <div class="form-group">
                      <label for="personId">CMND:</label>
                      <input required="true" type="text" name="cmnd" class="form-control" id="cmnd" onkeyup="checkCMND()" placeholder="...">
                      <span style="padding-left: 2%;color: red;display: none;" id="warnning-cmnd"></span>
                  </div>
                  
                  <div class="form-group">
                      <label for="address">Địa chỉ:</label>
                      <input required="true" type="text" name="address" class="form-control" id="address" placeholder="...">
                  </div>
                  <div class="form-group">
                      <label for="number">Số điện thoại:</label>
                      <input required="true" type="text" name="phone" class="form-control" id="phone" placeholder="..." onkeyup="checkPhone()">
                      <span style="padding-left: 2%;color: red;display: none;" id="warnning"></span>
                  </div>
                  <div class="form-group">
                      <label for="number">Ngày sinh:</label>
                      <input required="true" type="date" name="birtday" class="form-control" id="birthday" placeholder="..." onchange="checkBirthday()">
                      <span style="padding-left: 2%;color: red;display: none;" id="warnning-birthday"></span>
                  </div>
                  <div class="form-group">
                      <label for="join_at">Ngày vào làm:</label>
                      <input required="true" type="date" name="join_day" class="form-control" id="joinDay" placeholder="...">
                  </div>
                  <div class="form-group">
                      <label for="salary_hour">Tiền lương:(VNĐ/h)</label>
                      <input required="true" type="number" name="salary" class="form-control" id="salary_hour" placeholder="...">
                  </div>
                  <div class="form-group">
                      <label for="exampleFormControlSelect1">Loại nhân viên:</label>
                      <select class="form-control" id="type_usr_id" name="type_user_id">
                          @foreach ($type_users as $item)
                          <option value="{{$item->id}}">{{$item->name}}</option>
                          @endforeach
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="exampleFormControlSelect1">Vai trò:</label>
                      <select class="form-control" id="role" name="role_id">
                         @foreach ($roles as $item)
                      <option value="{{$item->id}}">{{$item->name}}</option>
                         @endforeach
                      </select>
                  </div>
                  
                  <button class="btn btn-secondary" style="margin-top:15px;margin-bottom: 40px;">Lưu</button>
              </div>
            </form>
          </div>
      </div>
    </div>
</div>
<script>
  var ischeck = false;
  var isLength = false;
  var birthday ;
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
  function checkBirthday() {
    var today, inputday, text;
    today = new Date();
    var date =(today.getMonth()+1)+'/'+ today.getDate()+'/'+today.getFullYear();
    birthday = (new Date($('#birthday').val()).getMonth() + 1)+'/'+new Date($('#birthday').val()).getDate()+'/'+new Date($('#birthday').val()).getFullYear();
    console.log(date);
    console.log(birthday);
    
        if (today.getFullYear() - new Date($('#birthday').val()).getFullYear() < 18) {
          document.getElementById("warnning-birthday").style.display="inline";
        text = "Lỗi ! -> Độ tuổi đang < 18 ";
            if (new Date(date).valueOf() < new Date(birthday).valueOf()) {
        
              text = "Lỗi ! -> Ngày sinh phải nhỏ hơn ngày hiện tại";
        }
    }
    
    else{
      document.getElementById("warnning-birthday").style.display="none";
    }
     document.getElementById("warnning-birthday").innerHTML = text;
  }
  function checkPhone() {
    document.getElementById("warnning").style.display="inline";
    var x, text,a;
    
    // Get the value of the input field with id="numb"
    x = document.getElementById("phone").value;
    a = x.split("");
    // If x is Not a Number or less than one or greater than 10
  
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
  </script>
<script src="https://kit.fontawesome.com/1d7a824463.js" crossorigin="anonymous"></script>
@endsection