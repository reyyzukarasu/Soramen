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
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rating</title>

  <link rel="stylesheet" href="rating.css">

  <script src="https://kit.fontawesome.com/67c66657c7.js"></script>

  <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet" />

  <script src="https://unpkg.com/feather-icons"></script>

</head>

<body>
  <div class="back">
    <a href="dasboard.php"><i data-feather="arrow-left"></i></a>
  </div>

  <?php
  $id = $_GET["id"];
  $sql = "SELECT * FROM produk_ramen WHERE id = '$id'";
  $query = mysqli_query($db, $sql);
  while ($menu = mysqli_fetch_array($query)):
    ?>
    <section class="fed" id="feedback">
      <div class="feed">
        <form action="" method="POST">
          <h1>Berikan Ratingmu!!</h1>
          <img src="<?= $menu["gambar"] ?>" alt="">
          <h3>
            <?= $menu["nama"] ?>
          </h3>
          <div class="rating">
            <input type="hidden" name="bintang" />
            <i class="bx bx-star star" style="--i: 0"></i>
            <i class="bx bx-star star" style="--i: 1"></i>
            <i class="bx bx-star star" style="--i: 2"></i>
            <i class="bx bx-star star" style="--i: 3"></i>
            <i class="bx bx-star star" style="--i: 4"></i>
          </div>
          <button type="submit" name="submit">Kirim</button>
        </form>
      </div>
    </section>
  <?php endwhile; ?>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['bintang'])) {
      $id = $_GET["id"];
      // Mengambil nilai bintang yang dikirimkan melalui formulir
      $bintang_baru = $_POST['bintang'];

      // Query untuk memeriksa apakah produk sudah memiliki nilai bintang
      $check_query = "SELECT bintang FROM produk_ramen";
      $result = $db->query($check_query);

      // Mengambil nilai bintang yang sudah ada di database (misalnya dari tabel 'rating')
      $query = "SELECT bintang FROM produk_ramen";
      $result = $db->query($query);

      if ($result->num_rows > 0) {
        // Mengambil nilai bintang yang sudah ada di database
        $row = $result->fetch_assoc();
        $bintang_lama = $row["bintang"];

        // Menambahkan nilai bintang yang baru dengan nilai bintang yang sudah ada
        $bintang_total = intval($bintang_lama) + intval($bintang_baru);

        // Query untuk memperbarui nilai bintang di database
        $update_query = "UPDATE produk_ramen SET bintang='$bintang_total' WHERE id='$id'";
        mysqli_query($db, $update_query);
        header("Location: dasboard.php");
        exit();
        if ($db->query($update_query) === TRUE) {
          echo "";
        } else {
          echo "Error updating record: " . $db->error;
        }
      } else {
        // Jika belum ada nilai bintang di database, maka lakukan INSERT
        $insert_query = "INSERT INTO produk_ramen (bintang) VALUES ('$bintang_baru')";
        if ($db->query($insert_query) === TRUE) {
        } else {
          echo "Error: " . $insert_query . "<br>" . $db->error;
        }
      }

      $db->close();
    } else {
      echo "";
    }
  } else {
    echo "";
  }
  ?>

  <script>
    feather.replace();
  </script>

  <script src="rating.js"></script>
</body>

</html>