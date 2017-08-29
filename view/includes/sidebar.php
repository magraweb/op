<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">HEADER</li>
            <!-- Optionally, you can add icons to the links -->
            <?php if(isset($_SESSION['user_login'])) { ?>
                <li class=""><a href="../user/profile"><i class="fa fa-link"></i> <span>Profile</span></a></li>
                <li class=""><a href="../user/logout"><i class="fa fa-link"></i> <span>Logout</span></a></li>
                <li class=""><a href="../article/make"><i class="fa fa-link"></i> <span>Create Article</span></a></li>
                <li class=""><a href="../article/index"><i class="fa fa-link"></i> <span>Article List</span></a></li>


            <?php }else { ?>
            <li class=""><a href="../user/register"><i class="fa fa-link"></i> <span>Register</span></a></li>
            <li class=""><a href="../user/login"><i class="fa fa-link"></i> <span>Login</span></a></li>
            <li class=""><a href="../article/index"><i class="fa fa-link"></i> <span>Article List</span></a></li>

            <?php } ?>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
