<!DOCTYPE html>
<html>
<head>
<title>Advent</title>
 <link rel="stylesheet" type="text/css" href="/advent/assets/css/style.css"/>
</head>
<body>

<?php
// $date_now = date("j-m-y");
$date_now  = '10-12-17'
?>
  <div class="container">
  <div class="row">
    <div class="column">
      <img src="/advent/assets/images/9.jpg" onclick="<?php if ($date_now == '09-12-17') : ?>openModal();currentSlide(1) <?php endif; ?><?php if ($date_now > '09-12-17') : ?>expired(); <?php endif; ?><?php if ($date_now < '09-12-17') : ?>future(); <?php endif; ?>" class="<?php if ($date_now > '09-12-17') : ?>expired<?php endif; ?>">
    </div>
    <div class="column">
      <img src="/advent/assets/images/2.jpg" onclick="<?php if ($date_now == '02-12-17') : ?>openModal();currentSlide(2) <?php endif; ?><?php if ($date_now > '02-12-17') : ?>expired(); <?php endif; ?><?php if ($date_now < '02-12-17') : ?>future(); <?php endif; ?>" class="<?php if ($date_now > '02-12-17') : ?>expired<?php endif; ?>">
    </div>
    <div class="column">
      <img src="/advent/assets/images/23.jpg" onclick="<?php if ($date_now == '23-12-17') : ?>openModal();currentSlide(3) <?php endif; ?><?php if ($date_now > '23-12-17') : ?>expired(); <?php endif; ?><?php if ($date_now < '23-12-17') : ?>future(); <?php endif; ?>" class="<?php if ($date_now > '23-12-17') : ?>expired<?php endif; ?>">
    </div>
    <div class="column">
      <img src="/advent/assets/images/17.jpg" onclick="<?php if ($date_now == '17-12-17') : ?>openModal();currentSlide(4)<?php endif; ?><?php if ($date_now > '17-12-17') : ?>expired(); <?php endif; ?><?php if ($date_now < '17-12-17') : ?>future(); <?php endif; ?>" class="<?php if ($date_now > '17-12-17') : ?>expired<?php endif; ?>">
    </div>
    <div class="column">
      <img src="/advent/assets/images/13.jpg" onclick="<?php if ($date_now == '13-12-17') : ?>openModal();currentSlide(5)<?php endif; ?><?php if ($date_now > '13-12-17') : ?>expired(); <?php endif; ?><?php if ($date_now < '13-12-17') : ?>future(); <?php endif; ?>" class="<?php if ($date_now > '13-12-17') : ?>expired<?php endif; ?>">
    </div>
    <div class="column">
      <img src="/advent/assets/images/4.jpg" onclick="<?php if ($date_now == '04-12-17') : ?>openModal();currentSlide(6)<?php endif; ?><?php if ($date_now > '04-12-17') : ?>expired(); <?php endif; ?><?php if ($date_now < '04-12-17') : ?>future(); <?php endif; ?>" class="<?php if ($date_now > '04-12-17') : ?>expired<?php endif; ?>">
    </div>
    <div class="column">
      <img src="/advent/assets/images/6.jpg" onclick="<?php if ($date_now == '06-12-17') : ?>openModal();currentSlide(7)<?php endif; ?><?php if ($date_now > '06-12-17') : ?>expired(); <?php endif; ?><?php if ($date_now < '06-12-17') : ?>future(); <?php endif; ?>" class="<?php if ($date_now > '06-12-17') : ?>expired<?php endif; ?>">
    </div>
    <div class="column">
      <img src="/advent/assets/images/11.jpg" onclick="<?php if ($date_now == '11-12-17') : ?>openModal();currentSlide(8)<?php endif; ?><?php if ($date_now > '11-12-17') : ?>expired(); <?php endif; ?><?php if ($date_now < '11-12-17') : ?>future(); <?php endif; ?>" class="<?php if ($date_now > '11-12-17') : ?>expired<?php endif; ?>">
    </div>
    <div class="column">
      <img src="/advent/assets/images/1.jpg" onclick="<?php if ($date_now == '01-12-17') : ?>openModal();currentSlide(9)<?php endif; ?><?php if ($date_now > '01-12-17') : ?>expired(); <?php endif; ?><?php if ($date_now < '01-12-17') : ?>future(); <?php endif; ?>" class="<?php if ($date_now > '01-12-17') : ?>expired<?php endif; ?>">
    </div>
    <div class="column">
      <img src="/advent/assets/images/19.jpg" onclick="<?php if ($date_now == '19-12-17') : ?>openModal();currentSlide(10)<?php endif; ?><?php if ($date_now > '19-12-17') : ?>expired(); <?php endif; ?><?php if ($date_now < '19-12-17') : ?>future(); <?php endif; ?>" class="<?php if ($date_now > '19-12-17') : ?>expired<?php endif; ?>">
    </div>
    <div class="column">
      <img src="/advent/assets/images/21.jpg" onclick="<?php if ($date_now == '21-12-17') : ?>openModal();currentSlide(11)<?php endif; ?><?php if ($date_now > '21-12-17') : ?>expired(); <?php endif; ?><?php if ($date_now < '21-12-17') : ?>future(); <?php endif; ?>" class="<?php if ($date_now > '21-12-17') : ?>expired<?php endif; ?>">
    </div>
    <div class="column">
      <img src="/advent/assets/images/15.jpg" onclick="<?php if ($date_now == '15-12-17') : ?>openModal();currentSlide(12)<?php endif; ?><?php if ($date_now > '15-12-17') : ?>expired(); <?php endif; ?><?php if ($date_now < '15-12-17') : ?>future(); <?php endif; ?>" class="<?php if ($date_now > '15-12-17') : ?>expired<?php endif; ?>">
    </div>
    <div class="column">
      <img src="/advent/assets/images/7.jpg" onclick="<?php if ($date_now == '07-12-17') : ?>openModal();currentSlide(13)<?php endif; ?><?php if ($date_now > '07-12-17') : ?>expired(); <?php endif; ?><?php if ($date_now < '07-12-17') : ?>future(); <?php endif; ?>" class="<?php if ($date_now > '07-12-17') : ?>expired<?php endif; ?>">
    </div>
    <div class="column">
      <img src="/advent/assets/images/14.jpg" onclick="<?php if ($date_now == '14-12-17') : ?>openModal();currentSlide(14)<?php endif; ?><?php if ($date_now > '14-12-17') : ?>expired(); <?php endif; ?><?php if ($date_now < '14-12-17') : ?>future(); <?php endif; ?>" class="<?php if ($date_now > '14-12-17') : ?>expired<?php endif; ?>">
    </div>
    <div class="column">
      <img src="/advent/assets/images/5.jpg" onclick="<?php if ($date_now == '05-12-17') : ?>openModal();currentSlide(15)<?php endif; ?><?php if ($date_now > '05-12-17') : ?>expired(); <?php endif; ?><?php if ($date_now < '05-12-17') : ?>future(); <?php endif; ?>" class="<?php if ($date_now > '05-12-17') : ?>expired<?php endif; ?>">
    </div>
    <div class="column">
      <img src="/advent/assets/images/22.jpg" onclick="<?php if ($date_now == '22-12-17') : ?>openModal();currentSlide(16)<?php endif; ?><?php if ($date_now > '22-12-17') : ?>expired(); <?php endif; ?><?php if ($date_now < '22-12-17') : ?>future(); <?php endif; ?>" class="<?php if ($date_now > '22-12-17') : ?>expired<?php endif; ?>">
    </div>
    <div class="column">
      <img src="/advent/assets/images/18.jpg" onclick="<?php if ($date_now == '18-12-17') : ?>openModal();currentSlide(17)<?php endif; ?><?php if ($date_now > '18-12-17') : ?>expired(); <?php endif; ?><?php if ($date_now < '18-12-17') : ?>future(); <?php endif; ?>" class="<?php if ($date_now > '18-12-17') : ?>expired<?php endif; ?>">
    </div>
    <div class="column">
      <img src="/advent/assets/images/3.jpg" onclick="<?php if ($date_now == '03-12-17') : ?>openModal();currentSlide(18)<?php endif; ?><?php if ($date_now > '03-12-17') : ?>expired(); <?php endif; ?><?php if ($date_now < '03-12-17') : ?>future(); <?php endif; ?>" class="<?php if ($date_now > '03-12-17') : ?>expired<?php endif; ?>">
    </div>
    <div class="column">
      <img src="/advent/assets/images/8.jpg" onclick="<?php if ($date_now == '08-12-17') : ?>openModal();currentSlide(19)<?php endif; ?><?php if ($date_now > '08-12-17') : ?>expired(); <?php endif; ?><?php if ($date_now < '08-12-17') : ?>future(); <?php endif; ?>" class="<?php if ($date_now > '08-12-17') : ?>expired<?php endif; ?>">
    </div>
    <div class="column">
      <img src="/advent/assets/images/24.jpg" onclick="<?php if ($date_now == '24-12-17') : ?>openModal();currentSlide(20)<?php endif; ?><?php if ($date_now > '24-12-17') : ?>expired(); <?php endif; ?><?php if ($date_now < '24-12-17') : ?>future(); <?php endif; ?>" class="<?php if ($date_now > '24-12-17') : ?>expired<?php endif; ?>">
    </div>
    <div class="column">
      <img src="/advent/assets/images/10.jpg" onclick="<?php if ($date_now == '10-12-17') : ?>openModal();currentSlide(21)<?php endif; ?><?php if ($date_now > '10-12-17') : ?>expired(); <?php endif; ?><?php if ($date_now < '10-12-17') : ?>future(); <?php endif; ?>" class="<?php if ($date_now > '10-12-17') : ?>expired<?php endif; ?>">
    </div>
    <div class="column">
      <img src="/advent/assets/images/20.jpg" onclick="<?php if ($date_now == '20-12-17') : ?>openModal();currentSlide(22)<?php endif; ?><?php if ($date_now > '20-12-17') : ?>expired(); <?php endif; ?><?php if ($date_now < '20-12-17') : ?>future(); <?php endif; ?>" class="<?php if ($date_now > '20-12-17') : ?>expired<?php endif; ?>">
    </div>
    <div class="column">
      <img src="/advent/assets/images/12.jpg" onclick="<?php if ($date_now == '12-12-17') : ?>openModal();currentSlide(23)<?php endif; ?><?php if ($date_now > '12-12-17') : ?>expired(); <?php endif; ?><?php if ($date_now < '12-12-17') : ?>future(); <?php endif; ?>" class="<?php if ($date_now > '12-12-17') : ?>expired<?php endif; ?>">
    </div>
    <div class="column">
      <img src="/advent/assets/images/16.jpg" onclick="<?php if ($date_now == '16-12-17') : ?>openModal();currentSlide(24)<?php endif; ?><?php if ($date_now > '16-12-17') : ?>expired(); <?php endif; ?><?php if ($date_now < '16-12-17') : ?>future(); <?php endif; ?>" class="<?php if ($date_now > '16-12-17') : ?>expired<?php endif; ?>">
    </div>
  </div>
  <div class="popup" id="expiredPopup">
    <div class="popup-inner">
      <p>This offer is expired</p>
    </div>
  </div>
  <div class="popup" id="futurePopup">
    <div class="popup-inner">
      <p>This offer is not yet available </p>
    </div>
  </div>
</div>

  <div id="myModal" class="modal" onclick="closeModal()">
    <span class="close cursor" onclick="closeModal()">&times;</span>
    <div class="modal-content">

      <div class="mySlides slide-1">
        <img class="img_1" src="/advent/assets/images/square/9.png">
        <img class="img_2" src="/advent/assets/images/square/gift.jpg">
      </div>

      <div class="mySlides slide-2">
        <img class="img_1" src="/advent/assets/images/square/2.png">
        <img class="img_2" src="/advent/assets/images/square/gift.jpg">
      </div>

      <div class="mySlides slide-3">
        <img class="img_1" src="/advent/assets/images/square/23.png">
        <img class="img_2" src="/advent/assets/images/square/gift.jpg">
      </div>

      <div class="mySlides slide-4">
        <img class="img_1" src="/advent/assets/images/square/17.png">
        <img class="img_2" src="/advent/assets/images/square/gift.jpg">
      </div>

      <div class="mySlides slide-5">
        <img class="img_1" src="/advent/assets/images/square/13.png">
        <img class="img_2" src="/advent/assets/images/square/gift.jpg">
      </div>

      <div class="mySlides slide-6">
        <img class="img_1" src="/advent/assets/images/square/4.png">
        <img class="img_2" src="/advent/assets/images/square/gift.jpg">
      </div>

      <div class="mySlides slide-7">
        <img class="img_1" src="/advent/assets/images/square/6.png">
        <img class="img_2" src="/advent/assets/images/square/gift.jpg">
      </div>

      <div class="mySlides slide-8">
        <img class="img_1" src="/advent/assets/images/square/11.png">
        <img class="img_2" src="/advent/assets/images/square/gift.jpg">
      </div>

      <div class="mySlides slide-9">
        <img class="img_1" src="/advent/assets/images/square/1.png">
        <img class="img_2" src="/advent/assets/images/square/gift.jpg">
      </div>

      <div class="mySlides slide-10">
        <img class="img_1" src="/advent/assets/images/square/19.png">
        <img class="img_2" src="/advent/assets/images/square/gift.jpg">
      </div>

      <div class="mySlides slide-11">
        <img class="img_1" src="/advent/assets/images/square/21.png">
        <img class="img_2" src="/advent/assets/images/square/gift.jpg">
      </div>

      <div class="mySlides slide-12">
        <img class="img_1" src="/advent/assets/images/square/15.png">
        <img class="img_2" src="/advent/assets/images/square/gift.jpg">
      </div>

      <div class="mySlides slide-13">
        <img class="img_1" src="/advent/assets/images/square/7.png">
        <img class="img_2" src="/advent/assets/images/square/gift.jpg">
      </div>

      <div class="mySlides slide-14">
        <img class="img_1" src="/advent/assets/images/square/14.png">
        <img class="img_2" src="/advent/assets/images/square/gift.jpg">
      </div>

      <div class="mySlides slide-15">
        <img class="img_1" src="/advent/assets/images/square/5.png">
        <img class="img_2" src="/advent/assets/images/square/gift.jpg">
      </div>

      <div class="mySlides slide-16">
        <img class="img_1" src="/advent/assets/images/square/22.png">
        <img class="img_2" src="/advent/assets/images/square/gift.jpg">
      </div>

      <div class="mySlides slide-17">
        <img class="img_1" src="/advent/assets/images/square/18.png">
        <img class="img_2" src="/advent/assets/images/square/gift.jpg">
      </div>

      <div class="mySlides slide-18">
        <img class="img_1" src="/advent/assets/images/square/3.png">
        <img class="img_2" src="/advent/assets/images/square/gift.jpg">
      </div>

      <div class="mySlides slide-19">
        <img class="img_1" src="/advent/assets/images/square/8.png">
        <img class="img_2" src="/advent/assets/images/square/gift.jpg">
      </div>

      <div class="mySlides slide-20">
        <img class="img_1" src="/advent/assets/images/square/24.png">
        <img class="img_2" src="/advent/assets/images/square/gift.jpg">
      </div>

      <div class="mySlides slide-21">
        <img class="img_1" src="/advent/assets/images/square/10.png">
        <img class="img_2" src="/advent/assets/images/square/gift.jpg">
      </div>

      <div class="mySlides slide-22">
        <img class="img_1" src="/advent/assets/images/square/20.png">
        <img class="img_2" src="/advent/assets/images/square/gift.jpg">
      </div>

      <div class="mySlides slide-23">
        <img class="img_1" src="/advent/assets/images/square/12.png">
        <img class="img_2" src="/advent/assets/images/square/gift.jpg">
      </div>

      <div class="mySlides slide-24">
        <img class="img_1" src="/advent/assets/images/square/16.png">
        <img class="img_2" src="/advent/assets/images/square/gift.jpg">
      </div>



      <div class="caption-container">
        <p id="caption"></p>
      </div>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="/advent/assets/js/masonry.pkgd.min.js"></script>
  <script src="/advent/assets/js/imagesloaded.pkgd.min.js"></script>
  <script src="/advent/assets/js/script.js"></script>

  <script>
  $(document).ready(function() {
    $('.container').imagesLoaded().progress( function() {
      $('.row').masonry({
        itemSelector: '.column',
        columnWidth: 16
      });
    });
  });
  </script>
  </body>
  </html>
