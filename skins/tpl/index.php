<!DOCTYPE html>
<html>
<head>
	<title>Delivery App</title>
	
	<!-- <script type="text/javascript" src="requirejs.js"></script> -->
	<link href="skins/bootstrap/css/bootstrap.css" rel="stylesheet">
	<link href="skins/css/main.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.34.9/css/bootstrap-dialog.css" rel="stylesheet">
	<link href="http://apelburg.ru.local/skins/css/jquery-ui-1.10.4.custom.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
	<script type="text/javascript" src="components/bootstrap/dist/js/bootstrap.js"></script>
	<script type="text/javascript" src="../libs/js/Base64Class.js"></script>

	<script type="text/javascript" src="components/bootstrap-notify-master/bootstrap-notify.js"></script>
	
	<script type="text/javascript" src="libs/js/standard_response_handler.js"></script>
  <script type="text/javascript" src="libs/js/jquery.delivery.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.34.9/js/bootstrap-dialog.js"></script>
	 <script type="text/javascript">
</script>
</head>
  <body>
    <div id="delivery_app">
    <div id="header">
    	<table class="page_top" width="100%" cellspacing="0" cellpadding="0">
    		<tr>
    			<td class="time_today">
                   <div>Сегодня:</div>
                   <div>
                   	<?php 
                       echo date('d.m.y.').'&nbsp;'.$karta->week_day_name_arr[date('l')];
                   ?>
                   </div>
                </td>
                <td id="js-search">
                	<form method="POST" action="">  
    	                <input type="text" name="search_company" placeholder="по компании">
    	                <input type="text" name="search" placeholder="по поездке">
    	                <input type="text" name="search_docs" placeholder="по документам">
    	                <button>Найти</button>
                  	</form>
                </td>
                <td id="js-driver_list">
                	<?=$Delivery->driver;?>
                </td>
                <td id="index-link">              	
                </td>
                <td>
                	<a href="../os/?page=cabinet&section=requests&subsection=no_worcked_men">онлайн<br>сервис</a>
                </td>
                <td id="js-helper_window">
                	справка
                </td>
                <td id="js-print_btn">
                </td>
                <td></td>
                <td id="js_app_close">
                </td>
    		</tr>
    	</table>
    </div>
    <div id="body_content">
      <table>
        <tr>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </table>
    </div>
  </div> 
</body>
</html>