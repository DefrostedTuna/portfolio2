<!-- Blog Modal -->
<div class="modal">
	<input class="modal-state" id="blog-modal" type="checkbox" />
	<div class="modal-window">
		<div class="modal-inner">
			<label class="modal-close" for="blog-modal"></label>
			<div class="modal-header">
				<h1><a href="http://rickbennettcoding.com/blog" target="_blank" style="color: black">Rick Bennett's Blog</a></h1>
			</div>
			<p class="intro">A blog dedicated to everything from my development life to my gaming adventures.</p>
			<hr>
			<ul class="intro-features">
				<li>User auth system for admin side</li>
				<li>Password recovery via email</li>
				<li>Relational database tables</li>
				<li>Multiple image upload</li>
				<li>Search feature</li>
				<li>Comments section</li>
				<li>Contact form</li>
				<li>Nicely written, maintainable code</li>
				<li>Responsive design</li>
				<li>Laravel 4</li>
				<li>Foundation 5</li>
			</ul>
			<hr>
			<h3>Everyone's got a blog right?</h3>
			{{ HTML::image('assets/img/blog/blog-home.png', 'blog home', array('style' => 'text-align: center')) }}
			<p class="body">
				My second project and im super proud of it. Put a lot of work into this one.
				Having a good grasp on the backend, I decided to focus on the frontend and see what I could learn from it.
				Took Foundation 5 for a spin and I seem to prefer that over Bootstrap 3, syntax seems a bit more elegant and I enjoy the flat UI design that they use. 
				As with my first project, this one is also responsive thanks to Foundaton's grid system, makes for a quick and easy build.
			</p>
			{{ HTML::image('assets/img/blog/blog-about.png', 'blog about', array('style' => 'text-align: center')) }}
			<p class="body">
				Introduced a few things on the backend this time around. Tried my hand at a multi-image uploader that didn't use javascript and it turned out quite well! 
				Added a WYSIWYG editor to my posting form to make creating and editing easier, although I'll probably remove this later as I prefer to code up 
				things by hand. Implemented a search feature for the first time and made it URL friendly. Set up auto archiving of posts sorted by year, month and day.
				Created a comments section for everyone to well... post comments of course. Now that I'm looking at it, I actualy did put a lot into the backend...
			</p>
			{{ HTML::image('assets/img/blog/blog-admin.png', 'blog admin', array('style' => 'text-align: center')) }}
			<p class="body" style="text-align: center; font-weight: bold; margin: 1rem auto 2rem">
				As always, all of my code is organized and commented to make for easy maintenance.
			</p>
		</div>
	</div>
</div>