<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\CoursPageController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Admin\HomeSectionController;

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

Route::get('/',[IndexController::class,'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'logout'])->name('user.logout');

///////////////Admin Route are Here /////////////////////////
Route::get('admin/home', [AdminController::class, 'index']);
Route::get('admin', [LoginController::class, 'showLoginForm'])->name('login.admin');
Route::post('admin', [LoginController::class, 'login']);

////////////////////////////COURSE PAGE ROUTE ARE HERE//////////////////////////
Route::get('course-page',[CoursPageController::class,'index'])->name('course.page');
Route::get('course/details/{id}',[CoursPageController::class,'CorseDetails']);
Route::get('admin/course',[CoursPageController::class,'Course'])->name('course');
Route::post('admin/course-store',[CoursPageController::class,'CourseStore'])->name('course.store');
Route::get('admin/course-manage',[CoursPageController::class,'CourseManage'])->name('course.manage');
Route::get('admin/course/edit/{id}',[CoursPageController::class,'CourseEdit']);
Route::post('admin/course-update',[CoursPageController::class,'CourseUpdate'])->name('course.update');
Route::get('admin/course/page/delete/{id}',[CoursPageController::class,'CoursePageDelete']);
Route::get('admin/course-page/inactive/{id}',[CoursPageController::class,'CoursePageInactive']);
Route::get('admin/course-page/active/{id}',[CoursPageController::class,'CoursePageActive']);
////////////////////////Home Section//////////////////////////////////////////////////////////////
Route::get('admin/home-section', [CourseController::class, 'HomeText'])->name('home.text');
Route::post('admin/hometext-store', [CourseController::class, 'HometextStore'])->name('hometext.store');
Route::get('admin/text-manage', [CourseController::class, 'TextManage'])->name('text.manage');
Route::get('admin/course-text/edit/{id}', [CourseController::class, 'CourseEdit']);
Route::post('admin/course-text/update', [CourseController::class, 'CourseUpdate'])->name('hometext.update');
Route::get('admin/course/delete/{id}', [CourseController::class, 'CourseDelete']);
Route::get('admin/course/inactive/{id}', [CourseController::class, 'CourseInactive']);
Route::get('admin/course/active/{id}', [CourseController::class, 'CourseActive']);
///////////////////////////////Course Learn Roure Are Here////////////////////////////////////////////
Route::get('admin/course-learn',[CourseController::class, 'CourseLearn'])->name('course.learn');
Route::post('admin/course/learn-store',[CourseController::class, 'CourseLearnStore'])->name('learn.store');
Route::get('admin/course/learn-manage',[CourseController::class, 'ManageLearn'])->name('manage.learn');
Route::get('admin/learn/edit/{id}', [CourseController::class, 'LearnEdit']);
Route::post('admin/course-learn/update', [CourseController::class, 'CourseLearnUpdate'])->name('learn.update');
Route::get('admin/learn/delete/{id}', [CourseController::class, 'LearnDelete']);
Route::get('admin/learn/inactive/{id}', [CourseController::class, 'LearnInactive']);
Route::get('admin/learn/active/{id}', [CourseController::class, 'LearnActive']);
/////////////////////////Topic Course Route Are Here/////////////////////////////
Route::get('admin/topic-course', [CourseController::class, 'TopicCourse'])->name('topic.course');
Route::post('admin/topic-store', [CourseController::class, 'TopicStore'])->name('topic.store');
Route::get('admin/topic-manage', [CourseController::class, 'ManageTopic'])->name('manage.topic');
Route::get('admin/topic/edit/{id}', [CourseController::class, 'TopicEdit']);
Route::post('admin/topic/update', [CourseController::class, 'TopicUpdate'])->name('topic.update');
Route::get('admin/topic/delete/{id}', [CourseController::class, 'TopicDelete']);
Route::get('admin/topic/inactive/{id}', [CourseController::class, 'TopicInactive']);
Route::get('admin/topic/active/{id}', [CourseController::class, 'TopicActive']);

