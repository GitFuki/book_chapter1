<?php
App::uses('AppController','Controller');

class ProductsController extends  AppController{
    public $helpers = array('Html', 'Form');
    public $components = array('Session', 'Paginator');
    public $pagenate = array(
      'limit' =>10
    );
    public function index(){
        $this->Product->recursive = -1;
        $this->set('products', $this->pagenate());
    }
}