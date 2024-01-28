<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tech Retail - Confirmation</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<style >@import url(style.css);
	body{
		margin-bottom: 0;
	}
	</style>
</head>

<body>
<!-- header section start-->
<header>
	<a href="homepage.htm" class="logo" ><img src="images/tech_logo.png" alt="Logo" height="100px"></a>

	<nav class="navbar">
		<a href="About.htm">About Us</a>
		<a href="product_page.htm">Products</a>
		<a href="service.htm">Service</a>
		<a href="contact_us.htm"><button>Contact Us</button></a>
	</nav>

	<div class="icons">
		<a href="#"><img src="images/heart.png" alt="Heart" height="30"></a>
		<a href="#"><img src="images/cart.png" alt="Cart" height="30"></a>
	</div>
</header>
<!-- header section end-->

<!--php section start -->
<fieldset>
<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$method=$_POST['method'];
$reason=$_POST['reason'];
$date=$_POST['date'];
$time=$_POST['time'];
$details=$_POST['details'];

//Connect to the database
$servername="localhost";
$username="agf68";
$password="Ri3aengu";
$dbname="agf68";
//Create the connection
$conn=new mysqli($servername, $username, $password, $dbname);
//Check the connection
if ($conn -> connect_error) {
	die("Connection Failed: " .$conn -> connect_error);
}
// INSERT the data from the form into the database
$sql="INSERT INTO Appointment (Fname, Lname, Email, Phone, Method, Reason, Date, Time, Details) VALUES('".$fname."', '".$lname."', '".$email."', '".$phone."', '".$method."', '".$reason."', '".$date."', '".$time."', '".$details."')";

//echo $sql;

if ($conn->query($sql)==TRUE) {
	
}else{
	echo "Error: ".$sql."<BR />".$conn->error;
}
$conn->close();

?>
<!--php section end -->

</fieldset>

<!-- Response section start-->
<section class="response">
	<h1>Appointment Confirmation</h1>
	<div class="bigcontainer">
		<div class="containerb">
		<table widht="40%">
			<tr>
				<td><h2><?php echo $fname. " ". $lname.","; ?><BR /></td>
			</tr>
			<tr>
				<td><p style="color:white"> .</td>
			</tr>
			<tr>
				<td><h2>Your appointment has been booked for <?php echo $date; ?></td>
			</tr>
			<tr>
				<td><h2>at <?php echo $time; ?>. </td>
			</tr>
			<tr>
				<td><p style="color:white"> .</p></td>
			</tr>
			<tr>
				<td><h2>You will get an email with a confirmation of the appointment. </td>
			</tr>
			<tr>
				<td><h2>Thank you,</td>
			</tr>
			<tr>
				<td><p style="color:white"> .</p></td>
			</tr>
			<tr>
				<td><h3><i>Tech Retail Team</i></td>
			</tr>		 
		</table>
		</div>
	</div>
</section>
<!-- Response section end-->

<!-- footer start-->
<footer class="footer1">
	<ul>
		<li><font face="Tinos" size="4">Address:</font>&nbsp;2428 Hilltop Haven Drive,Newark,Nj 07102
		<li><font face="Tinos" size="4">Phone:</font> &nbsp;<a href="tel:+1 973-804-9248">+1 973-804-9248</a>
		<li><font face="Tinos" size="4">Email:</font> &nbsp;<a href="mailto:info@techretail.com">info@techretail.com</a>
	</ul>

	<a href="home.html" class="logo1" ><img src="images/tech_logo.png" alt="Logo" height="100px"></a>

	<p><font face="Montserrat" size="1" color="000000">Copyright &#169; 2023 Tech Retail company Inc. All Rights Reserved</font>
</footer>
<!-- footer end-->	

</body>
</html>