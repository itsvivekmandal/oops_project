<?php

class UserModel extends Model {
  public function register(){
    if(isset($_POST['submit'])){
      $email = $_POST['email'];
      $password = $_POST['password'];
      $dob = $_POST['dob'];
      // echo 'Submitted';
      $this->query("INSERT INTO users (email, password, dob) VALUES (:email, :password, :dob)");

      $this->bind(':email', $email);
      $this->bind(':password', $password);
      $this->bind(':dob', $dob);

      if ($this->execute()) {
        header('Location: ' . ROOT_URL . '/user/login');
      }
    }
    return;
  }

  public function login(){

    if(isset($_POST['submit'])){
      $username = $_POST['username'];
      $password = $_POST['password'];

      $this->query("SELECT id,email, dob FROM users WHERE email=:email AND password=:password");
      $this->bind(':email', $username);
      $this->bind(':password', $password);
      $rows = $this->single();
      // print_r($rows);
      if (isset($rows['id'])) {
        $_SESSION['is_logged_in'] = true;
        $_SESSION['user_data'] = [
          'id' => $rows['id'],
          'email' => $rows['email'],
          'dob' => $rows['dob']
        ];
        header('Location: '.ROOT_URL.'/task');
      } else {
        // echo "Wrong username/password";
        Messages::set('Wrong username/password', 'error');
      }
    }
    return;
  }

}
