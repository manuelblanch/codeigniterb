<?php
class News extends CI_Controller {

   public function __construct()
   {
      parent::__construct();
      $this->load->model('news_model');
   }

   public function create()
   {
      $this->news_model->set_news();
      echo 'insertado correctmanete';
   }
