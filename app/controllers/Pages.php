<?php
    class Pages extends Controller {
        public function __construct() {
            // loads the model 
            $this->postModel = $this->model('Post');
        } 

        public function index() {
            // calls model function get posts & set to a variable
            $posts = $this->postModel->getPosts();

            $data = [
                'title' => 'Welcome',
                'posts' => $posts
            ];

            // pass variable from above to view
            $this->view('pages/index', $data );
        }

        public function about() {
            $data = [
                'title' => 'About'
            ];

            $this->view('pages/about', $data);
        }
    }