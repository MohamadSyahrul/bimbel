<?php

use Illuminate\Support\Facades\Auth;
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

// frontend
Route::get('/', function () {
    return view('frontend.dashboard.index');
});

Route::get('/keranjang/checkout/sukses', function () {
    return view('sukses');
});

Route::resource('/kelas', 'Frontend\KelasController');
Route::resource('/keranjang', 'Frontend\KeranjangController');

Auth::routes();
Route::middleware(['auth'])->group(function() {

    // Route Admin
    Route::group(['prefix' => 'admin', 'middleware' => 'admin', 'name' => 'admin'], function () {
        // dashboard
        Route::get('/', 'DashboardController@index')->name('AdminDashboard');

        // kelas
        Route::resource('kelas', 'KelasController');

        // jadwal
        Route::resource('jadwal-kelas-terbatas', 'JadwalTerbatasController');
        Route::resource('jadwal-kelas-regular', 'JadwalRegularController');
        Route::get('/jadwal-kelas-terbatas', 'JadwalTerbatasController@index')->name('JadwalKelasTerbatas');
        Route::post('/jadwal-kelas-terbatas/jadwal', 'JadwalTerbatasController@jadwal');

        Route::get('/jadwal-kelas-regular', 'JadwalRegularController@index')->name('JadwalKelasRegular');
        Route::post('/jadwal-kelas-regular/jadwal', 'JadwalRegularController@jadwal');

        // settings
        Route::resource('settings-carousel', 'CarouselController');
        Route::post('/settings-carousel/update', 'CarouselController@updateCarousel')->name('updateCarousel');

        // Route::get('/profil', function () {
        //     return view('admin.profil');
        // });


        // list siswa regular
        Route::get('/siswa-regular-sd', function () {
            return view('admin.siswa.kelas_regular.sd.index');
        });
        Route::get('/siswa-regular-smp', function () {
            return view('admin.siswa.kelas_regular.smp.index');
        });
        Route::get('/siswa-regular-sma_ips', function () {
            return view('admin.siswa.kelas_regular.sma_ips.index');
        });
        Route::get('/siswa-regular-sma_ipa', function () {
            return view('admin.siswa.kelas_regular.sma_ipa.index');
        });
        Route::get('/siswa-regular-sbmptn', function () {
            return view('admin.siswa.kelas_regular.sbmptn.index');
        });
        Route::get('/siswa-regular-kedinasan', function () {
            return view('admin.siswa.kelas_regular.kedinasan.index');
        });

        // list siswa terbatas
        Route::resource('/siswa', 'ManagemenUser\ManagemenController');

        Route::get('/siswa-terbatas-smp', function () {
            return view('admin.siswa.kelas_terbatas.smp.index');
        });
        Route::get('/siswa-terbatas-sma_ips', function () {
            return view('admin.siswa.kelas_terbatas.sma_ips.index');
        });
        Route::get('/siswa-terbatas-sma_ipa', function () {
            return view('admin.siswa.kelas_terbatas.sma_ipa.index');
        });
        Route::get('/siswa-terbatas-sbmptn', function () {
            return view('admin.siswa.kelas_terbatas.sbmptn.index');
        });
        Route::get('/siswa-terbatas-kedinasan', function () {
            return view('admin.siswa.kelas_terbatas.kedinasan.index');
        });

        //cetak PDF
        Route::get('/terbatas/absen-siswa-terbatas/cetak/{id}', 'AbsensiTerbatasController@pdf')->name('cetak');
        Route::get('/terbatas/absen-siswa-terbatas/rekap/', 'AbsensiTerbatasController@pdfRekap')->name('cetakRekap');

        // Create dan Update
        Route::get('/siswa-terbatas-sd/create', function () {
            return view('admin.siswa.kelas_terbatas.sd.create');
        });
        Route::get('/siswa-terbatas-sd/edit', function () {
            return view('admin.siswa.kelas_terbatas.sd.edit');
        });

        // absensi regular
        Route::get('/regular/absen-siswa-regular-sd', 'AbsensiRegularController@sd_mi');
        Route::get('/regular/absen-siswa-regular-smp', 'AbsensiRegularController@smp_mts');
        Route::get('/regular/absen-siswa-regular-sma_ips', 'AbsensiRegularController@sma_ips');
        Route::get('/regular/absen-siswa-regular-sma_ipa', 'AbsensiRegularController@sma_ipa');
        Route::get('/regular/absen-siswa-regular-sbmptn', 'AbsensiRegularController@sbmptn');
        Route::get('/regular/absen-siswa-regular-kedinasan', 'AbsensiRegularController@kedinasan');
        Route::resource('/regular/absen-siswa-regular', 'AbsensiRegularController');
        Route::get('/regular/absen-siswa-regular/tambah-siswa/{absen}', 'AbsensiRegularController@tambah_siswa')->name('TambahSiswaReg');
        Route::get('/regular/absen-siswa-regular/update-absen/{id}/{status}', 'AbsensiRegularController@absen_update')->name('absenUpdateReg');

        // absensi terbatas
        Route::get('/terbatas/absen-siswa-terbatas-sd', 'AbsensiTerbatasController@sd_mi');
        Route::get('/terbatas/absen-siswa-terbatas-smp', 'AbsensiTerbatasController@smp_mts');
        Route::get('/terbatas/absen-siswa-terbatas-sma_ips', 'AbsensiTerbatasController@sma_ips');
        Route::get('/terbatas/absen-siswa-terbatas-sma_ipa', 'AbsensiTerbatasController@sma_ipa');
        Route::get('/terbatas/absen-siswa-terbatas-sbmptn', 'AbsensiTerbatasController@sbmptn');
        Route::get('/terbatas/absen-siswa-terbatas-kedinasan', 'AbsensiTerbatasController@kedinasan');
        Route::resource('/terbatas/absen-siswa-terbatas', 'AbsensiTerbatasController');
        Route::get('/terbatas/absen-siswa-terbatas/tambah-siswa/{absen}', 'AbsensiTerbatasController@tambah_siswa')->name('TambahSiswa');
        Route::get('/terbatas/absen-siswa-terbatas/update-absen/{id}/{status}', 'AbsensiTerbatasController@absen_update')->name('absenUpdate');
        
        // Transaksi
        Route::resource('transaksi', 'TransaksiController');
        
    });

    // Route Siswa
    Route::group(['prefix' => 'siswa', 'middleware' => 'siswa', 'name' => 'siswa'], function () {
        Route::get('/', 'Siswa\DashboardController@index')->name('SiswaDashboard');
        Route::post('/tandai', 'Siswa\DashboardController@tandai')->name('SiswaTandaiLihat');

        Route::resource('profile', 'ProfileUserController');
        Route::put('/profile/pic/update/{id}', 'ProfileUserController@updateProfile');

        Route::resource('transaksi', 'Siswa\TransaksiController');
        Route::resource('kelas-siswa', 'Siswa\KelasController');
        Route::resource('absen-siswa', 'Siswa\AbsenController');

        Route::resource('jadwal-siswa', 'Siswa\JadwalSiswaController');
        // Route::resource('jadwal-kelas-regular', 'JadwalRegularController');
        // Route::get('/jadwal-kelas-terbatas', 'JadwalTerbatasController@index')->name('JadwalKelasTerbatas');
        // Route::post('/jadwal-kelas-terbatas/jadwal', 'JadwalTerbatasController@jadwal');
    });

    // Route Orang Tua
    Route::group(['prefix' => 'ortu', 'middleware' => 'ortu', 'name' => 'ortu'], function () {
        Route::get('/', function () {
            return view('ortu.dashboard');
        });
        Route::resource('absen', 'Ortu\AbsenController');
        // jadwal
        Route::resource('jadwal-siswa', 'Ortu\OrtuController');

    });
});



Route::get('/dashboard-analytics', function () {
    return view('dashboard-analytics');
});

// Route::get('/login', function () {
//     return view('pengguna.login');
// });

// Route::get('/register', function () {
//     return view('register');
// });

Route::get('/home', function () {
    return view('home');
});

// Route::get('/keranjang', function () {
//     return view('keranjang');
// });

// Route::get('/listkeranjang', function () {
//     return view('listkeranjang');
// });

// Route::get('/home', 'HomeController@index')->name('home');
