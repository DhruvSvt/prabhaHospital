<?php

use App\Http\Controllers\GalleryController;
use App\Http\Controllers\VisitorsController;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

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

Route::get('/', function () {
    return view('visitors.index');
});
Route::get('/department/{slug}', [VisitorsController::class, 'department'])->name('department');
Route::view('/appointment', 'visitors.doctors-appointment')->name('doctors-appointment');

Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');

Route::view('/home', 'visitors.index')->name('home');
Route::view('/about-prabha', 'visitors.about')->name('about-prabha');
Route::view('/about-doctor', 'visitors.aboutdoctor')->name('about-doctor');
Route::view('/director-desk', 'visitors.directordesk')->name('director-desk');
// Route::view('/gallery', 'visitors.gallery')->name('gallery');
Route::view('/our-surgeries', 'visitors.surgeries')->name('our-surgeries');
Route::view('/patients', 'visitors.international-patients')->name('patients');
Route::view('/facilities', 'visitors.facilities')->name('facilities');
Route::view('/neurology', 'visitors.neurology')->name('neurology');
Route::view('/urology', 'visitors.urology')->name('urology');
Route::view('/urology', 'visitors.urology')->name('urology');
Route::view('/gastroenterology', 'visitors.gastroenterology')->name('gastroenterology');
Route::view('/obstetrics and gynecology', 'visitors.obstretic')->name('obstetrics and gynecology');
Route::view('/icu', 'visitors.icu')->name('icu');
Route::view('/nicu', 'visitors.nicu')->name('nicu');
Route::view('/surgery', 'visitors.surgery')->name('surgery');
Route::view('/cardiology', 'visitors.cardiology')->name('cardiology');
Route::view('/orthopedic', 'visitors.orthopedic')->name('orthopedic');
Route::view('/surgries', 'visitors.surgries')->name('surgries');
Route::view('/plasticsurgery', 'visitors.plasticsurgery')->name('plasticsurgery');
Route::view('/contact', 'visitors.contact')->name('contact');
Route::view('/piles', 'visitors.piles')->name('piles');
Route::view('/fissure', 'visitors.fissure')->name('fissure');
Route::view('/fistula', 'visitors.fistula')->name('fistula');
Route::view('/circumcision', 'visitors.circumcision')->name('circumcision');
Route::view('/varicoseveins', 'visitors.varicoseveins')->name('varicoseveins');
Route::view('/gynecological', 'visitors.gynecology')->name('gynecological');
Route::view('/ent', 'visitors.ent')->name('ent');
Route::view('/gallstone', 'visitors.gallstone')->name('gallstone');
Route::view('/cataract', 'visitors.cataract')->name('cataract');
Route::view('/lasik', 'visitors.lasik')->name('lasik');
Route::view('/hairtransplant', 'visitors.hairtransplant')->name('hairtransplant');
Route::view('/gynecosmatia', 'visitors.gynecosmatia')->name('gynecosmatia');
Route::view('/iuitreatment', 'visitors.iuitreatment')->name('iuitreatment');
Route::view('/appendictics', 'visitors.appendictics')->name('appendictics');
Route::view('/aclreconstruction', 'visitors.aclreconstruction')->name('aclreconstruction');
Route::view('/hernia', 'visitors.hernia')->name('hernia');
Route::view('/kidneystones', 'visitors.kidneystones')->name('kidneystones');
Route::view('/ivftreatement', 'visitors.ivftreatment')->name('ivftreatement');
Route::view('/aesthetics', 'visitors.aesthetics')->name('aesthetics');
Route::view('/carpaltunnel', 'visitors.carpaltunnel')->name('carpaltunnel');
Route::view('/hipreplacement', 'visitors.hipreplacement')->name('hipreplacement');
Route::view('/kneereplacement', 'visitors.kneereplacement')->name('kneereplacement');
Route::view('/lipoma', 'visitors.lipoma')->name('lipoma');
Route::view('/liposuction', 'visitors.liposuction')->name('liposuction');
Route::view('/orthopedics', 'visitors.orthopedics')->name('orthopedics');
Route::view('/ourdoctors', 'visitors.ourdoctors')->name('ourdoctors');
Route::view('/patients-feedback', 'visitors.patientfeedback')->name('patients-feedback');
Route::view('/blogs', 'visitors.blogs')->name('blogs');






//

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
