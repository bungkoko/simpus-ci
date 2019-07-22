<?php defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Source by : Joko Purwanto
 */

 class Report extends CI_Controller
 {

   function __construct()
   {
     parent::__construct();

   }

   public function index(){
      $data['content']='report/report';
        $this->load->view('administrator/index', $data);
   }

 }


?>
