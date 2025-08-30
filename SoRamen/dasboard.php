<?php
$server = "localhost";
$user = "root";
$password = "";
$nama_database = "project_db";
$db = mysqli_connect($server, $user, $password, $nama_database);
if (!$db) {
  die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Soramen</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
    rel="stylesheet" />
  />

  <script src="https://kit.fontawesome.com/67c66657c7.js"></script>

  <!-- unpkg -->
  <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet" />

  <!-- Feather Icons -->
  <script src="https://unpkg.com/feather-icons"></script>

  <!-- Style Css-->
  <link rel="stylesheet" href="dasboard.css" />
</head>

<body>

  <!--Navbar-->
  <nav class="navbar">
    <a href="#" class="logo">Soramen <span>ラーメン</span></a>

    <nav class="navbar-nav">
      <a href="#home">Beranda</a>
      <a href="#about">Tentang Kami</a>
      <a href="#menu">Menu</a>
      <a href="#contact">Kontak</a>
      <a href="#feedback">Komentar</a>
    </nav>

    <div class="navbar-extra">
      <a href="#" id="hamberger-menu"><i data-feather="menu"></i></a>
    </div>
  </nav>
  <!--Navbar-->

  <!--Hero Section-->
  <section class="hiro" id="home">
    <div class="hero">
      <div class="content">
        <h1>Ramen Halal Mendunia!</h1>
        <p>Ramen Jumbo dengan Variant Rasa Kaldu Terbanyak di Indonesia.</p>
        <a href="#menu" class="cta">Get Started</a>
      </div>
      <img src="./combo.png" alt="" />
    </div>
  </section>

  <!--About Section Start-->
  <section class="about" id="about">
    <div class="content">
      <div class="icon">
        <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="feather feather-smile">
            <circle cx="12" cy="12" r="10"></circle>
            <path d="M8 14s1.5 2 4 2 4-2 4-2"></path>
            <line x1="9" y1="9" x2="9.01" y2="9"></line>
            <line x1="15" y1="9" x2="15.01" y2="9"></line>
          </svg></a>
        <h4>Cozy Place</h4>
        <p>Lokasi nyaman untuk menikmati waktu makanmu.</p>
      </div>
      <div class="icon">
        <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="feather feather-heart">
            <path
              d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
            </path>
          </svg></a>
        <h4>Healty Food</h4>
        <p>Makanan sehat kami sajikan untuk jaga stamina.</p>
      </div>
      <div class="icon">
        <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="feather feather-shield">
            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
          </svg></a>
        <h4>Halal Guarantee</h4>
        <p>Jaminan halal untuk setiap bahan makanan.</p>
      </div>
      <div class="icon">
        <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="feather feather-wifi">
            <path d="M5 12.55a11 11 0 0 1 14.08 0"></path>
            <path d="M1.42 9a16 16 0 0 1 21.16 0"></path>
            <path d="M8.53 16.11a6 6 0 0 1 6.95 0"></path>
            <line x1="12" y1="20" x2="12.01" y2="20"></line>
          </svg></a>
        <h4>Free Wifi</h4>
        <p>Area internet gratis.</p>
      </div>
      <div class="icon">
        <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="feather feather-book-open">
            <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
            <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
          </svg></a>
        <h4>Manga Library</h4>
        <p>Baca komik sepuasnya.</p>
      </div>
      <div class="icon">
        <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="feather feather-music">
            <path d="M9 18V5l12-2v13"></path>
            <circle cx="6" cy="18" r="3"></circle>
            <circle cx="18" cy="16" r="3"></circle>
          </svg></a>
        <h4>Video Music</h4>
        <p>Full Japan and Korea MV</p>
      </div>
      <div class="icon">
        <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="feather feather-calendar">
            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
            <line x1="16" y1="2" x2="16" y2="6"></line>
            <line x1="8" y1="2" x2="8" y2="6"></line>
            <line x1="3" y1="10" x2="21" y2="10"></line>
          </svg></a>
        <h4>Event</h4>
        <p>Event menarik setiap bulan.</p>
      </div>
      <div class="icon">
        <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="feather feather-users">
            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
            <circle cx="9" cy="7" r="4"></circle>
            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
          </svg></a>
        <h4>Community</h4>
        <p>Tempat ngumpul komunitas keren.</p>
      </div>
    </div>
  </section>
  <!--About Section End-->

  <!-- Menu Section Start -->

  <section class="menu" id="menu">
    <h2>Menu Kami</h2>
    <div class="row">
      <?php

      $sql = "SELECT * FROM produk_ramen";
      $query = mysqli_query($db, $sql);
      while ($menu = mysqli_fetch_array($query)):
        ?>
        <div class='menu-card' id="menuCard<?= $menu['id'] ?>">
          <img src="<?= $menu["gambar"] ?>" alt="">
          <h3>
            <?= $menu["nama"] ?>
          </h3>
          <div class='star_menu'>
            <?php if ($menu["bintang"] < 10) { ?>
              <i class='bx bx-star star'></i>
              <i class='bx bx-star star'></i>
              <i class='bx bx-star star'></i>
              <i class='bx bx-star star'></i>
              <i class='bx bx-star star'></i>
            <?php } else if ($menu["bintang"] < 20) { ?>
                <i class='bx bxs-star star'></i>
                <i class='bx bx-star star'></i>
                <i class='bx bx-star star'></i>
                <i class='bx bx-star star'></i>
                <i class='bx bx-star star'></i>
            <?php } else if ($menu["bintang"] < 30) { ?>
                  <i class='bx bxs-star star'></i>
                  <i class='bx bxs-star star'></i>
                  <i class='bx bx-star star'></i>
                  <i class='bx bx-star star'></i>
                  <i class='bx bx-star star'></i>
            <?php } else if ($menu["bintang"] < 40) { ?>
                    <i class='bx bxs-star star'></i>
                    <i class='bx bxs-star star'></i>
                    <i class='bx bxs-star star'></i>
                    <i class='bx bx-star star'></i>
                    <i class='bx bx-star star'></i>
            <?php } else if ($menu["bintang"] < 50) { ?>
                      <i class='bx bxs-star star'></i>
                      <i class='bx bxs-star star'></i>
                      <i class='bx bxs-star star'></i>
                      <i class='bx bxs-star star'></i>
                      <i class='bx bx-star star'></i>
            <?php } else if ($menu["bintang"] < 60 || $menu["bintang"] >= 60) { ?>
                        <i class='bx bxs-star star'></i>
                        <i class='bx bxs-star star'></i>
                        <i class='bx bxs-star star'></i>
                        <i class='bx bxs-star star'></i>
                        <i class='bx bxs-star star'></i>
            <?php } ?>
          </div>
          <a href="rating.php?id=<?php echo $menu['id'] ?>">Rating</a>
          <p><i>
              <?= $menu["sub"] ?>
            </i></p>
          <p>
            <?= $menu["toping"] ?>
          </p>
          <h4>
            <?= $menu["price"] ?>
          </h4>
        </div>
      <?php endwhile; ?>
    </div>
  </section>

  <!-- Menu Section end -->

  <!--Kontak Section Start-->

  <section id="contact" class="contact">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.1648535576555!2d110.80178618745028!3d-7.5569970729475315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a14306f6110f9%3A0x42e8786b1734a0ba!2sSo%20Ramen!5e0!3m2!1sid!2sid!4v1693127871950!5m2!1sid!2sid"
      width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"></iframe>

    <div class="medsos">
      <div class="bag1">
        <a href="https://api.whatsapp.com/send/?phone=62081386860300&text&type=phone_number&app_absent=0">
          <img width="48" height="48" src="https://img.icons8.com/color/48/whatsapp--v1.png" alt="whatsapp--v1" />
        </a>
        <a href="https://api.whatsapp.com/send/?phone=62081386860300&text&type=phone_number&app_absent=0">Whatsapp</a>
      </div>

      <div class="bag2">
        <a href="https://shopee.co.id/soramen.id">
          <img width="48" height="48" src="https://img.icons8.com/color/48/shopee.png" alt="shopee" />
        </a>
        <a href="https://shopee.co.id/soramen.id">Shopee</a>
      </div>
    </div>

    <div class="end">
      <div class="name">
        <h3>Soramen <span>ラーメン</span></h3>
      </div>

      <div class="info">
        <p>Ikuti Info & Event Menarik Kedai Kami!</p>
      </div>

      <div class="sosial">
        <a href="https://www.instagram.com/soramen.id/"><i data-feather="instagram"></i></a>
        <a href="https://www.youtube.com/channel/UC_dhjtlKFpNeZDpcMyAFTpg"><i data-feather="youtube"></i></a>
      </div>
    </div>
  </section>
  <!--Kontak Section End-->

  <!-- komentar -->
  <section class="fed" id="feedback">
    <div class="feed">
      <form method="POST">
        <h1>Berikan Komentarmu!!</h1>
        <div class="id">
          <input type="text" name="nama" placeholder="Nama" />
          <i class="far fa-user"></i>
        </div>
        <textarea cols="15" rows="5" name="komen" placeholder="Masukkan Komentar Mu.."></textarea>
        <button type="submit" name="submit">Kirim</button>
      </form>
    </div>
  </section>
  <!-- end -->

  <?php

  if (isset($_POST['submit'])) { // ambil data dari formulir
    $nama = $_POST['nama'];
    $komen = $_POST['komen'];
    // buat query
    $sql = "INSERT INTO comment (nama, komen) VALUE ('$nama', '$komen')";
    $query = mysqli_query($db, $sql);
  }

  ?>

  <!-- komentar -->
  <section class="komentar">
    <h4>KOMENTAR</h4>
    <div class="comment-list">
      <?php
      $sql = "SELECT * FROM comment";
      $query = mysqli_query($db, $sql);

      while ($comen = mysqli_fetch_array($query)) {
        echo "<div class='comment'>";
        echo "<div class='comment-info'>";
        echo "<p><b>" . $comen['nama'] . "</b></p>";
        echo "<p class='comment-date'>" . date("l, d F Y", strtotime($comen['tanggal_komentar'])) . "</p>"; // Ubah format tanggal sesuai dengan yang diinginkan
        echo "</div>";
        echo "<p class='comment-content' id='message'>" . $comen['komen'] . "</p>";
        echo "</div>";
      }
      ?>
    </div>
  </section>
  <!-- komentar end -->

  <!--Footer Start-->

  <footer>
    <div class="credit">
      <p><a href="">Kedai Soramen</a> &copy; 2019</p>
      <p>- Sejak 2011 -</p>
    </div>
  </footer>

  <!--Footer End-->

  <!--Feather Icons-->
  <script>
    feather.replace();
  </script>

  <!--My JavaScript-->
  <script src="dasboard.js"></script>
</body>

</html>