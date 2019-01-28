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

Route::get('/', function () {
    return view('welcome');
});


/*
Route::get('/upload', 'UploadController@uploadForm');
Route::post('/upload', 'UploadController@uploadSubmit');
*/

Route::get('/test',function(){
  return App\User::find(1)->profile;
  });



Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
                    
            /**       Route For Home   **/ 

Route::get('/home', [

	'uses' => 'HomeController@index',
	'as' => 'home'

	]);  

Route::get('auth/facebook', 'Auth\RegisterController@redirectToProvider');
Route::get('auth/facebook/callback', 'Auth\RegisterController@handleProviderCallback');


Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/redirect', 'Auth\LoginController@redirectToProvider');
Route::get('/callback', 'Auth\LoginController@handleProviderCallback');
// todo


Route::get('/todos',[
    'uses' => 'TodosController@index',
    'as' => 'todos'
]);

Route::get('/todos/create',[
    'uses' => 'TodosController@create',
    'as' => 'todo.create'
]);

Route::post('/create/todo',[
'uses' => 'TodosController@store',
'as' => 'todo.store'
]);

Route::get('/todo/delete/{id}',[
'uses' => "TodosController@delete",
'as' => 'todo.delete'
]);

Route::post('/todo/update/{id}',[
    'uses' => 'TodosController@update',
    'as' => 'todo.update'
    ]);

Route::get('/todo/edit/{id}',[
    'uses' => 'TodosController@edit',
    'as' => 'todo.edit'
    ]);


Route::post('/todo/store/{id}',[
'uses' => 'TodosController@store',
'as' => 'todos.store'
]);    

Route::get('/todos/completed/{id}',[
  'uses' => 'TodosController@completed',
  'as' => 'todos.completed'
  ]);


// Social Login Social lte
Route::get('{provider}/auth', [
  'uses' => 'SocialsController@auth',
  'as' => 'social.auth'
]);

Route::get('/{provider}/redirect', [
  'uses' => 'SocialsController@auth_callback',
  'as' => 'social.callback'
]);


          /**       Routes For Post   **/

Route::get('/post/create',[

	'uses' => 'PostController@create',
	'as' => 'post.create'

	]);

Route::post('/post/store', [

	'uses' => 'PostController@store',
	'as' => 'post.store'

	]);

Route::get('/posts',[

  'uses' => 'PostController@index',
  'as' => 'posts'

  ]);

Route::get('/post/delete/{id}',[

  'uses' => 'PostController@destroy',
  'as' => 'post.delete'

  ]);

Route::get('/posts/trashed',[

  'uses' => 'PostController@trashed',
  'as' => 'posts.trashed'

  ]);

Route::get('/posts/kill/{id}',[

  'uses' => 'PostController@kill',
  'as' => 'post.kill'

  ]);

Route::get('/posts/restore/{id}',[

  'uses' => 'PostController@restore',
  'as' => 'post.restore'

  ]);

Route::get('/posts/edit/{id}',[

  'uses' => 'PostController@edit',
  'as' => 'post.edit'

  ]);

Route::post('/post/update/{id}',[

  'uses' => 'PostController@update',
  'as' => 'post.update'

  ]);



        /**       Routes For Tag  **/

        Route::get('/tags',[

          'uses' => 'TagController@index',
          'as' => 'tags'
          ]);

         Route::get('/tag/create',[

          'uses' => 'TagController@create',
          'as' => 'tag.create'
          ]);

         Route::post('/tag/store',[

          'uses' => 'TagController@store',
          'as' => 'tag.store'
          ]);

        Route::get('/tag/edit/{id}',[

          'uses' => 'TagController@edit',
          'as' => 'tag.edit'
          ]);

         Route::post('/tag/update/{id}',[

          'uses' => 'TagController@update',
          'as' => 'tag.update'
          ]);

          Route::get('/tag/delete/{id}',[

          'uses' => 'TagController@destroy',
          'as' => 'tag.delete'
          ]);



         /**       Routes For Category   **/


         Route::get('/category/create',[

         	'uses' => 'CategoryController@create',
         	'as' => 'category.create'

         	]);

         Route::post('/category/store',[

         	'uses' => 'CategoryController@store',
         	'as' => 'category.store'

         	]);

         Route::get('/categories',[

         	'uses' => 'CategoryController@index',
         	'as' => 'categories'

         	]);

         Route::get('/category/edit/{id}',[

         	'uses' => 'CategoryController@edit',
         	'as' => 'category.edit'

         	]);

           Route::get('/category/delete/{id}',[

         	'uses' => 'CategoryController@destroy',
         	'as' => 'category.delete'

         	]);

           Route::post('/category/update/{id}',[

           	'uses' => 'CategoryController@update',
           	'as' => 'category.update'

           	]);



           /**       Routes For Users    **/ 

           Route::get('/users',[

            'uses' => 'UserController@index',
            'as' => 'users'

            ]);

            Route::get('/user/create',[

            'uses' => 'UserController@create',
            'as' => 'user.create'

            ]);

            Route::post('/user/store',[

              'uses' => 'UserController@store',
              'as' => 'user.store'
              ]);

            Route::get('user/delete/{id}',[

              'uses' => 'UserController@destroy',
              'as' => 'user.delete'
              ]);

            Route::get('/user/admin/{id}',[

              'uses' => 'UserController@admin',
              'as' => 'user.admin'
              ]);

            Route::get('/user/not-admin/{id}',[

              'uses' => 'UserController@not_admin',
              'as' => 'user.not.admin'
              ]);





                /**       Routes For Profile    **/ 


                Route::get('user/profile',[

                  'uses' => 'ProfileController@index',
                  'as' => 'user.profile'
                  ]);


                Route::post('/user/profile/update',[

                  'uses' => 'ProfileController@update',
                  'as' => 'user.profile.update'
                  ]);





                  /**       Routes For Site Settings   **/ 

                  Route::get('/settings',[

                    'uses' => 'SettingController@index',
                    'as' => 'settings'
                    ]);


                  Route::post('/settings/update',[

                    'uses' => 'SettingController@update',
                    'as' => 'settings.update'
                    ]);







});
























/*
Route::get('image_gallery',[

	'uses' => 'ImageGalleryController@index',
	'as' => 'image_gallery'

	]);

Route::post('image-gallery',[
	'uses' => 'ImageGalleryController@upload',
	'as' => 'image-gallery'

	]);

Route::get('image-gallery/{id}',[
	'uses' => 'ImageGalleryController@destroy',
	'as' => 'image-gallery'

	]);


Route::get('image-gallery', 'ImageGalleryController@index');
Route::post('image-gallery', 'ImageGalleryController@upload');
Route::delete('image-gallery/{id}', 'ImageGalleryController@destroy');

*/

Auth::routes();


