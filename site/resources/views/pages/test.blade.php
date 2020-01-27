<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>
    
        {{-- <div class="main-carousel" data-flickity='{ "cellAlign": "left", "contain": true }'>
        <div class="slide" id="slide-1">1</div>
        <div class="slide" id="slide-2">2</div>
        <div class="slide" id="slide-3">3</div>
        <div class="slide" id="slide-4">4</div>
        <div class="slide" id="slide-5">5</div>
        <div class="slide" id="slide-5">6</div>
        <div class="slide" id="slide-5">7</div>
        </div> --}}
        <img src="/icon/icon-home.png">
        <img src="/icon/icon-mice.png">
        <img src="/icon/icon-m_his.png">
        <img src="/icon/icon-pro.png">

        <div class="owl-carousel owl-theme">
          <div class="item"><h4>1</h4></div>
          <div class="item"><h4>2</h4></div>
          <div class="item"><h4>3</h4></div>
          <div class="item"><h4>4</h4></div>
          <div class="item"><h4>5</h4></div>
          <div class="item"><h4>6</h4></div>
          <div class="item"><h4>7</h4></div>
          <div class="item"><h4>8</h4></div>
          <div class="item"><h4>9</h4></div>
          <div class="item"><h4>10</h4></div>
          <div class="item"><h4>11</h4></div>
          <div class="item"><h4>12</h4></div>
      </div>
      <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
      <script src="{{ mix('js/app.js') }}"></script>


      <input class="login-bt" type="button" value="เข้าสู่ระบบ">
      <input class="regis-bt" type="button" value="สมัครสมาชิก">
</body>
<style>

</style>
</html>