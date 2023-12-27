<?php

class Task extends Controller {
  protected function index(){
    if(!isset($_SESSION['is_logged_in'])) {
      header('Location:'.ROOT_URL.'/user/login');
    }

    $viewModel = new TaskModel();
    $this->returnView($viewModel->index(), true);
  }

  protected function create(){
    if (!isset($_SESSION['is_logged_in'])) {
      header('Location:' . ROOT_URL.'/user/login');
    }

    $viewModel = new TaskModel();
    $this->returnView($viewModel->create(), true);
  }
}