<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <?php
    date_default_timezone_set('Asia/Jakarta');
    $tanggal = date("Y-m-d");
    $tgl_lahir = '2024-05-31';
    if($tanggal == $tgl_lahir){
      ?>
      <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Indie+Flower"
      />
      <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Amatic+SC"
      />
      <link rel="stylesheet" href="style1.css" />
      <?php
    }
    else{
      ?>
      <link rel="stylesheet" href="style2.css" />
      <?php
    }
    ?>
    <title>
      <?php
      if($tanggal == $tgl_lahir){
       ?>
        Happy Birthday
        <?php
      }
      else{
        ?>
        Countdown Birthday
        <?php
      }
      ?>
    </title>
  </head>

  <body>
    <?php
    if($tanggal == $tgl_lahir){
      ?>
      <div class="card">
        <div class="imgBox">
          <div class="bark"></div>
          <img src="assets/img/cover.jpg" alt="" />
        </div>
        <div class="details">
          <h4 class="color1">HAPPY BIRTHDAY</h4>
          <h4 class="color2">My, Lovely Gemini</h4>
          <p>Dear Mira,</p>
          <p>I hope you</p>
          <p>
            Today is a special day because it's your birthday, which makes the
            world more beautiful with your presence. May today bring unexpected
            happiness and endless love. Happy birthday, sweetheart
          </p>
          <p class="text-right">Happy Birthday, My Love!</p>
          <p class="text-right">Mira Syuriyani</p>
        </div>
      </div>
      <audio autoplay loop>
        <source src="assets/audio/lover.mp3" type="audio/mpeg" />
        <source src="assets/audio/lover.ogg" type="audio/ogg" />
        <source src="assets/audio/lover.wav" type="audio/wav" />
        Your browser does not support the audio element.
      </audio>
      <?php
    }
    else{
      ?>
      <h1>Countdown Birthday</h1>
      <p>My Lovely Gemini</p>
      <div class="container">
        <div class="bx">
          <div id="day" class="counter"></div>
          <div class="caption">Days</div>
        </div>
        <div class="bx">
          <div id="hour" class="counter"></div>
          <div class="caption">Hours</div>
        </div>
        <div class="bx">
          <div id="minute" class="counter"></div>
          <div class="caption">Minutes</div>
        </div>
        <div class="bx">
          <div id="second" class="counter"></div>
          <div class="caption">Seconds</div>
        </div>
      </div>
      <audio autoplay loop>
        <source src="assets/audio/style.mp3" type="audio/mpeg" />
        <source src="assets/audio/style.ogg" type="audio/ogg" />
        <source src="assets/audio/style.wav" type="audio/wav" />
        Your browser does not support the audio element.
      </audio>
      <?php
    }
    ?>
    <script>
      var targetDate = new Date('May 31, 2024 00:00:00').getTime();

      function birthday(){
        var now = new Date().getTime();
        difference = targetDate - now;

        var second = 1000;
        var minute = second * 60;
        var hour = minute * 60;
        var day = hour * 24;

        var d = Math.floor(difference / (day));
        var h = Math.floor((difference % (day)) / (hour));
        var m = Math.floor((difference % (hour)) / (minute));
        var s = Math.floor((difference % (minute)) / (second));

        document.getElementById('day').innerText = d;
        document.getElementById('hour').innerText = h;
        document.getElementById('minute').innerText = m;
        document.getElementById('second').innerText = s;
      }

      setInterval(function() {
        birthday();
      }, 1000)
    </script>
  </body>
</html>
