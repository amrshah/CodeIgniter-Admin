 <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url()?>assets/AdminLTE/dist/img/avatar5.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $loggedInUser->first_name ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
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
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
          <ul class="treeview-menu">            
            <li><a href="<?php echo $adminUrl?>Dashboard.html"><i class="fa fa-circle-o"></i> Dashboard</a></li>
           </ul>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> 
            <span>Page Templates</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
           
          </a>
          <ul class="treeview-menu">            
          <li><a href="<?php echo $adminUrl?>login.html"><i class="fa fa-circle-o"></i> Login</a></li>
          <li><a href="<?php echo $adminUrl?>register.html"><i class="fa fa-circle-o"></i> Register</a></li>
            <li><a href="<?php echo $adminUrl?>404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
            <li><a href="<?php echo $adminUrl?>500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
            <li><a href="<?php echo $adminUrl?>blank.html"><i class="fa fa-circle-o"></i> Blank Page Template</a></li>
            <li><a href="<?php echo $adminUrl?>pace.html"><i class="fa fa-circle-o"></i> Pace Page</a></li>
          </ul>
        </li>
        
        <!-- Users Management -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i> 
            <span>Users & Roles</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
           
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo $adminUrl?>Users.html"><i class="fa fa-circle-o"></i> Users</a></li>
            <li><a href="<?php echo $adminUrl?>Roles.html"><i class="fa fa-circle-o"></i> Roles</a></li>
            <li><a href="<?php echo $adminUrl?>Permissions.html"><i class="fa fa-circle-o"></i> Permissions</a></li>            
          </ul>
        </li>
        <!-- EOF Users Management -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-gear"></i> 
            <span>Preferences</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
           
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo $adminUrl?>404.html"><i class="fa fa-circle-o"></i> Admin </a></li>
            <li><a href="<?php echo $adminUrl?>500.html"><i class="fa fa-circle-o"></i> Website </a></li>
            <li><a href="<?php echo $adminUrl?>blank.html"><i class="fa fa-circle-o"></i> Emails</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-gears"></i> 
            <span>System Settings</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
           
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo $adminUrl?>404.html"><i class="fa fa-circle-o"></i> Datbase backup</a></li>
            <li><a href="<?php echo $adminUrl?>500.html"><i class="fa fa-circle-o"></i> Website backup</a></li>
            <li><a href="<?php echo $adminUrl?>blank.html"><i class="fa fa-circle-o"></i> Cron jobs</a></li>
            <li><a href="<?php echo $adminUrl?>pace.html"><i class="fa fa-circle-o"></i> System logs</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->