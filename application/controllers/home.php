<?php  
    
   class home extends CI_Controller  
   {  
      var $g_var;
      public function __construct() {
         parent::__construct();  
         $this->load->model('product_model');
         $this->load->helper('url');
      }

      public function index()
      {
         // $g_var = $this->g_var;
         $data['h'] = $this->product_model->getAll(); 
         $data['something'] = "hello";
         //return the data in view  
         $this->load->view('index', $data);        
         // $something = $this->input->post('something');
      }

      public function ajaxx()
      {
         // $g_var = $this->g_var;
         $data['h'] = $this->product_model->getAll(); 
         //return the data in view  
         $this->load->view('ajaxsearch', $data);       
         // $something = $this->input->post('something');

         // defined('BASEPATH') OR exit('No direct script access allowed');
         
         // class Ajaxsearch extends CI_Controller {
         
         //  function index()
         //  {
         //   $this->load->view('ajaxsearch');
         //  }
         
         //  function fetch()
         //  {
         //   $output = '';
         //   $query = '';
         //   $this->load->model('ajaxsearch_model');
         //   if($this->input->post('query'))
         //   {
         //    $query = $this->input->post('query');
         //   }
         //   $data = $this->ajaxsearch_model->fetch_data($query);
         //   $output .= '
         //   <div class="table-responsive">
         //      <table class="table table-bordered table-striped">
         //       <tr>
         //        <th>Customer Name</th>
         //        <th>Address</th>
         //        <th>City</th>
         //        <th>Postal Code</th>
         //        <th>Country</th>
         //       </tr>
         //   ';
         //   if($data->num_rows() > 0)
         //   {
         //    foreach($data->result() as $row)
         //    {
         //     $output .= '
         //       <tr>
         //        <td>'.$row->CustomerName.'</td>
         //        <td>'.$row->Address.'</td>
         //        <td>'.$row->City.'</td>
         //        <td>'.$row->PostalCode.'</td>
         //        <td>'.$row->Country.'</td>
         //       </tr>
         //     ';
         //    }
         //   }
         //   else
         //   {
         //    $output .= '<tr>
         //        <td colspan="5">No Data Found</td>
         //       </tr>';
         //   }
         //   $output .= '</table>';
         //   echo $output;
         //  }
          
         // }
      }
      public function indexx()
      {
         $data['h'] = $this->product_model->selectItem(); 
         // $data['h'] = $this->product_model->where('id', $_GET['id']); 
         $data['id'] = $_GET['id'];
         //return the data in view  

         $this->load->view('menu-baru', $data);    
      }
   }
