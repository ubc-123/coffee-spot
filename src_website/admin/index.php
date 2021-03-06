<?php require_once('shared/initialize.php'); ?>

<?php require_login(); ?>

<?php $page_title = 'Admin Menu'; ?>
<?php include(SHARED_PATH . '/admin_header.php'); ?>

<div id="content">
  <div id="main-menu">
    <h2>Main Menu</h2>
    <ul>
      <li><a href="<?php echo url_for('/coffees/index.php'); ?>">Coffees</a></li> <br />
      <li><a href="<?php echo url_for('/admins/index.php'); ?>">Admins</a></li> <br />
      <li><a href="<?php echo url_for('/employees/index.php'); ?>">Employees</a></li> <br />
      <li><a href="<?php echo url_for('/spot_price/index.php'); ?>">Spot Prices</a></li>
    </ul>
  </div>
</div>

<?php include(SHARED_PATH . '/admin_footer.php'); ?>
