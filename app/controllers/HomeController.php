<?php

class HomeController extends BaseController {

	public function getIndex() {
		return View::make('index');
	}
	
	public function postContact() {
		$validator = Validator::make(Input::all(), [
			'name' 		=> 'required|min:3',
			'email' 	=> 'required|email|min:3',
			'subject' 	=> 'min:3',
			'body' 		=> 'required|min:3'
		]);
		
		if($validator->fails()) {
			//redirect back with errors
			return 	Redirect::route('home', '#contact')
					->withErrors($validator)
					->withInput()
					->with('global', 'Please correct the errors to proceed.');
		} else {
			//process the email and send
			$name 		= Input::get('name');
			$email 		= Input::get('email');
			$subject 	= Input::has('subject') ? Input::get('subject') : '(No Subject)';
			$body 		= Input::get('body');
			
			$mail = Mail::send('emails.contact', // view template
							   ['email' => $email, 'name' => $name, 'subject' => $subject, 'body' => $body], // variables to use in view 
							   function ($message) use($subject) { // message function passing in subject variable for the subject field
								   	$message->to('RBennett1106@Gmail.com')
									   		->subject($subject);
							   });
			
			if(count(Mail::failures())){
				// Mail failed to send
    			return 	Redirect::route('home', '#contact')
							->with('global', 'There was a problem sending the message.');
			} else {
				// Mail succeeded in sending
				return 	Redirect::route('home', '#contact')
						->with('global', "Message has been sent! I'll get back to you as soon as I am able to!");	
			}
			// Fallback error
			return 	Redirect::route('home')
					->with('global', 'There was a problem processing the request.');
		}
	}

}
