<?php

class User extends Controller {

  public function login(){
    $userModel = new UserModel();
    $this->returnView($userModel->index(), false);
  }

  public function register(){
      $userModel = new UserModel();
      $this->returnView($userModel->index(), false);
  }
}