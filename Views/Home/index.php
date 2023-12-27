<div class="text-center">
  <h1>Namaskaram Users</h1>
  <h2>This is a Task Management System</h2>
  <a class="btn btn-primary" href="<?= ROOT_URL;?>/task">Task</a>
</div>

<?php 
  print_r($_SESSION);
?>
<?php foreach($viewModel as $item): ?>
  <div>
    <h3><?= "id - ".$item['id'];?></h3>
    <h3><?= "email - ".$item['email'];?></h3>
    <h3><?= "dob - ".$item['dob'];?></h3>
    <h3><?= "created_at - ".$item['created_at'];?></h3>
  </div>
<?php endforeach; ?>
