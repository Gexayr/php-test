<?php

include_once('dataModel.php');
class ViewController {

    protected $model;

    function __construct() {
        $this->model = new dataModel();
    }

    public function submitForm($data) {
        $id = $this->model->insert($data);
        return $this->model->get($id);
    }

    public function renderForm() {
        ob_start();
        include('form_view.php');
        $output = ob_get_contents();
        ob_end_clean();
        return $output;
    }
}