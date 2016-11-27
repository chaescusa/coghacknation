<?php

class HomeController extends BaseController {

	public function showHome(){

		return View::make('index');

	}

	public function showRegister(){

		return View::make('register');

	}

	public function doLogin(){

		$username = Input::get('username');
		$password = Input::get('password');

		if(Auth::attempt(array('username'=>$username,'password'=>$password))){			

			return Redirect::to('dashboard');

		}else{

			Session::flash('error','Invalid Username/Password!');

			return Redirect::to('/');

		}

	}

	public function doRegister(){

		$rules = array(
			'employee_id'=>'required|unique:users',
			'firstname'=>'required',
			'middlename'=>'required',
			'lastname'=>'required',
			'mobile_contact'=>'required',
			'birthplace'=>'required',
			'birthdate'=>'required',
			'address'=>'required',
			'position'=>'required',
			'drinking_status'=>'required',
			'smoking_status'=>'required',
			'drinking_times'=>'integer|min:0',
			'smoking_times'=>'integer|min:0',
			'body_type'=>'required',
			'blood_type'=>'required',
			'height'=>'required',
			'weight'=>'required',
			'email'=>'required|unique:users',
			'username'=>'required|unique:users',
			'password'=>'required|same:confirm_password',
			);

		$validator = Validator::make(Input::all(),$rules);

		if($validator->fails()){

			return Redirect::to('register')->withErrors($validator);

		}else{

			$user = new User;

			$user->employee_id = Input::get('employee_id');
			$user->firstname = Input::get('firstname');
			$user->middlename = Input::get('middlename');
			$user->lastname = Input::get('lastname');
			$user->home_contact = Input::get('home_contact');
			$user->mobile_contact = Input::get('mobile_contact');
			$user->birthplace = Input::get('birthplace');
			$user->birthdate = Input::get('birthdate');
			$user->gender = Input::get('gender');
			$user->position = Input::get('position');

			if(Input::get('drinking_status')=='Occassionally'){

				$user->drinking_status = 'Yes';
				$user->drinking_times = 1;

			}elseif(Input::get('drinking_status')=='No'){

				$user->drinking_status = 'No';

			}else{

				$user->drinking_status = 'Yes';
				$user->drinking_times = Input::get('drinking_times');

			}

			if(Input::get('smoking_status')=='Occassionally'){

				$user->smoking_status = 'Yes';
				$user->smoking_times = 1;

			}elseif(Input::get('smoking_status')=='No'){

				$user->smoking_status = 'No';

			}else{

				$user->smoking_status = 'Yes';
				$user->smoking_times = Input::get('smoking_status');
				
			}

			$user->email = Input::get('email');
			$user->username = Input::get('username');
			$user->password = Hash::make(Input::get('password'));
			$user->save();

			Session::flash('success','User registered!');

			return Redirect::to('/');

		}

	}

	public function showDashboard(){

		$events_for = [];

		$events = ProgramEvent::where('status','!=','Deactivated')->get();

		$user = Auth::user();

		foreach ($events as $event) {
			if($user->eye_status!=$event->eye_status){
				if($user->hearing_status!=$event->hearing_status){
					if(($user->drinking_status!=$event->drinking_status)&&($user->drinking_times<$event->drinking_times)){
						if(($user->smoking_status!=$event->smoking_status)&&($user->smoking_times<$event->smoking_times)){
							if($user->body_type!=$event->body_type){
								
							}
						}
					}
				}
			}else{
				$events_for[] = $event;
			}
		}
		if($user->role=="Admin"){
			$event_count = ProgramEvent::where('status','!=','Deactivated')->count();
			$user_count = User::where('status','!=','Deactivated')->count();
			return View::make('dashboard')->with('events',$events_for)
			->with('event_count',$event_count)
			->with('user_count',$user_count);
		}

		

	}

	public function doLogout(){

		Auth::logout();

		return Redirect::to('/');

	}

	public function showManageUsers(){

		$users = User::all();

		return View::make('manage_users')->with('users',$users);

	}

	public function doAddUser(){

		$rules = array(
			'employee_id'=>'required|unique:users',
			'firstname'=>'required',
			'middlename'=>'required',
			'lastname'=>'required',
			'mobile_contact'=>'required',
			'birthplace'=>'required',
			'birthdate'=>'required',
			'address'=>'required',
			'position'=>'required',
			'drinking_status'=>'required',
			'smoking_status'=>'required',
			'drinking_times'=>'integer|min:0',
			'smoking_times'=>'integer|min:0',
			'body_type'=>'required',
			'blood_type'=>'required',
			'height'=>'required',
			'weight'=>'required',
			'email'=>'required|unique:users',
			'username'=>'required|unique:users',
			'password'=>'required|same:confirm_password',
			);

		$validator = Validator::make(Input::all(),$rules);

		if($validator->fails()){

			return Redirect::to('manage-users')->withErrors($validator);

		}else{

			$user = new User;

			$user->employee_id = Input::get('employee_id');
			$user->firstname = Input::get('firstname');
			$user->middlename = Input::get('middlename');
			$user->lastname = Input::get('lastname');
			$user->home_contact = Input::get('home_contact');
			$user->mobile_contact = Input::get('mobile_contact');
			$user->birthplace = Input::get('birthplace');
			$user->birthdate = Input::get('birthdate');
			$user->gender = Input::get('gender');
			$user->position = Input::get('position');

			if(Input::get('drinking_status')=='Occassionally'){

				$user->drinking_status = 'Yes';
				$user->drinking_times = 1;

			}elseif(Input::get('drinking_status')=='No'){

				$user->drinking_status = 'No';

			}else{

				$user->drinking_status = 'Yes';
				$user->drinking_times = Input::get('drinking_times');

			}

			if(Input::get('smoking_status')=='Occassionally'){

				$user->smoking_status = 'Yes';
				$user->smoking_times = 1;

			}elseif(Input::get('smoking_status')=='No'){

				$user->smoking_status = 'No';

			}else{

				$user->smoking_status = 'Yes';
				$user->smoking_times = Input::get('smoking_status');
				
			}

			$user->email = Input::get('email');
			$user->username = Input::get('username');
			$user->password = Hash::make(Input::get('password'));
			$user->save();

			Session::flash('success','User registered!');

			return Redirect::to('manage-users');

		}

	}

	public function doEditUser(){

		DB::table('users')->where('id','=',Input::get('id'))->update(array(
			'employee_id'=>Input::get('employee_id'),
			'firstname'=>Input::get('firstname'),
			'middlename'=>Input::get('middlename'),
			'lastname'=>Input::get('lastname'),
			'home_contact'=>Input::get('home_contact'),
			'mobile_contact'=>Input::get('mobile_contact'),
			'birthplace'=>Input::get('birthplace'),
			'birthdate'=>Input::get('birthdate'),
			'address'=>Input::get('address'),
			'position'=>Input::get('position'),
			'drinking_status'=>Input::get('drinking_status'),
			'smoking_status'=>Input::get('smoking_status'),
			'drinking_times'=>Input::get('drinking_times'),
			'smoking_times'=>Input::get('smoking_times'),
			'body_type'=>Input::get('body_type'),
			'blood_type'=>Input::get('blood_type'),
			'height'=>Input::get('height'),
			'weight'=>Input::get('weight'),
			'email'=>Input::get('email'),
			));

		Session::flash('success','User updated!');

		return Redirect::to('manage-users');

	}

	public function showManageEvents(){

		$events = ProgramEvent::where('status','!=','Deactivated')->get();

		$venues = Venue::all();

		$interests = Interest::all();

		return View::make('manage_events')->with('events',$events)
		->with('venues',$venues)
		->with('interests',$interests);

	}


	public function doAddEvent(){

		$event = new ProgramEvent;
		// $venue = Venue::find(Input::get('venue'));

		$event->title = Input::get('title');
		$event->category = Input::get('category');
		$event->description = Input::get('description');

		$image_name = Auth::user()->id.'-'.Auth::user()->lastname.'-'.rand().'-event.'.Input::file('image')->getClientOriginalExtension();

		Input::file('image')->move('assets/img/files/UploadedFiles/',$image_name);

		$event->image = 'assets/img/files/UploadedFiles/'.$image_name;
		$event->status = 'For Registration';
		$event->from_date = Input::get('from_date');
		$event->to_date = Input::get('to_date');
		$event->max = Input::get('maxnum');
		$event->points = Input::get('points');
		$event->body_type = Input::get('body_type');
		$event->eye_status = Input::get('eye_status');
		$event->hearing_status = Input::get('hearing_status');
		$event->drinking_status = Input::get('drinking_status');
		$event->smoking_status = Input::get('smoking_status');
		$event->drinking_times = Input::get('drinking_times');
		$event->smoking_times = Input::get('smoking_times');
		// $event->venue = $venue->id;
		$event->save();

		Session::flash('success','Great! Event uploaded');

		return Redirect::to('manage-events');

	}

	public function doEditEvent(){

		DB::table('events')->where('id','=',Input::get('id'))->update(array(
			
			'title'=>Input::get('title'),
			'description'=>Input::get('description'),
			'from_date' => Input::get('from_date'),
			'to_date' => Input::get('to_date'),
			'points' => Input::get('points'),

			));

		Session::flash('success','User updated!');

		return Redirect::to('manage-events');

	}

	public function doAddVenue(){

		$venue = new Venue;

		$venue->title = Input::get('title');
		$venue->address = Input::get('address');
		$venue->status = 'Active';
		$venue->save();

		Session::flash('success','Great! Venue added');

		return Redirect::to('manage-venues');

	}

	public function doDeleteUser($id){

		DB::table('users')->where('id','=',$id)->update(array('status'=>'Deactivated'));

		Session::flash('success','Great! User deleted');

		return Redirect::to('manage-users');

	}

	public function doDeleteEvent($id){

		DB::table('events')->where('id','=',$id)->update(array('status'=>'Deactivated'));

		Session::flash('success','Great! Event deleted');

		return Redirect::to('manage-events');

	}

	public function doDeleteVenue($id){

		DB::table('venues')->where('id','=',$id)->update(array('status'=>'Deactivated'));

		Session::flash('success','Great! Venue deleted');

		return Redirect::to('manage-venues');

	}

	public function showManageVenues(){

		$venues = Venue::where('status','!=','Deactivated')->get();

		return View::make('manage_venues',$venues)->with('venues',$venues);

	}

	// //for event points
	// public function showManageEventPoints(){

	// 	$events = ProgramEvent::where('status','!=','Deactivated')->get();

	// 	$venues = Venue::where('status','!=','Deactivated')->get();

	// 	$event_points = EventPoint::all();

	// 	return View::make('manage_event_points')->with('events',$events)
	// 	->with('venues',$venues)
	// 	->with('event_points',$event_points);

	// }

	// public function doAddEventPoint(){

	// 	$event_point = new EventPoint;

	// 	$event_point->event_id = Input::get('event_id');
	// 	$event_point->points_equivalent = Input::get('points_equiv');
	// 	$event_point->save();

	// 	Session::flash('success','Great! Venue added');

	// 	return Redirect::to('manage-event-points');

	// }

	public function showEventAttendees($id){

		$attendees = Attendee::where('status','!=','Deactivated')->get();

		$attendee_count = Attendee::where('status','!=','Deactivated')->count();

		$users = User::where('status','!=','Deactivated')->get();

		$event = ProgramEvent::find($id);

		return View::make('view_attendees')->with('users',$users)
		->with('attendees',$attendees)
		->with('event',$event);

	}

	public function showViewProfile($id){

		$user = User::find($id);

		return View::make('view_profile')->with('user',$user);

	}

	public function showViewEvent($id){

		$event = ProgramEvent::find($id);

		return View::make('view_event')->with('event',$event);

	}

	public function showMyEvents(){

		$attendees = Attendee::where('user_id','=',Auth::user()->id)->get();

		return View::make('my_events')->with('attendees',$attendees);

	}

	public function showManageInterests(){

		$interests = Interest::all();

		return View::make('manage_interests')->with('interests',$interests);

	}

	public function doAddInterest(){

		$interests = new Interest;

		$interests->description = Input::get('interest');
		$interests->save();

		Session::flash('success','Great! Interest added');

		return Redirect::to('manage-interests');
	}

	public function doEditInterest(){

		DB::table('interests')->where('id','=',Input::get('id'))->update(array(
			
			'description'=>Input::get('interest'),


			));

		Session::flash('success','User updated!');

		return Redirect::to('manage-interests');

	}

	public function doRegisterAttendee(){

		// $rules = array(
		// 	'user_id'=>'unique:attendees',
		// 	);

		// $validator = Validator::make(Input::all(),$rules);

		// if($validator->fails()){

		// 	return Redirect::to('view-event/'.Input::get('id'))->withErrors($validator);

		// }else{

			$attendee = new Attendee;

			$event = ProgramEvent::find(Input::get('id'));

			$attendee->user_id = Auth::user()->id;
			$attendee->user_firstname = Auth::user()->firstname;
			$attendee->user_middlename = Auth::user()->middlename;
			$attendee->user_lastname = Auth::user()->lastname;
			$attendee->user_eye_status = Auth::user()->eye_status;
			$attendee->user_hearing_status = Auth::user()->hearing_status;
			$attendee->user_drinking_status = Auth::user()->drinking_status;
			$attendee->user_smoking_status = Auth::user()->smoking_status;
			$attendee->user_drinking_times = Auth::user()->drinking_times;
			$attendee->user_smoking_times = Auth::user()->smoking_times;
			$attendee->event_id = Input::get('id');
			$attendee->event_title = $event->title;
			$attendee->event_category = $event->category;
			$attendee->event_description = $event->description;
			$attendee->event_from_date= $event->from_date;
			$attendee->event_to_date = $event->to_date;
			$attendee->event_points = $event->points;
			$attendee->event_image = $event->image;
			$attendee->status = 'Registered';
			$attendee->save();

			$add_points = $event->points + Auth::user()->current_points;

			DB::table('users')->where('id','=',Auth::user()->id)->update(
				array('current_points'=>$add_points));


			Session::flash('success','Successfully joined!');

			return Redirect::to('my-events'); 

		// }

	}

	public function doDeleteAttendee($id){

		$attendee = Attendee::find($id);

		$subtract_points = Auth::user()->current_points - $attendee->event_points;

		DB::table('users')->where('id','=',Auth::user()->id)->update(
				array('current_points'=>$subtract_points,));

		$attendee->delete();

		Session::flash('success','Event successfully cancelled');

		return Redirect::to('my-events');

	}

	public function doRemoveAttendee($id){

		$attendee = Attendee::find($id);

		$user = User::find($attendee->user_id);

		$subtract_points = $user->current_points - $attendee->event_points;

		DB::table('users')->where('id','=',$user->id)->update(
				array('current_points'=>$subtract_points));

		$attendee->delete();

		Session::flash('success','Event successfully cancelled');

		return Redirect::to('view-attendees/'.Session::get('id'));

	}

	public function doConfirmAttendee($id){

		// $rules = array(
		// 	'user_id'=>'unique:attendees',
		// 	);

		// $validator = Validator::make(Input::all(),$rules);

		// if($validator->fails()){

		// 	return Redirect::to('view-event/'.Input::get('id'))->withErrors($validator);

		// }else{

			$attendee = Attendee::find($id);
			$user = User::find($attendee->user_id);

			DB::table('attendees')->where('id','=',$id)->update(
				array('status'=>'Attended',));

			DB::table('users')->where('id','=',$attendee->user_id)->update(
				array('available_points'=>$user->current_points,));
			
			Session::flash('success','Successfully joined!');

			return Redirect::to('view-attendees/'.Session::get('id')); 

		// }

	}

}
