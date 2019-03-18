<!DOCTYPE html>
<html lang="en">
<head>
	<title>Calculate BMI</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main2.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="index.php" method="post">
					<span class="login100-form-title p-b-34">
						Calculate BMI
					</span>
					
					<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Masukan Bearat">
						<input type="text" name="berat" placeholder="Berat Anda (Kg)" value="<?php if(!empty($_POST['berat'])){ echo $_POST['berat']; }?>" required>
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Masukan Tinggi">
						<input type="text" name="tinggi" placeholder="Tinggi Anda (m)" value="<?php if(!empty($_POST['tinggi'])){ echo $_POST['tinggi']; }?>" required>
						<span class="focus-input100"></span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="hitung" type="submit" value="hitung">
							hitung
						</button>

<?php
	if(!empty($_POST['hitung'])) { 
		$berat = $_POST['berat'];
		$tinggi = $_POST['tinggi'];
		function bmi($berat,$tinggi) {
			$bmi = $berat/($tinggi*$tinggi);
			return $bmi;
		}   
		$bmi = bmi($berat,$tinggi);
		if ($bmi <= 18.5) {
			$output = "UNDERWEIGHT";
		} else if ($bmi > 18.5 AND $bmi<=24.9 ) {
			$output = "NORMAL WEIGHT";
		} else if ($bmi > 24.9 AND $bmi<=29.9) {
			$output = "OVERWEIGHT";
		} else if ($bmi > 30.0) {
			$output = "OBESE";
		}
		echo "Your BMI value is  " . $bmi . "<br>  and you are : "; 
		echo "$output";
	}
	?>
	

</div>


					

</form>
					

			<div class="login100-more" style="background-image: url('https://i.ytimg.com/vi/AjQdScHPFxY/hqdefault.jpg');"></div>
</div>
</div>
</div>
	
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>