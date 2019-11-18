<?php
$servername = "localhost";
$username = "kevinyobeth";
$password = "kevinyobeth";
$dbname = "therun";

if ($_POST['methodofpayment'] == 'Transfer'){
$verificationcode = rand(100, 999);
$totalpayment = 250000 + $verificationcode;
} else {
$verificationcode = "-";
}

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO userdata (fullname, email, notelp, gender, bloodtype, idcard, dateofbirth, monthofbirth, yearofbirth, address,
illnesshistory, emergencycontactname, emergencycontactnumber, emergencycontactrelation, shirtsize, methodofpayment, verificationcode, bundlingcode)
VALUES (
	'".$_POST["fullname"]."',   
	'".$_POST["email"]."', 
	'".$_POST["notelp"]."', 
	'".$_POST["gender"]."', 
	'".$_POST["bloodtype"]."', 
	'".$_POST["idcard"]."', 
	'".$_POST["dateofbirth"]."', 
	'".$_POST["monthofbirth"]."', 
	'".$_POST["yearofbirth"]."',
	'".$_POST["address"]."', 
	'".$_POST["illnesshistory"]."', 
	'".$_POST["emergencycontactname"]."', 
	'".$_POST["emergencycontactnumber"]."',
	'".$_POST["emergencycontactrelation"]."', 
	'".$_POST["shirtsize"]."', 
	'".$_POST["methodofpayment"]."', 
	'$verificationcode', 
	'".$_POST["bundlingcode"]."')";


if (mysqli_query($conn, $sql)) {
   
} else {
    
}


mysqli_close($conn);
?>


<html>
	<head>
		<title>OfRS | Thankyou!</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="assets/css/main.css" />
        <link rel="icon" href="images/favicon.png" type="image/png" sizes="32x32">
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="content">
							<div class="inner">
								<h2>Thank You For Registering,</h2>
								<p><?php echo $_POST['fullname']?></p>
					<?php
				
					if ($_POST['bundlingcode'] == null && $_POST['methodofpayment'] == 'Transfer'){
						echo "<h3>" . "Please Kindly Transfer Exactly" . "</h3>" . "<h2>" . "IDR 250." . $verificationcode . ",-" . "</h2>" . "<p>" . "to BCA" . "<b>" . " 88 303 067 82 " . "</b>" . "a/n Florencya" . "</p>";
					
					} else if ((strpos(strtoupper($_POST['bundlingcode']), 'JOGJA') !== false ) && $_POST['methodofpayment'] == 'Transfer') {
						echo "<h3>" . "Please Kindly ask your paymaster to Transfer" . "</h3>" . "<h2>" . "IDR 480.000" . ",-" . "</h2>" . "<p>" . "to BCA" . "<b>" . " 88 303 067 82 " . "</b>" . "a/n Florencya" . "</p>";

					} else if ((strpos(strtoupper($_POST['bundlingcode']), 'SOLO') !== false ) && $_POST['methodofpayment'] == 'Transfer') {
						echo "<h3>" . "Please Kindly ask your paymaster to Transfer" . "</h3>" . "<h2>" . "IDR 715.000" . ",-" . "</h2>" . "<p>" . "to BCA" . "<b>" . " 88 303 067 82 " . "</b>" . "a/n Florencya" . "</p>";

					} else if ((strpos(strtoupper($_POST['bundlingcode']), 'JEPARA') !== false ) && $_POST['methodofpayment'] == 'Transfer') {
						echo "<h3>" . "Please Kindly ask your paymaster to Transfer" . "</h3>" . "<h2>" . "IDR 1.400.000" . ",-" . "</h2>" . "<p>" . "to BCA" . "<b>" . " 88 303 067 82 " . "</b>" . "a/n Florencya" . "</p>";

					} else if ((strpos(strtoupper($_POST['bundlingcode']), 'MEGAMENDUNG') !== false ) && $_POST['methodofpayment'] == 'Transfer') {
						echo "<h3>" . "Please Kindly ask your paymaster to Transfer" . "</h3>" . "<h2>" . "IDR 2.700.000" . ",-" . "</h2>" . "<p>" . "to BCA" . "<b>" . " 88 303 067 82 " . "</b>" . "a/n Florencya" . "</p>";
					
					} else if ((strpos(strtoupper($_POST['bundlingcode']), 'JOGJA') !== false ) && $_POST['methodofpayment'] == 'Cash') {
						echo "<h3>" . "Please Kindly Pay" . "</h3>" . "<h2>" . "IDR 480.000" . ",-" . "</h2>" . "<p>" . "to Our Registration Crew" . "</p>";

					} else if ((strpos(strtoupper($_POST['bundlingcode']), 'SOLO') !== false ) && $_POST['methodofpayment'] == 'Cash') {
						echo "<h3>" . "Please Kindly Pay" . "</h3>" . "<h2>" . "IDR 715.000" . ",-" . "</h2>" . "<p>" . "to Our Registration Crew" . "</p>";

					} else if ((strpos(strtoupper($_POST['bundlingcode']), 'JEPARA') !== false ) && $_POST['methodofpayment'] == 'Cash') {
						echo "<h3>" . "Please Kindly Pay" . "</h3>" . "<h2>" . "IDR 1.400.000" . ",-" . "</h2>" . "<p>" . "to Our Registration Crew" . "</p>";

					} else if ((strpos(strtoupper($_POST['bundlingcode']), 'MEGAMENDUNG') !== false ) && $_POST['methodofpayment'] == 'Cash') {
						echo "<h3>" . "Please Kindly Pay" . "</h3>" . "<h2>" . "IDR 2.700.000" . ",-" . "</h2>" . "<p>" . "to Our Registration Crew" . "</p>";
					
					} else if ($_POST['bundlingcode'] == null && $_POST['methodofpayment'] == 'Cash'){
						echo "<h3>" . "Please Kindly Pay" . "</h3>" . "<h2>" . "IDR 250.000" . ",-" . "</h2>" . "<p>" . "to Our Registration Crew" . "</p>";

					} else {
						$verificationcode = "-";
					}
						echo "<h5>" . "<br>" . "Please check your email! You will receive an email within 24 hours!" . "</h5>";
					?>

							<img src="images/QR.jpg" alt="HTML5 Icon" style="width:150px; height:auto;">
							<p>@DPG0939k</p>
							<h5>For more information,</h5>
							<h5>+62 877 7197 9744 | Beatricea Larisa </h5>
							<h5>+62 813 8090 9090 | Gabrielle Affandy</h5>
								</div>
									<ul class="actions stacked">
										<li><a href="index.php" class="button primary">Back To Registration</a></li>
								</ul>
						</div>
					</header>

				<!-- Footer -->
                <footer id="footer">
						<p class="copyright">&copy; 2018 <a href = "https://instagram.com/kevinyobeth" >KevinYobeth</a>:<b>(OfRS)</b></p>
					</footer>

			</div>

		<!-- BG -->
			<div id="bg"></div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
