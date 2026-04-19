<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\CostandChargesController;
use App\Http\Controllers\NoiseSurveyReportController;
use App\Http\Controllers\NoiseAtWorkController;

Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('about-us',[AboutUsController::class,'index'])->name('about-us');
Route::get('contact-us',[ContactUsController::class,'index'])->name('contact-us');
Route::get('cost-and-charges',[CostandChargesController::class,'index'])->name('cost-and-charges');
Route::get('noise-survey-report',[NoiseSurveyReportController::class,'index'])->name('noise-survey-report');
Route::get('noise-at-work',[NoiseAtWorkController::class,'index'])->name('noise-at-work');