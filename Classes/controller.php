<?php

abstract class Controller {
  protected $request;
  protected $action;

  public function __construct($action, $request){
    $this->request = $request;
    $this->action = $action;
  }

  public function executeAction(){
    return $this->{$this->action}();
    // print_r($this->action);
  }

  protected function returnView($viewModel, $fullView){
    $view = 'Views/'.get_class($this).'/'.$this->action.'.php';
    // print_r($view);
    if($fullView){
      require 'Views/main.php';
    } else {
      require $view;
    }
  }

}