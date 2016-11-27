<?php

class DatabaseSeeder extends Seeder {

	public function run()
	{
		Eloquent::unguard();

		$this->call('UserTableSeeder');
	}

}

class UserTableSeeder extends Seeder{

	public function run(){
		
		DB::table('users')->delete();

		// ADMIN
		User::create(array(
			'firstname'=>'Admin',
			'lastname'=>'Webmaster',
			'role'=>'Admin',
			'position'=>'IT Head Department',
			'username'=>'AdminWebmaster',
			'password'=>Hash::make('123Qwe1!'),
			));
		// ADMIN

		User::create(array(
			'employee_id'=>'100001',
			'firstname'=>'Edeeson',
			'middlename'=>'Ines',
			'lastname'=>'Opina',
			'role'=>'Employee',
			'position'=>'Web Developer',
			'salary'=>'30000',
			'address'=>'BLK 1 LOT 12 Phoenix St. Villa Orion West Fairview, Quezon City',
			'birthplace'=>'Agoo, La Union',
			'birthdate'=>'1994-09-10', // YYYY-MM-DD
			'email'=>'edeesonopinav4@gmail.com',
			'mobile_contact'=>'09563913956',
			'home_contact'=>'427-06-44',
			'height'=>"5'8", //FT
			'weight'=>'57', //KILOGRAMS
			'gender'=>'Male',
			'eye_status'=>'Normal',
			'hearing_status'=>'Normal',
			'body_type'=>'Slim',
			'blood_type'=>'B',
			'drinking_status'=>'Yes',
			'drinking_times'=>'3', // BOTTLES PER DAY
			'smoking_status'=>'Yes',
			'smoking_times'=>'6', // CIGARS PER DAY
			'username'=>'EdeesonOpina',
			'password'=>Hash::make('123Qwe1!'),
			));

		User::create(array(
			'employee_id'=>'100002',
			'firstname'=>'Joshua',
			'middlename'=>'Manas',
			'lastname'=>'Flores',
			'role'=>'Employee',
			'position'=>'Web Designer',
			'salary'=>'30000',
			'address'=>'1212, The Residences P. Campa, Sampaloc, Manila',
			'email'=>'joshuaflores16@gmail.com',
			'mobile_contact'=>'09953126545',
			'home_contact'=>'N/A',
			'height'=>"6'1", //FT
			'weight'=>'69', //KILOGRAMS
			'birthplace'=>'Sampaloc, Manila',
			'birthdate'=>'1995-12-06', // YYYY-MM-DD
			'gender'=>'Male',
			'eye_status'=>'Normal',
			'hearing_status'=>'Normal',
			'body_type'=>'Slim',
			'blood_type'=>'B',
			'drinking_status'=>'Yes',
			'drinking_times'=>'Occasionally', // PER DAY
			'smoking_status'=>'Yes',
			'smoking_times'=>'6', // PER DAY
			'username'=>'JoshFlores',
			'password'=>Hash::make('123Qwe1!'),
			));

		User::create(array(
			'employee_id'=>'100003',
			'firstname'=>'Charles Neilson',
			'middlename'=>'Urmeneta',
			'lastname'=>'Escusa',
			'role'=>'Employee',
			'position'=>'Web Developer',
			'salary'=>'30000',
			'address'=>'520 Azul St., Villa Verde Homes, Novaliches, Quezon City',
			'email'=>'charles.escusa@gmail.com',
			'mobile_contact'=>'09178912038',
			'home_contact'=>'508-93-73',
			'height'=>"5'4", //FT
			'weight'=>'62', //KILOGRAMS
			'birthplace'=>'Quezon City',
			'birthdate'=>'1993-10-04', // YYYY-MM-DD
			'gender'=>'Male',
			'eye_status'=>'Normal',
			'hearing_status'=>'Normal',
			'body_type'=>'Medium',
			'blood_type'=>'O',
			'drinking_status'=>'Yes',
			'drinking_times'=>'Occasionally', // PER DAY
			'smoking_status'=>'No',
			'smoking_times'=>'0', // PER DAY
			'username'=>'charles.escusa',
			'password'=>Hash::make('123Qwe1!'),
			));

		User::create(array(
			'employee_id'=>'100004',
			'firstname'=>'Miguel Angelo',
			'middlename'=>'Cajayon',
			'lastname'=>'Angeles',
			'role'=>'Employee',
			'position'=>'Web Developer',
			'salary'=>'30000',
			'address'=>'19 Avalon St., North Fairview Park, QC',
			'email'=>'miguel.asanza@gmail.com',
			'mobile_contact'=>'09063339359',
			'home_contact'=>'N/A',
			'height'=>"5'6", //FT
			'weight'=>'50', //KILOGRAMS
			'birthplace'=>'Quezon City',
			'birthdate'=>'1995-07-19', // YYYY-MM-DD
			'gender'=>'Male',
			'eye_status'=>'Normal',
			'hearing_status'=>'Normal',
			'body_type'=>'Slim',
			'blood_type'=>'AB',
			'drinking_status'=>'Yes',
			'drinking_times'=>'Occasionally', // PER DAY
			'smoking_status'=>'No',
			'smoking_times'=>'0', // PER DAY
			'username'=>'miguel.angeles',
			'password'=>Hash::make('123Qwe1!'),
			));
	}

}