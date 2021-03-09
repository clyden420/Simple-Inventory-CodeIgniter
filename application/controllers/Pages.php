<?php

	class Pages extends CI_Controller{
		public function view($page = "home"){

				

				if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
					show_404();
				}
	
				$data['title'] = ucfirst($page);

				if($this->session->logged_in == true){

					$this->load->view('templates/header');
					$this->load->view('pages/'.$page, $data);
					$this->load->view('templates/modal');
					$this->load->view('templates/footer');

				}else {

					redirect(base_url().'login');
				}

		}


		public function alpha_dash_space($product_name) {
			if (!preg_match('/^[a-zA-Z\s]+$/', $product_name)) {
				$this->form_validation->set_message('alpha_dash_space', 'The %s field may only contain alpha characters & white spaces');
				return FALSE;
			} else {
				return TRUE;
			}
		}



		public function login(){

			$page = 'login';

			$this->form_validation->set_error_delimiters('<div class="alert alert-danger">','</div>');
			$this->form_validation->set_rules('email','email','required');
			$this->form_validation->set_rules('password','password','required');



			if($this->form_validation->run() == FALSE){

				
				if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
					show_404();
				}

				$data['title'] = "User Authentication";

				$this->load->view('templates/header');
				$this->load->view('pages/'.$page, $data);
				$this->load->view('templates/footer');

			}else{

				$user_id = $this->Product_model->login();

				if($user_id){

					$user_data = array(

						'firstname' => $user_id['first_name'],
						'lastname' => $user_id['last_name'],
						'fullname' => $user_id['first_name'].' '.$user_id['last_name'],
						'access' => $user_id['is_admin'],
						'logged_in' => true

					);

					$this->session->set_userdata($user_data);
					$this->session->set_flashdata('user_loggedin', 'You are now logged in as '.$this->session->fullname.'!');
					redirect(base_url());
				}else{

					$this->session->set_flashdata('failed_login', 'Login failed!');
					redirect(base_url().'login');
				}


			}

		}

		public function logout() {

			$this->session->unset_userdata('firstname');
			$this->session->unset_userdata('lastname');
			$this->session->unset_userdata('fullname');
			$this->session->unset_userdata('access');
			$this->session->unset_userdata('logged_in');

			$this->session->set_flashdata('user_loggedout', 'You are now logged out!');
			redirect(base_url().'login');
		}

		public function add() {

			$page = 'add';

			$this->form_validation->set_error_delimiters('<div class="alert alert-danger">','</div>');
			$this->form_validation->set_rules('product_name','product name','required|strtolower|ucfirst|ucwords|trim');
			$this->form_validation->set_rules('price','price','required|strtolower|ucfirst|ucwords|trim');
			$this->form_validation->set_rules('quantity','quantity','required|strtolower|ucfirst|ucwords|trim');
			$this->form_validation->set_rules('qr_code','QR code','required');

			if($this->form_validation->run() == FALSE){

				
				if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
					show_404();
				}

				$data['title'] = "Add Product";
				
				if($this->session->logged_in == true){
					$this->load->view('templates/header');
					$this->load->view('pages/'.$page, $data);
					$this->load->view('templates/footer');

				}else {

					echo "Access Denied!";
				}

			}else{

				$this->Product_model->add_product();
				$this->session->set_flashdata('product_added', 'New product was added!');
				redirect(base_url().'list');

			}

		}


		public function list() {

			$page = 'list';
			
			if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
				show_404();
			}


			$data['title'] = "List of Products";
			$data['fetch_data'] = $this->Product_model->view_product();

			if($this->session->logged_in == true){
			$this->load->view('templates/header');
			$this->load->view('pages/'.$page, $data); // $this->load->view('list', $data)
			$this->load->view('templates/modal');
			$this->load->view('templates/footer');
			}else {

				echo "Access Denied!";
			}
		}


		public function edit($id){

			$page = 'edit';

			$this->form_validation->set_error_delimiters('<div class="alert alert-danger">','</div>');
			$this->form_validation->set_rules('product_name','product name','required|strtolower|ucfirst|ucwords|trim');
			$this->form_validation->set_rules('price','price','required|strtolower|ucfirst|ucwords|trim');
			$this->form_validation->set_rules('quantity','quantity','required|strtolower|ucfirst|ucwords|trim');
			$this->form_validation->set_rules('qr_code','QR code','required');

			if($this->form_validation->run() == FALSE){

				
				if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
					show_404();
				}

				//$product_id = $this->uri->segment(2);
				$data['product_data'] = $this->Product_model->fetch_edit($id);
				$data['p_id'] = $data['product_data']['product_id'];
				$data['product_name'] = $data['product_data']['product_name'];
				$data['price'] = $data['product_data']['price'];
				$data['quantity'] = $data['product_data']['quantity'];
				$data['qr_code'] = $data['product_data']['qr_code'];
				$data['title'] = "Edit Product";
				
				$this->load->view('templates/header');
				$this->load->view('pages/'.$page, $data);
				//$this->load->view('templates/modal', $data);
				$this->load->view('templates/footer');

			}else{

				$this->Product_model->update_product();
				$this->session->set_flashdata('product_updated', 'Product was updated successfully!');
				redirect(base_url().'edit/'.$id);

			}

		}

		public function delete(){

			$this->Product_model->delete_product();
			$this->session->set_flashdata('product_deleted', 'Product was deleted successfully!');
			redirect(base_url().'list');
		}
		

}