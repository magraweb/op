<?php include_once "includes/header.php"; ?>
<?php include_once "includes/sidebar.php"; ?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            User Register
        </h1>

        <!-- Main content -->
        <section class="content">

            <div class="col-md-6">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Registration Form</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal" method="post" action="../user/create">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Name</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" placeholder="Name" name="name" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="user_name" class="col-sm-2 control-label">User Name</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="user_name" placeholder="User Name" name="user_name" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-sm-2 control-label">Password</label>

                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-info pull-right" name="register">Register</button>
                        </div>
                        <!-- /.box-footer -->
                    </form>
                </div>
            </div>

        </section>
        <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include_once "includes/footer.php"; ?>

