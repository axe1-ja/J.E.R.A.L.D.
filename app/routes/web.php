<?php

session_start();
if(!array_key_exists('user',$_SESSION)){
    session_start();
    $_SESSION['user']='guest';
    $_SESSION['user_id']=0;
}
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
    Controller::view('product');
});

// histoire page
Route::set('histoire',function(){
    Controller::view('histoire');
});

// conditions page
Route::set('conditions',function(){
    Controller::view('conditions');
});
// Privacy policy
Route::set('privacy',function(){
    Controller::view('privacy_policy');
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
Route::set('admin/datama/roles',function(){ (new admin)->datama('roles'); });
Route::set('admin/inbox',function(){ (new MessageController)->inbox('admin'); });

// End of Admin routes
// -------------------



// ------------
// Inbox routes

Route::set('admin/inbox',function(){ (new MessageController)->inbox('admin'); });
Route::set('user/inbox',function(){ (new MessageController)->inbox('user'); });
Route::set('inbox/send',function(){ (new MessageController)->send(); });


// End of Inbox routes
// -------------------



// -----------------------
// Authentification routes

Route::set('login',function(){ (new authentification)->index(); });
Route::set('register',function(){ (new authentification)->create(); });
Route::set('create-user',function(){ (new authentification)->store(); });
Route::set('login-action',function(){ (new authentification)->loginaction(); });
Route::set('logout',function(){ (new authentification)->logout(); });
Route::set('forgot_password',function(){ (new authentification)->forgot(); });
Route::set('email_send',function(){ (new authentification)->sendEmail(); });
Route::set('reset_password',function(){ (new authentification)->reset(); });
//Route::set('forgot_password',function(){ (new authentification)->password(); });

// End of Auth routes
// ------------------




// -----------
// User routes

Route::set('user',function(){ (new UserController)->index(); });
Route::set('user/profile',function(){ (new UserController)->profile(); });
Route::set('user/edit/profile',function(){ (new UserController)->edit_profile(); });
Route::set('user/edit/proches',function(){ (new UserController)->edit_proches(); });
Route::set('user/cardio',function(){ (new UserController)->cardio(); });
Route::set('user/fall',function(){ (new UserController)->fall(); });
Route::set('user/sound',function(){ (new UserController)->sound(); });
Route::set('user/temperature',function(){ (new UserController)->temperature(); });
Route::set('user/environment',function(){ (new UserController)->environment(); });
Route::set('user/forum',function(){ (new UserController)->forum('forum'); });
#Route::set('user/forum/{page}',function(){ (new UserController)->forum('forum',$page); });
Route::set('user/forum1',function(){ (new UserController)->forum('forum1'); });
Route::set('user/forum2',function(){ (new UserController)->forum('forum2'); });
Route::set('user/forum_p2',function(){ (new UserController)->forum('forum_p2'); });
Route::set('user/forum_p3',function(){ (new UserController)->forum('forum_p3'); });
Route::set('user/forum_new',function(){ (new UserController)->newforum(); });

Route::set('user/practice',function(){ (new UserController)->practice(); });

// End of User routes
// ------------------