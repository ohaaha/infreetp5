<?php

Route::get('index', 'index/index');

// 产品(Product)
Route::get('all_product', 'product/index');
Route::get('lift_paperless', 'product/lift_paperless');
Route::get('ele_tabcard', 'product/ele_tabcard');
Route::get('desk_paperless', 'product/desk_paperless');
Route::get('soft_product', 'product/soft_product');
Route::get('liqcry_lift', 'product/liqcry_lift');

// 案例(Cases)
Route::get('customer_case', 'cases/index');

// 英飞(Infree)
Route::get('about_infree', 'infree/index');

Route::rule('about_infree/news_infree', 'about-infree/news_infree');
return [

];
