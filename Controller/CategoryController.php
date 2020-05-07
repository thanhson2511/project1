<?php 
	require_once 'Models/Post.php';
	require_once 'Models/Category.php';
	require_once 'Models/User.php';

	class CategoryController{
		public $category_model;
		 function __construct(){
		 	$this->category_model = new Category();
		 }

		 public function index(){
		 	$categories = $this->category_model->getAll();
		 	require_once 'Views/blank_category.php';
		 }

		 public function detail(){
		 	$id = $_GET['id'];
		 	$category = $this->category_model->find($id);
		 
		 	require_once ('Views/category/detail.php');
		 }

		 public function create(){

			$category_model = new Category();
			$categories = $category_model->getAll();

			require_once "Views/category/add.php";
		}

		public function edit(){
			$id = $_GET['id'];
			$category_model = new Category();
			$categories = $category_model->getAll();

			$category = $this->category_model->find($id);
			require_once "Views/category/edit.php";
		}

		public function update(){

			$data = $_POST;
			$category_model = new Category();

			$data["name"] = htmlspecialchars($data["name"]);
			$result = $category_model->update($data);
			if($result){
				setcookie("success", "update thanh cong", time()+3);
				header("Location: index.php?mod=category&act=index");
			}else{
				setcookie("fail", "update khong thanh cong", time()+3);
				header("Location: index.php?mod=category&act=edit&id=" .$data["id"]);
			}
		}

		public function destroy(){
			$id = $_GET['id'];
			$result = $this->category_model->delete($id);
			if($result){
				setcookie("success", "Xoa thanh cong", time()+3);
			}else{
				setcookie("fail", "Xoa khong thanh cong", time()+3);
			}
			header("Location: index.php?mod=category&act=index");
		}

		public function store(){
			$data = $_POST;
			$category_model = new Category();
			$result = $category_model->add($data);
			if($result){
				setcookie("success", "Tao moi thanh cong", time()+3);
			}else{
				setcookie("fail", "tao moi khong thanh cong", time()+3);
			}

			header("Location: index.php?mod=category&act=index");
		}
	}
 ?>