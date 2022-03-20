<?php
include "../koneksi.php";
session_start();
if (empty($_SESSION['id_admin'])) {
  echo "
      <script>
        window.location='login.php'
      </script>
    ";
}
?>
<!DOCTYPE html>
<html lang="en">

<!-- header -->
<?php include 'component/header.php' ?>

<body id="page-top">
  <!-- script -->
  <?php include 'component/script.php' ?>

  <div id="wrapper">

    <!-- sidebar -->
    <?php include 'component/sidebar.php' ?>

    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">

        <!-- navbar -->
        <?php include 'component/navbar.php' ?>

        <div class="container-fluid">
          <?php include "content.php" ?>
        </div>
      </div>

      <!-- footer -->
      <?php include 'component/footer.php' ?>

    </div>

  </div>

  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- logout -->
  <?php include 'component/logout.php' ?>
</body>

</html>