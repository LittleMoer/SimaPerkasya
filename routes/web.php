<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

Route::get('login', function () {
    return view('auth.login');
})->name('login');

Route::post('login', [AuthController::class, 'login'])->name('login.post');

Route::get('register', function () {
    return view('auth.register');
})->name('register');

Route::post('register', [AuthController::class, 'register'])->name('register.post');

Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/info', function () {
    return view('info');
});

Route::get('/token', function (Request $request) {
    $token = $request->session()->token();
 
    $token = csrf_token();
 
});


//Nadiyya version
Route::get('/homepage', function () {
    return view('homepage');
})->name('homepage');

Route::post('/homepage', [AuthController::class, 'login'])->name('homepage.post');

Route::get('dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');


Route::get('dashboard_crew', function () {
    return view('dashboard_crew');
})->middleware('auth')->name('dashboard_crew');

Route::post('dashboard', [AuthController::class, 'logout'])->name('logout');

Route::get('/pesanan', function () {
    return view('pesanan');
});

// Route::get('/manajemen_akun', function () {
//     return view('manajemen_akun');
// })->name('manajemen_akun');
Route::get('/manajemen_akun', [UserController::class, 'index'])->name('manajemen_akun');
Route::post('/manajemen_akun',  [AuthController::class, 'register'])->name('manajemen_akun');
// Route::post('/manajemen_akun/{username}', [UserController::class, 'update'])->name('user.update');

// Route::put('/manajemen_akun/', [UserController::class, 'update'])->name('users.update');
// Route::delete('/manajemen_akun/', [UserController::class, 'destroy'])->name('users.destroy');
Route::put('/manajemen_akun/{username}', [UserController::class, 'update'])->name('users.update');
Route::delete('/manajemen_akun/{username}', [UserController::class, 'destroy'])->name('users.destroy');




Route::get('/jadwal_owner', function () {
    return view('jadwal_owner');
});

Route::get('/tambah_akun', function () {
    return view('tambah_akun');
});
Route::post('/tambah_akun', [AuthController::class, 'register'])->name('tambah_akun');

