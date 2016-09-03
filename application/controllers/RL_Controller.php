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
			$slider_raw_data  = $this->RL_model->get_slider_data();
			$contact_raw_data = $this->RL_model->get_contact_info_data();
			$service_raw_data = $this->RL_model->get_services_data();
			
			$this->load->view('frontend/index', array(
				'slider_raw' => $slider_raw_data,
				'contact_info' => $contact_raw_data,
				'service_data' => $service_raw_data
			));
		
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
				$this->load->view('backend/dashboard', array('error' => ' '));
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
		///      Image Upload And     ///
		///		  Update Segment      ///
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
                		$this->RL_model->image_data_upload($usr_data, $orignalName);
                        redirect('slider_Images_show');



                }
        
        }

		/********************************/
		/*  	 Show All Images        */
		/********************************/
        public function slider_Images_show()
        {

        	$array_data = $this->RL_model->get_slider_data();
        	$this->load->view('backend/table_editable', array('slider_data' => $array_data));
       
        }

        /********************************/
		/*  	 Delete   Images        */
		/********************************/
        public function delete_image($id)
        {
        	$array_data = $this->RL_model->get_image_by_id($id);
            $image = $array_data[0]->image;
            unlink("uploads/".$image);
        	$this->RL_model->delete_image($id);
        	redirect('slider_Images_show');
        
        }

		/********************************/
		/*  	 Update   Images        */
		/********************************/
        public function get_update_image($id)
        {

        	$get_signle_image = $this->RL_model->get_image_by_id($id);
        	$this->load->view('backend/update_image', array('single_image_data' => $get_signle_image));

        
        }

		/********************************/
		/*  	 Update Images          */
		/********************************/
        public function post_update_image()
        {
        		## if user have not change images but change content ##
        		##___________________________________________________##

                $config['upload_path'] 			= './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 5120; ## Exact 5 Mb
                $config['max_width']            = 1800;
                $config['max_height']           = 1200;

                $this->upload->initialize($config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $usr_data = array(
                        	'id' 		=> $this->input->post('id'),
		                    'heading' 	=> $this->input->post('heading'),
		                    'editor1' 	=> $this->input->post('editor1')
                		);
					
						$usr_data['id'];
						$usr_data['heading'];
                		$usr_data['editor1']; 

                		$this->RL_model->image_data_update_without_image($usr_data);                       
                
                }
                else
                {

				##  if user have  change images or other content  ##
        		##________________________________________________##

                		$orignalName =$_FILES['userfile']['name'];
                		$file_data = $this->upload->data();
          				$data['img'] = base_url().'/uploads/'.$file_data['file_name'];
						echo $mk_dir = 'uploads/'.$file_data['file_name'];
						$rawName = $file_data['raw_name'];
						$ext = $file_data['file_ext'];
                        //$data = array('upload_data' => $this->upload->data());

                        $usr_data = array(
                        	'id' 		=> $this->input->post('id'),
		                    'heading' => $this->input->post('heading'),
		                    'editor1' => $this->input->post('editor1'),
                		);

                        $id = $usr_data['id'];
                		$usr_data['heading'];
                		$usr_data['editor1'];

                		## Slider Images Update Query ##
                		$array_data = $this->RL_model->get_image_by_id($id);
                		$previous_image = $array_data[0]->image;
                		unlink("uploads/".$previous_image);
                		$this->RL_model->image_data_update_with_image($usr_data, $orignalName);
                        redirect('slider_Images_show');

                }

        }



		/////////////////////////////////
		///     Services  Segment     ///
		/////////////////////////////////
		/********************************/
		/* 	  show service view         */
		/********************************/
        public function get_services_view()
        {
        	$this->load->view('backend/services_form');

        }
	

		/********************************/
		/* 	    Post	Services        */
		/********************************/
        public function post_services_data()
        {
        	$usr_data = array(
		                    'heading' => $this->input->post('heading'),
		                    'editor1' => $this->input->post('editor1')
                		);


        		$usr_data['heading'];
        		$usr_data['editor1'];

        		## Slider Images Update Query ##
        		$this->RL_model->services_data_insert($usr_data);
                redirect('services_data_show');
        }
	

		/********************************/
		/* services data show in table  */
		/********************************/
        public function services_data_show()
        {

        	$array_data = $this->RL_model->get_services_data();
        	$this->load->view('backend/services_editable', array('services_data' => $array_data));

        }

        /********************************/
		/*  	 Services   Data        */
		/********************************/
        public function delete_services($id)
        {
        	$this->RL_model->delete_service($id);
        	redirect('services_data_show');
        
        }



        /********************************/
		/*     Update Service Data      */
		/********************************/
        public function get_update_services($id)
        {

        	$get_signle_service = $this->RL_model->get_service_by_id($id);
        	$this->load->view('backend/services_update', array('single_service_data' => $get_signle_service));
        
        }

        /********************************/
		/*     Post | Service Data      */
		/********************************/
        public function post_update_services()
        {

            $usr_data = array(
            	'id' 		=> $this->input->post('id'),
                'heading' => $this->input->post('heading'),
                'editor1' => $this->input->post('editor1'),
    		);

            $id 		 = $usr_data['id'];
    		$heading  	 = $usr_data['heading'];
    		$description = $usr_data['editor1'];

    		$this->RL_model->service_data_update($usr_data);
    		redirect('services_data_show');


        }

		/////////////////////////////////
		///   Contact info Segment    ///
		/////////////////////////////////
		/********************************/
		/* 	  contact info view         */
		/********************************/
        public function get_contact_info_view()
        {
        	$this->load->view('backend/contact_info_form');
        }


		/********************************/
		/* 	    post service data       */
		/********************************/
        public function post_contact_info_data()
        {
        	$usr_data = array(
		                    'email' 		   => $this->input->post('email'),
		                    'address' 		   => $this->input->post('address'),
		                    'primary_phone'    => $this->input->post('primary_phone'),
		                    'secondary_phone1' => $this->input->post('secondary_phone1'),
		                    'secondary_phone2' => $this->input->post('secondary_phone2'),
		                    'secondary_phone3' => $this->input->post('secondary_phone3'),
		                    'secondary_phone4' => $this->input->post('secondary_phone4')
                		);


        		## Slider Images Update Query ##
        		$this->RL_model->contact_info_data_insert($usr_data);
                redirect('contact_info_data_show');
        }

        /**********************************/
		/*contact_info_data show in table */
		/**********************************/
        public function contact_info_data_show()
        {

        	$array_data = $this->RL_model->get_contact_info_data();
        	$this->load->view('backend/contact_info_editable', array('contact_info_data' => $array_data));

        }

        /**********8************************/
		/*update contact_info_data in table*/
		/***********************************/
        public function get_update_contact_info($id)
        {

        	$get_signle_contact = $this->RL_model->get_contact_by_id($id);
        	$this->load->view('backend/contact_info_update', array('get_signle_contact' => $get_signle_contact));
        }

        /********************************/
		/*     Post update contact info */
		/********************************/
        public function post_update_contact_info()
        {

            $usr_data = array(
            	'id' 			   => $this->input->post('id'),
                'email' 		   => $this->input->post('email'),
                'address' 		   => $this->input->post('address'),
                'primary_phone'    => $this->input->post('primary_phone'),
                'secondary_phone1' => $this->input->post('secondary_phone1'),
                'secondary_phone2' => $this->input->post('secondary_phone2'),
                'secondary_phone3' => $this->input->post('secondary_phone3'),
                'secondary_phone4' => $this->input->post('secondary_phone4'),

    		);

    		$this->RL_model->contact_info_update($usr_data);
    		redirect('contact_info_data_show');


        }

        /********************************/
		/*  	 Services   Data        */
		/********************************/
        public function delete_contact($id)
        {
        	$this->RL_model->delete_contact($id);
        	redirect('contact_info_data_show');
        
        }

        /********************************/
		/*  	    Data        */
		/********************************/
        public function testing()
        {
        	$contact_raw_data = $this->RL_model->get_contact_info_data();
        	$this->load->view('frontend/our-services', array(
				'contact_info' => $contact_raw_data
			));
        }

        public function testing2()
        {
        	$contact_raw_data = $this->RL_model->get_contact_info_data();
        	$this->load->view('frontend/contact', array(
				'contact_info' => $contact_raw_data
			));
        }

	}


