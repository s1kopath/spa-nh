<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImgGalleryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\OurConcernsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SiteInfoController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\SuperLoginController;
use App\Http\Controllers\TrainingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes Frontend Related
|--------------------------------------------------------------------------
*/



Route::get('/test', function () {
    return view('backend.admin_master');
});



Route::get('/', [HomeController::class, 'index'])->name('/');

//Route::get('search-result', [HomeController::class, 'HomeController@searchResult')->name('search-result');

//Who we are?
Route::get('who-we-are', [HomeController::class, 'about'])->name('who-we-are');
Route::get('mission-vision', [HomeController::class, 'missionVision'])->name('mission-vision');
Route::get('member-list/{param}', [HomeController::class, 'allMembers'])->name('member-list');
Route::get('member-profile/{id}', [HomeController::class, 'singleMemberProfile'])->name('member-profile');
//volunteer (frontend+backend)
Route::resource('volunteer', 'VolunteerController');
Route::get('chairmans-message', function () {
    $content = view('frontend.pages.chairmans_message');
    return view('frontend.home_master')->with('home_content', $content);
})->name('chairmans-message');
Route::get('secretary-message', function () {
    $content = view('frontend.pages.secretary_message');
    return view('frontend.home_master')->with('home_content', $content);
})->name('secretary-message');
Route::get('ceos-message', function () {
    $content = view('frontend.pages.ceos_message');
    return view('frontend.home_master')->with('home_content', $content);
})->name('ceos-message');
Route::get('cc-message', function () {
    $content = view('frontend.pages.cc_message');
    return view('frontend.home_master')->with('home_content', $content);
})->name('cc-message');


//What we do?
Route::get('education', [HomeController::class, 'education'])->name('education');
Route::get('health', [HomeController::class, 'health'])->name('health');
Route::get('training', [HomeController::class, 'training'])->name('training');
//Training related => IT Training
Route::get('digital-marketing', [TrainingController::class, 'digitalMarketing'])->name('digital-marketing');
Route::get('graphics-design', [TrainingController::class, 'graphicsDesign'])->name('graphics-design');
Route::get('web-design-development', [TrainingController::class, 'webDesignDevelopment'])->name('web-design-development');
Route::get('mobile-app-development', [TrainingController::class, 'mobileAppDevelopment'])->name('mobile-app-development');
Route::get('professional-short-course', [TrainingController::class, 'professionalShortCourse'])->name('professional-short-course');
Route::get('programming', [TrainingController::class, 'programming'])->name('programming');
Route::get('telecommunication', [TrainingController::class, 'telecommunication'])->name('telecommunication');
Route::get('ecommerce-solution', [TrainingController::class, 'ecommerceSolution'])->name('ecommerce-solution');
Route::get('industrial-attachment', [TrainingController::class, 'industrialAttachment'])->name('industrial-attachment');
//Training related => Network Solution
Route::get('cisco', [TrainingController::class, 'cisco'])->name('cisco');
Route::get('ccna-collaboration', [TrainingController::class, 'ccnaCollaboration'])->name('ccna-collaboration');
Route::get('ccna-routing-and-switching', [TrainingController::class, 'ccnaRoutingAndSwitching'])->name('ccna-routing-and-switching');
Route::get('ccnp-routing-and-switching', [TrainingController::class, 'ccnpRoutingAndSwitching'])->name('ccnp-routing-and-switching');
Route::get('mcsa-2016-server', [TrainingController::class, 'mcsa2016Server'])->name('mcsa-2016-server');
Route::get('mikrotik', [TrainingController::class, 'mikrotik'])->name('mikrotik');
Route::get('a-network', [TrainingController::class, 'aNetwork'])->name('a-network');
Route::get('freelancer', [TrainingController::class, 'freelancer'])->name('freelancer');
Route::get('pksf', [TrainingController::class, 'pksf'])->name('pksf');


//Contact us
Route::get('contact-us', [HomeController::class, 'contactUs'])->name('contact-us');

//projects
Route::get('completed-projects', [HomeController::class, 'completedProjects'])->name('completed-projects');
Route::get('running-projects', [HomeController::class, 'runningProjects'])->name('running-projects');
Route::get('future-projects', [HomeController::class, 'futureProjects'])->name('future-projects');
Route::get('project-details/{id}', [HomeController::class, 'singleProject'])->name('project-details');

//events
Route::get('all-events', [HomeController::class, 'allEvents'])->name('all-events');
Route::get('event-details/{id}', [HomeController::class, 'singleEvent'])->name('event-details');

//News
Route::get('all-news', [HomeController::class, 'allNews'])->name('all-news');
Route::get('news-details/{id}', [HomeController::class, 'singleNews'])->name('news-details');


//Notice
Route::get('all-notice', [HomeController::class, 'allNotice'])->name('all-notice');
Route::get('notice-details/{id}', [HomeController::class, 'singleNotice'])->name('notice-details');


//photo gallery
Route::get('photo-gallery-albums', [HomeController::class, 'photoGallery'])->name('photo-gallery-albums');
Route::get('photo-gallery-album/{id}', [HomeController::class, 'singlePhotoAlbum'])->name('photo-gallery-album');

//video gallery
Route::get('video-gallery-albums', function () {

    $content = view('frontend.pages.under_maintanence');

    return view('frontend.home_master')
        ->with('home_content', $content);
})->name('video-gallery-albums');

//Blog
Route::get('blog', function () {

    $content = view('frontend.pages.under_maintanence');

    return view('frontend.home_master')
        ->with('home_content', $content);
})->name('blog');


//Sitemap
Route::get('sitemap', function () {
    $content = view('frontend.pages.sitemap');
    return view('frontend.home_master')->with('home_content', $content);
})->name('sitemap');

//Donation (frontend+backend)
Route::resource('donation', 'DonationController');



/*
|--------------------------------------------------------------------------
| Web Routes Backend Related
|--------------------------------------------------------------------------
*/

//admin login authentication
Route::get('/admin-panel', [LoginController::class, 'index']);
Route::post('/admin-panel-login', [LoginController::class, 'adminLogin'])->name('admin-panel-login');
Route::get('/dashboard', [SuperLoginController::class, 'index'])->name('admin_dashboard');
Route::get('/logout', [SuperLoginController::class, 'logout']);

//Admin
Route::resource('admins', 'AdminController')->names([
    'index' => 'manage-admin',
    'create' => 'add-admin',
    'store' => 'save-admin',
    'show' => 'view-admin',
    'edit' => 'edit-admin',
    'update' => 'update-admin',
    'destroy' => 'delete-admin'
])->parameters([
    'admins' => 'id'
]);
Route::get('admin-status-change/{id}', [AdminController::class, 'statusActiveInactive'])->name('admin-status-change');
//Route::get('admin-list','AdminController@getDatatable')->name('admin-list');


//slider section
Route::resource('slider', 'SliderController')->names([
    'index' => 'manage-slider',
    'create' => 'add-slider',
    'store' => 'save-slider',
    'show' => 'view-slider',
    'edit' => 'edit-slider',
    'update' => 'update-slider',
    'destroy' => 'delete-slider'
])->parameters([
    'slider' => 'id'
]);
Route::get('slider-status-change/{id}', [SliderController::class, 'statusActiveInactive'])->name('slider-status-change');


//pages section
Route::resource('pages', 'PageController')->names([
    'index' => 'manage-pages',
    'create' => 'add-pages',
    'store' => 'save-pages',
    'show' => 'view-pages',
    'edit' => 'edit-pages',
    'update' => 'update-pages',
    'destroy' => 'delete-pages'
])->parameters([
    'pages' => 'id'
]);
Route::get('pages-status-change/{id}', [PageController::class, 'statusActiveInactive'])->name('pages-status-change');

//Site Info section
Route::get('site-info', [SiteInfoController::class, 'show'])->name('site-info');
Route::put('update-site-info/{id}', [SiteInfoController::class, 'update'])->name('update-site-info');

//Projects section
Route::resource('projects', 'ProjectController');
Route::get('projects-status-change/{id}', [ProjectController::class, 'statusActiveInactive'])->name('projects-status-change');

//Events section
Route::resource('events', 'EventController');
Route::get('events-status-change/{id}', [EventController::class, 'statusActiveInactive'])->name('events-status-change');

//News section
Route::resource('news', 'NewsController');
Route::get('news-status-change/{id}', [NewsController::class, 'statusActiveInactive'])->name('news-status-change');

//Notice section
Route::resource('notice', 'NoticeController');
Route::get('notice-status-change/{id}', [NoticeController::class, 'statusActiveInactive'])->name('notice-status-change');

//Image Gallery section
Route::resource('photo-gallery', 'ImgGalleryController');
Route::get('photo-gallery-status-change/{id}', [ImgGalleryController::class, 'statusActiveInactive'])->name('photo-gallery-status-change');
Route::delete('delete-single-photo/{id}', [ImgGalleryController::class, 'deleteSinglePhoto'])->name('delete-single-photo');

//Member section
Route::resource('member', 'MemberController');
Route::get('member-status-change/{id}', [MemberController::class, 'statusActiveInactive'])->name('member-status-change');

//Our concern section
Route::resource('our-concerns', 'OurConcernsController');
Route::get('our-concerns-status-change/{id}', [OurConcernsController::class, 'statusActiveInactive'])->name('our-concerns-status-change');
