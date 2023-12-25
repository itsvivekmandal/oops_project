<?php

class HomeModel extends Model{
  public function index(){
    $this->query("SELECT * FROM users");
    $rows = $this->resultSet();
    return $rows;
  }
}