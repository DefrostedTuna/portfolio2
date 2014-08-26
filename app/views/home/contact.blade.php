<div id="contact" class="contact-section">
	<div class="contact-wrap">
		<h1>Contact</h1>
		<p><strong>Need to contact me?</strong> Fill out the form below and I'll get back to you as soon as I can!</p>
		{{ Form::open(['url' => URL::route('post-contact')]) }}
			<!-- Name -->
			<div class="form-field">
				@if($errors->has('name'))
				<div class="errors">
					<strong>{{ $errors->first('name') }}</strong>
				</div>
				@endif
				<input type="text" 
					   name="name" 
					   placeholder="Name"
					   value="{{ Input::old('name') ? Input::old('name') : '' }}">
			</div>
		
			<!-- Email -->
			<div class="form-field">
				@if($errors->has('email'))
				<div class="errors">
					<strong>{{ $errors->first('email') }}</strong>
				</div>
				@endif
				<input type="email" 
					   name="email" 
					   placeholder="Email"
					   value="{{ Input::old('email') ? Input::old('email') : '' }}">
			</div>
		
			<!-- Subject -->
			<div class="form-field">
				@if($errors->has('subject'))
				<div class="errors">
					<strong>{{ $errors->first('subject') }}</strong>
				</div>
				@endif
				<input type="text" 
					   name="subject" 
					   placeholder="Subject (optional)"
					   value="{{ Input::old('subject') ? Input::old('subject') : '' }}">
			</div>
			
			<!-- Body -->
			<div class="form-field">
				@if($errors->has('body'))
				<div class="errors">
					<strong>{{ $errors->first('body') }}</strong>
				</div>
				@endif
			</div>
			<textarea name="body"
					  placeholder="What can I do for you?">{{ Input::old('body') ? Input::old('body') : '' }}</textarea>
			
			<input type="submit" value="Drop me a line!">
		{{ Form::close() }}
		
		<!-- Social Media Stuffs -->
		<ul class="contact-icons">
			<li>
				<!-- Github -->
				<a href="https://github.com/DefrostedTuna"><img src="assets/img/github.png"></a>
			</li>
			<li>
				<!-- Linkedin -->
				<a href="https://www.linkedin.com/pub/rick-bennett/85/106/318/"><img src="assets/img/linkedin.png"></a>
			</li>
		</ul>
		
	</div>
</div>