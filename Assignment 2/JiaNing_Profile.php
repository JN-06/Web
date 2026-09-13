<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8" />
<meta name="description" content="Demonstrates some basic HTML content elements" />
<meta name="keywords" content="HTML5, tags" />
<meta name="author" content="A Lecturer" />

<link rel="stylesheet" type="text/css" href="style.css">

<title>Profile Page</title>
</head>

<body class = "body_jn">

<header>
	<div class="header-container">
		<a href="previous-page.html" class="back-button">← Back</a>
		<h1 class="title">Profile Page</h1>
	</div>
</header>


<div class = "me">

	<img src = "Profile_picture.jpg" alt = "Chen Jia Ning's picture" class = "picture_jn">
	<p class = "name"> Chen Jia Ning </p>

	<hr>

</div>

<section class = "information_jn">
	
	<p class = "student_num"> Student Number: <span class = "num"> 104391287 </span> </p>
	
	<p class = "course"> Course: <span class = "course_name_jn"> Bachelor in Computer Science </span> </p>
	

</section>

<hr>

<section class = "table_jn">
<table>

	<tr>
	<th> Demographic Information </th>
	<td class = "brief_jn"> I am a university student at Swinburne Sarawak majoring in Computer Science. I have a strong interest in programming, artificial intelligence, and software development. My academic journey has allowed me to develop skills in various programming languages and problem-solving techniques. </td>
	</tr>

	<tr>
	<th> Description of Hometown </th>
	<td class = "brief_jn"> My hometown is Kuching. It is the capital city of Sarawak, Malaysia, and is known as the "Cat City" due to its name, which means "cat" in Malay. Kuching is known for its diverse ethnic groups, including the Iban, Malay, Chinese, Bidayuh, and Orang Ulu, making it a hub of cultural festivals and deliciuos local cuisine. With its warm hospitality, rich history, and natural beauty, Kuching is a unique and charming city that beautifully represents the culture and spirit of Sarawak. </td>
	</tr>
	
	<tr>
	<th> A great achievement in my life </th>
	<td class = "brief_jn"> One of my greatest achivements so far was achieving excellent results in the Sijil Pelajaran Malaysia (SPM) examination. The journey was challeging, as I had to manage multiple subjects, revise consistenly, and stay discilpined in my studies. Throughout my preparation, I faced challenges such as time management, balancing revision with extracurricular activities, and handling exam stress. When I finally received my 7A's result, I felt incredibly proud of my hard work and perseverance. The achivement boosted my confidence and motivated me to continue excelling in my academic journey in university. </td>
	</tr>

</table>

<hr>

<h2 class = "my_hobby"> My Hobby </h2>

<table class = "table_jn">
	<tr>
		<th class = "game"> Play game </th>
		<td> 
		<div class = "flip_card_game">
			<div class = "flip_card_inner">
				<div class = "flip_card_front">
					<img class = "sky" src = "Sky.jpg" alt = "Sky: Children of Light" width = "100" height = "100">
				</div>
				<div class = "flip_card_back">
					<div class = "flip_card_back_game">
						<a href = "https://www.thatskygame.com/"> <strong> Sky: Children of Light </strong> </a>
					</div>
				</div>
			</div>
		</div>
	
		<div class = "flip_card_game">
			<div class = "flip_card_inner">
				<div class = "flip_card_front">
					<img class = "peace" src = "Game_peace.jpg" alt = "Game for Peace" width = "100" height = "100">
				</div>
				<div class = "flip_card_back">
					<div class = "flip_card_back_game">
						<a href = "	https://gp.qq.com/cp/a20241008mnq/index.html"> <strong> Game for Peace </strong> </a>
					</div>
				</div>
			</div>
		</div>
	</td>
	</tr>
		
	<tr>
		<th> Dancing </th>
		<td>
			<div>
			<iframe class = "dance" src="http://www.youtube.com/embed/MPyvBYaCoLc?si=S085G7vrUo27UIDf">
			</iframe>
			</div>
		</td>
	</tr>
	
	<tr>
		<th> Watch drama </th>
		<td>
		<div class = "flip_card_watch">
			<div class = "flip_card_inner">
				<div class = "flip_card_front">
					<img class = "drama1" src = "Drama1.jpg" alt = "Drama 1" width = "110" height = "165">
				</div>
				<div class = "flip_card_back">
					<div class = "flip_card_back_drama">
						<a href = "	https://baike.baidu.com/item/%E6%B0%B8%E5%A4%9C%E6%98%9F%E6%B2%B3/63111838"> <strong> Love Game in Eastern Fantasy </strong> </a>
					</div>
				</div>
			</div>
		</div>
		
		<div class = "flip_card_watch">
			<div class = "flip_card_inner">
				<div class = "flip_card_front">
					<img class = "drama2" src = "Drama2.jpg" alt = "Drama 2" width = "110" height = "165">
				</div>
				<div class = "flip_card_back">
					<div class = "flip_card_back_drama">
						<a href = "	https://baike.baidu.com/item/%E8%8B%8D%E5%85%B0%E8%AF%80/53935024"> <strong> Love Between Fairy and Devil </strong> </a>
					</div>
				</div>
			</div>
		</div>
		</td>
	</tr>
	
	<tr>
		<th> Watch movie </th>
		<td>
		<div class = "flip_card_watch">
			<div class = "flip_card_inner">
				<div class = "flip_card_front">
					<img class = "movie1" src = "Movie1_JN.jpg" alt = "Movie 1" width = "110" height = "165">
				</div>
				<div class = "flip_card_back">
					<iframe class = "movie_trailer" src = "https://www.youtube.com/embed/0S7_LgTiHnA?si=rXqBrl7XR0bFX-I7"> </iframe>
				</div>
			</div>
		</div>
		
		<div class = "flip_card_watch">
			<div class = "flip_card_inner">
				<div class = "flip_card_front">
					<img class = "movie2" src = "Movie2_JN.jpg" alt = "Movie 2" width = "110" height = "165">
				</div>
				<div class = "flip_card_back">
					<iframe class = "movie_trailer" src="https://www.youtube.com/embed/nsXQijb0F4I?si=8oNvvySLDMsdPHIB"> </iframe>
				</div>
			</div>
		</div>
		</td>
	</tr>
	
	<tr>
		<th> Listen music </th>
		<td>
			<div class = "slider">
				<img src = "Music1_JN.jpg" alt = "Music">
				<img src = "Music2_JN.jpg" alt = "Music">
				<img src = "Music3_JN.jpg" alt = "Music">
				<img src = "Music4_JN.jpg" alt = "Music">
				<img src = "Music5_JN.jpg" alt = "Music">
			</div>
			
		</td>
	</tr>

</table>
</section>
<hr>

<footer id = "footer_pp">
	<a href = "mailto:104391287@students.swinburne.edu.my" class = "email_jn"> Email Me </a> 
</footer>
