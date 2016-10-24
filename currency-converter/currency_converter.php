<!DOCTYPE html>
<html>
	<head>
		<title>currency</title>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<style>
			#row1{
				padding-top: 100px;
			}
			#row3{
				padding-top: 20px;
			}
			#row4{
				padding-top: 40px;
			}
			#buttonreset{
				padding-left: 40px;
				padding-right: 40px;
			}
			#buttonsubmit{
				padding-left: 30px;
				padding-right: 30px;
			}
		</style>
	</head>
	<body>
		<div class="container">
		  <div class="row" align="center" id="row1">
		    <form method="post" action="currency_converter.php">
			    <div class="row" id="row1">
			    	<select name="currency">
			    	   <option value="usdollar">US dollar</option>
			    	   <option value="euro">Euro</option>
			    	   <option value="britishPound">British Pound</option>
			    	   <option value="australianDollar">Australian Dollar</option>
			    	   <option value="canadianDollar">Canadian Dollar</option>
			    	   <option value="swissFranc">Swiss Franc</option>
			    	   <option value="singapore">Singapore Dollar</option>
			    	   <option value="malaysianRinggitt">Malaysian Ringgit</option>
			    	   <option value="japaneseYen">Japanese Yen</option>
			    	   <option value="chineseyuanRenminbi">Chinese Yuan Renminbi</option>
			    	</select>  	
			    </div>
			    <div class="row" id="row2">
			    	amount<input type="number" name="amount">  		
			    </div>
			    <div class="row3">
			    	<input type="submit" name="submit" class="btn btn-success" value="submit" >
			    	<input type="reset" name="clear" class="btn btn-danger" value="clear" id="buttonreset">
			    </div>
		    </form>
		  </div>	
		</div>
		<div id="row4" align="center">
			<?php
			  if (isset($_POST['submit'])) {
			    $amount = $_POST['amount'];
			    $currency = $_POST['currency'];
			    if (empty($_POST['amount'])) { ?>
			    	<div class="alert alert-warning">
			    	  <strong>Warning!Enter values</strong> 
			    	</div>
			<?php
			    }
			    else{
		    	      if ($currency == "usdollar") {
		    	        $rupee = $amount * 63.495763;
		    	      }
		    	      if ($currency == "euro") {
		    	        $rupee = $amount * 72.343691 ;
		    	      }
		    	      if ($currency == "britishPound") {
		    	        $rupee = $amount * 100.926470;
		    	      }
		    	      if ($currency == "australianDollar") {
		    	        $rupee = $amount * 49.470005;
		    	      }
		    	      if ($currency == "canadianDollar") {
		    	        $rupee = $amount * 51.840784;
		    	      }
		    	      if ($currency == "singapore") {
		    	        $rupee = $amount * 47.714950;
		    	      }
		    	      if ($currency == "swissFranc") {
		    	        $rupee = $amount * 69.188719;
		    	      }
		    	      if ($currency == "malaysianRinggitt") {
		    	        $rupee = $amount * 17.020105;
		    	      }
		    	      if ($currency == "japaneseYen") {
		    	        $rupee = $amount * 0.517365;
		    	      }
		    	      if ($currency == "chineseyuanRenminbi") {
		    	        $rupee = $amount * 10.254612;
		    	      }
		    	    echo "Currency is $currency";?><br>
		    	    <?php
		    	    echo "Amount:$amount";?><br>
		    	    <?php
		    	    $roundedvalue=round($rupee,2);
		    	    echo "In Indian Rupee :$roundedvalue";
			    	}
			    }		      
			?>	
		</div>
	</body>
</html>
