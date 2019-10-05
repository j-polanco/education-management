<?php
/*getting active page name*/
$activePage = basename($_SERVER['PHP_SELF'], ".php");
?>
<div class="sidebar" data-color="orange">
    <div class="logo" style="padding:unset;">
      <a href="settings.php" class="simple-text logo-mini" style="width:100px;padding-left:10px;">
          <img src="../assets/img/logo.png"/>
        </a>
    </div>
    <div class="sidebar-wrapper">
      <ul class="nav">
        <li class="<?=($activePage=='dashboard')? 'active': ''; ?>">
          <a href="./dashboard.php">
            <i class="now-ui-icons shopping_shop"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="<?=($activePage=='addData')? 'active': ''; ?>">
          <a href="./addData.php">
            <i class="now-ui-icons business_badge"></i>
            <p>Add Class / Student</p>
          </a>
        </li>
        <li class="<?=($activePage=='statistics')? 'active': ''; ?>">
          <a href="./statistics.php">
            <i class="now-ui-icons business_chart-bar-32"></i>
            <p>Statistics</p>
          </a>
        </li>
        <li class="<?=($activePage=='logout')? 'active': ''; ?>">
          <a href="./logout.php">
            <i class="now-ui-icons media-1_button-power"></i>
            <p>Logout</p>
          </a>
        </li>
      </ul>
    </div>
  </div>