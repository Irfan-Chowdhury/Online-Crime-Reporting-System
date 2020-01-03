<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// 1. Database
// 2. Model
// 3. Controller Make 
// 4. Route
// 5. View 
// 5. Working in Controller + Model + view  


// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/admin/login','Backend\AdminController@login')->name('admin.login');
Route::post('/admin/loginProcess','Backend\AdminController@loginProcess')->name('admin.loginProcess');
Route::get('/admin/logout', 'Backend\AdminController@logout');


Route::group(['prefix' => 'admin','namespace'=>'Backend','middleware'=>'AdminMiddleware'], function () {
        Route::get('/dashboard','AdminController@dashboard')->name('admin.dashboard');

        Route::get('/index','AdminController@index')->name('admin.index');
        Route::get('/create','AdminController@create')->name('admin.create');
        Route::post('/store','AdminController@store')->name('admin.store');
        Route::get('/show/{id}','AdminController@show')->name('admin.show');
        Route::get('/edit/{id}','AdminController@edit')->name('admin.edit');
        Route::post('/update/{id}','AdminController@update')->name('admin.update');
        Route::delete('/delete/{id}','AdminController@delete')->name('admin.delete');

    Route::group(['prefix' => '/crimeCategory'], function () {
        Route::get('/index','CrimeCategoryController@index')->name('admin.crimeCategory.index');
        Route::get('/create','CrimeCategoryController@create')->name('admin.crimeCategory.create');
        Route::post('/store','CrimeCategoryController@store')->name('admin.crimeCategory.store');
        Route::get('/edit/{id}','CrimeCategoryController@edit')->name('admin.crimeCategory.edit');
        Route::post('/update/{id}','CrimeCategoryController@update')->name('admin.crimeCategory.update');
        Route::delete('/delete/{id}','CrimeCategoryController@delete')->name('admin.crimeCategory.delete');
    });

    Route::group(['prefix' => '/newstips'], function () {
        Route::get('/index','NewsTipsController@index')->name('admin.newstips.index');
        Route::get('/create','NewsTipsController@create')->name('admin.newstips.create');
        Route::post('/store','NewsTipsController@store')->name('admin.newstips.store');
        Route::get('/show/{id}','NewsTipsController@show')->name('admin.newstips.show');
        Route::get('/edit/{id}','NewsTipsController@edit')->name('admin.newstips.edit');
        Route::post('/update/{id}','NewsTipsController@update')->name('admin.newstips.update');
        Route::delete('/delete/{id}','NewsTipsController@delete')->name('admin.newstips.delete');
    });

    Route::group(['prefix' => '/criminalRecords'], function () {
        Route::get('/index','CriminalRecordController@index')->name('admin.criminalRecords.index');
        Route::get('/create','CriminalRecordController@create')->name('admin.criminalRecords.create');
        Route::post('/store','CriminalRecordController@store')->name('admin.criminalRecords.store');
        Route::get('/show/{id}','CriminalRecordController@show')->name('admin.criminalRecords.show');
        Route::get('/edit/{id}','CriminalRecordController@edit')->name('admin.criminalRecords.edit');
        Route::post('/update/{id}','CriminalRecordController@update')->name('admin.criminalRecords.update');
        Route::delete('/delete/{id}','CriminalRecordController@delete')->name('admin.criminalRecords.delete');
    });

    Route::group(['prefix' => '/missingPerson'], function () {
        Route::get('/index','MissingPersonController@index')->name('admin.missingPerson.index');
        Route::get('/create','MissingPersonController@create')->name('admin.missingPerson.create');
        Route::post('/store','MissingPersonController@store')->name('admin.missingPerson.store');
        Route::get('/show/{id}','MissingPersonController@show')->name('admin.missingPerson.show');
        Route::get('/edit/{id}','MissingPersonController@edit')->name('admin.missingPerson.edit');
        Route::post('/update/{id}','MissingPersonController@update')->name('admin.missingPerson.update');
        Route::delete('/delete/{id}','MissingPersonController@delete')->name('admin.missingPerson.delete');
    });

    Route::group(['prefix' => '/otherMissingCategory'], function () {
        Route::get('/index','MissingCategoryController@index')->name('admin.otherMissingCategory.index');
        Route::get('/create','MissingCategoryController@create')->name('admin.otherMissingCategory.create');
        Route::post('/store','MissingCategoryController@store')->name('admin.otherMissingCategory.store');
        Route::delete('/delete/{id}','MissingCategoryController@delete')->name('admin.otherMissingCategory.delete');
    });

    Route::group(['prefix' => '/missingOther'], function () {
        Route::get('/index','MissingOtherController@index')->name('admin.missingOther.index');
        Route::get('/create','MissingOtherController@create')->name('admin.missingOther.create');
        Route::post('/store','MissingOtherController@store')->name('admin.missingOther.store');
        Route::get('/show/{id}','MissingOtherController@show')->name('admin.missingOther.show');
        Route::get('/edit/{id}','MissingOtherController@edit')->name('admin.missingOther.edit');
        Route::post('/update/{id}','MissingOtherController@update')->name('admin.missingOther.update');
        Route::delete('/delete/{id}','MissingOtherController@delete')->name('admin.missingOther.delete');
    });

    Route::group(['prefix' => '/usersInfo'], function () {
        Route::get('/index','UserController@index')->name('admin.usersInfo.index');
        Route::get('/show/{id}','UserController@show')->name('admin.usersInfo.show');
        Route::delete('/delete/{id}','UserController@delete')->name('admin.usersInfo.delete');
    });

    Route::group(['prefix' => '/userComplain'], function () {
        Route::get('/index','UserController@userComplain_index')->name('admin.userComplain.index');
        Route::get('/show/{id}','UserController@userComplain_show')->name('admin.userComplain.show');
        Route::post('/update/{id}','UserController@action_update')->name('admin.userComplain.update');
    });
    
    Route::group(['prefix' => '/userFeedback'], function () {
        Route::get('/index','UserController@userFeedback_index')->name('admin.userFeedback.index');
        Route::get('/show/{id}','UserController@userFeedback_show')->name('admin.userFeedback.show');
        //Route::post('/update/{id}','UserController@action_update')->name('admin.userComplain.update');
    });

    Route::group(['prefix' => '/emergency'], function () {
        Route::get('/index','UserController@emergency_index')->name('admin.emergency.index');
        Route::post('/update/{id}','UserController@emergency_update')->name('admin.emergency.update');
    });

    Route::group(['prefix' => 'message'], function () {
        Route::get('/','MessageController@message')->name('admin.message');
        Route::post('/update/{id}','MessageController@action_update')->name('user.message.update');
    });

});

// =========================  Front End Part =======================

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


Route::get('/userRegistration','Frontend\UserController@create')->name('userRegistration');
Route::post('/userRegProcess','Frontend\UserController@store')->name('userRegProcess');
Route::get('/verifyEmail/{token}','Frontend\UserController@verifyEmail')->name('verifyEmail');
Route::get('/verifyEmail/{token}','Frontend\UserController@verifyEmail')->name('verifyEmail');
// Route::post('/userLogin','Frontend\UserController@processLogin')->name('processLogin');

Route::group(['prefix' => 'user','namespace' => 'Frontend','middleware'=>'UserMiddleware'], function () {
    Route::group(['prefix' => '/'], function () {
        Route::get('/dashboard','UserController@dashboard')->name('user.dashboard');
        Route::get('/all_mostWanted','UserController@all_mostWanted')->name('user.all_mostWanted');
        Route::get('/view_mostWanted/{id}','UserController@view_mostWanted')->name('user.view_mostWanted');
    });

    // ---- New ----
    Route::group(['prefix' => 'emergency'], function () {
        Route::get('/create','EmergencyController@create')->name('user.emergency.create');
        Route::post('/store','EmergencyController@store')->name('user.emergency.store');
        Route::get('/index','EmergencyController@index')->name('user.emergency.index');
        Route::get('/show/{id}','EmergencyController@show')->name('user.emergency.show');
        Route::get('/edit/{id}','EmergencyController@edit')->name('user.emergency.edit');
        Route::post('/update/{id}','EmergencyController@update')->name('user.emergency.update');
        Route::delete('/delete/{id}','EmergencyController@delete')->name('user.emergency.delete');
    });

    Route::group(['prefix' => 'complain'], function () {
        Route::get('/create','ComplainController@create')->name('user.complain.create');
        Route::post('/store','ComplainController@store')->name('user.complain.store');
        Route::get('/index','ComplainController@index')->name('user.complain.index');
        Route::get('/show/{id}','ComplainController@show')->name('user.complain.show');
        Route::get('/edit/{id}','ComplainController@edit')->name('user.complain.edit');
        Route::post('/update/{id}','ComplainController@update')->name('user.complain.update');
        Route::delete('/delete/{id}','ComplainController@delete')->name('user.complain.delete');
    });
    Route::group(['prefix' => 'missingPerson'], function () {
        Route::get('/create','MissingPersonController@create')->name('user.missingPerson.create');
        Route::post('/store','MissingPersonController@store')->name('user.missingPerson.store');
        Route::get('/index','MissingPersonController@index')->name('user.missingPerson.index');
        Route::get('/show/{id}','MissingPersonController@show')->name('user.missingPerson.show');
        Route::get('/edit/{id}','MissingPersonController@edit')->name('user.missingPerson.edit');
        Route::post('/update/{id}','MissingPersonController@update')->name('user.missingPerson.update');
        Route::delete('/delete/{id}','MissingPersonController@delete')->name('user.missingPerson.delete');
    });
    Route::group(['prefix' => 'missingOther'], function () {
        Route::get('/create','MissingOtherController@create')->name('user.missingOther.create');
        Route::post('/store','MissingOtherController@store')->name('user.missingOther.store');
        Route::get('/index','MissingOtherController@index')->name('user.missingOther.index');
        Route::get('/show/{id}','MissingOtherController@show')->name('user.missingOther.show');
        Route::get('/edit/{id}','MissingOtherController@edit')->name('user.missingOther.edit');
        Route::post('/update/{id}','MissingOtherController@update')->name('user.missingOther.update');
        Route::delete('/delete/{id}','MissingOtherController@delete')->name('user.missingOther.delete');
    });
    
    Route::group(['prefix' => 'feedback'], function () {
        Route::get('/create','feedbackController@create')->name('user.feedback.create');
        Route::post('/store','feedbackController@store')->name('user.feedback.store');
    });

    Route::group(['prefix' => 'profile'], function () {
        Route::get('/edit','UserController@edit')->name('user.profile.index');
        Route::post('/update/{id}','UserController@update')->name('user.profile.update');
    });
    Route::group(['prefix' => 'message'], function () {
        Route::get('/','MessageController@message')->name('user.message');
        Route::post('/store','MessageController@store')->name('user.message.store');
    });

    //Problem not solved------------------
    Route::group(['prefix' => 'password_change'], function () {  
        Route::get('/','UserController@password_change')->name('user.password_change');
        Route::post('/Update','UserController@update_pass')->name('user.password_update');
    });
});


    // =========================  Visitor Part =======================

Route::group(['prefix' => 'ocrs','namespace' => 'Frontend'], function () {
    Route::get('/index','VisitorController@index')->name('visitor.index');
    Route::get('/about','VisitorController@about')->name('visitor.about');
    Route::get('/recentIncident','VisitorController@recentIncident')->name('visitor.recentIncident');
    Route::get('/recentIncident_city/{id}','VisitorController@recentIncident_city')->name('visitor.recentIncident_city');
    Route::get('/recentIncident_show/{id}','VisitorController@recentIncident_show')->name('visitor.recentIncident_show');
    Route::get('/FAQ','VisitorController@FAQ')->name('visitor.FAQ');
    Route::get('/news','VisitorController@news')->name('visitor.news');
    Route::get('/news_show/{id}','VisitorController@news_show')->name('visitor.news_show');
    Route::get('/missingPerson','VisitorController@missingPerson')->name('visitor.missingPerson');
    Route::get('/missingPerson_show/{id}','VisitorController@missingPerson_show')->name('visitor.missingPerson_show');
    Route::get('/foundPerson','VisitorController@foundPerson')->name('visitor.foundPerson');
    Route::get('/foundPerson_show/{id}','VisitorController@foundPerson_show')->name('visitor.foundPerson_show');
    Route::get('/missingOthers','VisitorController@missingOthers')->name('visitor.missingOthers');
    Route::get('/missingOther_show/{id}','VisitorController@missingOther_show')->name('visitor.missingOther_show');
    Route::get('/foundOthers','VisitorController@foundOthers')->name('visitor.foundOthers');
    Route::get('/foundOthers_show/{id}','VisitorController@foundOthers_show')->name('visitor.foundOthers_show');
    // Route::get('/crimes','VisitorController@crimes')->name('visitor.crimes');
    Route::get('/MostWanted','VisitorController@MostWanted')->name('visitor.MostWanted');
    Route::get('/MostWanted_show/{id}','VisitorController@MostWanted_show')->name('visitor.MostWanted_show');

});


