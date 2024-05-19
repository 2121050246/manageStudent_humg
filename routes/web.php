<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformateController;
use App\Http\Controllers\AddController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EmailController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('humg', [LoginController::class, 'login'])->name('login');
Route::post('humg', [LoginController::class, 'logined'])->name('logined');
Route::get('humg_logout', [LoginController::class, 'logout'])->name('logout');









Route::prefix('humg')->middleware('auth.login')->group(function() {


    Route::get('home', [HomeController::class, 'index'])->name('home');



    Route::get('profice', [HomeController::class, 'profice'])->name('profice');

    //todo :  Dùng chung button huỷ
    // Route::get('add/back', [HomeController::class, 'back'])->name('back');


    //! information
    Route::get('infor/student', [InformateController::class, 'student'])->name('infor.student');

    Route::get('infor/courses', [InformateController::class, 'courses'])->name('infor.courses');
    Route::post('infor/courses', [InformateController::class, 'courses_post'])->name('infor.courses_post');

    Route::get('infor/result', [InformateController::class, 'result'])->name('infor.result');

    Route::get('infor/register_subject', [InformateController::class, 'register_subject'])->name('infor.register_subject');
    Route::post('infor/register_subjected', [InformateController::class, 'register_subjected'])->name('infor.register_subjected');



    //Danh sách đăng kí môn
    Route::get('infor/list_register', [InformateController::class, 'list_register'])->name('infor.list_register');
    Route::get('infor/list_register/delete/{id}', [InformateController::class, 'list_register_delete'])->name('infor.list_register.delete');





    //! add







        // ------------------

    //todo :   account
    Route::get('add/account/show', [AddController::class, 'show'])->name('add.account');

    Route::get('add/account/create', [AddController::class, 'create'])->name('add.account.create');
    Route::post('add/account/create', [AddController::class, 'create_post'])->name('add.account.create_post');

    Route::get('add/account/delete/{id}', [AddController::class, 'delete'])->name('add.account.delete');

    Route::get('add/account/update/{id}', [AddController::class, 'update'])->name('add.account.update');
    Route::post('add/account/update/{id}', [AddController::class, 'updated'])->name('add.account.updated');




    // todo : department
    Route::get('add/department/show', [AddController::class, 'department_show'])->name('add.department');

    Route::get('add/department/create', [AddController::class, 'department_create'])->name('add.department.create');
    Route::post('add/department/show', [AddController::class, 'department_post'])->name('add.department.post');

    Route::get('add/department/update/{id}', [AddController::class, 'department_update'])->name('add.department.update');
    Route::post('add/department/update/{id}', [AddController::class, 'department_updated'])->name('add.department.updated');

    Route::get('add/department/delete/{id}', [AddController::class, 'department_delete'])->name('add.department.delete');



    // todo : major
    Route::get('add/major/show', [AddController::class, 'major_show'])->name('add.major');

    Route::get('add/major/create', [AddController::class, 'major_create'])->name('add.major.create');
    Route::post('add/major/create', [AddController::class, 'major_post'])->name('add.major.post');


    Route::get('add/major/delete/{id}', [AddController::class, 'major_delete'])->name('add.major.delete');

    Route::get('add/major/update/{id}', [AddController::class, 'major_update'])->name('add.major.update');
    Route::post('add/major/update/{id}', [AddController::class, 'major_updated'])->name('add.major.updated');




    //todo : year
    Route::get('add/year/show', [AddController::class, 'year_show'])->name('add.year');


    Route::get('add/year/create', [AddController::class, 'year_create'])->name('add.year.create');
    Route::post('add/year/create', [AddController::class, 'year_post'])->name('add.year.post');


    Route::get('add/year/delete/{id}', [AddController::class, 'year_delete'])->name('add.year.delete');



    // todo : course
    Route::get('add/course/show', [AddController::class, 'course_show'])->name('add.course');

    Route::get('add/course/create', [AddController::class, 'course_create'])->name('add.course.create');
    Route::post('add/course/create', [AddController::class, 'course_post'])->name('add.course.post');


    Route::get('add/course/delete/{id}', [AddController::class, 'course_delete'])->name('add.course.delete');

    Route::get('add/course/update/{id}', [AddController::class, 'course_update'])->name('add.course.update');
    Route::post('add/course/update/{id}', [AddController::class, 'course_updated'])->name('add.course.updated');







    // todo : student
    Route::get('add/student/show', [AddController::class, 'student_show'])->name('add.student');

    Route::get('add/student/create', [AddController::class, 'student_create'])->name('add.student.create');
    Route::post('add/student/create', [AddController::class, 'student_post'])->name('add.student.post');

    Route::get('add/student/delete/{id}', [AddController::class, 'student_delete'])->name('add.student.delete');


    Route::get('add/student/update/{id}', [AddController::class, 'student_update'])->name('add.student.update');
    Route::post('add/student/update/{id}', [AddController::class, 'student_updated'])->name('add.student.updated');







    // ! score
    Route::get('add/score/show', [AddController::class, 'score_show'])->name('add.score.show');
    Route::post('add/score/show', [AddController::class, 'score_showed'])->name('add.score.showed');


    Route::get('add/score/create', [AddController::class, 'score_create'])->name('add.score.create');
    Route::post('add/score/create', [AddController::class, 'score_post'])->name('add.score.post');

    Route::get('add/score/delete/{id}', [AddController::class, 'score_delete'])->name('add.score.delete');

    Route::get('add/score/update/{id}', [AddController::class, 'score_update'])->name('add.score.update');
    Route::post('add/score/update/{id}', [AddController::class, 'score_updated'])->name('add.score.updated');






    Route::get('email/index', [EmailController::class, 'email_index'])->name('email.index');
    Route::post('email/index', [EmailController::class, 'email_sent'])->name('email.sent');




});

