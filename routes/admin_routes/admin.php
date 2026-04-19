<?php

use App\Http\Controllers\Admin\BannerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Middleware\IsAlreadyLoggedIn;

//Livewire 
use App\Livewire\Admin\Banners\BannerList;
use App\Livewire\Admin\Testimonials\TestimonialList;
use App\Livewire\Admin\Services\ServicesList;
use App\Livewire\Admin\Dashboard;
use App\Livewire\Admin\NoiseAtWork\NoiseAtWorkBanner;
use App\Livewire\Admin\NoiseAtWork\NoiseSurveyBannerReport;
use App\Livewire\Admin\AboutUs\AboutUs;
use App\Livewire\Admin\Logo\Logo;
use App\Livewire\Admin\NoiseAtWork\NoiseAtWorkList;
use App\Livewire\Admin\NoiseSurveyReport\NoiseSurveyReportList;
use App\Livewire\Admin\ContactDetails\ContactDetail;
use App\Livewire\Admin\CostAndCharges\CostAndCharges;
use App\Livewire\Admin\QuoteRequirements\QuoteRequirementList;
use App\Livewire\Admin\ContactMessages\ContactMessagesList;
use App\Livewire\Admin\EmailSubscribers\EmailSubscribersList;


Route::middleware([IsAlreadyLoggedIn::class])->group(function () {
    Route::get('login', [LoginController::class, 'login'])->name('login');
});

Route::middleware('auth:admin')->group(function () {
    Route::get('dashboard',Dashboard::class)->name('dashboard');

    Route::get('banners',BannerList::class)->name('admin.banners');
 
    Route::get('noise-at-work-banner',NoiseAtWorkBanner::class)->name('admin.noise-at-work-banner');
    Route::get('noise-survey-banner-report',NoiseSurveyBannerReport::class)->name('admin.noise-survey-banner-report');
    Route::get('about-us',AboutUs::class)->name('admin.about-us');
    Route::get('logo',Logo::class)->name('admin.logo');

    Route::get('testimonials',TestimonialList::class)->name('admin.testimonials');
    Route::get('services',ServicesList::class)->name('admin.services');
    Route::get('noise-at-work',NoiseAtWorkList::class)->name('admin.noise-at-work');
    Route::get('noise-survey-report',NoiseSurveyReportList::class)->name('admin.noise-survey-report');
    Route::get('contact-detail',ContactDetail::class)->name('admin.contact-details');
    Route::get('cost-and-charges',CostAndCharges::class)->name('admin.cost-and-charges');
    Route::get('quote-requirements',QuoteRequirementList::class)->name('admin.quote-requirements');
    Route::get('contact-messages-list',ContactMessagesList::class)->name('admin.contact-messages-list');
    Route::get('email-subscribers-list',EmailSubscribersList::class)->name('admin.email-subscribers-list');

    Route::get('logout', [LogoutController::class, 'index'])->name('logout');

});