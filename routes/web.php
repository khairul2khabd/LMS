<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Admin\HomeSectionController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\RoutesController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseCategoriesController;
use App\Http\Controllers\StudentAuthController;

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

Route::get('/', [IndexController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'logout'])->name('user.logout');

///////////////Admin Route are Here /////////////////////////
Route::get('admin/home', [AdminController::class, 'index']);
Route::get('admin', [LoginController::class, 'showLoginForm'])->name('login.admin');
Route::post('admin', [LoginController::class, 'login']);

////////////////////////Admin courses//////////////////////////////////////////////////////////////
Route::get('admin/createcourse', [CoursesController::class, 'index'])->name('course.index');
Route::post('admin/createcourse', [CoursesController::class, '_courseCreate'])->name('course.create');
Route::get('admin/course-list', [CoursesController::class, 'CourseList'])->name('course.list');
Route::get('admin/course/edit/{id}', [CoursesController::class, 'edit']);
Route::post('admin/course-update', [CoursesController::class, 'update'])->name('course.update');
Route::get('admin/course-ai/{sts}/{id}', [CoursesController::class, 'courseActiveInactive']);

Route::get('admin/coucat', [CourseCategoriesController::class, 'index'])->name('course_categories.index');
Route::post('admin/coucat', [CourseCategoriesController::class, '_courseCategoriesCreate'])->name('course.create_categories');
Route::get('admin/categories-list', [CourseCategoriesController::class, '_courseCategoriesList'])->name('categories.list');
Route::get('admin/student-list', [StudentAuthController::class, '_studentList'])->name('student.list');

//////////////// Course view public //////////////////////
Route::get('courseview', [RoutesController::class, '_courseView'])->name('course.view'); // public view
Route::get('course/details/{id}', [RoutesController::class, '_courseDetails']);

Route::post('admin/hometext-store', [HomeSectionController::class, 'HometextStore'])->name('hometext.store');

Route::post('admin/hometext-store', [HomeSectionController::class, 'HometextStore'])->name('hometext.store');
Route::get('admin/text-manage', [HomeSectionController::class, 'TextManage'])->name('text.manage');
Route::get('admin/course-text/edit/{id}', [HomeSectionController::class, 'CourseEdit']);
//Route::post('admin/course-text/update', [HomeSectionController::class, 'CourseUpdate'])->name('hometext.update');
Route::get('admin/course/delete/{id}', [HomeSectionController::class, 'CourseDelete']);
Route::get('admin/course/inactive/{id}', [HomeSectionController::class, 'CourseInactive']);
Route::get('admin/course/active/{id}', [HomeSectionController::class, 'CourseActive']);
///////////////////////////////Course Learn Roure Are Here////////////////////////////////////////////
Route::get('admin/course-learn', [HomeSectionController::class, 'CourseLearn'])->name('course.learn');
Route::post('admin/course/learn-store', [HomeSectionController::class, 'CourseLearnStore'])->name('learn.store');
Route::get('admin/course/learn-manage', [HomeSectionController::class, 'ManageLearn'])->name('manage.learn');
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


/////////////// Student Registration  ///////////////
Route::get('student/registration/{id}', [StudentController::class, 'index'])->name('student.registration');
Route::post('student/student-create', [StudentController::class, 'create'])->name('student.create');
Route::get('student/reg-success/{id}', [StudentController::class, 'show'])->name('student.registration.success');
