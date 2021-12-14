<?php
Route::group(['namespace' => 'App\Http\Controllers\Site', 'middleware' => ['web']], function (){
    Route::get('/','SiteController@home')->name('site.home');
    Route::get('/about','SiteController@about')->name('site.about');
    Route::get('/contact-us','SiteController@contact')->name('site.contact');
    Route::get('/sign-in','AuthController@signIn')->name('site.auth.sign-in');
    Route::post('/authenticating','AuthController@authenticating')->name('site.auth.authenticating');
    Route::get('/sign-out', 'AuthController@signOut')->name('site.auth.sign-out');

    Route::group(['prefix' => 'recruiter', 'namespace' => 'Recruiter'],function(){
        Route::get('/post-job','VacanciesController@create')->name('site.recruiter.vacancies.create')->middleware('recruiter');
        Route::post('/store','VacanciesController@store')->name('site.recruiter.vacancies.store')->middleware('recruiter');        
        Route::get('/dashboard','DashboardController@dashboard')->name('site.recruiter.dashboard')->middleware('recruiter');
    });
    Route::group(['prefix' => 'candidate', 'namespace' => 'Candidate'],function(){    
        Route::get('/dashboard','DashboardController@dashboard')->name('site.candidate.dashboard')->middleware('candidate'); 
    });

});


?>