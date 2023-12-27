<div class="container">
  <div class="row">
    <h2>Login</h2>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
      <label class="form-label" for="username">Username</label>
      <input class="form-control" type="text" name="username">
      <label class="form-label" for="password">Password</label>
      <input class="form-control" type="text" name="password">
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
    <?php Messages::display(); ?>

  </div>
</div>