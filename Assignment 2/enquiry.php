<!DOCTYPE html>
<html lang="en">
<head>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brew-Go-Coffee</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class = "enquiry">
	<?php include("header.php"); ?>


    <h1>Contact Us</h1>
    
    <form id="contactForm" class = "enquiry_form">
        <label for="firstName">First Name:</label>
        <input type="text" id="firstName" name="firstName" maxlength="25" pattern="[A-Za-z]+" required>
        <small class="error">Alphabetical characters only, max 25 characters</small>
        
        <label for="lastName">Last Name:</label>
        <input type="text" id="lastName" name="lastName" maxlength="25" pattern="[A-Za-z]+" required>
        <small class="error">Alphabetical characters only, max 25 characters</small>
        
        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" required>
        
        <fieldset>
            <legend>Address</legend>
            
            <label for="street">Street Address:</label>
            <input type="text" id="street" name="street" maxlength="40" required>
            
            <label for="city">City/Town:</label>
            <input type="text" id="city" name="city" maxlength="20" required>
            
            <label for="state">State:</label>
            <select id="state" name="state" required>
                <option value="">-- Select State --</option>
                <option value="Johor">Johor</option>
                <option value="Kedah">Kedah</option>
                <option value="Kelantan">Kelantan</option>
                <option value="Malacca">Malacca</option>
                <option value="Negeri Sembilan">Negeri Sembilan</option>
                <option value="Pahang">Pahang</option>
                <option value="Penang">Penang</option>
                <option value="Perak">Perak</option>
                <option value="Perlis">Perlis</option>
                <option value="Sabah">Sabah</option>
                <option value="Sarawak">Sarawak</option>
                <option value="Selangor">Selangor</option>
                <option value="Terengganu">Terengganu</option>
                <option value="Kuala Lumpur">Kuala Lumpur (Federal Territory)</option>
                <option value="Labuan">Labuan (Federal Territory)</option>
                <option value="Putrajaya">Putrajaya (Federal Territory)</option>
            </select>
            
            <label for="postcode">Postcode:</label>
            <input type="text" id="postcode" name="postcode" pattern="\d{5}" required>
            <small class="error">Exactly 5 digits</small>
        </fieldset>
        
        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" placeholder="e.g. 0123456789" pattern="\d{10}" required>
        <small class="error">10 digits only</small>
        
        <label for="enquiry">Enquiry Type:</label>
        <select id="enquiry" name="enquiry" required>
            <option value="">-- Select Enquiry Type --</option>
            <option value="Membership">Membership</option>
            <option value="Products">Products</option>
            <option value="Pop-up Market activities">Pop-up Market activities</option>
        </select>
    
          <button type="submit">Submit</button>
        
    </form>
    
    <script>
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Form submitted successfully!');
           
        });
    </script>
  
 
<?php include("footer.php"); ?>

</body>
</html>