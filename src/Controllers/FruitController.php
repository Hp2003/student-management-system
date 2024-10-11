<?php 
include __DIR__ . '../../Controller.php';
include __DIR__ . '../../Models/Fruit.php';

class FruitController extends Controller {
    public function index($data = []){
        
        $fruits = [
            new Fruit('apple', 12, true),
            new Fruit('banana', 10, true),
            new Fruit('orange', 5, false)
        ];
        $this->render('fruit',['fruits' => $fruits] );
        
    }
}