<?php
/**
 *	Класс карты курьера
 *
 *	@author  	Alexey Kapitonov
 *	@version 	12:44 21.03.2016
 */
class Delivery extends aplStdAJAXMethod
{
	public $driver = 'Водители';
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


/**
 *	класс из старой карты
 *
 *	@author  	Andrey Ribalko	
 *	@version 	OLD
 */
class karta_kurijera {
       
	public $back_cur_day; // обратно преобразованная дата в обычный формат
	public $back_cur_day_short; // короткий вариант
	public $cur_week_day; // текущий день недели
	public $num_first_day_in_week_on_cur_month; // номер первого дня месяца относительно недели
	public $cur_month_num; // номер текущего месяца
	public $cur_year_num; // номер текущего года
	public $cur_month_day_num;
	public $cur_month;
	public $cur_month_day_quantity;
	public $week_day_name_arr = array('Monday' => 'Понедельник','Tuesday' => 'Вторник','Wednesday' => 'Среда','Thursday' => 'Четверг','Friday' => 'Пятница','Saturday' => 'Суббота','Sunday' => 'Воскресенье');
	public $month_day_name_arr = array('','январь','февраль','март','апрель','май','июнь','июль','август','сентябрь','октябрь','ноябрь','декабрь');
	   
	public function karta_kurijera($day,$month,$year){
		$this->back_cur_day = date('d.m.y_H.i.s',mktime(0,0,0,$month,$day,$year));
		$this->back_cur_day_short = date('d.m.y',mktime(0,0,0,$month,$day,$year));
		$this->cur_week_day = date('w',mktime(0,0,0,$month,$day,$year));
		$this->cur_month_num = date('n',mktime(0,0,0,$month,$day,$year));
		$this->cur_year_num = date('Y',mktime(0,0,0,$month,$day,$year));
		$this->cur_month_day_num = date('j',mktime(0,0,0,$month,$day,$year));
		$this->num_first_day_in_week_on_cur_month = date('w',mktime(0,0,0,$month,1,$year));
		$this->cur_month_day_quantity = date('t',mktime(0,0,0,$month,$day,$year));
		$this->cur_month = date('m',mktime(0,0,0,$month,$day,$year));
	   
	}
   
}
?>