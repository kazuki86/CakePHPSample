<?php
App::uses('AppController', 'Controller');
 
class MySampleDatasController extends AppController {
//    public $scaffold;
  function index(){
    // レイアウト関係
    $this->layout = "sample";
    $this->set("header_for_layout","Sample Application");
    $this->set("footer_for_layout",
      "copyright by SYODA-Tuyano. 2011.");
    // 以下がデータベース関係
    $datas = $this->MySampleData->find('all');
    $this->set('datas',$datas);
  }
}
