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
    $list = $this->MySampleData->find('list');
    $this->set('datas',$datas);
    $this->set('list',$list);
  }

  function find() {
    $this->layout = "sample";
    $this->set("header_for_layout",
      "Sample Application");
    $this->set("footer_for_layout",
      "copyright by SYODA-Tuyano. 2011.");

    if (isset($this->data['id'])){
      $id = $this->data['id'];
      $status = array(
        'conditions' => 
        array('MySampleData.id' => $id)
      );
      $data = $this->MySampleData->find('first', $status);
    } else {
      $data = null;
    }
    $this->set('data',$data);

  }

}
