<?php
/**
* 
*/
class Delivery extends aplStdAJAXMethod
{
	
	function __construct()
	{		
		$this->db();
		$this->user_id = isset($_SESSION['access']['user_id'])?$_SESSION['access']['user_id']:0;

		$this->user_access = $this->get_user_access_Database_Int($this->user_id);

		if(isset($_POST['AJAX'])){
			$this->_AJAX_($_POST['AJAX']);
		}	
	}

	public function main(){
		echo  'Hellow World';
		
	}



	// запрашивает из базы допуски пользователя
	// необходимо до тех пор, пока при входе в чужой аккаунт меняется только id
	private function get_user_access_Database_Int($id){
		global $mysqli;
		$query = "SELECT `access` FROM `".MANAGERS_TBL."` WHERE id = '".$id."'";
		$result = $this->mysqli->query($query) or die($this->mysqli->error);				
		$int = 0;
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
				$int = (int)$row['access'];
			}
		}
		//echo $query;
		return $int;
	}
}
?>