<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Rick Bennett | Portfolio</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	{{ HTML::style('assets/css/main.css') }}
</head>
<body>
	<div id="home" class="header-section">
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
	
	<div id="about" class="about-section">
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

	
	<div id="showcase" class="showcase-section">
	
		<div class="showcase-wrap">
			<h1>Some of my work</h1>
			<div class="work-section">
				<!-- First Project -->
				<div class="work-img">
					<label for="modal-1" class="work-img-overlay">
						<strong>Checklist Demo App</strong>
					</label>
				</div>
				<!-- Second Project -->
				<div class="work-img">
					<label for="modal-2" class="work-img-overlay">
						<strong>Rick Bennett Coding Blog</strong>
					</label>
				</div>
				<div class="work-img">
					<a href="" class="work-img-overlay">
						<strong>Overlay</strong>
					</a>
				</div>
				<div class="work-img">
					<a href="" class="work-img-overlay">
						<strong>Overlay</strong>
					</a>
				</div>
			</div>
			
			<div class="modalsss">
				<!-- First Project Modal -->
				<div class="modal">
					<input class="modal-state" id="modal-1" type="checkbox" />
					<div class="modal-window">
						<div class="modal-inner">
							<label class="modal-close" for="modal-1"></label>
							<h1>This is gonna be a modal for my work!</h1>
							<p class="intro">Intro text text givng basic information about the project.</p>
							<p class="body">
								This is where the body text will go, gonna put in depth explanations of the features and whatnot, along with pictures of some of the highlights on the site.
							</p>
							<img src="https://lorempixel.com/640/480" style="float: right">
							<p class="body">
								Body text lorem ipsum dolor ipsum dolor sit sit possimus amet, consectetur adipisicing elit. 
								Itaque, placeat, explicabo, veniam quos aperiam molestias eriam molestias molestiae suscipit 
								ipsum enim quasi sit possimus quod atque nobis voluptas earum odit accusamus quibusdam.
							</p>
						</div>
					</div>
				</div>
				
				<!-- Second Project Modal -->
				<div class="modal">
					<input class="modal-state" id="modal-2" type="checkbox" />
					<div class="modal-window">
						<div class="modal-inner">
							<label class="modal-close" for="modal-2"></label>
							<div class="modal-header">	
								<h1>This is gonna be a modal for my work number 2!</h1>
							</div>
							<p class="intro">Intro text text givng basic information about the project.</p>
							<p class="body">
								blah blah blah.
							</p>
							<img src="https://lorempixel.com/640/480" style="float: right">
							<p class="body">
								Body text lorem ipsum dolor ipsum dolor sit sit possimus amet, consectetur adipisicing elit. Itaque, placeat, explicabo, veniam quos aperiam molestias eriam molestias molestiae suscipit ipsum enim quasi sit possimus quod atque nobis voluptas earum odit accusamus quibusdam.
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer id porttitor justo, quis vehicula nisi. Morbi bibendum, arcu sed feugiat aliquam, libero turpis elementum elit, eu accumsan tortor tellus a dolor. Aliquam blandit pellentesque pellentesque. Nunc lacinia nisi et nisi sollicitudin, at commodo diam tempor. Morbi porttitor, arcu quis dignissim lobortis, nisi elit venenatis ante, et vulputate augue eros sit amet sapien. Nulla sit amet lacus sem. In hac habitasse platea dictumst. Vivamus dictum scelerisque imperdiet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque sagittis ligula non malesuada. Sed feugiat, ipsum quis venenatis gravida, ante purus ultrices velit, at ultrices velit ligula id ante.

								Duis urna nunc, aliquet sit amet quam posuere, venenatis fringilla urna. Aliquam erat volutpat. Nulla lobortis adipiscing mi non porta. Aliquam rutrum elementum quam, ut pretium velit mollis ut. Nullam hendrerit nulla vitae felis adipiscing, a placerat lectus pharetra. Ut sollicitudin eleifend nulla, ut posuere augue adipiscing vel. Nullam quis accumsan justo. Quisque fermentum ac tellus et ultricies.

								Duis sit amet lobortis augue. Sed ac laoreet leo. Vivamus vitae magna nisi. Mauris aliquam, leo sed consequat pretium, enim massa facilisis nibh, vel faucibus lacus velit quis nunc. Duis ut mauris ut quam consectetur imperdiet. Proin bibendum dui nec mi tempus, eu mattis felis tempus. Integer interdum blandit sapien. Integer et felis neque. Nunc sagittis nisl vel congue luctus. Phasellus vitae magna blandit, sollicitudin nunc nec, ullamcorper elit.

								Nunc venenatis, erat at elementum ultrices, mi enim accumsan leo, blandit vehicula ligula erat sit amet dolor. Nullam vel ultrices leo, ut posuere dolor. Maecenas dignissim gravida felis, ac tempus ante vestibulum et. Sed molestie orci quis sagittis semper. In hac habitasse platea dictumst. Duis consequat odio a elit accumsan interdum. Sed et risus urna. Nulla ac fermentum ipsum. Phasellus laoreet aliquet urna vel porta. Pellentesque tristique eleifend erat, eget dictum urna porta nec. Quisque feugiat convallis sodales. Suspendisse rhoncus at metus sit amet fringilla.

								Fusce varius, mi in congue posuere, tellus felis varius nisi, quis rutrum nibh tortor non est. In vestibulum, ante ac elementum fringilla, augue justo tincidunt justo, non tempor sapien lorem et nisi. Donec nec risus commodo purus auctor elementum non eu justo. Nam enim metus, bibendum eget risus sit amet, convallis fringilla sem. Curabitur vitae enim id mi convallis vestibulum. Nam ac auctor elit, et accumsan nisi. Quisque hendrerit orci at pulvinar vehicula. Quisque sit amet lorem urna. Maecenas lorem quam, vulputate sit amet tempus in, dapibus id turpis. Quisque ultricies eu magna quis accumsan. Praesent eu aliquam sapien, lobortis porttitor diam. Nam quis faucibus justo.
							</p>
						</div>
					</div>
				</div>				
			</div>
		</div>
	</div>

	<div id="contact" class="contact-section">
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
