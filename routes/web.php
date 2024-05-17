<?php

use App\Http\Controllers\Admin\BracketDisplayController;
use App\Http\Controllers\Admin\GameController;
use App\Http\Controllers\Admin\LiveScoreController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ScheduleController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\PlayerController;
use App\Http\Controllers\Admin\StandingController;
use App\Http\Controllers\Admin\TicketController;
use App\Http\Controllers\Admin\TicketTypeController;
use App\Http\Controllers\Admin\TournamentController;
use App\Http\Controllers\Admin\VenueController;
use App\Http\Controllers\Admin\RefereeController;


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

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('create', [ScheduleController::class, 'create'])->name('create');
Route::get('editschedule/{id}', [ScheduleController::class, 'editschedule'])->name('editschedule');
Route::get('view', [ScheduleController::class, 'view'])->name('view');
Route::post('store', [ScheduleController::class, 'store'])->name('store');
Route::put('update/{id}', [ScheduleController::class, 'update'])->name('update');
Route::post('destroy', [ScheduleController::class, 'destroy'])->name('destroy');

Route::get('team_create', [TeamController::class, 'team_create'])->name('team_create');
Route::get('team_edit', [TeamController::class, 'team_edit'])->name('team_edit');
Route::get('team_view', [TeamController::class, 'team_view'])->name('team_view');
Route::post('post_team', [TeamController::class, 'post_team'])->name('post_team');

// Player route
Route::get('player_create', [PlayerController::class, 'player_create'])->name('player_create');
Route::get('player_edit', [PlayerController::class, 'player_edit'])->name('player_edit');
Route::get('player_view', [PlayerController::class, 'player_view'])->name('player_view');
Route::post('post_player', [PlayerController::class, 'post_player'])->name('post_player');

Route::resource('referees', RefereeController::class);
Route::resource('venues', VenueController::class);
Route::resource('tickets', TicketController::class);
Route::resource('games', GameController::class);
Route::resource('standings', StandingController::class);
Route::resource('livescores', LiveScoreController::class);
Route::resource('brackets', BracketDisplayController::class);
Route::resource('seats', TicketTypeController::class);
Route::resource('tournaments', TournamentController::class);



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
