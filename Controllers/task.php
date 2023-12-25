<?php

class Task extends Controller {
  public function index(){
    $taskModel = new TaskModel();
    $this->returnView($taskModel->index(), true);
  }
}