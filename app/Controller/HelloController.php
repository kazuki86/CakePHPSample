<?php

class HelloController extends AppController {

  function index() {
    $this->modelClass = null;
    $this->layout = "sample";
    $this->set("header_for_layout","Sample Application");
    $this->set("footer_for_layout",
              "copyright by SYODA-Tuyano. 2011.");
    $this->set("msg", "Welcome to my layout!");
  }

}
