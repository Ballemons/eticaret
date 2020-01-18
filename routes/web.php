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
use Illuminate\Support\Facades\Route;


Route::group(['namespace'=>'backoffice','prefix'=>'backoffice','as'=>'backoffice.'],function() {

    Route::get('/anasayfa','DashboardController@index')->name('anasayfa');

    Route::get('/hakkimizda','AboutusController@aboutus')->name('aboutus');
    Route::post('hakkimizda-kaydet','AboutusController@aboutSave')->name('aboutSave');

    Route::get('/tarihce','HistoryController@history')->name('history');
    Route::post('tarihce-kaydet','HistoryController@historySave')->name('historySave');

    Route::get('/politika','PolicyController@policy')->name('policy');
    Route::post('politika-kaydet','PolicyController@policySave')->name('policySave');

    Route::get('/sss','FaqController@faq')->name('faq');
    Route::post('/sss-kaydet','FaqController@faqSave')->name('faqSave');
    
    Route::get('/ürün','ProductController@product')->name('product');

    Route::get('/servis','ServiceController@services')->name('services');
    Route::post('/servis-kaydet','ServiceController@servicesSave')->name('servicesSave');

    Route::get('/iletisim','ContactController@contact')->name('contact');
    Route::post('/iletisim-kaydet','ContactController@contactSave')->name('contactSave');

    Route::get('/campaigns','CampaignsController@campaigns')->name('campaigns');
    Route::post('/kampanya-kaydet','CampaignsController@campaignsSave')->name('campaignsSave');

    Route::get('/price-list','PriceListController@priceList')->name('priceList');
});











Route::group(['namespace'=>'frontend','prefix'=>'frontend','as'=>'frontend.'], function(){
    Route::get('/anasayfa','DashboardController@index')->name('anasayfa');
    Route::get('/hakkimizda','AboutusController@aboutus')->name('aboutus');
    Route::get('/tarihce','HistoryController@history')->name('history');
    Route::get('/kalite-ve-musteri-memnuniyet-politikası','PolicyController@policy')->name('policy');
    Route::get('/servisler','ServiceController@service')->name('service');
    Route::get('/iletisim','ContactController@contact')->name('contact');
});