<!-- Checklist Modal -->
<div class="modal">
	<input class="modal-state" id="checklist-modal" type="checkbox" />
	<div class="modal-window">
		<div class="modal-inner">
			<label class="modal-close" for="checklist-modal"></label>
			<div class="modal-header">
				<h1><a href="http://rickbennettcoding.com/checklist" target="_blank" style="color: black">Checklist Demo App</a></h1>
			</div>
			<p class="intro">This was my first public application used to demonstrate my understanding of relational database tables.</p>
			<hr>
			<ul class="intro-features">
				<li>User auth system</li>
				<li>Email registration</li>
				<li>Password recovery via email</li>
				<li>Relational database tables</li>
				<li>Responsive design</li>
				<li>Laravel 4</li>
				<li>Bootstrap 3</li>
			</ul>
			<hr>
			{{ HTML::image('assets/img/checklist/checklist-home.png', 'checklist home', array('style' => 'float: right')) }}
			<p class="body">
				Simple application really, but I figured it was a good first project to immerse myself with database manipulation.
			</p>
			
			<p class="body">
				User auth system is using the built in authentication system packed with Laravel 4. 
				Users register and activate thier account via email with a code appended to a URL, after which they can successfully log in.
			</p>
			<p class="body">
				Upon logging in users are met with the option to change account information such as name and email, or manage checklists. 
				Managing checklists consists of simply adding or removing items, and toggling whether the item is checked.
			</p>
			{{ HTML::image('assets/img/checklist/checklist-items.png', 'checklist home', array('style' => 'float: left')) }}
			<p class="body" style="margin-bottom: 2rem">
				The database structure is fairly straightforward. You've got your users table which stores... you guessed it - user information,
				a checklist table which stores checklists and ties them to thier specific owners via primary id fields, and lastly the items table 
				which stores the items belonging to each checklist. So what we've got here in terms of hierarchy is; each user has many checklists, 
				and each checklist has many items. Again, this was my first application I had ever made and going back and looking at it now 
				the concept is super, super simple. That being said, at the time it was very insightful on how to structure relational databases
				and retrieve information in an easy, logical way.
			</p>
		</div>
	</div>
</div>