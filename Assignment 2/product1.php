<!DOCTYPE html>
<html lang="en">
<head>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brew-Go-Coffee</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body class = "background_product">

<?php include("header.php"); ?>

<aside>
<br>
	<h1> Remarks </h1>
	
	<ol class = "no">
		<li class = "marks"> MP = Member Price </li>
		<li class = "marks"> NP = Normal Price </li>
		<li class = "marks"> Add on RM2 for Oat Milk </li>
	</ol>
	
	<h1> Opening Hours </h1>

	<p class = "open_hour"> Main entrance of One Jaya Mall, Jalan Song
	<br> <strong>
	9 am - 6 pm DAILY </strong> </p>

	<p class = "open_hour"> Plaza Merdeka, L1 infront of Cotton On
	<br> <strong>
	10 am - 10 pm DAILY </strong> </p>

</aside>

<br>

<div class="centered-container">
  <section class="search-bar">
    <form method="GET" action="product1.php" class="search-form">
      <div class="search_write">
        <input type="text" name="keyword" placeholder="Search product name..." required>
        <button type="submit" class="search-button">
          <i class="fas fa-search"></i>
        </button>
      </div>
    </form>
  </section>
</div>



<?php
$products = [
  ['name' => 'Americano', 'price_mp' => 8.90, 'price_np' => 10.90, 'image' => 'Americano.jpg'],
  ['name' => 'Latte', 'price_mp' => 10.90, 'price_np' => 12.90, 'image' => 'Latte.png'],
  ['name' => 'Cappuccino', 'price_mp' => 11.90, 'price_np' => 13.90, 'image' => 'Cappuccino_Cold_foam.jpeg'],
  ['name' => 'Aerocano', 'price_mp' => 10.90, 'price_np' => 12.90, 'image' => 'Aerocano.jpeg'],
  ['name' => 'Aero-latte', 'price_mp' => 12.90, 'price_np' => 14.90, 'image' => 'Aero-latte.png'],
   ['name' => 'Strawberry Latte', 'price_mp' => 14.90, 'price_np' => 16.90, 'image' => "Strawberry_Latte.jpeg"],
  ['name' => 'Mint Latte', 'price_mp' => 12.90, 'price_np' => 14.90, 'image' => "Mint_Latte.jpg"],
  ['name' => 'Pistachio Latte', 'price_mp' => 15.90, 'price_np' => 17.90, 'image' => "Pistachio_Latte.jpeg"],
  ['name' => 'Mocha', 'price_mp' => 11.90, 'price_np' => 13.90, 'image' => "Mocha.jpeg"],
  ['name' => 'Mint Mocha', 'price_mp' => 12.90, 'price_np' => 14.90, 'image' => "Mint_Mocha.jpg"],
  ['name' => 'Orange Mocha', 'price_mp' => 12.90, 'price_np' => 14.90, 'image' => "Orange_Mocha.jpg"],
  ['name' => 'Yuzu Americano', 'price_mp' => 13.90, 'price_np' => 15.90, 'image' => "Yuzu_Americano.jpeg"],
  ['name' => 'Cheese Americano', 'price_mp' => 13.90, 'price_np' => 15.90, 'image' => "Cheese_Americano.jpeg"],
  ['name' => 'Orange Americano', 'price_mp' => 13.90, 'price_np' => 15.90, 'image' => "Orange_Americano.jpg"],
  ['name' => 'Chocolate', 'price_mp' => 13.90, 'price_np' => 15.90, 'image' => "Chocolate.jpg"],
  ['name' => 'Mint Chocolate', 'price_mp' => 13.90, 'price_np' => 15.90, 'image' => "Mint_Chocolate.jpg"],
  ['name' => 'Yuzu Soda', 'price_mp' => 13.90, 'price_np' => 15.90, 'image' => "Yuzu_Soda.jpg"],
  ['name' => 'Orange Chocolate', 'price_mp' => 13.90, 'price_np' => 15.90, 'image' => "Orange_Chocolate.jpeg"],
  ['name' => 'Strawberry Soda', 'price_mp' => 13.90, 'price_np' => 15.90, 'image' => "Strawberry_Soda.jpg"],
  ['name' => 'Yuzu Cheese', 'price_mp' => 13.90, 'price_np' => 15.90, 'image' => "Yuzu_Cheese.jpg"],
  ['name' => 'Yuri Matcha', 'price_mp' => 13.90, 'price_np' => 15.90, 'image' => "Yuri_Matcha.jpg"],
  ['name' => 'Yuzu Matcha', 'price_mp' => 14.90, 'price_np' => 16.90, 'image' => "Yuzu_Matcha.jpg"],
  ['name' => 'Houjicha', 'price_mp' => 13.90, 'price_np' => 15.90, 'image' => "Houjicha.jpg"],
  ['name' => 'Hot Americano', 'price_mp' => 7.90, 'price_np' => 9.90, 'image' => "Americano.jpg"],
  ['name' => 'Hot Latte', 'price_mp' => 9.90, 'price_np' => 11.90, 'image' => "Latte.png"],
  ['name' => 'Hot Cappuccino', 'price_mp' => 10.90, 'price_np' => 12.90, 'image' => "Cappuccino_Cold_foam.jpeg"],
  ['name' => 'Hot Chocolate', 'price_mp' => 12.90, 'price_np' => 14.90, 'image' => "Chocolate.jpg"],
  ['name' => 'Hot Yuri Matcha', 'price_mp' => 13.90, 'price_np' => 14.90, 'image' => "Yuri_Matcha.jpg"],
  ['name' => 'Hot Houjicha', 'price_mp' => 13.90, 'price_np' => 14.90, 'image' => "Houjicha.jpg"],
  ['name' => 'Hot Butterscotch Latte', 'price_mp' => 10.90, 'price_np' => 12.90, 'image' => "Butterscotch_Latte.jpeg"],
  ['name' => 'Butterscotch Latte', 'price_mp' => 11.90, 'price_np' => 13.90, 'image' => "Butterscotch_Latte.jpeg"],
  ['name' => 'Butterscotch Creme', 'price_mp' => 14.90, 'price_np' => 16.90, 'image' => "Butterscotch_Creme.jpeg"],
  ['name' => 'Strawberry Matcha', 'price_mp' => 14.90, 'price_np' => 16.90, 'image' => "Strawberry_Matcha.jpg"],
];
?>

<?php
$keyword = isset($_GET['keyword']) ? strtolower($_GET['keyword']) : '';
$category = isset($_GET['category']) ? $_GET['category'] : '';

// Only show product results if the search form is submitted (keyword or category selected)
if ($keyword !== '' || $category !== ''):
    $found = false;
?>
<section>
  <h1 class="basicbrew">Product Results</h1>
  <div class="centered-container">
    <div class="product-results">

<?php
    foreach ($products as $p) {
        if (
            (!$keyword || strpos(strtolower($p['name']), $keyword) !== false) &&
            (!$category || $p['category'] === $category)
        ) {
            $found = true;
            $id = strtolower(str_replace(' ', '', $p['name']));

            echo '<div class="image_product">';
            echo '  <a href="#' . $id . '">';
            echo '    <figure><img src="' . $p['image'] . '" alt="' . htmlspecialchars($p['name']) . '"></figure>';
            echo      htmlspecialchars($p['name']);
            echo '  </a>';
            echo '</div>';

            echo '<div id="' . $id . '" class="product">';
            echo '  <div class="popup_product">';
            echo '    <img src="' . $p['image'] . '" alt="' . htmlspecialchars($p['name']) . '" width="150" height="150">';
            echo '    <div class="text_product">';
            echo '      <h1>' . htmlspecialchars($p['name']) . '</h1>';
            echo '      <h2>MP: RM' . number_format($p['price_mp'], 2) . '</h2>';
            echo '      <h2>NP: RM' . number_format($p['price_np'], 2) . '</h2>';
            echo '    </div>';
            echo '    <a href="#" class="close">&times;</a>';
            echo '  </div>';
            echo '</div>';
        }
    } 

    if (!$found) {
        echo '<p>No products found for your search.</p>';
    }
?>

    </div>
  </div>
</section>
<?php endif; ?>



<section> 
<h1 class = "basicbrew"> Basic Brew </h1>
<div class = "line1_product">
	<div class = "image_product">
		<a href = "#americano"> 
		<figure> 
		<img src = "Americano.jpg" alt = "Americano"> 
		</figure> 
		Americano </a>
	</div>

	<div id = "americano" class = "product">
		<div class = "popup_product">
			<img src = "Americano.jpg" alt = "Americano" width = "150" height = "150">
			<div class = "text_product">
				<h1> Americano </h1> 
				<h2> MP: RM8.90 </h2>
				<h2> NP: RM10.90 </h2>
			</div>
			<a href = "#" class = "close"> &times; </a>
		</div>
	</div>

	<div class = "image_product">
		<a href = "#latte"> 
		<figure>
		<img src = "Latte.png" alt = "Latte"> 
		</figure>
		Latte </a>
	</div>

	<div id = "latte" class = "product">
		<div class = "popup_product">
			<img src = "Latte.png" alt = "Latte" width = "150" height = "150" >
			<div class = "text_product">
				<h1> Latte </h1>
				<h2> MP: RM10.90 </h2>
				<h2> NP: RM12.90 </h2>
			</div>
			<a href = "#" class = "close"> &times; </a>
		</div>
	</div>
	
	<div class = "image_product">
		<a href = "#Cappuccino"> 
		<figure>
		<img src = "Cappuccino_Cold_foam.jpeg" alt = "Cappucino">
		</figure> 
		Cappuccino </a>
	</div>

	<div id = "Cappuccino" class = "product">
		<div class = "popup_product">
			<img src = "Cappuccino_Cold_foam.jpeg" alt = "Cappucino" width = "150" height = "150">
			<div class = "text_product">
				<h1> Cappuccino </h1>
				<h2> MP: RM11.90 </h2>
				<h2> NP: RM13.90 </h2>
			</div>
			<a href = "#" class = "close"> &times; </a>
		</div>
	</div>
</div>

<div class = "line2_product">
	<div class = "image_product">
		<a href = "#Aerocano"> 
		<figure>
		<img src = "Aerocano.jpeg" alt = "Aerocano"> 
		</figure>
		Aerocano </a>
	</div>

	<div id = "Aerocano" class = "product">
		<div class = "popup_product">
			<img src = "Aerocano.jpeg" alt = "Aerocano" width = "150" height = "150"> 
			<div class = "text_product">
				<h1> Aerocano </h1>
				<h2> MP: RM10.90 </h2>
				<h2> NP: RM12.90 </h2>
			</div>
			<a href = "#" class = "close"> &times; </a>
		</div>
	</div>
	
	<div class = "image_product">
		<a href = "#Aero-latte"> 
		<figure>
		<img src = "Aero-latte.png" alt = "Aero-latte"> 
		</figure> 
		Aero-latte </a>
	</div>

	<div id = "Aero-latte" class = "product">
		<div class = "popup_product">
			<img src = "Aero-latte.png" alt = "Aero-latte" width = "150" height = "150" >
			<div class = "text_product">
				<h1> Aero-latte </h1> 
				<h2> MP: RM12.90 </h2>
				<h2> NP: RM14.90 </h2>
			</div>
			<a href = "#" class = "close"> &times; </a>
		</div>
	</div>
</div>
</section>

<br> <br>

<section class = "back_other">
	<br>
	<h1 id = "other"> OTHER </h1>

	<section class = "other_menu">
		<a href = "product2.php"> 
			<span> </span>
			<span> </span>
			<span> </span>
			<span> </span>
			Artisan Brew 
		</a>
		<a href = "product3.php"> 
			<span> </span>
			<span> </span>
			<span> </span>
			<span> </span>
			Non-Coffee
		</a>
		<a href = "product4.php"> 
			<span> </span>
			<span> </span>
			<span> </span>
			<span> </span>
			Hot Beverages 
		</a>
	</section>
</section>

<br> 

<section class = "order">
	
	<h1> ORDER </h1>
	<dl class = "line1_order">
		<dt> Contact </dt>
		<dd> <a href = "https://wa.me/c/601116531886"> Whatsapp </a> </dd>
		<dt> Shopee Food </dt>
		<dd> <a href = "https://shopee.com.my/universal-link/now-food/shop/20293613?deep_and_deferred=1&shareChannel=copy_link"> One Jaya </a> </dd>
		<dd> <a href = "https://shopee.com.my/universal-link/now-food/shop/20370505?deep_and_deferred=1&shareChannel=copy_link"> Plaza Merdeka </a> </dd>
	</dl>
	<dl class = "line2_order">
		<dt> Grab </dt>
		<dd> <a href = "https://r.grab.com/g/6-20250410_110606_CAE8AD47D70B434BA4C523E3B911C0AD_MEXMPS-1-C6MZNKMZVXXDCT"> One Jaya </a> </dd>
		<dd> <a href = "https://r.grab.com/g/6-20250410_110755_CAE8AD47D70B434BA4C523E3B911C0AD_MEXMPS-1-C7AKV63CAU6TV6"> Plaza Merdeka </a> </dd>
		<dt> Food Panda </dt>
		<dd> <a href = "https://foodpanda.page.link/seoFXtM5usiGt5te7"> One Jaya </a>
		</dd>
	</dl>
</section>

<br>

<?php include("footer.php"); ?>

</body>
</html>
