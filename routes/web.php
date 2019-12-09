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

Route::get('/', 'welcome_Controller@welcome');

Auth::routes();

Route::get('/profile', 'profile_Controller@go_to_profile');

Route::post('/comment2', ['uses' => 'CommentController@commentCreateComment', 'as' =>'post.create']);

Route::get('/comment', 'CommentController@comment2');

Route::get('/change_login' , 'change_login_Controller@funkcja');

Route::get('/zarzadzanie' , 'zarzadzanieController@go_to_zarzadzanie');

Route::get('/zarzadzanie' , 'zarzadzanieController@go_to_zarzadzanie');

Route::get('/usun_moderatora', 'zarzadzanieController@usun_moderatora');

Route::get('/nowy_moderator', 'zarzadzanieController@dodaj_moderatora');

Route::get('/zmien_avatar', 'profile_Controller@zmien_avatar');

Route::get('/stworz_temat', 'zarzadzanieController@stworz_temat');

Route::get('/tworzenie_postu', 'postsController@tworzenie_postu');

Route::get('/tworzenie_komentarza', 'CommentController@tworzenie_komentarza');

Route:: get('/close_post', 'postsController@close_post');

Route:: get('/ban_user', 'zarzadzanieController@ban_user');

Route:: get('/unban', 'zarzadzanieController@unban_user');

Route::get('/hand_up', 'CommentController@hand_up');

Route::get('/hand_down', 'CommentController@hand_down');

Route::get('/{id}', 'postsController@go_to_posts')->middleware('checkTopicId');

Route::get('/post/{id}', 'CommentController@go_to_comments')->middleware('checkPostId');
