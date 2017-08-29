<?php include_once "includes/header.php"; ?>
<?php include_once "includes/sidebar.php"; ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Articles
        <small></small>
      </h1>

    <!-- Main content -->
    <section class="content">

    <?php while ($row = mysqli_fetch_assoc($articles)) { ?>

    <h1><?php echo $row['title']; ?></h1>

    <p><?php echo $row['content']; ?></p>

    <div class="col-lg-6">
      <form method="post" action="../article/edit">

      <input type="hidden" name="article_id" value="<?php echo $row['id']; ?>">

      <input type="submit" name="" class="btn btn-primary" value="edit">
    
    </form>
    </div>

    <br>

    <div class="col-lg-6">
      <form method="post" action="../article/delete">

      <input type="hidden" name="article_id" value="<?php echo $row['id']; ?>">

      <input type="submit" name="" class="btn btn-danger" value="delete">
    
    </form>
    </div>

    


    <?php } ?>


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php include_once "includes/footer.php"; ?>

