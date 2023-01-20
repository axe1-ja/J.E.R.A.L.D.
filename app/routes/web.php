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

// contact page
Route::set('contact',function(){
    Controller::view('contact');
});
Route::set('report', function(){(new ContactController)->report(); });

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

// FAQ
Route::set('faq',function(){
    Controller::view('faq');
});

// End of Basic routes
// -------------------


// migrate route (activate only if necessary)
Route::set('migration',function(){
    Controller::view('database/migrate');
});
Route::set('migrate',function(){
    (new DatabaseController)->migrate();
});

// import data route (activate only if necessary)
/*Route::set('importfile',function(){
    Controller::view('database/import');
});
Route::set('import',function(){
    (new DatabaseController)->import();
});*/


// -----------------------
// Authentification routes

if($_SESSION['loggedin']==0) {
    Route::set('login',function(){ (new authentification)->index(); });
    Route::set('register',function(){ (new authentification)->create(); });
    Route::set('register_failed',function(){ (new authentification)->create_failed(); });
    Route::set('create-user',function(){ (new authentification)->store(); });
    Route::set('login-action',function(){ (new authentification)->loginaction(); });
    Route::set('forgot_password',function(){ (new authentification)->forgot(); });
} else {
    Route::set('login',function(){ Controller::view('home'); });
    Route::set('register',function(){ Controller::view('home'); });
    Route::set('create-user',function(){ Controller::view('home'); });
    Route::set('login-action',function(){ Controller::view('home'); });
    Route::set('forgot_password',function(){ Controller::view('home'); });
}
Route::set('logout',function(){ (new authentification)->logout(); });
Route::set('email_send',function(){ (new authentification)->sendEmail(); });
Route::set('reset_password',function(){ (new authentification)->reset(); });
//Route::set('forgot_password',function(){ (new authentification)->password(); });

// End of Auth routes
// ------------------



////  only accessible if user is logged in  ////

if($_SESSION['loggedin']==1) {

    if($_SESSION['user']->role =='admin') {
        // ------------
        // Admin routes
        Route::set('admin',function(){ (new admin)->index(); });

        Route::set('admin/datama',function(){ (new admin)->datama(); });
        Route::set('admin/datama/edit',function(){ (new admin)->editData(); });
        Route::set('admin/datama/update',function(){ (new admin)->updateData(); });
        Route::set('admin/datama/delete',function(){ (new admin)->deleteData(); });

        Route::set('admin/notifs',function(){ (new admin)->notifs(); });

        // 2 routes (1ere: si un utilisateur different de celui de base a ete selectionné , 2eme: si aucun utilisateur n'a ete selectionné)
        Route::set('admin/inbox/{interlocutorId}',['controller'=>'MessageController','method'=>'inbox']);
        Route::set('admin/inbox',function(){ (new MessageController)->inbox(null); });

        // End of Admin routes
        // -------------------
    }



    // -----------
    // User routes
    Route::set('user',function(){ (new UserController)->index(); });
    Route::set('user/profile',function(){ (new UserController)->profile(); });
    Route::set('user/edit/profile',function(){ (new UserController)->edit_profile(); });
    Route::set('user/update',function(){ (new UserController)->update(); });
    Route::set('user/edit/proches',function(){ (new UserController)->edit_proches(); });
    Route::set('user/cardio',function(){ (new UserController)->cardio(); });
    Route::set('user/fall',function(){ (new UserController)->fall(); });
    Route::set('user/sound',function(){ (new UserController)->sound(); });
    Route::set('user/temperature',function(){ (new UserController)->temperature(); });
    Route::set('user/environment',function(){ (new UserController)->environment(); });

    // 2 routes (1ere: si un utilisateur different de celui de base a ete selectionné , 2eme: si aucun utilisateur n'a ete selectionné)
    Route::set('forum',function(){ (new ForumController)->index(); });
    Route::set('forum/details',function(){ (new ForumController)->details(); });

    Route::set('user/forum',function(){ (new UserController)->forum('forum'); });
    #Route::set('user/forum/{page}',function(){ (new UserController)->forum('forum',$page); });
    Route::set('user/forum1',function(){ (new UserController)->forum('forum1'); });
    Route::set('user/forum2',function(){ (new UserController)->forum('forum2'); });
    Route::set('user/forum_p2',function(){ (new UserController)->forum('forum_p2'); });
    Route::set('user/forum_p3',function(){ (new UserController)->forum('forum_p3'); });
    Route::set('user/forum_new',function(){ (new UserController)->newforum(); });

    Route::set('user/practice',function(){ (new UserController)->practice(); });

    Route::set('user/inbox/{interlocutorId}',['controller'=>'MessageController','method'=>'inbox']);
    Route::set('user/inbox',function(){ (new MessageController)->inbox(null); });
    // End of User routes
    // ------------------

    // ------------
    // General Inbox routes
    Route::set('inbox/send',function(){ (new MessageController)->send(); });
    // End of Inbox routes
    // -------------------
}