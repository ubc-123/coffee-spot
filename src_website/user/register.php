<?php

require_once('shared/initialize.php');

if(is_post_request()) {
  $subject = [];
  $user['username'] = $_POST['username'] ?? '';
  $user['password'] = $_POST['password'] ?? '';
  $user['confirm_password'] = $_POST['confirm_password'] ?? '';

  $result = insert_user($user);
  if($result === true) {
    $new_id = mysqli_insert_id($db);
    $_SESSION['message'] = 'User created.';
    redirect_to(url_for('/login.php'));
  } else {
    $errors = $result;
  }

} else {
  // display the blank form
  $user = [];
  $user["username"] = '';
  $user['password'] = '';
  $user['confirm_password'] = '';
}

?>

<?php $page_title = 'Create User'; ?>
<?php include(SHARED_PATH . '/user_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/login.php'); ?>">&laquo; Back to Login Page</a>

  <div class="user new">
    <h1>Create User</h1>

    <?php echo display_errors($errors); ?>

    <form action="<?php echo url_for('/register.php'); ?>" method="post">
      <dl>
        <dt>Username</dt>
        <dd><input type="text" name="username" value="<?php echo h($user['username']); ?>" /></dd>
      </dl>

      <dl>
        <dt>Password</dt>
        <dd><input type="password" name="password" value="" /></dd>
      </dl>

      <dl>
        <dt>Confirm Password</dt>
        <dd><input type="password" name="confirm_password" value="" /></dd>
      </dl>
      <p>
        Note: Passwords should be at least 12 characters and include at least one uppercase letter, lowercase letter, number, and symbol.
      </p>
      <br />

      <div id="operations">
        <input type="submit" value="Create User" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/user_footer.php'); ?>
