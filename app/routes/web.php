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

Route::set('admin',function(){ (new admin)->index(); });
Route::set('admin/datama',function(){ (new admin)->datama(); });
Route::set('admin/datama/users',function(){ (new admin)->datama(); });
Route::set('admin/datama/products',function(){ (new admin)->datama('products'); });
Route::set('admin/datama/forum',function(){ (new admin)->datama('forum'); });
Route::set('admin/notifs',function(){ (new admin)->notifs(); });

// End of Admin routes
// -------------------




// -----------------------
// Authentification routes

Route::set('login',function(){ (new authentification)->index(); });
Route::set('register',function(){ (new authentification)->create(); });

// End of Auth routes
// ------------------




// -----------
// User routes

Route::set('user',function(){ (new user)->index(); });
Route::set('user/profile',function(){ (new user)->profile(); });
Route::set('user/cardio',function(){ (new user)->cardio(); });
Route::set('user/fall',function(){ (new user)->fall(); });
Route::set('user/sound',function(){ (new user)->sound(); });
Route::set('user/temperature',function(){ (new user)->temperature(); });
Route::set('user/environment',function(){ (new user)->environment(); });

// End of User routes
// ------------------