<?php

class Home extends Controller {
  protected function index(){
    $viewModel = new HomeModel();
    // print_r($viewModel->index());
    $this->returnView($viewModel->index(), true);
  }
}