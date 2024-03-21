<?php

use App\Http\Controllers\AppleController;
use App\Http\Controllers\OtchetController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WorkerController;
use App\Http\Controllers\DebtController;
use App\Models\Otchet;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
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

Route::get('/', function () {
  return view('index');
})->name('login');

// Register
Route::get('/register', function () {
  User::create([
    'name' => 'Maxmud',
    'surname' => 'Kamalov',
    'phone' => '933600219',
    'email' => 'admin ',
    'password' => Hash::make(12345)
  ]);
  return 'USER created';
});

//Kiriw AUTH
Route::post('/kiriw', [UserController::class, 'check'])->name('kiriw');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::post('/edit-profile', [UserController::class, 'editProfile'])->name('edit-profile');


Route::get('/home', [AppleController::class, 'home'])->name('home')->middleware('auth');

Route::get('/add-to-stock', [AppleController::class, 'addstock'])->middleware('auth');
Route::get('/spend', [AppleController::class, 'spend'])->name('spend')->middleware('auth');
Route::post('/addspend', [AppleController::class, 'addspend'])->name('addspend')->middleware('auth');
Route::get('/allspend', [AppleController::class, 'allspend'])->name('allspend')->middleware('auth');
Route::get('/delete-spend/{id}', [AppleController::class, 'delspend'])->name('delspend')->middleware('auth');

Route::post('/addchexol', [AppleController::class, 'addchexol'])->name('addchexol')->middleware('auth');
Route::post('/addadapter', [AppleController::class, 'addadapter'])->name('addadapter')->middleware('auth');
Route::post('/addshnur', [AppleController::class, 'addshnur'])->name('addshnur')->middleware('auth');
Route::post('/addnaushnik', [AppleController::class, 'addnaushnik'])->name('addnaushnik')->middleware('auth');
Route::post('/addothers', [AppleController::class, 'addothers'])->name('addothers')->middleware('auth');

// Sklad tarep
Route::get('/all-in-stock', [AppleController::class, 'allstock'])->name('all-stock')->middleware('auth');
Route::get('/delete-tovar/{id}/{type}', [AppleController::class, 'deleteTovar'])->middleware('auth');
Route::get('/edit-tovar-{id}-{type}', [AppleController::class, 'editTovar'])->name('edit-tovar')->middleware('auth');
Route::post('/updateTovar', [AppleController::class, 'updateTovar'])->name('updateTovar')->middleware('auth');
Route::get('/add-tovar-{id}-{type}', [AppleController::class, 'addTovar'])->name('add-tovar')->middleware('auth');
Route::post('/updatestock', [AppleController::class, 'updatestock'])->name('updatestock')->middleware('auth');

// 
// Satiwshi tarep
Route::get('/workers', [WorkerController::class, 'index'])->name('worker-page')->middleware('auth');
Route::get('/add-worker-page', [WorkerController::class, 'addWorkerPage'])->name('add-worker-page')->middleware('auth');
Route::post('/add-worker', [WorkerController::class, 'workerQosiw'])->name('add-worker')->middleware('auth');
Route::get('/deleteWorker/{id}', [WorkerController::class, 'delete'])->name('delete-worker')->middleware('auth');
Route::get('/updateWorker-{id}', [WorkerController::class, 'updateWorker'])->name('update-worker')->middleware('auth');
Route::post('/edit-worker', [WorkerController::class, 'editWorker'])->name('edit-worker')->middleware('auth');

// 

// Satiw
Route::get('/satiw', [AppleController::class, 'satiw'])->name('satiw-page')->middleware('auth');
Route::get('/satiw-{id}-{type}', [AppleController::class, 'satiwPage'])->name('satiw-form-page')->middleware('auth');
Route::post('/satiwTovar', [AppleController::class, 'satiwTovar'])->name('satiw-tovar')->middleware('auth');

// Qarzga beriw
Route::get('/qarz-{id}-{type}', [DebtController::class, 'satiwPage'])->name('debt-form-page')->middleware('auth');
Route::post('/satiwTovar', [DebtController::class, 'satiwTovar'])->name('debt-tovar')->middleware('auth');
Route::get('/debt', [DebtController::class, 'index'])->name('debt-page')->middleware('auth');


// Otchet
Route::get('/otchet', [OtchetController::class, 'index'])->name('otchet-page')->middleware('auth');
Route::get('/tovar-vozvrat-{id}', [AppleController::class, 'vozvratTovar'])->name('tovar_vozvrat')->middleware('auth');
Route::get('/tovar_delete-{id}', [AppleController::class, 'delOtchetTovar'])->name('tovar_delete')->middleware('auth');


//Profile 
Route::get('/profile-page', [WorkerController::class, 'profile'])->name('profile-page')->middleware('auth');
