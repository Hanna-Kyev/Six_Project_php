<?php

return [
    ''=>'HomeController@index',
    'bookstore'=>'BookstoreController@index',
    'reviews'=>'ReviewsController@index',
    'contacts'=>'ContactsController@index',
    'config'=>'ConfigController@index',
    'admin'=>'Admin\DashboardController@index',
    'admin/categories'=>'Admin\CategoryController@index',
    'admin/categories/create'=>'Admin\CategoryController@create',
    'admin/categories/store'=>'Admin\CategoryController@store',
    
    'admin/categories/show/{id}'=>'Admin\CategoryController@show',
    'admin/categories/edit/{id}' => 'Admin\CategoryController@edit',
    'admin/categories/update' => 'Admin\CategoryController@update',
    'admin/categories/delete/{id}' => 'Admin\CategoryController@destroy',

    '404'=>'ErrorController@notFound',     
];