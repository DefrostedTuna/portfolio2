<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	{{ HTML::style('assets/css/main.css') }}
</head>
<body>
	<div id="home" class="header-bg">
		<div class="header-mask"></div>
		<div class="header-wrap">
			<nav>
				<a href="#home">Home</a>
				<a href="#about">About</a>
				<a href="#showcase">Showcase</a>
				<a href="#contact">Contact</a>
				<a href="http://rickbennettcoding.com/blog">Blog</a>
			</nav>
			<div class="centered-container">
				<h1><span>Rick Bennett</span></h1>
				<p>I make websitez and shiz</p>
			</div>
		</div>
	</div>
	
	<div id="about" class="about-bg">
		<div class="about-mask"></div>
		<div class="about-wrap">
			<h1>Who is this guy?</h1>
			<img class="about-headshot" src="">
			<p><strong>I'm a web developer, plain and simple.</strong></p>
			<p>
				Hello, my name is Rick Bennett and I like to create things. 
				I'm an effeciency driven [insert catchy words here] PHP developer based in Elizabethtown, Kentucky.
				Web developent (or rather programming in general it seems) is a huge passion of mine.
				At almost any point of the day, you'll find me picking apart technology at its core simply to understand how and why it works.
				<strong>talk about effeciency and stuffs</strong>
				
			</p>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
				Dolore modi praesentium ducimus quasi ea laborum voluptate laboriosam quaerat at pariatur, 
				officiis doloribus, quisquam quo non numquam labore error nesciunt consequatur.
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa atque, perspiciatis et cum itaque, 
				deserunt esse voluptatibus perferendis officiis, velit, temporibus! Delectus maxime fugiat mollitia, 
				perspiciatis ab quam nulla distinctio.
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis itaque voluptas consequatur recusandae. 
				Saepe natus, porro quis culpa voluptatibus optio inventore commodi suscipit atque, voluptates sit pariatur. 
				Cumque, delectus exercitationem?
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam eos debitis natus perferendis dolores sunt quis 
				eligendi cumque, repellendus rem dolor, tenetur et ipsa, repudiandae veritatis. Quaerat voluptates ut placeat.
			</p>
		</div>
	</div>

	<div id="showcase" class="showcase-bg">
		<div class="showcase-mask"></div>
		<div class="showcase-wrap">
			<h1>Some of my work</h1>
			<div class="work-section">
				<span class="work-img"></span>
				<span class="work-img"></span>
				<span class="work-img"></span>
				<span class="work-img"></span>
				<span class="work-img"></span>
				<span class="work-img"></span>
				<span class="work-img"></span>
				<span class="work-img"></span>
			</div>
		</div>
	</div>

	<div id="contact" class="contact-bg">
		<div class="contact-mask"></div>
		<div class="contact-wrap">
			<h1>Contact</h1>
			<p><strong>Need to contact me?</strong> Fill out the form below and I'll get back to you as soon as I can!</p>
			<input type="text" placeholder="Name">
			<input type="text" placeholder="Email">
			<input type="text" placeholder="Subject (optional)">
			<textarea placeholder="What can I do for you?"></textarea>
			<input type="submit" value="Drop me a line!">
		</div>
	</div>

	<div class="footer">
		<div class="footer-wrap">
			<nav>
				<a href="#home">Home</a>
				<a href="#about">About</a>
				<a href="#showcase">Showcase</a>
				<a href="#contact">Contact</a>
				<a href="http://rickbennettcoding.com/blog">Blog</a>
			</nav>
			<hr>
			<p>&copy Rick Bennett 2014</p>
		</div>
	</div>

	{{ HTML::script('http://code.jquery.com/jquery-2.1.1.min.js')}}
	{{ HTML::script('assets/js/functions.js') }}
</body>
</html>