<?php

class User extends Controller {
  protected function login(){
    if (isset($_SESSION['is_logged_in'])) {
      header('Location:' . ROOT_URL);
    }

    $viewModel = new UserModel();
    $this->returnView($viewModel->login(), false);
    
  }

  protected function register(){
    if (isset($_SESSION['is_logged_in'])) {
      header('Location:' . ROOT_URL);
    }

    $viewModel = new UserModel();
    $this->returnView($viewModel->register(), false);
  }

  protected function logout(){
    if (!isset($_SESSION['is_logged_in'])) {
      header('Location:' . ROOT_URL);
    }

    unset($_SESSION['is_logged_in']);
    unset($_SESSION['user_data']);
    session_destroy();
    echo 'user logged out';
    header('Location:'.ROOT_URL);
    // header('Location: ' . ROOT_URL . '/user/login');
  }

}