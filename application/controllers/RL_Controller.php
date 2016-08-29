<?php defined('BASEPATH') OR exit('No direct script access allowed');

	///////////////////////////////////////////////////////////////////////////////////////////
	////	Controller Containing Code for Front-end or back-end  Login Register System    ////
	///////////////////////////////////////////////////////////////////////////////////////////

	class RL_Controller extends CI_Controller {

		/********************************/
		/*          Constructor         */
		/********************************/
		function __construct()
		{
			parent::__construct();

			## ---- LOAD MODEL ---- ## 
			$this->load->model("RL_model");

			## ---- LIBERARIES ---- ##
			$this->load->library('form_validation');
			$this->load->library('session');
			$this->load->library('upload');
			
			$this->form_validation->set_error_delimiters(' <div class="alert alert-error "><button class="close" data-dismiss="alert"></button><span></span>', '</div>');

			$this->no_cache();
			$this->load->helper(array('form', 'url'));
			
		}

		/********************************/
		/*      Remove Brower Cache     */
		/********************************/
		public function no_cache()
		{
			
			$this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
			$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
			$this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
			$this->output->set_header('Pragma: no-cache');
		
		}

		/********************************/
		/* RL_controller's entry Point  */
		/********************************/
		public function index()
		{
			$slider_raw_data = $this->RL_model->get_slider_data();
			$this->load->view('frontend/index', array('slider_raw' => $slider_raw_data ));
		
		}
 
		public function rl_view()
		{
			if($this->RL_model->is_user_logged_in())
			{
				redirect("usr_profile");
			}
			else
			{
				$this->load->view('backend/login');
			
			}
			
		}

		/////////////////////////////////
		/// User Registration Segment ///
		/////////////////////////////////
		
		/********************************/
		/* Method for User Registration */
		/********************************/
		public function post_register()
		{

			$admin_data = array(
					'usrName' => "admin878",
					'usrPassword' => password_hash('password', PASSWORD_DEFAULT)
				);

			$this->RL_model->usr_register($admin_data);
			return "okey";
		}
		


		/////////////////////////////////
		///		User Login Segment 	  ///
		/////////////////////////////////
		public function post_login()
		{
			/********************************/
			/*   Difining Validation Rules  */
			/********************************/
			$config = array(
					array(
							'field'  => 'username'
							,'label' => 'User Name'
							,'rules' => 'trim|required|callback_username_check'
					),
					array(
							'field'  => 'password'
							,'label' => 'Password'
							,'rules' => 'trim|required|callback_password_check'
					)
			);
			
			$this->form_validation->set_rules($config);
			
			/********************************/
			/*    Form Validation Check     */
			/********************************/		
			if($this->form_validation->run() == FALSE)
			{
				$this->load->view('backend/login');
			}
            else{
                $usr_data = array(
                    'usr_email' => $this->input->post('username'),
                    'usr_pass' => $this->input->post('password')
                );
                
                $recordCheck = $this->RL_model->usr_login($usr_data);
                
                if($recordCheck){
                    
                    /*******************************/
                    /*Defining a session array data*/ 
                    /*******************************/
                    $sess_data = array(
                        'usr_email' => $usr_data['usr_email'],
                        'logged_in' => TRUE
                    );
                    $this->session->set_userdata($sess_data);
                    redirect('usr_profile');
                }
                else
                {
                	echo "okey";
                	$this->form_validation->set_message('incorrect userName or Password');
                    $this->rl_view();
                }
            }
		
		}

		/********************************/
		/*      Show User Profile       */
		/********************************/
		public function usr_profile()
		{
			if($this->RL_model->is_user_logged_in())
			{
				$array_data = $this->RL_model->get_slider_data();
				$this->load->view('backend/dashboard', array('error' => ' ', 'slider_data' => $array_data));
			}
			else
			{
				$this->load->view('backend/login');
			
			}
		}

		/********************************/
		/*    Logout And Unset Data     */
		/********************************/
		public function logout()
		{
			$array_items = array(
				'usr_email' => '',
				'usr_pass' => '',
				'logged_in' => FALSE
			);
			$this->session->unset_userdata($array_items);
			$this->session->sess_destroy();
			redirect('rl_view');
		}

		/********************************/
		/*  userName Custom Validation  */
		/********************************/
		public function username_check($str = "")
        {
        	$usrName = $this->RL_model->get_userName($str);
            if ($str !== $usrName)
            {
                    $this->form_validation->set_message('username_check', 'Invalid Username');
                    return FALSE;
            }
            else
            {
                    return TRUE;
            }
        }

        /********************************/
		/*  Password Custom Validation  */
		/********************************/
        public function password_check($str = "")
		{
            $password = $this->RL_model->get_password($str);
            if ($str !== $password)
            {
                    $this->form_validation->set_message('password_check', 'Invalid Password');
                    return FALSE;
            }
            else
            {
                    return TRUE;
            }
        }
		
		/////////////////////////////////
		///    Image Upload Segment   ///
		/////////////////////////////////

		/********************************/
		/*  	    Image upload        */
		/********************************/
        public function image_upload()
        {
			
        	
        	//var_dump(is_dir('./uploads/')); 
                $config['upload_path'] 			= './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 5120; ## Exact 5 Mb
                $config['max_width']            = 1800;
                $config['max_height']           = 1200;

                $this->upload->initialize($config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                		$array_data = $this->RL_model->get_slider_data();
                        $this->load->view('backend/dashboard', array('error' => $this->upload->display_errors(), 'slider_data' => $array_data));
                
                }
                else
                {

                		## Meta data of an Image ##
                		##-----------------------##

                		$orignalName =$_FILES['userfile']['name'];
                		$file_data = $this->upload->data();
          				$data['img'] = base_url().'/uploads/'.$file_data['file_name'];
						echo $mk_dir = 'uploads/'.$file_data['file_name'];
						$rawName = $file_data['raw_name'];
						$ext = $file_data['file_ext'];
                        //$data = array('upload_data' => $this->upload->data());

                        $usr_data = array(
		                    'heading' => $this->input->post('heading'),
		                    'editor1' => $this->input->post('editor1'),
		                    'image_id' => $this->input->post('image_id')
                		);


                		$usr_data['heading'];
                		$usr_data['editor1'];
                		$usr_data['image_id']; 

                		## Slider Images Update Query ##
                		$this->RL_model->image_data_update($usr_data, $orignalName);
                        redirect('rl_view');



                }
        
        }

        public function testing()
        {
        	$this->load->view('backend/table_editable');
        }	

	
	}


