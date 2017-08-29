<?php include_once "includes/header.php"; ?>
<?php include_once "includes/sidebar.php"; ?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Article Create
        </h1>

        <!-- Main content -->
        <section class="content">

            <div class="col-md-6">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Article Create Form</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal" method="post" action="../article/create">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">Title</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="title" placeholder="Title" name="title" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="content" class="col-sm-2 control-label">Content</label>

                                <div class="col-sm-10">
                                    <textarea class="form-control" id="content" name="content" cols="10" rows="10"></textarea>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-info pull-right" name="register">Create</button>
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

