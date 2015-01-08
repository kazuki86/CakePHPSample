<?php

class HelloController extends AppController {

  function index() {
    $data = 'Hello World. Hello Shukeri';
    $this->set('data', $data);
  }

}
