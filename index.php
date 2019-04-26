 <?php
    $beeline = 100;
    $ucell =  10;
    $uzmobile = 60;
    $ring = 30;
    $sms = 40;
    
    ?>
    
<!DOCTYPE html>
<html>
<title>Call Center</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="lib/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
</style>
<body class="w3-light-grey">

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="w3images/avatar2.png" style="width:100%" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-black">
            <h2>Mirkomilov Mirsodiq</h2>
          </div>
        </div>
        <div class="w3-container">
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>Dasturchi</p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>Toshkent</p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>Mir@gmail.com</p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>+99891*******</p>
          <hr>

          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Murojaatlar bo'yicha</b></p>
          <p>Beeline</p>
          <div class="w3-progress-container w3-round-xlarge w3-small">
            <div class="w3-progressbar w3-round-xlarge w3-teal" style="width:<?=$beeline?>%">
              <div class="w3-center w3-text-white"><?= $beeline?>%</div>
            </div>
          </div>
          <p>Ucell</p>
          <div class="w3-progress-container w3-round-xlarge w3-small">
            <div class="w3-progressbar w3-round-xlarge w3-teal" style="width:<?$ucell?>%">
              <div class="w3-center w3-text-white"><?= $ucell?>%</div>
            </div>
          </div>
          <p>UzMobile</p>
          <div class="w3-progress-container w3-round-xlarge w3-small">
            <div class="w3-progressbar w3-round-xlarge w3-teal" style="width:<?=$uzmobile?>%">
              <div class="w3-center w3-text-white"><?=$uzmobile?>%</div>
            </div>
          </div>
          
          <br>

          <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Telefonda</b></p>
          <p>Qo'ng'iroq</p>
          <div class="w3-progress-container w3-round-xlarge">
            <div class="w3-progressbar w3-round-xlarge w3-teal" style="width:100%"></div>
          </div>
          <p>Sms</p>
          <div class="w3-progress-container w3-round-xlarge">
            <div class="w3-progressbar w3-round-xlarge w3-teal" style="width:55%"></div>
          </div>

          <br>
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
    
      <div class="w3-container w3-card-2 w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Murojaat yuborilishi mumkin bo'lgan tashkilotlar</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Beeline</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><a href="beeline.php">Beeline.</a><span class="w3-tag w3-teal w3-round">uz</span></h6>
          <p>Siz yuborgan murojaatingiz ushbu saytga yuboriladi.</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Ucell</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><a href="ucell.php">Ucell.</a><span class="w3-tag w3-teal w3-round">uz</span></h6>
          <p>Siz yuborgan murojaatingiz ushbu saytga yuboriladi.</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>UzMobile</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><a href="uzmobile.php">Uzmobile.</a><span class="w3-tag w3-teal w3-round">uz</span></h6>
          <p>Siz yuborgan murojaatingiz ushbu saytga yuboriladi.</p><br>
        </div>
      </div>

      <div class="w3-container w3-card-2 w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Telefonda</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Qo'ng'iroq</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"><a href="aloqa.php">Aloqa.<span class="w3-tag w3-teal w3-round">uz</span></a></i></h6>
          <p>Qo'ng'iroq qilish bo'yicha sodir bo'lgan barcha murojatlarni jo'natishingiz mumkin.</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Sms</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><a href="sms.php">callCenter.<span class="w3-tag w3-teal w3-round">uz</span></a></h6>
          <p>Habar yuborish bo'yicha barcha muammolarni ushbu saxifada olishingiz mumkin.</p>
          <hr>
        </div>
        
    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>

<footer class="w3-container w3-teal w3-center w3-margin-top">
  <p>Powered by <a href="default.html" target="_blank">MiR</a></p>
</footer>
 
</body>


</html> 

    
   
    