<?php
$servername = "localhost";
$username = "kevinyobeth";
$password = "kevinyobeth";
$dbname = "therun";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$result = mysqli_query($conn,"SELECT * FROM userdata ORDER BY ID DESC");

$num_rows = mysqli_num_rows($result);
mysqli_close($conn);
?>


<html>
	<head>
		<title>OfRS | Data Center</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="icon" href="images/favicon.png" type="image/png" sizes="32x32">
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

        <div id="wrapper">

        <!-- START OF LOADING DATA -->
        <header id="header">
        <div class="content">
        <div class="inner">
		<article id="DataCenter">
		<center><h2 class="major">OfRS Data Center</h2></center>
					<div class="table-wrapper">
                    	<table>
							<thead>
						<tr>
							<th>Full Name</th>
							<th>Email</th>
							<th>No Telp</th>
							<th>Blood Type</th>
							<th>ID Card</th>
							<th>Date of Birth</th>
							<th>Month of Birth</th>
							<th>Year of Birth</th>
							<th>Shirt Size</th>
							<th>Payment Method</th>
							<th>Verification Code</th>
							<th>Bundling Code</th>
						</tr>	
							</thead>

				<tbody>
<?php
			while($row = mysqli_fetch_array($result))
			{
			echo "<tr>";
			echo "<td>" . $row['fullname'] . "</td>";
			echo "<td>" . $row['email'] . "</td>";
			echo "<td>" . $row['notelp'] . "</td>";
			echo "<td>" . $row['bloodtype'] . "</td>";
			echo "<td>" . $row['idcard'] . "</td>";
			echo "<td>" . $row['dateofbirth'] . "</td>";
			echo "<td>" . $row['monthofbirth'] . "</td>";
			echo "<td>" . $row['yearofbirth'] . "</td>";
			echo "<td>" . $row['shirtsize'] . "</td>";
			echo "<td>" . $row['methodofpayment'] . "</td>";
			echo "<td>" . $row['verificationcode'] . "</td>";
			echo "<td>" . $row['bundlingcode'] . "</td>";
			echo "</tr>";
			}
?>	
				</tbody>

					<tfoot>
					<tr>
					<td colspan="2"></td>
					<td></td>
					</tr>


					<h4>Total Entry: <?php echo "$num_rows" ?></h4>
					</tfoot>
					</table>
					</div> 
				    <br>
			
		</article>			
		</div>	
        </div>
		</header>
		<!-- Footer -->
			<footer id="footer">
			<p class="copyright">&copy; 2018 <a href = "https://instagram.com/kevinyobeth" >KevinYobeth</a>:<b>(OfRS)</b></p>
			</footer>
		<!-- Footer END -->
		</div>
        <!-- END OF LOADING DATA -->

		<!-- BG -->
			<div id="bg"></div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>



	</body>

</html>

