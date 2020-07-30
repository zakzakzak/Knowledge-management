
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url()?>assets/dist/img/ce.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->

      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">



        <li class="header">NAVIGASI UTAMA</li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Main menu</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
              <small class="label pull-right bg-red"></small>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url()."main_admin" ?>"><i class="fa fa-circle-o"></i> Knowledge Sharing</a></li>

          </ul>
        </li>








        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Lain-Lain</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url()."Login/" ?>"><i class="fa fa-circle-o"></i> Log out</a></li>

          </ul>
        </li>




        </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
