<?php
    class Pages extends Controller {
        public function __construct() {
        } 

        public function index() {
            $data = [
                'title' => 'Welcome'
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