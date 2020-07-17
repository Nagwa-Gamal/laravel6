

<?php



Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return 'hello';
});

route::get('show-number/{id}',function($id)
{
  return $id;
})->name('a');

route::get('show-number/{id?}',function()
{
  return 'welcome';
})->name('b');

Route::namespace('Front')->group( function () { //// namespace used instead of write Front/usercontroller@showUserName and so on
  
  Route::get('users', 'UserController@showUserName');


});
Route::prefix('users')->group( function () {  //// prefix used instead of write usersshow and usersdelete
  
  Route::get('show', 'UserController@showUserName');
 Route::get('delete', 'UserController@deleteUserName');

});

Route::group(['prefix'=>'users'] ,function () {  //// prefix used instead of write usersshow and usersdelete
  
   Route::get('/',function(){
    return 'work';
   });
  Route::get('show', 'UserController@showUserName');
 Route::get('delete', 'UserController@deleteUserName');

});

Route::get('check',function(){
    return 'middleware';
   })->middleware('auth');

//Route::get('second','Admin\SecondController@showString');

Route::group(['namespace'=>'Admin'],function(){

  Route::get('second','SecondController@showString');
});

 Route::get('index', 'Front\UserController@getindex');


/*Route::get('/a1', function () {
    return view('welcome')->with('data',3);
});
*/
/*
Route::get('/a2', function () {
    return view('welcome')->with(['string'=>'Anas' ,'Age'=>'9 month']);
});


Route::get('/a3', function () {
  $data=[];
  $data['id']=8;
  $data['name']='noga';
    return view('welcome',$data);
});

Route::get('/a4', function () {
  $obj=new \stclass();
  $obj->id=8;
  $obj->name='noga';
    return view('welcome',compact('obj'));
});
*/




Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

