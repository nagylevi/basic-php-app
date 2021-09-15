<?php

//Crete the index view
Route::set('', function(){
	Index::CreateView('Index');
});

//Crete the users view
Route::set('users', function(){
	Users::CreateView('Users');
});

//Crete the advertisements view
Route::set('advertisements', function(){
	Advertisements::CreateView('Advertisements');
});

?>