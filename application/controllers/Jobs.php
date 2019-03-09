<?php
	class Jobs extends CI_Controller
	{
		public function index()
		{
			$this->load->view('templates/header');
			$this->load->view('pages/jobs');
			$this->load->view('templates/footer');
		}

		public function form_validation(){
			$this->load->library('form_validation');
			$this->form_validation->set_rules("nameinput","First Name",'required|alpha');
			$this->form_validation->set_rules("emailinput","Email",'required|valid_email');	
			$this->form_validation->set_rules("eperience","First Name",'alpha');

			if($this->form_validation->run())
			{
				$this->load->model("jobsModel");
				$data=array('name'  =>$this->input->post('name'),'email'  =>$this->input->post('email'),'experience' =>$this->input->post('experience'));

			$this->jobsModel->saveData($data);
			redirect(base_url()."jobs/inserted");
			}

			else{
				echo "<script>alert('Form Submission ERROR !');</script>";
				$this->index();

			}

		}

		public function inserted()
		{

			$this->index();
		}
}
	