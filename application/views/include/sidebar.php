<?php $cur_tab = $this->uri->segment(2) == '' ? 'dashboard' : $this->uri->segment(2); ?>
<?php $sub_tab = $this->uri->segment(3) == '' ? 'dashboard' : $this->uri->segment(3); ?>

<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
  <!-- User Info -->
  <div class="sidebar-logo">
    <a class="sidebar-logo-link" href="<?= base_url('admin/my_notes'); ?>">
      <!--<img src="<?php echo base_url('public/images/brain_logo.png'); ?>"/> -->
      <div class="header_logo_text">Care Equity <br>Insights Tool</div>
    </a>
  </div>

  <!--
  <div class="user-info">
    <div class="image">
      <img src="<?= base_url() ?>public/images/user.png" width="48" height="48" alt="User" />
    </div>
    <div class="info-container">
      <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= strtoupper($this->session->userdata('name')); ?></div>
      <div class="email"><?= $this->session->userdata('email'); ?></div>
      <div class="btn-group user-helper-dropdown">
        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
        <ul class="dropdown-menu pull-right">
          <li id=""><a href="<?= base_url('admin/profile'); ?>"><i class="material-icons">person</i>Profile</a></li>
          <li role="seperator" class="divider"></li>
          <li id=""><a href="<?= base_url('auth/logout'); ?>"><i class="material-icons">input</i>Sign Out</a></li>
        </ul>
      </div>
    </div>
  </div>

  -->
  <!-- #User Info -->
  <!-- Menu -->
  <div class="menu">
    <ul class="list side_menu_bar_wrap">


      <li id="find_notes">
        <a href="<?= base_url('admin/find_notes'); ?>">
          <i class="material-icons">search</i>
          <span>FIND A NOTE</span>
        </a>
      </li>

      <li id="my_notes">
        <a href="<?= base_url('admin/my_notes'); ?>">
          <i class="material-icons">add</i>
          <span>YOUR NOTES</span>
        </a>
      </li>

      <li id="profile">
        <a href="<?= base_url('admin/profile'); ?>">
          <i class="material-icons">person</i>
          <span>PROFILE</span>
        </a>
      </li>

      <?php if ($this->session->userdata('is_admin_login')) : ?>
        <li id="admin_settings">
          <a href="<?= base_url('admin/admin_settings'); ?>">
            <i class="material-icons">settings</i>
            <span>ADMIN</span>
          </a>
        </li>
      <?php endif ?>

      <li id="log_out">
        <a href="<?= base_url('auth/logout'); ?>">
          <span>LOGOUT</span>
        </a>
      </li>


      <li id="templates">
        <a href="javascript:void(0);" class="menu-toggle">
          <i class="material-icons">email</i>
          <span>Email Templates</span>
        </a>
        <ul class="ml-menu">
          <li id="request">
            <a href="<?= base_url('admin/templates/request'); ?>">Request Form</a>
          </li>
          <li id="payment">
            <a href="<?= base_url('admin/templates/payment'); ?>">Online Payment Form</a>
          </li>
        </ul>
      </li>

      <li id="dashboard">
        <a href="<?= base_url('admin/dashboard'); ?>">
          <i class="material-icons">home</i>
          <span>Home</span>
        </a>
      </li>
      <li id="users">
        <a href="javascript:void(0);" class="menu-toggle">
          <i class="material-icons">person</i>
          <span>Users</span>
        </a>
        <ul class="ml-menu">
          <li id="add">
            <a href="<?= base_url('admin/users/add'); ?>">Add New User</a>
          </li>
          <li id="user_list">
            <a href="<?= base_url('admin/users'); ?>">Users List</a>
          </li>
          <li id="group">
            <a href="<?= base_url('admin/group'); ?>">User Group</a>
          </li>
          <li id="profile">
            <a href="<?= base_url('admin/profile'); ?>">User Profile</a>
          </li>
        </ul>
      </li>

      <li id="customers">
        <a href="<?= base_url('admin/customers'); ?>">
          <i class="material-icons">supervisor_account</i>
          <span>Customers</span>
        </a>
      </li>

      <li id="requests">
        <a href="<?= base_url('admin/requests'); ?>">
          <i class="material-icons">textsms</i>
          <span>Requests</span>
        </a>
      </li>

      <li id="payments">
        <a href="<?= base_url('admin/payments'); ?>">
          <i class="material-icons">monetization_on</i>
          <span>Online Payments</span>
        </a>
      </li>

      <li id="templates">
        <a href="javascript:void(0);" class="menu-toggle">
          <i class="material-icons">email</i>
          <span>Email Templates</span>
        </a>
        <ul class="ml-menu">
          <li id="request">
            <a href="<?= base_url('admin/templates/request'); ?>">Request Form</a>
          </li>
          <li id="payment">
            <a href="<?= base_url('admin/templates/payment'); ?>">Online Payment Form</a>
          </li>
        </ul>
      </li>

      <li id="activity">
        <a href="<?= base_url('admin/activity'); ?>">
          <i class="material-icons">flag</i>
          <span>Users Activity</span>
        </a>
      </li>

      <li id="general_settings">
        <a href="<?= base_url('admin/general_settings'); ?>">
          <i class="material-icons">settings</i>
          <span>Settings</span>
        </a>
      </li>


    </ul>
  </div>
  <!-- #Menu -->
  <!-- Footer -->
  <div class="legal">
    <div class="copyright">
      <a href="javascript:void(0);">
        <!--<?= $this->general_settings['copyright'] ?>-->Copyright © 2021 Care Equity
      </a>.
    </div>
  </div>
  <!-- #Footer -->
</aside>
<!-- #END# Left Sidebar -->

<script>
  $("#<?= $cur_tab; ?>").addClass('active');
  $("#<?= $sub_tab; ?>").addClass('active');
</script>