<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEndController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\SubskillController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\ProjectController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/',[FrontEndController::class, 'index'])->name('homeFront');

Route::post('/contact', [ContactController::class,'contact'])->name('contact.post');
Route::get('/manageContact', [AdminController::class,'manageContact'])->name('manage.contact');
Route::post('/delete-contact', [AdminController::class,'deleteContact'])->name('delete.contact');







// ----------------Admin----------------
Route::get('/home',[AdminController::class,'index'])->name('home');

Route::get('/add-banner',[BannerController::class,'index'])->name('add.banner');
Route::get('/manage-banner',[BannerController::class,'manageBanner'])->name('manage.banner');
Route::post('/new-banner',[BannerController::class,'saveBanner'])->name('new.banner');
Route::get('/status/{id}',[BannerController::class,'status'])->name('status');
Route::post('/delete-banner',[BannerController::class,'deleteBanner'])->name('delete.banner');


Route::get('/add-skill',[SkillController::class,'addSkill'])->name('add.skill');
Route::post('/new-skill',[SkillController::class,'saveSkill'])->name('new.skill');

Route::get('/manage-skill',[SkillController::class,'mangeSkill'])->name('manage.skill');
Route::get('/status/{id}',[SkillController::class,'status'])->name('status');
Route::post('/delete',[SkillController::class,'deleteSkill'])->name('delete.skill');

Route::get('/add-skillsub',[SubskillController::class,'addSkillsub'])->name('add.skillSub');
Route::post('/new-subSkill',[SubskillController::class,'subSkillsave'])->name('new.subSkill');
Route::get('/subSkil.manage',[SubskillController::class,'subManage'])->name('subSkil.manage');
Route::post('/delete-subSkil',[SubskillController::class,'deleteSubSkill'])->name('delete.subSkill');


Route::get('/add-serivce',[ServiceController::class,'addService'])->name('add.service');
Route::post('/new-serivce',[ServiceController::class,'saveService'])->name('new.service');
Route::get('/manage-service',[ServiceController::class,'manageService'])->name('manage.service');
Route::post('/delete-service',[ServiceController::class,'deleteService'])->name('delete.service');


Route::get('/add-experience',[ExperienceController::class,'addExperience'])->name('add.experience');
Route::post('/new-experience',[ExperienceController::class,'saveExperience'])->name('new.experience');
Route::get('/manage-experience',[ExperienceController::class,'manageExperience'])->name('manage.experience');
Route::post('/delete-experience',[ExperienceController::class,'deleteExperience'])->name('delete.experience');



Route::get('/add-project',[ProjectController::class,'addProject'])->name('add.project');
Route::post('/new-project',[ProjectController::class,'saveProject'])->name('new.project');
Route::get('/manage-project',[ProjectController::class,'manageProject'])->name('manage.project');
Route::post('/delete-project',[ProjectController::class,'deleteProject'])->name('delete.project');

Route::get('/user',[UserController::class,'userManage'])->name('user.manage');





