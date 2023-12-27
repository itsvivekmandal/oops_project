<?php

class TaskModel extends Model{
  public function index(){
    $this->query("SELECT * FROM tasks WHERE user_id=:id");
    $this->bind(':id', $_SESSION['user_data']['id']);
    $rows = $this->resultSet();
    return $rows;
  }

  public function create(){
    if(isset($_POST['submit'])){
      $taskName = $_POST['task_name'];
      $description = $_POST['description'];
      $startDate = $_POST['start_date'];
      $endDate = $_POST['end_date'];
      $status = $_POST['status'];
      // echo 'Submitted';
      $this->query("INSERT INTO tasks (user_id, task_name, description, start_date, end_date, task_status) VALUES (:userId, :taskName, :description, :start_date, :end_date, :task_status)");

      $this->bind(':userId', 200);
      $this->bind(':taskName', $taskName);
      $this->bind(':description', $description);
      $this->bind(':start_date', $startDate);
      $this->bind(':end_date', $endDate);
      $this->bind(':task_status', $status);
      
      if($this->execute()){
        header('Location: '.ROOT_URL.'/task');
      }
      return;
    }
  }
}
