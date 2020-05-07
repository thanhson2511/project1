<?php
	require_once 'Models/User.php';
	require_once 'Controller/BaseController.php';

	class AuthController extends BaseController{
		protected $user;
		function __construct(){
			$this->user = new User();
		}

		public function login(){
			if(!isset($_POST['btn_submit'])){
				$this->view('auth/login.php');
			}else{
				$email = $_POST['email'];
				$password = $_POST['password'];

				$users = $this->user->where(['email' => $email, 'password' => $password]);
				if(count($users) ==0){
					echo 'Dang nhap khong thanh cong';
					exit();
				}else{
					$user = $users[0];
					$_SESSION['name'] = $user['name'];
					$this->redirect('index.php?mod=post&act=index');
				}
			}
		}

		public function logout(){
			unset($_SESSION['name']);
			$this->redirect('index.php?mod=post&act=index');
		}
	}
 ?>