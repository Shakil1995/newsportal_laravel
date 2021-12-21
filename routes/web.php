<?php

use Illuminate\Support\Facades\Route;

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
   //  return redirect()->route('login');
   return view('frontend.index');
});

Auth::routes(['verify'=>true]);

Route::get('/admin', 'HomeController@index')->name('home');

Route::get('/user/logout', 'HomeController@logout')->name('user.logout');

// Category Route

Route::get('/categories', 'admin\CategoryController@index')->name('categories');
Route::post('store/categories', 'admin\CategoryController@store')->name('store.category');
Route::get('delete/categories/{id}', 'admin\CategoryController@delete')->name('delete.category');
Route::get('edit.categories/{id}', 'admin\CategoryController@edit')->name('edit.category');
Route::post('update.categories/{id}', 'admin\CategoryController@update')->name('update.category');

// SubCategory Route

Route::get('/subcategories', 'admin\SubcategoryController@index')->name('subcategories');
Route::post('store/subcategories', 'admin\SubcategoryController@subCategoryStore')->name('store.subcategory');
// Route::get('delete/subcategories/{id}', 'admin\SubcategoryController@subCategoryDelete')->name('delete.subcategory');
Route::get('delete/subcategories/{id}', 'admin\SubcategoryController@subCategoryDelete')->name('delete.subcategory');
Route::get('edit/subcategories/{id}', 'admin\SubcategoryController@getEditData')->name('edit.subcategory');
Route::post('update/subcategories/{id}', 'admin\SubcategoryController@subCategoryUpdate')->name('update.subcategory');



// district Route

Route::get('/district', 'admin\DistrictController@index')->name('district');
Route::get('delete/district/{id}', 'admin\DistrictController@districtDelete')->name('delete.district');
Route::post('store/district', 'admin\DistrictController@districtStore')->name('store.district');
Route::get('edit/district/{id}', 'admin\DistrictController@getEditData')->name('edit.district');
Route::post('update/district/{id}', 'admin\DistrictController@districtUpdate')->name('update.district');



//Sub district Route

Route::get('/subdistrict', 'admin\SubDistrictController@subDistrictIndex')->name('subdistrict');
Route::post('store/subdistrict', 'admin\SubDistrictController@subdistrictStore')->name('store.subdistrict');
Route::get('delete/subdistrict/{id}', 'admin\SubDistrictController@subDistrictDelete')->name('delete.subdistrict');
Route::get('edit/subdistrict/{id}', 'admin\SubDistrictController@getEditData')->name('edit.subdistrict');
Route::post('update/subdistrict/{id}', 'admin\SubDistrictController@subdistrictUpdate')->name('update.subdistrict');


// Category Route
Route::get('/post/addPost', 'admin\PostController@addPostIndex')->name('posts');


// Category Route
// Route::get('/post/allPosts', 'admin\PostController@allPostIndex')->name('all_posts');

   //  Category to SubCategory find using ajax
Route::get('get/subcat/{cat_id}','admin\PostController@getSubCat');
   //  District to SubDistrict find using ajax
Route::get('get/subdist/{dist_id}','admin\PostController@getSubdist');


// post route 
Route::post('store/post', 'admin\PostController@storePost')->name('store.post');
Route::get('/post/allPosts', 'admin\PostController@allPostIndex')->name('all_posts');
Route::get('/post/delete/{id}', 'admin\PostController@deletePost')->name('delete.allpost');
Route::get('/post/edit/{id}', 'admin\PostController@editPost')->name('edit.post');
Route::post('/post/update/{id}', 'admin\PostController@updatePost')->name('update.post');

// ads Route
Route::get('all/ads', 'admin\adsController@indexAdd')->name('all.ads');
Route::post('store/ads', 'admin\adsController@storeAdd')->name('store.ads');
Route::get('/ads/delete/{id}', 'admin\adsController@adsDelete')->name('delete.ads');
Route::get('/ads/edit/{id}', 'admin\adsController@adsEdit')->name('edit.ads');
Route::post('/ads/update/{id}', 'admin\adsController@adsUpdate')->name('update.ads');






// Social link 
Route::get('/setting/social', 'admin\SettingController@socialIndex')->name('social.setting');
Route::post('/social/update/{id}', 'admin\SettingController@socialUpdate')->name('update.social');

// SEO LInk
Route::get('/setting/seo', 'admin\SettingController@seoIndex')->name('seo.setting');
Route::post('/seo/update/{id}', 'admin\SettingController@seoUpdate')->name('update.seo');


// Prayer Time
Route::get('/setting/prayer', 'admin\SettingController@prayerIndex')->name('prayer.setting');
Route::post('/prayer/update/{id}', 'admin\SettingController@prayerUpdate')->name('update.prayer');
// Live Tv
Route::get('/setting/liveTv', 'admin\SettingController@liveTvIndex')->name('liveTv.setting');
Route::post('/liveTv/update/{id}', 'admin\SettingController@liveTvUpdate')->name('update.liveTv');
Route::get('/active/liveTv/{id}', 'admin\SettingController@activeLiveTv')->name('active.liveTv');
Route::get('/deActive/liveTv/{id}', 'admin\SettingController@deActiveLiveTv')->name('deactive.liveTv');

// Notices
Route::get('/setting/notice', 'admin\SettingController@noticeIndex')->name('notice.setting');
Route::post('/notice/update/{id}', 'admin\SettingController@noticeUpdate')->name('update.notice');
Route::get('/active/notice/{id}', 'admin\SettingController@activeNotice')->name('active.notice');
Route::get('/deActive/notice/{id}', 'admin\SettingController@deActiveNotice')->name('deactive.notice');


//Important Website 
Route::get('//setting/important/website', 'admin\SettingController@index')->name('important_website.setting');
Route::post('store/important_website', 'admin\SettingController@store')->name('store.important_website');
Route::get('delete/important_website/{id}', 'admin\SettingController@delete')->name('delete.important_website');
Route::get('edit.important_website/{id}', 'admin\SettingController@ImportantWebsiteEdit')->name('edit.important_website');
Route::post('update.important_website/{id}', 'admin\SettingController@ImportantWebsiteUpdate')->name('update.important_website');
// Website Setting Route
Route::get('/website/setting', 'admin\SettingController@websiteIndex')->name('website.setting');
Route::post('/website/update/{id}', 'admin\SettingController@sittingUpdate')->name('update.setting');



// Gallery Route Photo
Route::get('/gallery/photo', 'admin\GalleryController@photoIndex')->name('photos');
Route::post('/store/photo', 'admin\GalleryController@storePhoto')->name('store.photo');
Route::get('delete/photo/{id}', 'admin\GalleryController@deletePhoto')->name('delete.photo');
Route::get('edit.photo/{id}', 'admin\GalleryController@photoEdit')->name('edit.photo');
Route::post('update.photo/{id}', 'admin\GalleryController@photoUpdate')->name('update.photo');

// Gallery Route Video
Route::get('/gallery/video', 'admin\GalleryController@videosIndex')->name('videos');
Route::post('/gallery/store', 'admin\GalleryController@storeVideo')->name('store.video');
Route::get('delete/video/{id}', 'admin\GalleryController@deleteVideo')->name('delete.video');
Route::get('edit.video/{id}', 'admin\GalleryController@videoEdit')->name('edit.video');
Route::post('update.video/{id}', 'admin\GalleryController@videoUpdate')->name('update.video');



// User Role Route
Route::get('/add/writer', 'HomeController@WriterIndex')->name('add.writer');
Route::post('/store/writer', 'HomeController@store')->name('store.user');
Route::get('/edit/writer/{id}', 'HomeController@editUser')->name('edit.user');
Route::post('update.writer/{id}', 'HomeController@writerUpdate')->name('update.user');
Route::get('delete.writer/{id}', 'HomeController@writerDelete')->name('delete.user');




// frontend Route
Route::get('/lang/bangla', 'frontend\ExtraController@langBangla')->name('lang.bangla');
Route::get('/lang/english', 'frontend\ExtraController@langEnglish')->name('lang.english');
// frontend Single page Route
Route::get('view-post/{id}/{slug}', 'frontend\ExtraController@singlePagePost');
Route::get('posts/{id}/{subcategory_bn}', 'frontend\ExtraController@allPost');
Route::get('post/{id}/{category_bn}', 'frontend\ExtraController@allCatPost');
Route::get('get/subdist/forntend/{dist_id}', 'frontend\ExtraController@getSubDist');

Route::get('sharadesh/', 'frontend\ExtraController@sharadesh')->name('sharadesh.news');