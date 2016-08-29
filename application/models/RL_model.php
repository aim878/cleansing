<?php

	////////////////////////////////////////////////////////////
	/// Model Containing Code for performing RL DB Operations///
	////////////////////////////////////////////////////////////

	class RL_model extends CI_Model
	{	
		/////////////////////////////////
		///	User Registration Segment ///
		/////////////////////////////////
		
		/********************************/
		/*  Method User data Insertion  */
		/********************************/
		function usr_register($usr_data)
		{
			echo $usr_data['usrName'];
			
			$usrName = $this->db->escape($usr_data['usrName']);
			$usrPassword = $this->db->escape($usr_data['usrPassword']);

			echo $this->db->query("INSERT INTO admin( usrName, password) VALUES
				( $usrName, $usrPassword)");
			return true;
		}// ->


		/////////////////////////////////
		///		User Login Segment 	  ///
		/////////////////////////////////
		
        function usr_login($usr_data){
        	
        	$usr_data['usr_email'];
        	$usr_data['usr_pass'];

            $recordCheck = $this->db->query("SELECT * FROM admin WHERE usrName = '".$usr_data['usr_email']."'"); 
            
            if($recordCheck->num_rows() == 1){
                foreach ($recordCheck->result() as $record){
                    if(password_verify($usr_data['usr_pass'], $record->password)){
                        return TRUE;
                    }
                    else{
                        return false;
                        
                    }
                }
            }
            else{
                
                return false;
            }
        }// ->

		/********************************/
		/*  usrName Custom Validation   */
		/********************************/
        function get_userName($usrName)
        {
        	if($usrName !== NULL)
        	{
        		$recordCheck = $this->db->query("SELECT * FROM admin WHERE usrName = '$usrName' ")->result(); 
        		if(count($recordCheck))
        			return $recordCheck[0]->usrName;
        		else
        			return false;
        	}
        	else
        	{
        		return false;
        	}
        }

		/********************************/
		/*  password Custom Validation   */
		/********************************/
        function get_password($pass)
        {
        	if($pass !== NULL)
        	{
        		$recordCheck = $this->db->query("SELECT * FROM admin WHERE id = '1' ")->result();
        		if((count($recordCheck) == 1) && (password_verify($pass, $recordCheck[0]->password)))
        			return $pass;
        		else
        			return false;
        	}
        	else
        	{
        		return false;
        	}
        }

		/********************************/
		/*  User Authentication Check   */
		/********************************/        
		public function is_user_logged_in()

		{

			if( $this->session->userdata('logged_in') == true)
			{

				return true;

			}else{

				return false;

			}

		}

		public function get_slider_data()
		{
			$get_data = $this->db->query("SELECT * FROM slider")->result();
			//print_r($get_data); exit;
			return $get_data;
		}

		public function image_data_update($usr_data, $orignalName){
			echo $orignalName;
			echo $heading = $usr_data['heading'];
			echo $editor1 = $usr_data['editor1'];
			echo $img_id  = $usr_data['image_id']; 

			$get_data = $this->db->query("UPDATE slider SET heading = '$heading', discription = '$editor1', image = '$orignalName' WHERE id = '$img_id' ");
		}

	}
?>	