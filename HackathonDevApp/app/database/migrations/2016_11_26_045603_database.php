<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Database extends Migration {

	public function up()
	{

		Schema::create('users',function(Blueprint $table){

			$table->increments('id');
			$table->integer('employee_id');
			$table->string('firstname');
			$table->string('middlename');
			$table->string('lastname');
			$table->string('position');
			$table->string('salary');
			$table->string('address');
			$table->string('email');
			$table->string('mobile_contact');
			$table->string('home_contact');
			$table->string('birthplace');
			$table->date('birthdate');
			$table->string('height');
			$table->string('weight');
			$table->string('gender');
			$table->string('eye_status');
			$table->string('hearing_status');
			$table->string('body_type');
			$table->string('blood_type');
			$table->string('drinking_status');
			$table->integer('drinking_times');
			$table->string('smoking_status');
			$table->integer('smoking_times');
			$table->string('role');
			$table->string('status');
			$table->string('username');
			$table->string('password');
			$table->integer('current_points');
			$table->integer('available_points');
			$table->rememberToken();
			$table->timestamps();

		});

		// JOIN USERS
		Schema::create('interests',function(Blueprint $table){

			$table->increments('id');
			$table->string('description');
			$table->string('category');
			$table->integer('user_id');
			$table->integer('user_employee_id');
			$table->string('user_firstname');
			$table->string('user_middlename');
			$table->string('user_lastname');
			$table->string('user_position');
			$table->string('user_salary');
			$table->string('user_address');
			$table->string('user_email');
			$table->string('user_mobile_contact');
			$table->string('user_home_contact');
			$table->string('user_birthplace');
			$table->date('user_birthdate');
			$table->string('user_height');
			$table->string('user_weight');
			$table->string('user_gender');
			$table->string('user_eye_status');
			$table->string('user_hearing_status');
			$table->string('user_body_type');
			$table->string('user_blood_type');
			$table->string('user_drinking_status');
			$table->integer('user_drinking_times');
			$table->string('user_smoking_status');
			$table->integer('user_smoking_times');
			$table->string('user_role');
			$table->string('user_username');
			$table->timestamps();

		});
		// JOIN USERS

		// JOIN USERS INTERESTS
		Schema::create('hobbies',function(Blueprint $table){

			$table->increments('id');
			$table->string('description');
			$table->string('category');
			$table->integer('user_id');
			$table->integer('user_employee_id');
			$table->string('user_firstname');
			$table->string('user_middlename');
			$table->string('user_lastname');
			$table->string('user_position');
			$table->string('user_salary');
			$table->string('user_address');
			$table->string('user_email');
			$table->string('user_mobile_contact');
			$table->string('user_home_contact');
			$table->string('user_birthplace');
			$table->date('user_birthdate');
			$table->string('user_height');
			$table->string('user_weight');
			$table->string('user_gender');
			$table->string('user_eye_status');
			$table->string('user_hearing_status');
			$table->string('user_body_type');
			$table->string('user_blood_type');
			$table->string('user_drinking_status');
			$table->integer('user_drinking_times');
			$table->string('user_smoking_status');
			$table->integer('user_smoking_times');
			$table->string('user_role');
			$table->string('user_username');
			$table->timestamps();

		});
		// JOIN USERS INTERESTS

		Schema::create('events',function(Blueprint $table){

			$table->increments('id');
			$table->string('title');
			$table->string('category');
			$table->longtext('description');
			$table->text('image');
			$table->string('status');
			$table->integer('max');
			$table->date('from_date');
			$table->date('to_date');
			$table->integer('points');
			$table->string('eye_status');
			$table->string('hearing_status');
			$table->string('body_type');
			$table->string('blood_type');
			$table->string('drinking_status');
			$table->integer('drinking_times');
			$table->string('smoking_status');
			$table->integer('smoking_times');
			$table->integer('user_id');
			$table->integer('user_employee_id');
			$table->string('user_firstname');
			$table->string('user_middlename');
			$table->string('user_lastname');
			$table->string('user_position');
			$table->string('user_salary');
			$table->string('user_address');
			$table->string('user_email');
			$table->string('user_mobile_contact');
			$table->string('user_home_contact');
			$table->string('user_birthplace');
			$table->date('user_birthdate');
			$table->string('user_height');
			$table->string('user_weight');
			$table->string('user_gender');
			$table->string('user_role');
			$table->string('user_username');
			$table->timestamps();

		});

		// JOIN EVENTS
		Schema::create('images',function(Blueprint $table){

			$table->increments('id');
			$table->string('title');
			$table->longtext('description');
			$table->date('from_date');
			$table->date('to_date');
			$table->string('per_hour');
			$table->string('status');
			$table->text('image');
			$table->string('event_title');
			$table->string('event_category');
			$table->longtext('event_description');
			$table->text('event_image');
			$table->integer('user_id');
			$table->integer('user_employee_id');
			$table->string('user_firstname');
			$table->string('user_middlename');
			$table->string('user_lastname');
			$table->string('user_position');
			$table->string('user_salary');
			$table->string('user_address');
			$table->string('user_email');
			$table->string('user_mobile_contact');
			$table->string('user_home_contact');
			$table->string('user_birthplace');
			$table->date('user_birthdate');
			$table->string('user_height');
			$table->string('user_weight');
			$table->string('user_gender');
			$table->string('user_eye_status');
			$table->string('user_hearing_status');
			$table->string('user_body_type');
			$table->string('user_blood_type');
			$table->string('user_drinking_status');
			$table->integer('user_drinking_times');
			$table->string('user_smoking_status');
			$table->integer('user_smoking_times');
			$table->string('user_role');
			$table->string('user_username');
			$table->timestamps();

		});
		// JOIN EVENTS

		// JOIN EVENTS
		Schema::create('videos',function(Blueprint $table){

			$table->increments('id');
			$table->string('title');
			$table->longtext('description');
			$table->text('file');
			$table->string('event_title');
			$table->string('event_category');
			$table->longtext('event_description');
			$table->text('event_image');
			$table->integer('user_id');
			$table->integer('user_employee_id');
			$table->string('user_firstname');
			$table->string('user_middlename');
			$table->string('user_lastname');
			$table->string('user_position');
			$table->string('user_salary');
			$table->string('user_address');
			$table->string('user_email');
			$table->string('user_mobile_contact');
			$table->string('user_home_contact');
			$table->string('user_birthplace');
			$table->date('user_birthdate');
			$table->string('user_height');
			$table->string('user_weight');
			$table->string('user_gender');
			$table->string('user_eye_status');
			$table->string('user_hearing_status');
			$table->string('user_body_type');
			$table->string('user_blood_type');
			$table->string('user_drinking_status');
			$table->integer('user_drinking_times');
			$table->string('user_smoking_status');
			$table->integer('user_smoking_times');
			$table->string('user_role');
			$table->string('user_username');
			$table->timestamps();

		});
		// JOIN EVENTS

		// JOIN EVENTS USERS
		Schema::create('experiences',function(Blueprint $table){

			$table->increments('id');
			$table->string('event_title');
			$table->string('event_category');
			$table->longtext('event_description');
			$table->text('event_image');
			$table->integer('user_id');
			$table->integer('user_employee_id');
			$table->string('user_firstname');
			$table->string('user_middlename');
			$table->string('user_lastname');
			$table->string('user_position');
			$table->string('user_salary');
			$table->string('user_address');
			$table->string('user_email');
			$table->string('user_mobile_contact');
			$table->string('user_home_contact');
			$table->string('user_birthplace');
			$table->date('user_birthdate');
			$table->string('user_height');
			$table->string('user_weight');
			$table->string('user_gender');
			$table->string('user_eye_status');
			$table->string('user_hearing_status');
			$table->string('user_body_type');
			$table->string('user_blood_type');
			$table->string('user_drinking_status');
			$table->integer('user_drinking_times');
			$table->string('user_smoking_status');
			$table->integer('user_smoking_times');
			$table->string('user_role');
			$table->string('user_username');
			$table->timestamps();

		});
		// JOIN EVENTS USERS

		// JOIN EVENTS USERS EXPERIENCES
		Schema::create('donations',function(Blueprint $table){

			$table->increments('id');
			$table->string('type');
			$table->string('amount');
			$table->integer('user_id');
			$table->integer('user_employee_id');
			$table->string('user_firstname');
			$table->string('user_middlename');
			$table->string('user_lastname');
			$table->string('user_position');
			$table->string('user_salary');
			$table->string('user_address');
			$table->string('user_email');
			$table->string('user_mobile_contact');
			$table->string('user_home_contact');
			$table->string('user_birthplace');
			$table->date('user_birthdate');
			$table->string('user_height');
			$table->string('user_weight');
			$table->string('user_gender');
			$table->string('user_eye_status');
			$table->string('user_hearing_status');
			$table->string('user_body_type');
			$table->string('user_blood_type');
			$table->string('user_drinking_status');
			$table->integer('user_drinking_times');
			$table->string('user_smoking_status');
			$table->integer('user_smoking_times');
			$table->string('user_role');
			$table->string('user_username');
			$table->timestamps();

		});
		// JOIN EVENTS USERS EXPERIENCES


		Schema::create('venues',function(Blueprint $table){

			$table->increments('id');
			$table->string('title');
			$table->string('category');
			$table->string('address');
			$table->string('status');
			$table->timestamps();

		});

		// Schema::create('event_points',function(Blueprint $table){

		// 	$table->increments('id');
		// 	$table->integer('event_id');
		// 	$table->integer('points_equivalent');
		// 	$table->integer('user_id');
		// 	$table->integer('user_employee_id');
		// 	$table->string('user_firstname');
		// 	$table->string('user_middlename');
		// 	$table->string('user_lastname');
		// 	$table->string('user_position');
		// 	$table->string('user_salary');
		// 	$table->string('user_address');
		// 	$table->string('user_email');
		// 	$table->string('user_mobile_contact');
		// 	$table->string('user_home_contact');
		// 	$table->string('user_birthplace');
		// 	$table->date('user_birthdate');
		// 	$table->string('user_height');
		// 	$table->string('user_weight');
		// 	$table->string('user_gender');
		// 	$table->string('user_eye_status');
		// 	$table->string('user_hearing_status');
		// 	$table->string('user_body_type');
		// 	$table->string('user_blood_type');
		// 	$table->string('user_drinking_status');
		// 	$table->integer('user_drinking_times');
		// 	$table->string('user_smoking_status');
		// 	$table->integer('user_smoking_times');
		// 	$table->string('user_role');
		// 	$table->string('user_username');
		// 	$table->timestamps();

		// });

		Schema::create('attendees',function(Blueprint $table){

			$table->increments('id');
			$table->integer('user_id');
			//$table->string('status');
			$table->string('user_firstname');
			$table->string('user_middlename');
			$table->string('user_lastname');
			$table->string('user_eye_status');
			$table->string('user_hearing_status');
			$table->string('user_drinking_status');
			$table->string('user_smoking_status');
			$table->string('user_drinking_times');
			$table->string('user_smoking_times');
			$table->integer('event_id');
			$table->string('event_title');
			$table->string('event_category');
			$table->longtext('event_description');
			$table->text('event_image');
			$table->string('event_status');
			$table->integer('event_max');
			$table->date('event_from_date');
			$table->date('event_to_date');
			$table->integer('event_points');
			$table->string('event_eye_status');
			$table->string('event_hearing_status');
			$table->string('event_body_type');
			$table->string('event_blood_type');
			$table->string('event_drinking_status');
			$table->integer('event_drinking_times');
			$table->string('event_smoking_status');
			$table->integer('event_smoking_times');
			$table->string('status');
			$table->timestamps();

		});

		Schema::create('user_interests',function(Blueprint $table){

			$table->increments('id');
			$table->integer('user_id');
			$table->integer('interest_id');
			$table->integer('status');
			$table->string('interest_description');
			$table->string('user_firstname');
			$table->string('user_middlename');
			$table->string('user_lastname');
			$table->string('user_position');
			$table->string('user_salary');
			$table->string('user_address');
			$table->string('user_email');
			$table->string('user_mobile_contact');
			$table->string('user_home_contact');
			$table->string('user_birthplace');
			$table->date('user_birthdate');
			$table->string('user_height');
			$table->string('user_weight');
			$table->string('user_gender');
			$table->string('user_eye_status');
			$table->string('user_hearing_status');
			$table->string('user_body_type');
			$table->string('user_blood_type');
			$table->string('user_drinking_status');
			$table->integer('user_drinking_times');
			$table->string('user_smoking_status');
			$table->integer('user_smoking_times');
			$table->string('user_role');
			$table->string('user_username');
			$table->timestamps();

		});

		// Schema::create('health_requirements',function(Blueprint $table){

		// 	$table->increments('id');
		// 	$table->integer('event_id');
		// 	$table->integer('description');
		// 	$table->integer('status');
		// 	$table->string('height');
		// 	$table->string('weight');
		// 	$table->string('gender');
		// 	$table->string('eye_status');
		// 	$table->string('hearing_status');
		// 	$table->string('body_type');
		// 	$table->string('blood_type');
		// 	$table->string('drinking_status');
		// 	$table->integer('drinking_times');
		// 	$table->string('smoking_status');
		// 	$table->integer('smoking_times');
		// 	$table->string('user_firstname');
		// 	$table->string('user_middlename');
		// 	$table->string('user_lastname');
		// 	$table->string('user_position');
		// 	$table->string('user_salary');
		// 	$table->string('user_address');
		// 	$table->string('user_email');
		// 	$table->string('user_mobile_contact');
		// 	$table->string('user_home_contact');
		// 	$table->string('user_birthplace');
		// 	$table->date('user_birthdate');
		// 	$table->string('user_role');
		// 	$table->string('user_username');
		// 	$table->timestamps();

		// });

	}


	public function down()
	{

		Schema::drop('users');
		Schema::drop('events');
		Schema::drop('experiences');
		Schema::drop('hobbies');
		Schema::drop('interests');
		Schema::drop('donations');
		Schema::drop('venues');
		Schema::drop('images');
		Schema::drop('videos');
		Schema::drop('attendees');
		Schema::drop('user_interests');
		//Schema::drop('health_requirements');
		//Schema::drop('event_points');
		// Schema::drop('users');

	}

}
