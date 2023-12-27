<div class="text-center">
  <a class="btn btn-primary" href="<?= ROOT_URL; ?>/task/create">Create New Task</a>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">user_id</th>
        <th scope="col">task_name</th>
        <th scope="col">description</th>
        <th scope="col">start_date</th>
        <th scope="col">end_date</th>
        <th scope="col">task_status</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($viewModel as $item) : ?>
        <tr>
          <th><?= $item['user_id']; ?></th>
          <th><?= $item['task_name']; ?></th>
          <th><?= $item['description']; ?></th>
          <th><?= $item['start_date']; ?></th>
          <th><?= $item['end_date']; ?></th>
          <th><?= $item['task_status']; ?></th>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>