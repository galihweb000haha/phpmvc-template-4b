<?php
class homeController extends Controller {
    public function index() {
        $data['data'] = $this->model('Home_model')->coba();
        $this->params($data);
        $this->view("cumpung");
    }
}