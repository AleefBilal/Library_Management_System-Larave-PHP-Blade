<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\{HomeController,
    AboutController,
    FacilityController,
    ContactController,
    ServiceController
};
use App\Http\Controllers\Frontend\LoginController;
use App\Http\Controllers\Frontend\RegisterController;
use App\Http\Controllers\Frontend\DownloadFormController;

use App\Http\Controllers\Frontend\Collections\{AccountingController,
    BusinessAdminisController,
    BusinessManagementController,
    ComputerScienceController,
    EconomicsController,
    MarketingController,
    LawController,
    LiteratureController,
    MathsController
};
use App\Http\Controllers\Backend\{AdminAuthController, AdminProfileController, DashboardController,
    AddBookController, MessageController, BooksController,};


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
Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('/');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/facility', [FacilityController::class, 'index'])->name('facility');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store']);
//Route::get('/login', [LoginController::class, 'index']);
//Route::get('/register', [RegisterController::class, 'index']);
//Route::post('/register', [RegisterController::class, 'register']);
Route::get('/service', [ServiceController::class, 'index'])->name('service');

Route::get('/form-download', [DownloadFormController::class, 'index'])->name('form.download.index');
Route::get('/file-download/{id}', [AddBookController::class, 'download'])->name('file.download');
//Routes for collections
Route::get('/accounting', [AccountingController::class, 'index'])->name('accounting');
Route::get('/businessadminis', [BusinessAdminisController::class, 'index'])->name('businessadminis');
Route::get('/businessmanagement', [BusinessManagementController::class, 'index'])->name('businessmanagement');
Route::get('/computerscience', [ComputerScienceController::class, 'index'])->name('computerscience');
Route::get('/economics', [EconomicsController::class, 'index'])->name('economics');
Route::get('/marketing', [MarketingController::class, 'index'])->name('marketing');
Route::get('/literature', [LiteratureController::class, 'index'])->name('literature');
Route::get('/law', [LawController::class, 'index'])->name('law');
Route::get('/maths', [MathsController::class, 'index'])->name('maths');

//Admin
Route::group(['namespace' => 'Backend', 'middleware' => 'admin', 'prefix' => 'admin'], function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
//    Route::get('/Add-book', [AddBookController::class, 'addbook'])->name('add-book');
    Route::get('/add-book', [AddBookController::class, 'index'])->name('admin.add-book');
    Route::post('/store', [AddBookController::class, 'store'])->name('admin.store');
    Route::get('/message', [MessageController::class, 'view'])->name('message');
    Route::get('/message/delete/{id}', [MessageController::class, 'delete'])->name('message.delete');
    Route::get('/books', [BooksController::class, 'view'])->name('books');
    Route::get('/books/delete/{id}', [BooksController::class, 'delete'])->name('books.delete');
    Route::get('/books/edit/{id}', [BooksController::class, 'edit'])->name('books.edit');
    Route::post('/books/edit/', [BooksController::class, 'update'])->name('books.update');
});

//Admin Auth
Route::group(['namespace' => 'Backend'], function () {
    Route::get('/admin', [AdminAuthController::class, 'loginView'])->name('login.view');
    Route::post('/login', [AdminAuthController::class, 'login'])->name('login.admin');
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout.admin');
    Route::get('/profile', [AdminProfileController::class, 'profile'])->name('admin.profile');
    Route::post('/profile/update', [AdminProfileController::class, 'updateProfile'])->name('admin.profile.update');
});





