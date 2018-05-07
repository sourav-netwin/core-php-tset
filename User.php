<?php
	/**
	*This class is used to manage the user module related functionality
	*
	*@category User.php
	*@author Sourav Dhara
	*Last Modified : 7th May , 2018
	*/
	class User extends Commonfunction_model
	{
		/**
		*This function is used to get the data to show in the listing page
		*
		*@access public
		*@param NONE
		*@return Array
		*/
		public function listing()
		{
			$data = $this->getData('name , email , phone , dob' , NULL , 'tbl_user' , 2);
			$viewPage = 'list.php';
			$pageTitle = 'User List';
			include('template.php');
		}

		/**
		*This function is used to perform add/edit operation
		*
		*@access public
		*@param NONE
		*@return Array
		*/
		public function add_edit($id = NULL)
		{
			$post = array();
			if(isset($_POST['flag']))
			{
				$post['name'] = $_POST['name'];
				$post['email'] = $_POST['email'];
				$post['phone'] = $_POST['phone'];
				$post['dob'] = date('Y-m-d' , strtotime($_POST['dob']));
				if($_POST['flag'] == 'as')
				{
					$this->insertData('tbl_user' , $post);
					header("Location: index.php");
				}
			}
			$viewPage = 'add_edit.php';
			$pageTitle = ($id != '') ? 'Edit User' : 'Add User';
			$flag = ($id != '') ? 'es' : 'as';
			include('template.php');
		}
	}
