
<!DOCTYPE html>
<html>
<head>
	<title>online calculator</title>

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
			padding-top: 30px;
		}
		#row5{
			padding-top: 60px;
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
    <form action="operation.php" method="post">
    <div class="row" id="row2">
    	number1<input type="number" name="number1">    	
    </div>
    <div class="row" id="row3">
    	number2<input type="number" name="number2">  		
    </div>
    <div class="row" id="row4">
        <input type="radio" name="option" value="add" checked="true"> add
        <input type="radio" name="option" value="multiply"> multiply
        <input type="radio" name="option" value="subtract"> subtract
        <input type="radio" name="option" value="divide">divide 
    </div>
    <div class="row" id="row5">
    	<input type="submit" name="submit" class="btn btn-success" value="submit" id="buttonsubmit">
    	<input type="reset" name="clear" class="btn btn-danger" value="clear" id="buttonreset">
    </div>
    </form>
  </div>	
</div>
</body>
</html>