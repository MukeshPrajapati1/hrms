<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\AttendanceFormController;
use App\Http\Controllers\FinancialYearController;
use App\Http\Controllers\SubAccountController;
use App\Http\Controllers\OpeningBalanceController;
use App\Http\Controllers\MonthlyAttendanceController;
use App\Http\Controllers\MissingAttendanceController;
use App\Http\Controllers\LatenessAndDearlyClosingController;


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

Route::get('/index', function () {
    return view('frontend.index');
});
Route::get('/', function () {
    return view('frontend.login');
});
Route::get('/register', function () {
    return view('frontend.register');
});

Route::get('/Add_User', function () {
    return view('frontend.Add_User');
});
Route::get('/Add_User_Button', function () {
    return view('frontend.Add_User_Button');
});
Route::get('/financialYear', function () {
    return view('frontend.accounts.financialYear');
});
Route::get('/subaccount', function () {
    return view('frontend.accounts.subaccount');
});
Route::get('/openingbalance', function () {
    return view('frontend.accounts.openingbalance');
});
Route::get('/createopeningbalance', function () {
    return view('frontend.createopeningbalance');
});
Route::get('/attendanceform', function () {
    return view('frontend.attendance.attendanceform');
});
Route::get('/attendanceform_check_out', function () {
    return view('frontend.attendance.attendanceform_check_out');
});
Route::get('/attendanceform_check_in', function () {
    return view('frontend.attendance.attendanceform_check_in');
});
Route::get('/monthlyattendance', function () {
    return view('frontend.attendance.monthlyattendance');
});
Route::get('/missingattendance', function () {
    return view('frontend.attendance.missingattendance');
});
Route::get('/latenessandearlyclosing', function () {
    return view('frontend.attendance.latenessandearlyclosing');
});
// Route::get('/latenessandearlyclosingdetail', function () {
//     return view('frontend.attendance.latenessandearlyclosingdetail');
// });
Route::get('/attendancelog', function () {
    return view('frontend.attendance.attendancelog');
});







Route::post('AdminLogin', [AdminLoginController::class, 'AdminLogin']);

Route::group(['middleware' => ['Admin']], function () {

    Route::get('admin_logout', [AdminLoginController::class, 'admin_logout']);

    Route::prefix('financial_year')->group(function () {
        Route::get('/', [FinancialYearController::class, 'show'])->name('financial_year');
        Route::post('create', [FinancialYearController::class, 'create'])->name('financial_create');
        Route::get('delete/{id}', [FinancialYearController::class, 'delete'])->name('financial_delete');
        Route::post('update/{id}', [FinancialYearController::class, 'update'])->name('finacial_update');
    });
    Route::prefix('sub_account')->group(function () {
        Route::get('/', [SubAccountController::class, 'show'])->name('sub_account');
        Route::post('create', [SubAccountController::class, 'create'])->name('sub_create');
        Route::get('delete/{id}', [SubAccountController::class, 'delete'])->name('sub_delete');
        Route::post('update/{id}', [SubAccountController::class, 'update'])->name('sub_update');
    });
    Route::prefix('opening_balance')->group(function () {
        Route::get('/', [OpeningBalanceController::class, 'show'])->name('opening_balance');
        Route::post('create', [OpeningBalanceController::class, 'create'])->name('opening_create');
        Route::get('delete/{id}', [OpeningBalanceController::class, 'delete'])->name('opening_delete');
        Route::post('update/{id}', [OpeningBalanceController::class, 'update'])->name('opening_update');
    });
    Route::prefix('attendance_form')->group(function () {
        Route::get('/', [AttendanceFormController::class, 'show'])->name('attendance_form');
        Route::post('create', [AttendanceFormController::class, 'create'])->name('attendance_create');
        Route::post('add_attendance', [AttendanceFormController::class, 'add_attendance'])->name('attendance_add_attendance');
    });
    Route::prefix('monthly_attendance')->group(function () {
        Route::get('/', [MonthlyAttendanceController::class, 'show'])->name('monthly_attendance');
        Route::post('create', [MonthlyAttendanceController::class, 'create'])->name('monthly_create');
    });
    Route::prefix('missing_attendance')->group(function () {
        Route::get('/', [MissingAttendanceController::class, 'show'])->name('missing_attendance');
        Route::get('/view', [MissingAttendanceController::class, 'view'])->name('missing_view');
        Route::post('create', [MissingAttendanceController::class, 'create'])->name('missing_create');
    });
    Route::prefix('lateness_and_early_closing')->group(function () {
        Route::get('/', [LatenessAndDearlyClosingController::class, 'show'])->name('lateness_and_early_closing');
        Route::get('/view', [LatenessAndDearlyClosingController::class, 'view'])->name('lateness_view');
        Route::post('create', [LatenessAndDearlyClosingController::class, 'create'])->name('lateness_create');
    });
});

Route::post('register', [AdminLoginController::class, 'register']);
