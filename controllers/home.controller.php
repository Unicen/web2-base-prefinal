<?php
require_once 'models/mascota.model.php';
require_once 'views/home.view.php';

class HomeController {

    private $model;
    private $view;

    public function __construct() {
        $this->model = new MascotaModel();
        $this->view = new HomeView();
    }

    public function test() {
        echo "test works!";
    }

}

