<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_adm extends CI_Model
{
	public function insert_akn($data)
	{
		$this->db->insert('tbl_akun', $data);
	}

	public function get_akun()
	{
		return $this->db->get('tbl_akun')->result_array();
	}

	public function get_akun_by_id($id)
	{
		$this->db->where('user', $id);
		return $this->db->get('tbl_akun')->row_array();
	}

	public function update_akn($id, $data)
	{
		$this->db->where('user', $id);
		$this->db->update('tbl_akun', $data);
	}

	public function delete_akn($id)
	{
		$this->db->where('user', $id);
		$this->db->delete('tbl_akun');
	}

	// public function get_konten()
	// {
	// 	return $this->db->get('adm')->result_array();
	// }

	// public function get_by_id($id)
    // {
    //     return $this->db->get_where('adm', ['id' => $id])->row_array();
    // }

    // public function update_konten($id, $data)
    // {
    //     $this->db->where('id', $id);
    //     return $this->db->update('adm', $data);
    // }

public function get_items_by_filter($filter){
        // Build your query based on the filter parameter.
        $this->db->where('content_type', $filter);
        $this->db->order_by('display_order', 'ASC');
        return $this->db->get('tbl_home')->result();
    }

public function get_all_contents() {
        $this->db->order_by('display_order', 'ASC');
        return $this->db->get('tbl_home')->result_array();
}
    
public function get_filtered_contents($filter) {
    $this->db->order_by('display_order', 'ASC');
    
    // Apply filter based on content type
    if ($filter === 'text') {
        // For timeline content
        $this->db->where('content_type', 'text');
    } else if ($filter === 'gallery') {
        // For gallery content
        $this->db->where('content_type', 'gallery');
    } else if ($filter === 'timeline') {
        // For text-only content - assuming there's a specific flag or type for this
        // You might need to adjust this condition based on your database structure
        $this->db->where('content_type', 'timeline');
    }
    
    return $this->db->get('tbl_home')->result_array();
}
public function get_max_display_order($content_type) {
    $this->db->select_max('display_order');
    $this->db->where('content_type', $content_type);
    $query = $this->db->get('tbl_home');
    $result = $query->row_array();
    
    // If no records found, return 0 so the first item will have order 1
    return ($result['display_order'] ?? 0);
}
    
public function get_content($id) {
        $this->db->where('id_home', $id);
        return $this->db->get('tbl_home')->row_array();
}
    
public function add_content($data) {
        $this->db->insert('tbl_home', $data);
        return $this->db->insert_id();
}
    
public function update_content($id, $data) {
        $this->db->where('id_home', $id);
        return $this->db->update('tbl_home', $data);
}
    
public function delete_content($id) {
        $this->db->where('id_home', $id);
        return $this->db->delete('tbl_home');
}
    
public function update_order($id, $order) {
        $this->db->where('id_home', $id);
	return $this->db->update('tbl_home', ['display_order' => $order]);
}

}
