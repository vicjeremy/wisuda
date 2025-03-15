<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Adm extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		check_not_login();

		// Cek apakah pengguna sudah login dan waktu terakhir aktif
		$last_activity = $this->session->userdata('last_activity');
		$current_time = time(); // Ambil waktu saat ini

		// Jika waktu terakhir lebih dari 30 menit yang lalu, logout otomatis
		if ($last_activity && ($current_time - $last_activity) > 1800) {
			$this->session->unset_userdata('id');
			$params = array('user', 'level', 'last_activity'); // Menghapus last_activity juga
        	$this->session->unset_userdata($params);
			redirect('login');
		}

		// Perbarui waktu terakhir aktivitas jika pengguna masih aktif
		$this->session->set_userdata('last_activity', $current_time);
	}

	// Method untuk menampilkan halaman utama admin
	public function index()
	{
		$this->load->view('adm/home_adm');
		$this->load->view('tpl/script');
	}
	public function view_adm()
	{
		$data['status'] = $this->M_adm->get_akun(); // Ambil data status
		// $this->load->view('tpl/v_head');
		// $this->load->view('tpl/v_menu');
		$this->load->view('adm/v_adm', $data); // Kirim data ke view
		$this->load->view('tpl/script');
	}

	// Method untuk menampilkan halaman akun
	public function view_akn()
	{
		$data['status'] = $this->M_adm->get_akun();
		// $this->load->view('tpl/v_head');
		// $this->load->view('tpl/v_menu');
		$this->load->view('adm/v_akn', $data);
		$this->load->view('tpl/script');

	}

	// Method untuk menampilkan halaman tambah akun
	public function add_akn()
	{
		$this->load->view('tpl/v_head');
		$this->load->view('tpl/v_menu');
		$this->load->view('adm/add_akn');
	}

	// Method untuk menyimpan data akun baru
	public function save_akn()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$level = $this->input->post('level');
		$data = array(
			'user' => $username,
			'pass' => md5($password),
			'level' => $level
		);

		$this->M_adm->insert_akn($data);
		$this->session->set_flashdata('message', 'Data berhasil ditambahkan');
		redirect('adm');
	}

	// Method untuk menampilkan halaman edit akun
	public function edit_akn($id)
	{
		$data['status'] = $this->M_adm->get_akun_by_id($id);
		$this->load->view('tpl/v_head');
		$this->load->view('tpl/v_menu');
		$this->load->view('adm/edit_akn', $data);
	}

	// Method untuk memperbarui data akun
	public function update_akn()
	{
		$id = $this->input->post('user');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$level = $this->input->post('level');

		$data = array(
			'user' => $username,
			'pass' => $password,
			'level' => $level
		);

		$this->M_adm->update_akn($id, $data);
		redirect('adm/view_akn');
	}

	// Method untuk menghapus data akun
	public function delete_akn($id)
	{
		$this->M_adm->delete_akn($id);
		$this->session->set_flashdata('message', 'Data berhasil dihapus');
		redirect('adm');
	}

	//Method untuk halaman manajemen konten
	public function view_kntn()
	{
		$data['contents'] = $this->M_adm->get_all_contents();
		$this->load->view('adm/v_kntn', $data);
	}


	// KONTEN HOMEPAGE
// 	public function update_konten()
// {
//     $id = $this->input->post('id');
//     $Path = FCPATH . "assets/uploads/";

//     if (!is_dir($Path)) {
//         mkdir($Path, 0777, true);
//     }

//     $imagePaths = [];

//     for ($i = 1; $i <= 4; $i++) {
//         $fileInput = "foto$i";
//         $hiddenInput = "hidden_foto$i"; // Ambil foto lama

//         if (!empty($_FILES[$fileInput]["tmp_name"])) {
//             // Jika ada file baru yang diupload, simpan dan overwrite
//             $fileTmpPath = $_FILES[$fileInput]["tmp_name"];
//             $fileName = $id . "_Gambar$i.png";
//             $destPath = $Path . $fileName;

//             if (move_uploaded_file($fileTmpPath, $destPath)) {
//                 $imagePaths[$fileInput] = base_url("assets/uploads/" . $fileName);
//             } else {
//                 $imagePaths[$fileInput] = null;
//             }
//         } else {
//             // Jika tidak ada file baru, gunakan foto lama dari input hidden
//             $imagePaths[$fileInput] = $this->input->post($hiddenInput);
//         }
//     }

//     $data = [
//         'time1' => $this->input->post('time1'),
//         'sts1' => $this->input->post('sts1'),
//         'time2' => $this->input->post('time2'),
//         'sts2' => $this->input->post('sts2'),
//         'time3' => $this->input->post('time3'),
//         'sts3' => $this->input->post('sts3'),
//         'time4' => $this->input->post('time4'),
//         'sts4' => $this->input->post('sts4'),
//         'foto1' => $imagePaths['foto1'],
//         'foto2' => $imagePaths['foto2'],
//         'foto3' => $imagePaths['foto3'],
//         'foto4' => $imagePaths['foto4'],
//     ];

//     $this->M_adm->update_konten($id, $data);
//     $this->session->set_flashdata('success', 'Data berhasil diperbarui!');
//     redirect(base_url('adm/view_kntn'));
// }

public function get_order_items(){
		// Get the filter parameter using CodeIgniter input library.
		$filter = $this->input->get('filter');

		// Get items based on the filter. Make sure your model method "get_items_by_filter" exists.
		$items = $this->M_adm->get_items_by_filter($filter);

		// Output HTML list items for the order modal.
		foreach($items as $item){
			$id    = is_object($item) ? $item->id_home : $item['id_home'];
			$title = is_object($item) ? $item->title : $item['title'];
			$image = is_object($item) ? $item->image_path : $item['image_path'];
			$text_content = is_object($item) ? $item->text_content : $item['text_content'];
			$start_date = is_object($item) ? $item->start_date : $item['start_date'];
			$end_date = is_object($item) ? $item->end_date : $item['end_date'];
			if ($filter == 'gallery') {
				echo '<li class="list-group-item" data-id="'. $id .'">';
				echo '<i class="fas fa-grip-lines me-2"></i> ' . $title;
				echo '<br><img src="' . $image . '" width="200">';
				echo '</li>';
			}else if ($filter == 'text') {
				echo '<li class="list-group-item" data-id="'. $id .'">';
				echo '<i class="fas fa-grip-lines me-2"></i> ' . $title;
				echo '<br><p>' . nl2br(substr($text_content, 0, 50)) . '</p>';
				echo '</li>';
			}else if ($filter == 'timeline') {
				echo '<li class="list-group-item" data-id="'. $id .'">';
				echo '<i class="fas fa-grip-lines me-2"></i> ' . $title;
				echo '<br><p>' . $start_date . ' - ' . $end_date . '</p>';
				echo '</li>';
			}
		}
}
public function filter_content(){
    try {
        $filter = $this->input->get('filter');
        
        // Fixed: Changed get_filtered_content to get_filtered_contents to match the model method name
        $data['contents'] = $this->M_adm->get_filtered_contents($filter);
        
        // Check if any contents were found
        if (empty($data['contents'])) {
            // Return a "no data found" message with valid HTML structure
            $this->output->set_content_type('text/html');
            echo '<div class="alert alert-info">No data found for the selected filter.</div>';
        } else {
            // Return the table view with data
            $this->output->set_content_type('text/html');
            $this->load->view('adm/tbl_kntn', $data);
        }
    } catch (Exception $e) {
        // Log the error for debugging
        log_message('error', 'Filter content error: ' . $e->getMessage());
        
        // Return a user-friendly message instead of an error
        $this->output->set_content_type('text/html');
        echo '<div class="alert alert-info">No data found for the selected filter.</div>';
    }
}

public function create() {
	if ($this->input->post()) {
		$this->form_validation->set_rules('title', 'Title', 'required|min_length[3]');
		$this->form_validation->set_rules('content_type', 'Content Type', 'required');
			
		$image_path = null;
		
		if (!empty($_FILES['gallery']['name'])) {
			$upload_path = 'assets/uploads/';
			$full_path = FCPATH . $upload_path;
			
			if (!is_dir($full_path)) {
				if (!mkdir($full_path, 0777, true)) {
					$this->session->set_flashdata('message', 'Failed to create upload directory');
					redirect('adm/view_kntn');
					return;
				}
			}
				
			$fileExt = pathinfo($_FILES['gallery']['name'], PATHINFO_EXTENSION);
			$fileName = uniqid() . '.' . $fileExt;
			$destPath = $full_path . $fileName;

			if (!move_uploaded_file($_FILES['gallery']['tmp_name'], $destPath)) {
				$this->session->set_flashdata('message', 'Failed to upload file');
				redirect('adm/view_kntn');
				return;
			}
			
			$image_path = base_url($upload_path . $fileName);
		}
			
		$content_type = $this->input->post('content_type');
		$max_order = $this->M_adm->get_max_display_order($content_type);
		
		$content_data = [
			'title' => $this->input->post('title'),
			'content_type' => $content_type,
			'image_path' => $image_path,
			'text_content' => $this->input->post('text_content'),
			'start_date' => $this->input->post('start_date'),
			'end_date' => $this->input->post('end_date'),
			'display_order' => $max_order + 1,
			'is_active' => $this->input->post('is_active') ? 1 : 0,
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
		];
				
		$this->M_adm->add_content($content_data);
		$this->session->set_flashdata('message', 'Content added successfully');
		redirect('adm/view_kntn');
		return;
	}
	
	$data['title'] = 'Add New Content';
	$this->load->view('adm/v_kntn', $data);
}
    
public function edit() {
	// if ($id === null) {
    //     $this->session->set_flashdata('error', 'Content ID is required');
    //     redirect('adm/view_kntn');
    //     return;
    // }

	$id = $this->input->post('id_home');
	
	$data['content'] = $this->M_adm->get_content($id);
	
	if (!$data['content']) {
		show_404();
	}
	
	$data['title'] = 'Edit Content: ' . $data['content']['title'];
	
	if ($this->input->post()) {
		$this->form_validation->set_rules('title', 'Title', 'required|min_length[3]');
		$this->form_validation->set_rules('content_type', 'Content Type', 'required');

		if ($this->form_validation->run()) {
			// Handle image upload
			$image_path = $data['content']['image_path']; // Keep existing by default
			
			if (!empty($_FILES['gallery']['name'])) {
				$upload_path = 'assets/uploads/';
				$full_path = FCPATH . $upload_path;
				
				if (!is_dir($full_path)) {
					mkdir($full_path, 0777, true);
				}
				
				$fileExt = pathinfo($_FILES['gallery']['name'], PATHINFO_EXTENSION);
				$fileName = uniqid() . '.' . $fileExt;
				$destPath = $full_path . $fileName;
				
				if (move_uploaded_file($_FILES['gallery']['tmp_name'], $destPath)) {
					// Upload successful, update image path and delete old image
					$image_path = base_url($upload_path . $fileName);
					if ($data['content']['image_path'] && file_exists('./' . $data['content']['image_path'])) {
						unlink('./' . $data['content']['image_path']);
					}
				} else {
					$this->session->set_flashdata('error', 'Failed to upload image');
					redirect('adm/view_kntn');
				}
			}
			
			$content_data = [
				'title' => $this->input->post('title'),
				'content_type' => $this->input->post('content_type'),
				'image_path' => $image_path,
				'text_content' => $this->input->post('text_content'),
				'start_date' => $this->input->post('start_date'),
				'end_date' => $this->input->post('end_date'),
				'display_order' => $data['content']['display_order'],
				'is_active' => $this->input->post('is_active') ? 1 : 0,
				'updated_at' => date('Y-m-d H:i:s')
			];
			
			$this->M_adm->update_content($id, $content_data);
			$this->session->set_flashdata('success', 'Content updated successfully');
			redirect('adm/view_kntn');
		}
	}
	
	$this->load->view('adm/v_kntn', $data);
}

public function delete($id = null) {
	if ($id === null) {
		$this->session->set_flashdata('error', 'Content ID is required');
		redirect('adm/view_kntn');
		return;
	}
	
	// Get content to delete the image file
	$content = $this->M_adm->get_content($id);
	
	if ($content && !empty($content['image_path'])) {
		$image_path = str_replace(base_url(), FCPATH, $content['image_path']);
		if (file_exists($image_path)) {
			unlink($image_path);
		}
	}
	
	$this->M_adm->delete_content($id);
	$this->session->set_flashdata('success', 'Content deleted successfully');
	redirect('adm/view_kntn');
}
    
public function update_order() {
    if ($this->input->post()) {
        // Get the JSON string sent from v_kntn view
        $orderStr = $this->input->post('order');
        // Decode JSON into PHP array
        $orderArray = json_decode($orderStr, true);
        if (is_array($orderArray)) {
            foreach ($orderArray as $item) {
                if (isset($item['id_home'], $item['display_order'])) {
                    // Update order via model
                    $this->M_adm->update_order($item['id_home'], $item['display_order']);
                }
            }
            echo json_encode(['status' => 'success']);
            return;
        }
    }
    echo json_encode(['status' => 'error']);
}
}
