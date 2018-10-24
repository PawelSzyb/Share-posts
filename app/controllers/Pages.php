<?php
  class Pages extends Controller {
    public function __construct() {
    
    }
    public function index() {
      
      $data = 
        [
          'title' => "SharePosts",
          'description' => 'Simple social network build on the SzybajMVC PHP framework'
        ];
        
      $this->view("pages/index", $data);
    }
    public function about() {
      $data = 
      [
        'title' => "ABOUT US",
        'description' => 'App to share post with other users'
      ];
      $this->view("pages/about",$data);
    }
  }