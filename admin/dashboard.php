<?php

include '../components/connect.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if (!isset($admin_id)) {
  header('location:admin_login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

  <link rel="stylesheet" href="../css/admin_style.css">

  <!-- clear confirm form resubmission -->
  <script>
    if (window.history.replaceState) {
      window.history.replaceState(null, null, window.location.href);
    }
  </script>

</head>

<body>

  <?php include '../components/admin_header.php'; ?>

  <section class="dashboard">

    <h1 class="heading">Dashboard</h1>

    <div class="box-container">

      <div class="box">
        <h3>Welcome</h3>
        <p><?= $fetch_profile['name']; ?></p>
        <a href="update_profile.php" class="btn">Ubah Profile</a>
      </div>

      <div class="box">
        <?php
        $total_pendings = 0;
        $select_pendings = $conn->prepare("SELECT * FROM `orders` WHERE payment_status = ?");
        $select_pendings->execute(['pending']);
        if ($select_pendings->rowCount() > 0) {
          while ($fetch_pendings = $select_pendings->fetch(PDO::FETCH_ASSOC)) {
            $total_pendings += $fetch_pendings['total_price'];
          }
        }
        ?>
        <h3><span>Rp </span><?= number_format($total_pendings); ?><span>,-</span></h3>
        <p>Total Pesanan</p>
        <a href="placed_orders.php" class="btn">Lihat Pesanan</a>
      </div>

      <div class="box">
        <?php
        $total_completes = 0;
        $select_completes = $conn->prepare("SELECT * FROM `orders` WHERE payment_status = ?");
        $select_completes->execute(['completed']);
        if ($select_completes->rowCount() > 0) {
          while ($fetch_completes = $select_completes->fetch(PDO::FETCH_ASSOC)) {
            $total_completes += $fetch_completes['total_price'];
          }
        }
        ?>
        <h3><span>Rp </span><?= number_format($total_completes); ?><span>,-</span></h3>
        <p>Pesanan Selesai</p>
        <a href="placed_orders.php" class="btn">Lihat Pesanan</a>
      </div>

      <div class="box">
        <?php
        $select_products = $conn->prepare("SELECT * FROM `products`");
        $select_products->execute();
        $number_of_products = $select_products->rowCount()
        ?>
        <h3><?= $number_of_products; ?></h3>
        <p>Tambah Produk</p>
        <a href="products.php" class="btn">Tambah</a>
      </div>

      <div class="box">
        <?php
        $select_users = $conn->prepare("SELECT * FROM `users`");
        $select_users->execute();
        $number_of_users = $select_users->rowCount()
        ?>
        <h3><?= $number_of_users; ?></h3>
        <p>Akun Customer</p>
        <a href="users_accounts.php" class="btn">Lihat Customer</a>
      </div>

    </div>

  </section>


  <script src="../js/admin_script.js"></script>

</body>

</html>