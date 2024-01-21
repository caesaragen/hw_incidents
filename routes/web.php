<?php

use App\Http\Controllers\Incident\IncidentAssessmentController;
use App\Http\Controllers\Incident\IncidentsController;
use App\Http\Controllers\Incident\ObController;
use App\Http\Controllers\ProfileController;
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

Route::get(
    '/', function () {
        return view('welcome');
    }
);

// Route::get(
//     '/dashboard', function () {
//         return view('dashboard');
//     }
// )->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(
    function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
        Route::resource('obs', ObController::class);
        Route::get('/dashboard', [IncidentsController::class, 'dashboard'])->name('dashboard');
        Route::post('/obs', [ObController::class, 'store'])->name('obs.store');
        Route::get('/incidents', [IncidentsController::class, 'create'])->name('incidents.create');
        Route::post('/incidents', [IncidentsController::class, 'store'])->name('incidents.store');
        // Route::get('/incidents/{incident}', [IncidentsController::class, 'show'])->name('incidents.show');
        Route::get('/incidents/all', [IncidentsController::class, 'show'])->name('incidents.index');
        Route::get('/incidents/report', [IncidentsController::class, 'incidentAssessment'])->name('incidents.report');
        Route::post('/incidents/assessment', [IncidentAssessmentController::class, 'create'])->name('incidents.assessment.store');
        Route::get('/assessment/all', [IncidentAssessmentController::class, 'index'])->name('compensations.index');
        Route::get('/warden/index/{incident_assessment_id}', [IncidentAssessmentController::class, 'warden'])->name('warden.index');
        Route::get('/download-incident-report/{incident_assessment_id}', [IncidentAssessmentController::class, 'downloadIncidentReport'])->name('download.incident.report');


        // Route::get('/compensation/create', [IncidentAssessmentController::class, 'claim'])->name('compensations.create');
        // Route::get('/compensation/create/{assessment_id}', [IncidentAssessmentController::class, 'claim'])->name('compensations.create');
        // Route::get('/compensation/create/{incident_assessment_id}', [IncidentAssessmentController::class, 'claim'])->name('compensations.create');
        // Route::post('/claimants/store', [IncidentAssessmentController::class, 'saveClaimant'])->name('claimants.store');
        // Route::post('/kin/store', [IncidentAssessmentController::class, 'createKin'])->name('kin.store');
        // Route::post('/comments/store', [IncidentAssessmentController::class, 'saveChiefComments'])->name('comments.store');
        // Route::post('crops/store', [IncidentAssessmentController::class, 'saveCropsDestruction'])->name('crops.store');
        // Route::post('properties/store', [IncidentAssessmentController::class, 'savePropertyDamage'])->name('properties.store');
        // Route::post('human/deaths/store', [IncidentAssessmentController::class, 'saveHumanDeath'])->name('human.deaths.store');
        // Route::get('/claims/all', [IncidentAssessmentController::class, 'showCropClaims'])->name('claims.index');
        // Route::get('/claims/properties', [IncidentAssessmentController::class, 'showPropertyClaims'])->name('properties.index');
        // Route::get('/claims/human-deaths', [IncidentAssessmentController::class, 'showHumanDeathClaims'])->name('mortality.index');
        Route::get('/download-incident/{incident_assessment_id}', [IncidentAssessmentController::class, 'warden'])->name('claims.crop-damage');
        // Route::get('area-warden/claim/{claim-id}', [IncidentAssessmentController::class, 'areaWarden'])->name('area-warden.report');
        // Route::get('/claims/mortality/{claim_id}',  [IncidentAssessmentController::class, 'showMortality'])->name('claims.mortality');
        // Route::get('/claims/property/{claim_id}',  [IncidentAssessmentController::class, 'showProperty'])->name('claims.property');
        // Route::post('crops/attachments/store', [IncidentAssessmentController::class, 'storeCropAttachments'])->name('crop.attachments.store');
        // Route::post('damage/attachments/store', [IncidentAssessmentController::class, 'storeDamageAttachments'])->name('damage.attachments.store');
        // Route::post('mortality/attachments/store', [IncidentAssessmentController::class, 'storeMortalityAttachments'])->name('mortality.attachments.store');
    }
);

require __DIR__.'/auth.php';
