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
<section>
<form method = "get" action = "joinus_process.php" >
	<div class = "join_us">
		<h1> Join Us </h1>

		<p> <label for = "first_name"> First Name </label>
		<input type = "text" name = "first_name" id = "first_name" maxlength = "25" required = "required" pattern = "[a-zA-Z\s]*"/>

		<br>

		<label for = "last_name"> Last Name </label>
		<input type = "text" name = "last_name" id = "last_name" maxlength = "25" required = "required" pattern = "[a-zA-Z\s]*" />

		<br>

		<label for= "email"> Email Address</label> 
		<input type = "email" name = "email" id = "email" required = "required"/>
		</p>

		<br>

		<fieldset>
			<legend> Address </legend>
				<p>
				<label for = "street"> Street Address </label>
				<input type = "text" name = "street" id = "street" maxlength = "40" required = "required" />
				
				<br>

				<label for = "city"> City / Town </label>
				<input type = "text" name = "city" id = "city" maxlength = "20" required = "required" />
				
				<br>

				<label for = "state"> State </label>
				<select name = "state" id = "state" required = "required">
					<option value = ""> Please select </option>
					<option> Johor </option>
					<option> Kedah </option>
					<option> Kelantan </option>
					<option> Malacca </option>
					<option> Negeri Sembilan </option>
					<option> Pahang </option>
					<option> Pinang </option>
					<option> Perak </option>
					<option> Perlis </option>
					<option> Sarawak </option>
					<option> Sabah </option>
					<option> Selangor </option>
					<option> Terengganu </option>
					<option> Kuala Lumpur </option>
					<option> Labuan </option>
					<option> Putrajaya </option>
				</select>

				<br>

				<label for = "postcode"> Postcode </label>
				<input type = "text" name = "postcode" id = "postcode" required = "required" pattern = "\d{5}" />
				
				</p>
			
		</fieldset>

		<br>

		<p>
		<label for = "phone_num"> Phone Number </label>
		<input type = "text" name = "phone_num" id = "phone_num" required = "required" pattern = "\d{10,11}" placeholder = "01XXXXXXXX"/>

		<br>

		<label for = "cv_upload"> CV Upload </label>
		<input type = "file" name = "cv_upload" id = "cv_upload" required = "required" accept = ".pdf, .doc, .docx" />

		<br>

		<label for = "photo_upload"> Photo Upload </label>
		<input type = "file" name = "photo_upload" id = "photo_upload" required = "required" accept = "image/*" />

		<br>
		</p>
		<section>
			<div class = "sub_re"> <input type = "submit" value = "Submit" /> 
			<input type = "reset" value = "Reset"/> 
			</div>
		</section>
	</div>
</form>
</section>
<br> <br> <br>

<?php include("footer.php"); ?>

</body>
</html>