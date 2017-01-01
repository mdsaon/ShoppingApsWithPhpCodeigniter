<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('welcome_model', 'w_model', true);
      
    }

    public function index() {
        $data = array();
        $data['title'] = "Home";
		$data['all_product'] = $this->w_model->select_all_product();
        $data['all_category'] = $this->w_model->select_all_published_category();
        $data['maincontent'] = $this->load->view('home_content', $data, true);
        $this->load->view('master', $data);
    }
        public function add_product() {
        $data = array();
        $data['title'] = "Product by category";
        $data['all_category'] = $this->w_model->select_all_published_category();
        //$data['all_product'] = $this->w_model->display_product_by_category($category_id);
        $data['maincontent'] = $this->load->view('add_product_form', $data, true);
        $this->load->view('master', $data);
    }
	public function save_product() {
        $data = array();
        /*-----------Upload Start---------------*/
        
        $config['upload_path'] = 'images/product_images/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']	= '10000';
        $config['max_width']  = '1024';
        $config['max_height']  = '768';
        $error=array();
        $fdata=array();
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('product_image'))
        {
                $error = $this->upload->display_errors();
                //echo '<pre>';
                //print_r($error);
                
        }
        else
        {
                $fdata =  $this->upload->data();
                //echo '<pre>';
                //print_r($fdata);
                $data['product_image']=  base_url().$config['upload_path'].$fdata['file_name'];
                //echo $data['product_image'];
                
        }
        
        //exit();
        $data['product_name'] = $this->input->post('product_name', true);
        $data['category_id'] = $this->input->post('category_id', true);
        $data['product_price'] = $this->input->post('product_price', true);
        $data['product_quantity'] = $this->input->post('product_quantity', true);
        $data['product_description'] = $this->input->post('product_description', true);
        
        $data['publication_status'] = $this->input->post('publication_status', true);
        $this->w_model->save_product_info($data);
        $sdata = array();
        $sdata['message'] = "Saved product Successfully";
        $this->session->set_userdata($sdata);
        redirect('welcome/add_product');
    }

    public function product_by_category($category_id) {
        $data = array();
        $data['title'] = "Product by category";
        $data['all_category'] = $this->w_model->select_all_published_category();
        $data['all_product'] = $this->w_model->display_product_by_category($category_id);
        $data['maincontent'] = $this->load->view('home_content', $data, true);
        $this->load->view('master', $data);
    }
    public function product_details($product_id) {
        $data = array();
        $data['title'] = "Product by category";
        $data['all_category'] = $this->w_model->select_all_published_category();
        $data['product_details'] = $this->w_model->display_product_details_by_product_id($product_id);
        $data['maincontent'] = $this->load->view('product_details', $data, true);
        $this->load->view('master', $data);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */