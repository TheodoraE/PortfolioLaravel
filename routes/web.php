<?php

use App\Http\Controllers\BackController;
use App\Http\Controllers\FrontController;
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

// FrontOffice
Route::get('/', [FrontController::class, 'index']);


// BackOffice
Route::get('/backoffice', [BackController::class, 'index']);
    // Nav
Route::get('/createNavLinks', [BackController::class, 'createNavLinks']);
Route::post('/storeNavLinks', [BackController::class, 'storeNavLinks']);
Route::get('/showNavLinks/{id}', [BackController::class, 'showNavLinks']);
Route::get('/editNavLinks/{id}', [BackController::class, 'editNavLinks']);
Route::post('updateNavLinks/{id}', [BackController::class, 'updateNavLinks']);
Route::post('/destroyNavLinks/{id}', [BackController::class, 'destroyNavLinks']);
Route::post('/destroyAllNavLinks', [BackController::class, 'destroyAllNavLinks']);
    // Social Links
Route::get('/createSocialLinks', [BackController::class, 'createSocialLinks']);
Route::post('/storeSocialLinks', [BackController::class, 'storeSocialLinks']);
Route::get('/showSocialLinks/{id}', [BackController::class, 'showSocialLinks']);
Route::get('/editSocialLinks/{id}', [BackController::class, 'editSocialLinks']);
Route::post('updateSocialLinks/{id}', [BackController::class, 'updateSocialLinks']);
Route::post('/destroySocialLinks/{id}', [BackController::class, 'destroySocialLinks']);
Route::post('/destroyAllSocialLinks', [BackController::class, 'destroyAllSocialLinks']);
    // About Titles
Route::get('/createAboutTitles', [BackController::class, 'createAboutTitles']);
Route::post('/storeAboutTitles', [BackController::class, 'storeAboutTitles']);
Route::get('/showAboutTitles/{id}', [BackController::class, 'showAboutTitles']);
Route::get('/editAboutTitles/{id}', [BackController::class, 'editAboutTitles']);
Route::post('updateAboutTitles/{id}', [BackController::class, 'updateAboutTitles']);
Route::post('/destroyAboutTitles/{id}', [BackController::class, 'destroyAboutTitles']);
Route::post('/destroyAllAboutTitles', [BackController::class, 'destroyAllAboutTitles']);
    // About Counts
Route::get('/createAboutCounts', [BackController::class, 'createAboutCounts']);
Route::post('/storeAboutCounts', [BackController::class, 'storeAboutCounts']);
Route::get('/showAboutCounts/{id}', [BackController::class, 'showAboutCounts']);
Route::get('/editAboutCounts/{id}', [BackController::class, 'editAboutCounts']);
Route::post('updateAboutCounts/{id}', [BackController::class, 'updateAboutCounts']);
Route::post('/destroyAboutCounts/{id}', [BackController::class, 'destroyAboutCounts']);
Route::post('/destroyAllAboutCounts', [BackController::class, 'destroyAllAboutCounts']);
    // About Skills
Route::get('/createAboutSkills', [BackController::class, 'createAboutSkills']);
Route::post('/storeAboutSkills', [BackController::class, 'storeAboutSkills']);
Route::get('/showAboutSkills/{id}', [BackController::class, 'showAboutSkills']);
Route::get('/editAboutSkills/{id}', [BackController::class, 'editAboutSkills']);
Route::post('updateAboutSkills/{id}', [BackController::class, 'updateAboutSkills']);
Route::post('/destroyAboutSkills/{id}', [BackController::class, 'destroyAboutSkills']);
Route::post('/destroyAllAboutSkills', [BackController::class, 'destroyAllAboutSkills']);
    // About Interests
Route::get('/createAboutInterests', [BackController::class, 'createAboutInterests']);
Route::post('/storeAboutInterests', [BackController::class, 'storeAboutInterests']);
Route::get('/showAboutInterests/{id}', [BackController::class, 'showAboutInterests']);
Route::get('/editAboutInterests/{id}', [BackController::class, 'editAboutInterests']);
Route::post('updateAboutInterests/{id}', [BackController::class, 'updateAboutInterests']);
Route::post('/destroyAboutInterests/{id}', [BackController::class, 'destroyAboutInterests']);
Route::post('/destroyAllAboutInterests', [BackController::class, 'destroyAllAboutInterests']);