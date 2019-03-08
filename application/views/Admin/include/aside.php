<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="<?php echo base_url() ?>assets/bower_components/login/images/xl.png" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>Alfhan Rizky</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Administrator</a>
          </div>
        </div>
        <!-- search form -->
        <!-- <form action="#" method="get" class="sidebar-form">
          <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                <i class="fa fa-search"></i>
              </button>
            </span>
          </div> -->
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">MAIN NAVIGATION</li>
          <li class="active treeview menu-open">
            <li><a href="<?php echo site_url('dashboard') ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
          </li>
            <li class="treeview">
          <a href="#">
            <i class="fa fa-newspaper-o"></i> <span>Campaign Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="treeview">
              <a href="#"><i class="fa fa-pencil-square"></i>Create Campaign
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo site_url('addauto') ?>"><i class="fa fa-cogs"></i> Automatic Campaign</a></li>
                <li><a href="<?php echo site_url('addmanual') ?>"><i class="fa fa-pencil-square"></i> Manual Campaign</a></li>
                </li>
              </ul>
            </li>
            <li class="treeview">
            <li class="treeview">
              <a href="#"><i class="fa fa-users"></i> Recepient
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
              <li><a href="<?php echo site_url('automatictarget'); ?>"><i class="fa  fa-upload"></i>Automatic Target File</a></li>
              <li><a href="<?php echo site_url('campaignrecepient'); ?>"><i class="fa   fa-users"></i> Campaign Recepient</a></li>
              <li><a href="<?php echo site_url('recepientskip'); ?>"><i class="fa  fa-user-times"></i> Recepient (Skipped)</a></li>
              </ul>
            </li>
            <li><a href="<?php echo site_url('campaignapproval'); ?>"><i class="fa  fa-check-square"></i> Campaign Approval</a></li>
            <li><a href="<?php echo site_url('blacklist'); ?>"><i class="fa  fa-ban"></i> Blacklist</a></li>
            <li><a href="#"><i class="fa  fa-share"></i> Test Campaign</a></li>
          </ul>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-table "></i> <span>Broadcast Schedule</span>
              <span class="pull-right-container">
              </span>
            </a>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-book"></i> <span>Report</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo site_url('report'); ?>"><i class="fa fa-bullhorn"></i>Summary per Campaign</a></li>
              <li><a href="#"><i class="fa fa-mail-reply" ></i>Broadcast Response</a></li>
              <li><a href="<?php echo site_url('pushcapacity'); ?>"><i class="fa fa-battery-three-quarters" ></i>Push Capacity</a></li>
              <li><a href="#"><i class="fa   fa-th-list" ></i>Server Up Time</a></li>
              <li><a href="<?php echo site_url('campaignlist') ?>"><i class="fa fa-list-ol"></i>Campaign List</a></li>
            </ul>
          </li>
          <!-- <li class="treeview">
          <li><a href="<?php echo site_url('report') ?>"><i class="fa fa-book"></i> Report</a></li>
          <span class="pull-right-container">
          </span>
          </a>
          </li> -->
          <li class="treeview">
            <a href="#">
              <i class="fa fa-user"></i> <span>Administrator</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo site_url('usermanagement') ?>"><i class="fa fa-users"></i> User Management</a></li>
              <li><a href="#"><i class="fa fa-building"></i> Departemen</a></li>
              <li><a href="welcomepage.html"><i class="glyphicon glyphicon-log-out"></i>Logout</a></li>
            </ul>
          </li>
        </ul>
      </section>
      