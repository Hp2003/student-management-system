<?php
include __DIR__ . '../../Controller.php';
include __DIR__ . '../../Models/User.php';

class UserController extends Controller{

    public function index($data = []) {
        $users = [
            new User('example1', 'example@test.com'),
            new User('example2', 'example2@test.com')
        ];
        
        $this->render('home', ['users' => $users]);
    }
    
}