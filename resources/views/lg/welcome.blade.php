<!DOCTYPE html>
<html lang="en">
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}

.w3-button{
  font-size: 14px;
  font-style: italic;
}

.w3-button:hover{
  background-color: #6c757d!important;
  color: #f8f9fa!important;
  text-decoration: none;
  transition: 0.6s;
}

body, html {
  height: 100%;
}

.parallax {
  background-image: url("https://www.videogame2000.com/wp-content/uploads/2019/01/Thi%E1%BA%BFt-k%E1%BA%BF-n%E1%BB%99i-th%E1%BA%A5t-v%C4%83n-ph%C3%B2ng-%C4%91%E1%BA%B9p-mang-%C4%91%E1%BA%BFn-nh%E1%BB%AFng-l%E1%BB%A3i-%C3%ADch-g%C3%AC-cho-doanh-nghi%E1%BB%87p1.jpg");
  height: 100%;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  opacity: 0.7;
}

.hrm-font{
  font-size: 80px;
  font-weight: 100;
  letter-spacing: 10px;
  text-align: center;
  position: relative;
  top:40%;
  bottom: 60%;
  color: black;
  -khtml-user-select: none; /* KHTML browsers (e.g. Konqueror) */
  -webkit-user-select: none; /* Chrome, Safari, and Opera */
  -webkit-touch-callout: none; /* Disable Android and iOS callouts*/
}

.noice-font{
  letter-spacing: 1px;
}
</style>
<body>

  <!-- Navbar -->
  <div class="w3-top">
    <div class="w3-bar w3-card"  style="background-color:#f8f9fa!important; color:#333;">
      <a href="{{ route('HRMWelcome') }}" class="w3-bar-item w3-button w3-padding-large"><i class="fas fa-home"></i> HRM</a>
      <a href="{{ route('listUser') }}" class="w3-right w3-button w3-padding-large"><i class="fas fa-sign-in-alt"></i> Admin</a>
      <a href="{{ route('profile') }}" class="w3-right w3-button w3-padding-large"><i class="fas fa-sign-in-alt"></i> Nhân viên</a>
 
    </div>
  </div>

  <!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
  <!-- <div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
    <a href="#contact" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">LIÊN HỆ</a>
  </div> -->

  <!-- Parallax Images -->
  <div class="parallax">
    <h5 class="hrm-font">GROUP:HRM</h5>
  </div>
<!-- data-aos="zoom-in-down" -->
  <!-- Section -->

  <!-- Introduce -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="margin-top:200px;margin-bottom:200px;height: 800px;width: 100%;border:1px solid #e3e3e3;border-radius: 5px;-webkit-box-shadow: -2px 2px 38px 10px rgba(0,0,0,0.35);
-moz-box-shadow: -2px 2px 38px 10px rgba(0,0,0,0.35);
box-shadow: -2px 2px 38px 10px rgba(0,0,0,0.35);" data-aos="fade-up"
data-aos-duration="3000">
    <div class="w3-row w3-padding-32">
      <h3 class="w3-wide" style="line-height:60px;letter-spacing: 2px;font-style: oblique;"><i class="fas fa-users"></i> Thành viên:</h3>
      <div class="w3-third">
        <p class="noice-font">1.Trương Công Vinh ( Trưởng nhóm <i class="far fa-star"></i> ) </p>
        <img src="{{ asset('img/Vinh.jpg') }}" class="w3-round w3-margin-bottom" alt="Random Name" style="border-radius: 80px;width:50%; height: 160px;">
      </div>
      <div class="w3-third">
        <p class="noice-font">2.Lê Minh Bắc</p>
        <img src="{{ asset('img/Bug.jpg') }}" class="w3-round w3-margin-bottom" alt="Random Name" style="border-radius: 80px;width:50%; height: 160px;">
      </div>
      <div class="w3-third">
        <p class="noice-font">3.Phan Bạch Tùng Dương</p>
        <img src="{{ asset('img/PlusT.jpg') }}" class="w3-round w3-margin-bottom" alt="Random Name" style="border-radius: 80px;width:50%; height: 160px;">
      </div>
      <div class="w3-third">
        <p class="noice-font">4.Đường Thanh Bình</p>
        <img src="{{ asset('img/Binh.jpg') }}" class="w3-round w3-margin-bottom" alt="Random Name" style="border-radius: 80px;width:50%; height: 160pxx;">
      </div>
      <div class="w3-third">
        <p class="noice-font">5.Trần Mạnh Dũng</p>
        <img src="{{ asset('img/Dung.jpg') }}" class="w3-round" alt="Random Name" style="border-radius: 80px;width:50%; height: 160px;">
      </div>
    </div>
  </div>

  <!-- Ticket Modal -->
  <div id="ticketModal" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4">
      <header class="w3-container w3-teal w3-center w3-padding-32">
        <span onclick="document.getElementById('ticketModal').style.display='none'"
       class="w3-button w3-teal w3-xlarge w3-display-topright">×</span>
        <h2 class="w3-wide"><i class="fa fa-suitcase w3-margin-right"></i>Tickets</h2>
      </header>
      <div class="w3-container">
        <p><label><i class="fa fa-shopping-cart"></i> Tickets, $15 per person</label></p>
        <input class="w3-input w3-border" type="text" placeholder="How many?">
        <p><label><i class="fa fa-user"></i> Send To</label></p>
        <input class="w3-input w3-border" type="text" placeholder="Enter email">
        <button class="w3-button w3-block w3-teal w3-padding-16 w3-section w3-right">PAY <i class="fa fa-check"></i></button>
        <button class="w3-button w3-red w3-section" onclick="document.getElementById('ticketModal').style.display='none'">Close <i class="fa fa-remove"></i></button>
        <p class="w3-right">Need <a href="#" class="w3-text-blue">help?</a></p>
      </div>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
  <i class="fa fa-facebook-official w3-hover-opacity" style="padding-right:20px;font-size:70px"></i>
  <i class="fa fa-instagram w3-hover-opacity"style="padding-right:20px;font-size:70px"></i>
  <i class="fa fa-snapchat w3-hover-opacity"style="padding-right:20px;font-size:70px"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"style="padding-right:20px;font-size:70px"></i>
  <i class="fa fa-twitter w3-hover-opacity"style="padding-right:20px;font-size:70px"></i>
  <i class="fa fa-linkedin w3-hover-opacity"style="padding-right:20px;font-size:70px"></i>
  <!-- <p class="w3-medium">Powered by <a href="#" target="_blank">Me</a></p> -->
</footer>
<script>
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/1d7a824463.js" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>AOS.init();</script>
</body>
</html>
