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
    // Resume Titles
Route::get('/createResumeTitles', [BackController::class, 'createResumeTitles']);
Route::post('/storeResumeTitles', [BackController::class, 'storeResumeTitles']);
Route::get('/showResumeTitles/{id}', [BackController::class, 'showResumeTitles']);
Route::get('/editResumeTitles/{id}', [BackController::class, 'editResumeTitles']);
Route::post('updateResumeTitles/{id}', [BackController::class, 'updateResumeTitles']);
Route::post('/destroyResumeTitles/{id}', [BackController::class, 'destroyResumeTitles']);
Route::post('/destroyAllResumeTitles', [BackController::class, 'destroyAllResumeTitles']);
    // Resume Titles2
Route::get('/createResumeTitles2', [BackController::class, 'createResumeTitles2']);
Route::post('/storeResumeTitles2', [BackController::class, 'storeResumeTitles2']);
Route::get('/showResumeTitles2/{id}', [BackController::class, 'showResumeTitles2']);
Route::get('/editResumeTitles2/{id}', [BackController::class, 'editResumeTitles2']);
Route::post('updateResumeTitles2/{id}', [BackController::class, 'updateResumeTitles2']);
Route::post('/destroyResumeTitles2/{id}', [BackController::class, 'destroyResumeTitles2']);
Route::post('/destroyAllResumeTitles2', [BackController::class, 'destroyAllResumeTitles2']);
    // Resume Infos
Route::get('/createResumeInfos', [BackController::class, 'createResumeInfos']);
Route::post('/storeResumeInfos', [BackController::class, 'storeResumeInfos']);
Route::get('/showResumeInfos/{id}', [BackController::class, 'showResumeInfos']);
Route::get('/editResumeInfos/{id}', [BackController::class, 'editResumeInfos']);
Route::post('updateResumeInfos/{id}', [BackController::class, 'updateResumeInfos']);
Route::post('/destroyResumeInfos/{id}', [BackController::class, 'destroyResumeInfos']);
Route::post('/destroyAllResumeInfos', [BackController::class, 'destroyAllResumeInfos']);
    // Resume Educations
Route::get('/createResumeEducations', [BackController::class, 'createResumeEducations']);
Route::post('/storeResumeEducations', [BackController::class, 'storeResumeEducations']);
Route::get('/showResumeEducations/{id}', [BackController::class, 'showResumeEducations']);
Route::get('/editResumeEducations/{id}', [BackController::class, 'editResumeEducations']);
Route::post('updateResumeEducations/{id}', [BackController::class, 'updateResumeEducations']);
Route::post('/destroyResumeEducations/{id}', [BackController::class, 'destroyResumeEducations']);
Route::post('/destroyAllResumeEducations', [BackController::class, 'destroyAllResumeEducations']);
    // Portfolio Titles
Route::get('/createPortfolioTitles', [BackController::class, 'createPortfolioTitles']);
Route::post('/storePortfolioTitles', [BackController::class, 'storePortfolioTitles']);
Route::get('/showPortfolioTitles/{id}', [BackController::class, 'showPortfolioTitles']);
Route::get('/editPortfolioTitles/{id}', [BackController::class, 'editPortfolioTitles']);
Route::post('updatePortfolioTitles/{id}', [BackController::class, 'updatePortfolioTitles']);
Route::post('/destroyPortfolioTitles/{id}', [BackController::class, 'destroyPortfolioTitles']);
Route::post('/destroyAllPortfolioTitles', [BackController::class, 'destroyAllPortfolioTitles']);
    // Portfolio Filters
Route::get('/createPortfolioFilters', [BackController::class, 'createPortfolioFilters']);
Route::post('/storePortfolioFilters', [BackController::class, 'storePortfolioFilters']);
Route::get('/showPortfolioFilters/{id}', [BackController::class, 'showPortfolioFilters']);
Route::get('/editPortfolioFilters/{id}', [BackController::class, 'editPortfolioFilters']);
Route::post('updatePortfolioFilters/{id}', [BackController::class, 'updatePortfolioFilters']);
Route::post('/destroyPortfolioFilters/{id}', [BackController::class, 'destroyPortfolioFilters']);
Route::post('/destroyAllPortfolioFilters', [BackController::class, 'destroyAllPortfolioFilters']);
    // Portfolio Divs
Route::get('/createPortfolioDivs', [BackController::class, 'createPortfolioDivs']);
Route::post('/storePortfolioDivs', [BackController::class, 'storePortfolioDivs']);
Route::get('/showPortfolioDivs/{id}', [BackController::class, 'showPortfolioDivs']);
Route::get('/editPortfolioDivs/{id}', [BackController::class, 'editPortfolioDivs']);
Route::post('updatePortfolioDivs/{id}', [BackController::class, 'updatePortfolioDivs']);
Route::post('/destroyPortfolioDivs/{id}', [BackController::class, 'destroyPortfolioDivs']);
Route::post('/destroyAllPortfolioDivs', [BackController::class, 'destroyAllPortfolioDivs']);
    // Contact Titles
Route::get('/createContactTitles', [BackController::class, 'createContactTitles']);
Route::post('/storeContactTitles', [BackController::class, 'storeContactTitles']);
Route::get('/showContactTitles/{id}', [BackController::class, 'showContactTitles']);
Route::get('/editContactTitles/{id}', [BackController::class, 'editContactTitles']);
Route::post('updateContactTitles/{id}', [BackController::class, 'updateContactTitles']);
Route::post('/destroyContactTitles/{id}', [BackController::class, 'destroyContactTitles']);
Route::post('/destroyAllContactTitles', [BackController::class, 'destroyAllContactTitles']);
    // Contact Cards
Route::get('/createContactCards', [BackController::class, 'createContactCards']);
Route::post('/storeContactCards', [BackController::class, 'storeContactCards']);
Route::get('/showContactCards/{id}', [BackController::class, 'showContactCards']);
Route::get('/editContactCards/{id}', [BackController::class, 'editContactCards']);
Route::post('updateContactCards/{id}', [BackController::class, 'updateContactCards']);
Route::post('/destroyContactCards/{id}', [BackController::class, 'destroyContactCards']);
Route::post('/destroyAllContactCards', [BackController::class, 'destroyAllContactCards']);