<!DOCTYPE html>
<html>
   <head>
      <title>The Materialize Example</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">      
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>           
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>             
      <style>
         div {
            width : 200px;	
            height : 200px;				
         } 
      </style>
   </head>



<body>

    
    <div class="container">
    <form>
        
        <h3 style="text-align:center;">Data Analysis</h3>
      <table class="striped bordered centered">
      <thead>
         <tr><th style="text-align:center;">Store ID</th><th style="text-align:center;">Store Name</th><th style="text-align:center;">Total</th></tr>
      </thead>
      <tbody>
<?php
		
					// Same as error_reporting(E_ALL);
					error_reporting(E_ALL);
//					int_set('display_errors','no');

						// mysqli connection via user-defined function
						include ('./my_connect1.php');
						
						$mysqli = get_mysqli_conn();
						
						$sql = "SELECT T.store_id, S.store_name, Sum(T.sub_total)"
                        . "FROM (Transactions AS T JOIN Stores AS S ON T.store_id = S.store_id)"
                        . "WHERE T.trans_date >= ? AND T.trans_date <= ? "
                        . "GROUP BY T.store_id";
    
					$stmt = $mysqli->prepare($sql);

                        $sDate = $_GET['startDate'];
                        $eDate = $_GET['endDate'];
        
					$stmt->bind_param('ss', $sDate, $eDate); 
					$stmt->execute();
					$stmt->bind_result($storeID,$storeName,$total);
				    
                    
                    while($stmt->fetch()){
                        printf ('<tr><td>%s</td>', $storeID);
                        printf ('<td>%s</td>',$storeName);
                        printf('<td>%s</td></tr>',$total);
                    }

					$stmt->close(); 
					$mysqli->close();
					
				?>
          </tbody>
      </table>
    </form>
  </div>
</body>

