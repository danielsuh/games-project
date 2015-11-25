<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {


	public function index() {
		$this->load->view('admin_login');
	}

	public function validate_admin() {
		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));
		// $this->load->model('');
		// $admin = $this->MODEL->admin_login($email);
		if ($admin && $admin['password'] == $password) {	
			// $this->load->view('view_orders');	
			redirect('dashboard/orders');	
		}

		else {
			$this->session->set_flashdata('error', "Invalid email or password!");
			redirect('/');
		}
	}

	public function view_orders() {
		$this->load->view('orders_page');
	}

	public function view_products(){
		$this->load->view('products_page');
	}

	public function add_product() {
		$this->load->view('add_product');
	}

	public function show_order(){
		$this->load->view('show_order');
	}

	public function edit_product(){
		$this->load->view('edit_product');
	}

	public function log_off(){
		$this->session->unset_userdata('');
	}
}
