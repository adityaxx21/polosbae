<?php
class product_model extends CI_Model
{
    function __construct()
    {
        // Call the Model constructor  
        parent::__construct();
        $this->load->database();
    }
    //we will use the select function  
    public function getAll()
    {
        //data is retrive from this query  
        $query = $this->db->get('data_ty')->result();
        return $query;
    }

    public function selectItem()
    {
        //data is retrive from this query  
        $query = $this->db->get_where('data_ty', array('id' => $_GET['id']))->result();
        return $query;
    }

    // public function ajaxModel()
    // {

    //     class Ajaxsearch_model extends CI_Model
    //     {
    //         function fetch_data($query)
    //         {
    //             $this->db->select("*");
    //             $this->db->from("data_ty");
    //             if ($query != '') {
    //                 $this->db->like('Name', $query);
    //             }
    //             $this->db->order_by('id', 'DESC');
    //             return $this->db->get();
    //         }
    //     }
    // }
}
