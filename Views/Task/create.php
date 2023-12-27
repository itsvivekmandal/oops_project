<div class="row">
  <div class="col-md-6 mx-auto">
    <h1>Create Task</h1>
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
      <div class="form-group">
        <label for="task_name">Task Name</label>
        <input type="text" name="task_name" class="form-control">
      </div>
      <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" id="" cols="10" rows="4" class="form-control"></textarea>
      </div>
      <div class="form-group">
        <label for="start_date">Start Date</label>
        <input type="date" name="start_date" class="form-control">
      </div>
      <div class="form-group">
        <label for="end_date">End Date</label>
        <input type="date" name="end_date" class="form-control">
      </div>
      <div class="form-group">
        <label for="status">Status</label>
        <input type="text" name="status" class="form-control">
      </div>
      <button type="submit" name="submit">Submit</button>
    </form>
  </div>
</div>