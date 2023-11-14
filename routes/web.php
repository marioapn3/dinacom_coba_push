<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BerkasController;
use App\Http\Controllers\PesertaController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get("sitemap.xml", function () {
    return \Illuminate\Support\Facades\Redirect::to('sitemap.xml');
});
Route::get('/finalis', [HomeController::class, 'finalis'])->name('home.finalis');

Route::middleware(['auth'])->group(function () {


    //berkas
    Route::get('/dasboard/berkas', [BerkasController::class, 'index'])->name('berkas');
    Route::get('/dasboard/berkas/create', [BerkasController::class, 'create'])->name('berkas.create');
    Route::get('/dasboard/berkas/{id}', [BerkasController::class, 'show'])->name('berkas.show');
    Route::get('/dasboard/berkas/{id}/edit', [BerkasController::class, 'edit'])->name('berkas.edit');
    Route::put('/dasboard/berkas/{id}/edit', [BerkasController::class, 'update'])->name('berkas.update');
    Route::post('/dasboard/berkas/{id}', [BerkasController::class, 'store'])->name('berkas.store');

    Route::get('/dasboard/peserta/teamData', [PesertaController::class, 'index'])->name('peserta.index');

    Route::get('/dasboard/peserta/{id}/teamData', [PesertaController::class, 'show'])->name('peserta');
    Route::get('/dasboard/peserta/{id}/teamData/detail', [PesertaController::class, 'detail'])->name('peserta.detail');
    Route::get('/dasboard/peserta/{id}/teamData/edit', [PesertaController::class, 'edit'])->name('peserta.edit');
    Route::get('/dasboard/peserta/{id}/teamData/update', [PesertaController::class, 'item'])->name('peserta.item');
    Route::put('/dasboard/peserta/{id}/teamData/save', [PesertaController::class, 'save'])->name('peserta.save');
    Route::post('/dasboard/peserta/{id}/teamData', [PesertaController::class, 'update'])->name('peserta.update');
    Route::get('/dasboard/peserta/payment/{id}', [PesertaController::class, 'editpay'])->name('peserta.editpay');
    Route::post('/dasboard/peserta/payment/{id}', [PesertaController::class, 'updatepay'])->name('peserta.updatepay');
    Route::delete('/dasboard/peserta/teamData/{id}/{no}', [PesertaController::class, 'destroy'])->name('peserta.delete');
});
Route::get('/dashboard', function () {
    return view('pages.dashboard.index');
})->middleware(['auth'])->name('dashboard');

Route::group(['middleware' => ['admin']], function () {

    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    //admin
    //admin finalis
    Route::get('/admin/finalis', [AdminController::class, 'finalis'])->name('admin.finalis');
    Route::get('/admin/finalis/{id}', [AdminController::class, 'editfinalis'])->name('admin.editfinalis');
    Route::put('/admin/finalis/champ', [AdminController::class, 'storefinalis'])->name('admin.finalis.store');
    //admin Deadline
    Route::get('/admin/deadlinependaftaran', [AdminController::class, 'editPendaf'])->name('admin.deadlinependaf');
    Route::get('/admin/deadlinBerkas', [AdminController::class, 'editBerkas'])->name('admin.deadlineberkas');
    Route::put('/admin/deadlinBerkas', [AdminController::class, 'storeBerkas'])->name('admin.deadlineBerkas.store');
    Route::put('/admin/deadlinependaftaran', [AdminController::class, 'storeDaftar'])->name('admin.deadlinependaf.store');
    //admin data Peserta
    Route::get('/admin/peserta', [AdminController::class, 'dataPeserta'])->name('admin.peserta');
    Route::get('/admin/peserta/{id}', [AdminController::class, 'statusPeserta'])->name('admin.pesertaEdit');
    Route::put('/admin/peserta/{id}', [AdminController::class, 'updatePayment'])->name('admin.paymentUp');
    //admin team Status
    Route::get('/admin/team/', [AdminController::class, 'teamStatus'])->name('admin.team');
    Route::get('/admin/team/{id}', [AdminController::class, 'teamEdit'])->name('admin.team.edit');
    Route::put('/admin/team/{id}', [AdminController::class, 'teamUpdate'])->name('admin.team.store');

    Route::get('users/export/', [AdminController::class, 'export'])->name('export');
    Route::get('team/export/{id}', [AdminController::class, 'Teamexport'])->name('export.team');
});

require __DIR__ . '/auth.php';
