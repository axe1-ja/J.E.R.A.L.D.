<?php

// ------------
// Basic routes

// home page (two possibilities)
Route::set('/',function(){
    Controller::view('home');
});
Route::set('home',function(){
    Controller::view('home');
});

// members page
Route::set('members',function(){
    Controller::view('members');
});

// visiteurs page
Route::set('visiteurs',function(){
    Controller::view('visiteurs');
});

// contact page
Route::set('contact',function(){
    Controller::view('contact');
});

// product page
Route::set('product',function(){
    Controller::view('contact');
});

// histoire page
Route::set('histoire',function(){
    Controller::view('histoire');
});

// End of Basic routes
// -------------------




// ------------
// Admin routes

Route::set('admin',function(){ admin::index(); });
Route::set('admin/datama',function(){ admin::datama(); });
Route::set('admin/datama/users',function(){ admin::datama(); });
Route::set('admin/datama/products',function(){ admin::datama('products'); });
Route::set('admin/datama/forum',function(){ admin::datama('forum'); });
Route::set('admin/notifs',function(){ admin::notifs(); });

// End of Admin routes
// -------------------




// -----------------------
// Authentification routes

Route::set('login',function(){ authentification::index(); });
Route::set('register',function(){ authentification::create(); });

// End of Auth routes
// ------------------




// -----------
// User routes

Route::set('user',function(){ user::index(); });
Route::set('user/profile',function(){ user::profile(); });
Route::set('user/cardio',function(){ user::cardio(); });
Route::set('user/fall',function(){ user::fall(); });
Route::set('user/sound',function(){ user::sound(); });
Route::set('user/temperature',function(){ user::temperature(); });
Route::set('user/environment',function(){ user::environment(); });

// End of User routes
// ------------------