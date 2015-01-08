<?php
App::uses('AppController', 'Controller');
App::uses('Sanitize', 'Utility');

class FormsampleController extends AppController {

  function index() {
  }

  function form() {
    $text1 = $this -> data["text1"];
    $check1 = isset($this -> data["check1"]) ? 
      "On" : "Off";
    $radio1 = $this -> data["radio1"];
    $this -> set("text1", Sanitize::clean($text1));
    $this -> set("check1", $check1);
    $this -> set("radio1", $radio1);}

}
