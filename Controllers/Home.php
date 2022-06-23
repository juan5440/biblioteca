<?php
class Home extends Controller{
    public function __construct(){
        parent::__construct();
    }
    public function index($parametro){
        $data = $this->model->prueba($parametro);
        $this->views->getView('home', 'index', $data);
        }
}
?>