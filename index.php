<?php
  session_start();
  $status = $_SESSION['status'];
  if ($status!="admin") {
    echo "
      <script>
        window.location.href='login.php'
      </script>
    ";
  }
?>

<!DOCTYPE html>
<html>
<head>
  <?php
    include 'include/function_css.php';
  ?>
</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <?php
      include 'include/header.php';
      include 'include/menu.php';
    ?>

    <div class="content-wrapper">
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <?php
              $page = $_GET['page'];
              if (empty($page)) {
                include 'include/content.php';
              } else {
                include 'include/'.$page;
              }
          ?>
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    </div>
    
    <?php
      include 'include/footer.php';
    ?>
  </div>
  <!-- ./wrapper -->

    <?php
      include 'include/function_js.php';
    ?>
</body>

</html>