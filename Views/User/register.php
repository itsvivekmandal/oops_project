<div class="row">
  <div class="col-md-6 mx-auto">
    <h1>Register User</h1>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
      <div class="form-group">
        <label for="email">Email</label>
        <input type="text" name="email" class="form-control">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="text" name="password" class="form-control">
      </div>
      <div class="form-group">
        <label for="dob">DOB</label>
        <input type="date" name="dob" class="form-control">
      </div>
      <button type="submit" name="submit">Submit</button>
    </form>
  </div>
</div>