<?php

Route::get('/',array('uses'=>'HomeController@showHome'));

Route::get('register',array('uses'=>'HomeController@showRegister'));
Route::post('register',array('uses'=>'HomeController@doRegister'));

Route::post('login',array('uses'=>'HomeController@doLogin'));

Route::get('dashboard',array('uses'=>'HomeController@showDashboard'));

Route::get('logout',array('uses'=>'HomeController@doLogout'));

// MANAGE USERS
Route::get('manage-users',array('uses'=>'HomeController@showManageUsers'));
Route::post('add-user',array('uses'=>'HomeController@doAddUser'));
Route::get('delete-user/{id}',array('uses'=>'HomeController@doDeleteUser'));
Route::post('edit-user',array('uses'=>'HomeController@doEditUser'));
// MANAGE USERS

// MANAGE EVENTS
Route::get('manage-events',array('uses'=>'HomeController@showManageEvents'));
Route::post('add-event',array('uses'=>'HomeController@doAddEvent'));
Route::get('delete-event/{id}',array('uses'=>'HomeController@doDeleteEvent'));
Route::post('edit-event',array('uses'=>'HomeController@doEditEvent'));
Route::get('view-attendees/{id}',array('uses'=>'HomeController@showEventAttendees'));
// MANAGE EVENTS

// MANAGE VENUES
Route::get('manage-venues',array('uses'=>'HomeController@showManageVenues'));
Route::post('add-venue',array('uses'=>'HomeController@doAddVenue'));
Route::get('delete-venue/{id}',array('uses'=>'HomeController@doDeleteVenue'));
// MANAGE VENUES


Route::get('view-profile/{id}',array('uses'=>'HomeController@showViewProfile'));
Route::get('edit-profile/{id}',array('uses'=>'HomeController@showEditProfile'));


Route::get('view-event/{id}',array('uses'=>'HomeController@showViewEvent'));

Route::get('my-events',array('uses'=>'HomeController@showMyEvents'));

Route::get('manage-interests',array('uses'=>'HomeController@showManageInterests'));
Route::post('add-interest',array('uses'=>'HomeController@doAddInterest'));
Route::post('edit-interest',array('uses'=>'HomeController@doEditInterest'));

Route::post('register-attendee',array('uses'=>'HomeController@doRegisterAttendee'));
Route::get('delete-attendee/{id}',array('uses'=>'HomeController@doDeleteAttendee'));
Route::get('remove-attendee/{id}',array('uses'=>'HomeController@doRemoveAttendee'));
Route::get('confirm-attendee/{id}',array('uses'=>'HomeController@doConfirmAttendee'));