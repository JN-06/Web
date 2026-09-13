<?php
    echo'
	<header class = "header"> 
        <a href="index.php">
            <img class="logo" src="logo.png" alt="logo" width="50" height="50">
        </a>
        <nav>
            <ul class="nav_links">
                <li>
                    <a href="#">Menu </a>
                    <ul class="dropdown">
                        <li><a href="product1.php">Basic Brew</a></li>
                        <li><a href="product2.php">Artisan Brew</a></li>
                        <li><a href="product3.php">Non Coffee</a></li>
                        <li><a href="product4.php">Hot Beverage</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Activities </a>
                    <ul class="dropdown">
                        <li><a href="Current.php">Events</a></li>
                        <li><a href="Coming_soon.php">Coming Soon</a></li>
                        <li><a href="Pass_Activities.php">Past Events</a></li>
                    </ul>
                </li>
                <li><a href="joinus.php">Join Us</a></li>      
                <li><a href="enquiry.php">Enquiries</a></li>     
            </ul>
        </nav>
        <a class="cta" href="login.php">Login</a>
    </header>';
?>