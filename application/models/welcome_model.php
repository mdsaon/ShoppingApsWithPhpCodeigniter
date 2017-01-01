<?php

class Welcome_Model extends CI_Model {

    public function select_all_published_category() {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('publication_status', 1);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_all_product() {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function display_product_by_category($category_id) {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('category_id', $category_id);
        $this->db->where('publication_status', 1);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

      public function display_product_details_by_product_id($product_id) {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('product_id', $product_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;     
    }
	 public function save_product_info($data) {
        $this->db->insert('tbl_product', $data);
    }

}

?>
