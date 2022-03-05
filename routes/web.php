<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers as Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. Theseclusterwink.lan
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', [Controller\Auth\LoginController::class, 'loginView'])->name('login');
Route::post('/login', [Controller\Auth\LoginController::class, 'login'])->name('auth.login.account');
Route::get('/logout', [Controller\Auth\LoginController::class, 'logout'])->name('auth.logout');
Route::get('/forgot-password', [Controller\Auth\ForgotPasswordController::class, 'forgotPassword'])->name('auth.forgot-password');
Route::get('/account/create', [Controller\Auth\RegisterController::class, 'account'])->name('auth.register');
Route::post('/create-account', [Controller\Auth\RegisterController::class, 'createUser'])->name('auth.signup');
Route::get('/reset-password/{token}', [Controller\Auth\ResetPasswordController::class, 'resetPassword'])->name('auth.reset-password');
Route::post('/reset-password', [Controller\Auth\ResetPasswordController::class,'updatePassword'])->name('auth.update-password');

Route::get('/dashboard',  [Controller\DashboardController::class, 'dashboard'])->withoutMiddleware(['auth'])->name('user.dashboard');
Route::get('/admin',  [Controller\Admin\AdminController::class, 'users'])->name('admin.dashboard');
Route::get('/user-management',  [Controller\Admin\AdminController::class, 'userManagement'])->name('admin.user-management');
Route::get('/admin/transactions',  [Controller\Admin\AdminController::class, 'transactionHistory'])->name('admin.transactions');
Route::post('/create-user',  [Controller\Admin\AdminController::class, 'createUser'])->name('admin.user-create');
Route::post('/update-user',  [Controller\Admin\AdminController::class, 'updateUser'])->name('admin.user-update');
Route::post('/update-secret',  [Controller\Admin\AdminController::class, 'changeSecret'])->name('admin.user-secret');
Route::delete('/delete-user',  [Controller\Admin\AdminController::class, 'delete'])->name('admin.user-delete');
Route::delete('/delete/transaction',  [Controller\Admin\AdminController::class, 'deleteTransaction'])->name('admin.delete.transaction');
Route::get('/wallet/deposit', [Controller\WalletController::class, 'fundPayment'])->name('wallet.fund');
Route::post('/status/update', [Controller\Admin\AdminController::class, 'updateTransactionStatus'])->name('transactions.update.status');
Route::post('/admin/wallet/create', [Controller\Admin\AdminController::class, 'addCoin'])->name('coin.create');
Route::get('/admin/transaction/download/{file}', [Controller\Admin\AdminController::class, 'downloadPayment'])->name('download.payment');

Route::get('/withdrawal/confirmation', [Controller\WithdrawalController::class, 'authenticateUser'])->name('withdrawal.confirmation');
Route::post('/withdrawal/authenticate/', [Controller\WithdrawalController::class, 'authenticateWithdrawal'])->name('withdrawal.authenticate');
Route::post('/transaction/returns', [Controller\Admin\AdminController::class, 'increaseInvestment'])->name('investment.returns');

// Pages

Route::get('/pages', [Controller\PageController::class, 'tabs'])->name('application.page');
Route::post('/create-home', [Controller\PageController::class, 'homePage'])->name('home.page');
Route::post('/create-about', [Controller\PageController::class, 'aboutPage'])->name('about.page');



// team
Route::get('/team-member', [Controller\TeamController::class, 'teams'])->name('application.team-member');
Route::post('/create-team', [Controller\TeamController::class, 'createTeamMember'])->name('team-member.create');
Route::post('/update-team', [Controller\TeamController::class, 'updateTeamMembe'])->name('team-member.update');
Route::post('/delete-team/{id}', [Controller\TeamController::class, 'deleteMember'])->name('team-member.delete');

Route::get('/reset-password/{token}', [Controller\Auth\ResetPasswordController::class, 'resetPassword'])->name('auth.reset-password');
Route::post('/reset-password', [Controller\Auth\ResetPasswordController::class,'updatePassword'])->name('auth.update-password');
Route::get('/buy-plan', [Controller\InvestmentPlanController::class,'plans'])->name('investment.plan');


// Settings
Route::get('/settings/profile', [Controller\Settings\SettingsController::class, 'dashboard'])->name('user.settings.dashboard');
Route::get('/transactions', [Controller\WalletController::class, 'transactions'])->name('user.transactions');
Route::post('/deposit', [Controller\WalletController::class, 'makeDeposit'])->name('user.deposit');


// pages
Route::get('/', [Controller\Pages\PageController::class, 'home'])->withoutMiddleware(['auth'])->name('frontend.home');
Route::get('/about', [Controller\Pages\PageController::class, 'about'])->withoutMiddleware(['auth'])->name('frontend.about');
Route::get('/pricing', [Controller\Pages\PageController::class, 'solutions'])->name('frontend.solutions');
Route::get('/faq', [Controller\Pages\PageController::class, 'team'])->name('frontend.teams');
Route::get('/contact', [Controller\Pages\PageController::class, 'contact'])->name('frontend.contact');
