<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DomainController;
use App\Http\Controllers\MeetingController;
use App\Http\Controllers\PartnerController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::name('frontend.')->group(function () {

    Route::view('/', 'home')->name('home');
    Route::view('about-us', 'about-us')->name('aboutUs');
    Route::view('our-team', 'our-team')->name('ourTeam');
    Route::view('services', 'services')->name('services');

    Route::view('services/software-business-analyst', 'services.software-business-analyst')->name('services.software-business-analyst');
    Route::view('services/business-process-re-engineering', 'services.business-process-re-engineering')->name('services.business-process-re-engineering');
    Route::view('services/software-project-management', 'services.software-project-management')->name('services.software-project-management');
    Route::view('services/solution-architecture-design', 'services.solution-architecture-design')->name('services.solution-architecture-design');
    Route::view('services/software-documentation', 'services.software-documentation')->name('services.software-documentation');
    Route::view('services/data-analysis', 'services.data-analysis')->name('services.data-analysis');
    Route::view('services/digital-adoption-planning', 'services.digital-adoption-planning')->name('services.digital-adoption-planning');
    Route::view('services/requirement-gathering-and-elicitation', 'services.requirement-gathering-and-elicitation')->name('services.requirement-gathering-and-elicitation');
    Route::view('services/technical-research-and-development', 'services.technical-research-and-development')->name('services.technical-research-and-development');

    Route::view('blogs', 'blogs')->name('blogs');

    Route::view('blogs/agile-methodology-and-business-analysis', 'blogs.agile-methodology-and-business-analysis')->name('blogs.agile-methodology-and-business-analysis');
    Route::view('blogs/ensuring-project-success-in-software-development', 'blogs.ensuring-project-success-in-software-development')->name('blogs.ensuring-project-success-in-software-development');
    Route::view('blogs/the-benefits-of-docs-in-software-development', 'blogs.the-benefits-of-docs-in-software-development')->name('blogs.the-benefits-of-docs-in-software-development');
    Route::view('blogs/the-power-of-business-analysis-in-accelerating', 'blogs.the-power-of-business-analysis-in-accelerating')->name('blogs.the-power-of-business-analysis-in-accelerating');
    Route::view('blogs/how-to-create-effective-software-documentation', 'blogs.how-to-create-effective-software-documentation')->name('blogs.how-to-create-effective-software-documentation');
    Route::view('blogs/how-to-implement-agile-requirement-gathering', 'blogs.how-to-implement-agile-requirement-gathering')->name('blogs.how-to-implement-agile-requirement-gathering');

    Route::view('projects', 'projects')->name('projects');

    Route::view('projects/qme-solutions', 'projects.qme-solutions')->name('projects.qme-solutions');
    Route::view('projects/quicksteps', 'projects.quicksteps')->name('projects.quicksteps');
    Route::view('projects/kutuby', 'projects.kutuby')->name('projects.kutuby');
    Route::view('projects/roomz', 'projects.roomz')->name('projects.roomz');
    Route::view('projects/investme', 'projects.investme')->name('projects.investme');
    Route::view('projects/watch-tower', 'projects.watch-tower')->name('projects.watch-tower');
    Route::view('projects/united-master', 'projects.united-master')->name('projects.united-master');
    Route::view('projects/lahebo', 'projects.lahebo')->name('projects.lahebo');
    Route::view('projects/revconductor', 'projects.revconductor')->name('projects.revconductor');


    Route::view('partners', 'partners')->name('partners');

    // Contacts 
    Route::post('contact-us', [ContactController::class, 'store'])->name('contacts.store');

    //Partners
    Route::post('partners', [PartnerController::class, 'store'])->name('partners.store');

    //DomainController 
    Route::get('domains', DomainController::class)->name('domains');

    //MeetingController
    Route::post('get-availabe-slots', [MeetingController::class, 'checkAvailableSlots'])->name('getAvailableSlots');
    Route::post('get-time-zones', [MeetingController::class, 'getTimeZones'])->name('getTimeZones');
    Route::post('schedule-call', [MeetingController::class, 'scheduleMeeting'])->name('scheduleMeeting.store');
});
