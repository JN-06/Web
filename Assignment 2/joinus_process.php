<!DOCTYPE html>
<html lang="en">
<head>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brew-Go-Coffee</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body class = "back_joinus">

	<?php include("header.php"); ?>

	
<br>

<section>
	<div class = "hiring">
		
		<h3> Benefits </h3> 
		<ul>
			<li> EPF & SOCSO </li>
			<li> Meal Allowance provided </li>
			<li> Sales Commission </li>
			<li> Salary Range: RM1,700 - RM3,800 </li>
		</ul>
	</div>
	
	<div class = "flip_card_hiring">
		<div class = "flip_card_inner">
			<div class = "flip_card_front">
				<img src = "Joinus.jpg" alt = "Join Us !" width = "350" height = "270">
			</div>
			<div class = "flip_card_back">
				<div class = "flip_card_back_hiring">
					<h2> WE'RE HIRING! </h2> <p> Location: <br> One Jaya Mall <br> & <br> Plaza Merdeka Mall </p> 
				</div>
			</div>
		</div>
	</div>

	<div class = "require">
		<h3> Requirements </h3>

		<ul>
			<li> Age 18 years old & above </li>
			<li> Fluent in English, Mandarin & BM is an advantage </li>
			<li> Full-time & Part-time available </li>
			<li> Possess own transportation </li>
		</ul>
	</div>
</section>
<br>

<br>

<br>

<br>

<?php include ('Joinus_connection.php'); ?>

<form class ="join_us">
<h1> Thank You! </h1>
	
	
	


	
<?php
	$first_name = strtoupper($_POST['first_name']);
	$last_name = strtoupper($_POST['last_name']);
?>

<h2> <?php echo $first_name; echo ' '; echo $last_name; ?>, your submission has been received. </h2>
<br>

<p> Email: <?php echo $_POST['email']; ?> </p>
	
	<fieldset>
		<legend> Address </legend>
		 <p> Street Address: <?php echo $_POST['street']; ?> </p>
		 <p> City / Town: <?php echo $_POST['city']; ?> </p>
		 <p> State: <?php echo $_POST['state']; ?> </p>
		 <p> Postcode: <?php echo $_POST['postcode']; ?> </p>
	</fieldset>
	
<p> Phone Number: <?php echo $_POST['phone_num'] ?> </p>
</form>

<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "brew_go_coffee";
	
	// create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	//Check connection
	if (!$conn)
	{
		die ("Connection failed: ".mysqli_connect_error());
	}
	
	// get value comfirm.php
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email = $_POST['email'];
	$street = $_POST['street'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$postcode = $_POST['postcode'];
	$phone_num = $_POST['phone_num'];
	
	$sql = "INSERT INTO job_app(first_name, last_name, email, street, city, state, postcode, phone_num)
	VALUES ('$first_name', '$last_name', '$email', '$street', '$city', '$state', '$postcode', '$phone_num')";
	
	mysqli_query($conn, $sql);
	mysqli_close($conn);
?>
</div>

<br> <br> <br>

<?php include("footer.php"); ?>

</body>
</html>