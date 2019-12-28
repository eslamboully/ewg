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

	Route::get('locale/{locale}', function ($locale){
        Session::put('locale', $locale);
        return redirect()->route('index_front');
    });

	Route::post('subscribe/now','FrontModuleController@subscribers_create')->name('subscribers_create');
	Route::post('booking/now','FrontModuleController@booking_create')->name('booking_create');

//Route::group(
//    [
//        'prefix' => LaravelLocalization::setLocale(),
//        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
//    ],
//    function()
//    {
    Route::get('/', 'FrontModuleController@index')->name('index_front');
    Route::get('/aboutus','FrontModuleController@about_us')->name('about_us');
    Route::get('/question','FrontModuleController@question')->name('question');
    Route::get('/contactus','FrontModuleController@contact')->name('contact');
    Route::post('/contactus','FrontModuleController@contact_post')->name('send_message');
    Route::get('/services','FrontModuleController@services')->name('services');
    Route::get('/blogs','FrontModuleController@blogs')->name('blogs');
    Route::get('/photos','FrontModuleController@photos')->name('photos');
    Route::get('/videos','FrontModuleController@videos')->name('videos');
    Route::get('/categories/{id}','FrontModuleController@categories')->name('categories');
    Route::get('/services/categories/{id}','FrontModuleController@services_categories')->name('service_categories');
    Route::get('/blogs/{title}','FrontModuleController@single_blog')->name('single_blog');
    Route::get('/services/{title}','FrontModuleController@single_service')->name('single_service');
    Route::get('/projects','FrontModuleController@projects')->name('projects');
    Route::get('/projects/category/{id}','FrontModuleController@projects_cat')->name('projects_cat');
    Route::get('/projects/{title}','FrontModuleController@single_project')->name('single_project');
    Route::get('front/project/get','FrontModuleController@front_project_get')->name('front.project.get');

    //});

