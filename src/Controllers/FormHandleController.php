<?php
include __DIR__ . '../../Controller.php';

class FormHandleController extends Controller {
    public $name;

    // public function __construct($name) {
    //     $this->name = $name;
    // }

    public function index() {
        $this->render('forms/form1');
    }

    public function insert($name) {
        $this->name = $name;
        $this->render('forms/form1', ['name' => $this->name]);
    }
}