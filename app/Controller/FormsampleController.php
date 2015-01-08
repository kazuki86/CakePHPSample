<?php
App::uses('AppController', 'Controller');
App::uses('Sanitize', 'Utility');

class FormsampleController extends AppController {

  public function index() {
    $this->modelClass = null;
    if ($this->request->data){
      $result = "[result]";
      $result .= "<br>text1: " . Sanitize::
        stripAll($this->request->data['text1']);
      $result .= "<br>check1: " . 
        $this->request->data['check1'];
      $result .= "<br>radio1: " . 
        $this->request->data['radio1'];
      $result .= "<br>select1: " . 
        $this->request->data['select1'];
    } else {
      $result = "no data.";
    }
    $this->set("result", $result);
  }

  /*
  function form() {
    $text1 = $this -> data["text1"];
    $check1 = isset($this -> data["check1"]) ? 
      "On" : "Off";
    $radio1 = $this -> data["radio1"];
    $this -> set("text1", Sanitize::clean($text1));
    $this -> set("check1", $check1);
    $this -> set("radio1", $radio1);
  }
   */

}
