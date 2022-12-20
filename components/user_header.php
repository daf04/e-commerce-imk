<?php
if (isset($message)) {
  foreach ($message as $message) {
    echo '
         <div class="message">
            <span>' . $message . '</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
         </div>
         ';
  }
}
?>

<header class="header">

  <section class="flex">
    <div id="menu-btn" class="fas fa-bars"></div>

    <a href="home.php" class="logo"><i class="fa-solid fa-dragon"></i> HimaDer Official<span> Shop.</span></a>

    <nav class="navbar">
      <a href="home.php">Home</a>
      <a href="shop.php">Shop</a>
      <a href="orders.php">Orders</a>
      <a href="contact.php">Contact</a>
      <a href="about.php">About</a>
      <div class="wish">
        <a href="cart.php">Cart</a>
      </div>
      <div class="wish">
        <a href="update_user.php">Profile</a>
      </div>
    </nav>

    <div class="icons">
      <?php
      $count_wishlist_items = $conn->prepare("SELECT * FROM `wishlist` WHERE user_id = ?");
      $count_wishlist_items->execute([$user_id]);
      $total_wishlist_counts = $count_wishlist_items->rowCount();

      $count_cart_items = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
      $count_cart_items->execute([$user_id]);
      $total_cart_counts = $count_cart_items->rowCount();
      ?>

      <a href="search_page.php"><i class="fas fa-search"></i></a>
      <a id="w" href="cart.php"><i class="fas fa-shopping-cart"></i><span>(<?= $total_cart_counts; ?>)</span></a>
      <div id="user-btn" class="fas fa-user"></div>
    </div>

    <div class="profile">
      <?php
      $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
      $select_profile->execute([$user_id]);
      if ($select_profile->rowCount() > 0) {
        $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
      ?>
        <img src="../images/profil.png" alt="">
        <p><?= $fetch_profile["name"]; ?></p>
        <a href="update_user.php" class="btn">Update Profil</a>
        <a href="components/user_logout.php" class="delete-btn" onclick="return confirm('logout from the website?');">Keluar</a>
      <?php
      } else {
      ?>
        <p>Silahkan masuk terlebih dahulu..!</p>
        <div class="flex-btn">
          <a href="user_register.php" class="option-btn">Daftar</a>
          <a href="user_login.php" class="option-btn">Masuk</a>
        </div>
      <?php
      }
      ?>


    </div>

  </section>

</header>