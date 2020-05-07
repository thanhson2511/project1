<?php 
	require_once 'Models/Model.php';
	require_once 'Models/Connection.php';
	class User extends Model{
		protected $table = 'users';
		public function where($columns, $value = null){
			if(is_array($columns)){
				$where = '';
				foreach ($columns as $column => $value) {
					$where .= "$column = '$value' ";
					$where .= " AND ";
				}
				$where = rtrim($where, " AND ");
			}else{
				$where = "$columns = '$value'";
			}

			$query = " SELECT * FROM " . $this->table . " WHERE " . $where;
			echo "$query";
			$result = $this->conn->query($query);

			$data = array();

			while($row = $result->fetch_assoc()){
				$data[] = $row;
			}
			return $data;
		}
	}
 ?>