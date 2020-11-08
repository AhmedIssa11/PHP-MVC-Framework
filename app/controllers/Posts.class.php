<?php 

require_once '../app/libraries/Controller.class.php';

class Posts extends Controller{

    public function __construct(){

        $this->postModel = $this->model('Post'); // new post
    }

    public function index(){

        //echo 'posts/index';
    }

    public function edit(){

        $data = [
            'title' => 'Posts / edit'
        ];

        $this->view('posts/edit', $data);
    }
}