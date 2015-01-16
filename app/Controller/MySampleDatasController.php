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
    //echo '<pre>';
    //var_dump($this->data);
    //var_dump($this->request);
    //echo '</pre>';
    $this->set('data',$data);

  }

  public function add() {
    $this->layout = 'sample';
    $this->set("header_for_layout",
      "Sample Application");
    $this->set("footer_for_layout",
      "copyright by aaa.");

    if ($this->request->is('post')) {
      $this->MySampleData->save($this->request->data);
    }
  }

  public function edit($id) {
    $this->layout = 'sample';
    $this->set("header_for_layout",
      "Sample Application");
    $this->set("footer_for_layout",
      "copyright by aaa.");

    if ($this->request->is('post')|| $this->request->is('put')) {
      $this->MySampleData->save($this->request->data);
      $this->redirect(array('action' => 'index'));
    } else {
      $this->request->data = $this->MySampleData->read(null, $id);
    }

    //echo '<pre>';
    //var_dump($this->data);
    //var_dump($this->request);
    //echo '</pre>';
  }

  public function del($id) {
    $this->layout = 'sample';
    $this->set("header_for_layout",
      "Sample Application");
    $this->set("footer_for_layout",
      "copyright by aaa.");

    $this->MySampleData->id = $id;
    if ($this->request->is('post')|| $this->request->is('put')) {
      $this->MySampleData->delete($this->request->data('MySampleData.id'));
      $this->redirect(array('action' => 'index'));
    } else {
      $this->request->data = $this->MySampleData->read(null, $id);
    }
  }
}
