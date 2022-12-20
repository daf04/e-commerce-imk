<?php

include 'components/connect.php';

session_start();

if (isset($_SESSION['user_id'])) {
  $user_id = $_SESSION['user_id'];
} else {
  $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About</title>

  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

  <!-- custom css file link  -->
  <link rel="stylesheet" href="css/style.css">


  <!-- google analytics -->
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-PXX7TGT9XK"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-PXX7TGT9XK');
  </script>

  <!-- google tag -->
  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-W8ZMTQK');
  </script>
  <!-- End Google Tag Manager -->

</head>

<body>

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W8ZMTQK" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <?php include 'components/user_header.php'; ?>

  <section class="about">

    <div class="row">

      <div class="image">
        <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
        <h3>Tentang HimaDer Store</h3>
        <p>HimaDer Store merupakan perusahaan yang dibangun oleh lulusan terbaik Universitas Islam Syekh Yusuf Tangerang.
        </p>
        <a href="contact.php" class="btn">Hubungi Kami</a>
      </div>

    </div>

  </section>




  <section class="authors">
    <h1 class="heading"><span>Pendiri Toko</span></h1>
    <div class="box-container">
      <div class="box">
        <img src="images/wahyu1.jpeg" alt="">
        <div class="share">
          <a href="https://discord.com/channels/783720895717703681/976304346851586058" class="fa-brands fa-discord"></a>
          <a href="https://github.com/daf04" class="fa-brands fa-github"></a>
          <a href="https://www.instagram.com/whyusyahril21/" class="fab fa-instagram"></a>
          <a href="https://www.tiktok.com/@wahyusyahrl" class="fab fa-tiktok"></a>
          <a href="#" class="fab fa-youtube"></a>
        </div>
        <h3>Wahyu Syahril Hidayat</h3>
      </div>

      <div class="box">
        <img src="images/daffa1.jpeg" alt="">
        <div class="share">
          <a href="https://discord.com/channels/783720895717703681/976304346851586058" class="fa-brands fa-discord"></a>
          <a href="https://github.com/daf04" class="fa-brands fa-github"></a>
          <a href="https://www.instagram.com/aldrchdapaz/" class="fab fa-instagram"></a>
          <a href="https://www.tiktok.com/@pengennyasigitu" class="fab fa-tiktok"></a>
          <a href="https://www.youtube.com/@aldrichdaffazalfansyah2827" class="fab fa-youtube"></a>
        </div>
        <h3>Aldrich Daffa Zalfansyah</h3>
      </div>
    </div>
  </section>

  <section class="reviews">

    <h1 class="heading"><span> Review Pelanggan </span></h1>

    <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

        <div class="swiper-slide slide">
          <img src="images/dzawin.jpeg" alt="">
          <h3>Dzawin</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
          <p>Pelayanannya bagus, fast respon dan penjualnya sangat ramah. <br></p>
        </div>

        <div class="swiper-slide slide">
          <img src="images/fiersa.jpeg" alt="">
          <h3>Fiersa</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
          <p>Barang cepat sampai karena langsung dikirim setelah checkout.</p>
        </div>

        <div class="swiper-slide slide">
          <img src="images/eki.jpeg" alt="">
          <h3>Eki</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
          <p>Kualitas barang nya tidak diragukan lagi, bener-bener original</p>
        </div>

        <div class="swiper-slide slide">
          <img src="images/adinda.jpeg" alt="">
          <h3>Adinda Thomas</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
          <p>Recomended banget ini toko, bakalan repeat order lagi di sini</p>
        </div>

        <div class="swiper-slide slide">
          <img src="images/barkah.jpeg" alt="">
          <h3>Barkah</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
          <p>Pelayanan memuaskan, barangnya bagus, pengiriman cepat.</p>
        </div>

        <div class="swiper-slide slide">
          <img src="images/arafah.jpeg" alt="">
          <h3>Arafah</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
          <p>Udah 3 kali order disini dan ga pernah nyesel, puas pokoknya.</p>
        </div>

      </div>

      <div class="swiper-pagination"></div>

    </div>

  </section>


  <?php include 'components/footer.php'; ?>

  <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

  <script src="js/script.js"></script>

  <script>
    var swiper = new Swiper(".reviews-slider", {
      loop: true,
      spaceBetween: 20,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        0: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        991: {
          slidesPerView: 3,
        },
      },
    });
  </script>

</body>

</html>