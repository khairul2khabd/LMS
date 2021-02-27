<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Admin\HomeSectionController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;

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
////////////////////////Home Section//////////////////////////////////////////////////////////////
Route::get('admin/home-section', [HomeSectionController::class, 'HomeText'])->name('home.text');
Route::post('admin/hometext-store', [HomeSectionController::class, 'HometextStore'])->name('hometext.store');
Route::get('admin/text-manage', [HomeSectionController::class, 'TextManage'])->name('text.manage');
Route::get('admin/course-text/edit/{id}', [HomeSectionController::class, 'CourseEdit']);
Route::post('admin/course-text/update', [HomeSectionController::class, 'CourseUpdate'])->name('hometext.update');
Route::get('admin/course/delete/{id}', [HomeSectionController::class, 'CourseDelete']);
Route::get('admin/course/inactive/{id}', [HomeSectionController::class, 'CourseInactive']);
Route::get('admin/course/active/{id}', [HomeSectionController::class, 'CourseActive']);
///////////////////////////////Course Learn Roure Are Here////////////////////////////////////////////
Route::get('admin/course-learn',[HomeSectionController::class, 'CourseLearn'])->name('course.learn');
Route::post('admin/course/learn-store',[HomeSectionController::class, 'CourseLearnStore'])->name('learn.store');
Route::get('admin/course/learn-manage',[HomeSectionController::class, 'ManageLearn'])->name('manage.learn');
Route::get('admin/learn/edit/{id}', [HomeSectionController::class, 'LearnEdit']);
Route::post('admin/course-learn/update', [HomeSectionController::class, 'CourseLearnUpdate'])->name('learn.update');
Route::get('admin/learn/delete/{id}', [HomeSectionController::class, 'LearnDelete']);
Route::get('admin/learn/inactive/{id}', [HomeSectionController::class, 'LearnInactive']);
Route::get('admin/learn/active/{id}', [HomeSectionController::class, 'LearnActive']);
/////////////////////////Topic Course Route Are Here/////////////////////////////
Route::get('admin/topic-course', [HomeSectionController::class, 'TopicCourse'])->name('topic.course');
Route::post('admin/topic-store', [HomeSectionController::class, 'TopicStore'])->name('topic.store');
Route::get('admin/topic-manage', [HomeSectionController::class, 'ManageTopic'])->name('manage.topic');
Route::get('admin/topic/edit/{id}', [HomeSectionController::class, 'TopicEdit']);
Route::post('admin/topic/update', [HomeSectionController::class, 'TopicUpdate'])->name('topic.update');

//////////////// Course view //////////////////////
Route::get('course', [CourseController::class, '_courseView'])->name('course.list');


/////////////// Student Registration  ///////////////
Route::get('student/registration', [StudentController::class, 'index'])->name('student.registration');
Route::post('student/student-create', [StudentController::class, 'create'])->name('student.create');
