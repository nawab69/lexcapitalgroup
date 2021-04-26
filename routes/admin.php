<?php

use Illuminate\Support\Facades\Route;

    Route::GET('/home', 'AdminController@index')->name('admin.home')->middleware('auth:admin');
    // Login and Logout
    Route::GET('/', 'LoginController@showLoginForm')->name('admin.login');
    Route::POST('/', 'LoginController@login');
    Route::POST('/logout', 'LoginController@logout')->name('admin.logout');



    // Password Resets
    Route::POST('/password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::GET('/password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::POST('/password/reset', 'ResetPasswordController@reset');
    Route::GET('/password/reset/{token}', 'ResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::GET('/password/change', 'AdminController@showChangePasswordForm')->name('admin.password.change')->middleware('auth:admin');
    Route::POST('/password/change', 'AdminController@changePassword')->middleware('auth:admin');



    // Register Admins
    Route::get('/register', 'RegisterController@showRegistrationForm')->name('admin.register')->middleware('auth:admin');
    Route::post('/register', 'RegisterController@register')->middleware('auth:admin');
    Route::get('/{admin}/edit', 'RegisterController@edit')->name('admin.edit')->middleware('auth:admin');
    Route::delete('/{admin}', 'RegisterController@destroy')->name('admin.delete')->middleware('auth:admin');
    Route::patch('/{admin}', 'RegisterController@update')->name('admin.update')->middleware('auth:admin');

    // Admin Lists
    Route::get('/show', 'AdminController@show')->name('admin.show')->middleware('auth:admin');
    Route::get('/me', 'AdminController@me')->name('admin.me')->middleware('auth:admin');

    // Admin Roles
    Route::post('/{admin}/role/{role}', 'AdminRoleController@attach')->name('admin.attach.roles')->middleware('auth:admin');
    Route::delete('/{admin}/role/{role}', 'AdminRoleController@detach')->middleware('auth:admin');

    // Roles
    Route::get('/roles', 'RoleController@index')->name('admin.roles')->middleware('auth:admin');
    Route::get('/role/create', 'RoleController@create')->name('admin.role.create')->middleware('auth:admin');
    Route::post('/role/store', 'RoleController@store')->name('admin.role.store')->middleware('auth:admin');
    Route::delete('/role/{role}', 'RoleController@destroy')->name('admin.role.delete')->middleware('auth:admin');
    Route::get('/role/{role}/edit', 'RoleController@edit')->name('admin.role.edit')->middleware('auth:admin');
    Route::patch('/role/{role}', 'RoleController@update')->name('admin.role.update')->middleware('auth:admin');

    // active status
    Route::post('activation/{admin}', 'ActivationController@activate')->name('admin.activation')->middleware('auth:admin');
    Route::delete('activation/{admin}', 'ActivationController@deactivate')->middleware('auth:admin');
    Route::resource('permission', 'PermissionController')->middleware('auth:admin');


    // Users Details
    Route::get('users',[\App\Http\Controllers\Admin\UserController::class, 'index'])->middleware('auth:admin');
    Route::get('users/{id}',[\App\Http\Controllers\Admin\UserController::class, 'show'])->name('users.show')->middleware('auth:admin');
    Route::post('users/{id}',[\App\Http\Controllers\Admin\UserController::class, 'updateComment'])->name('users.comment')->middleware('auth:admin');
    Route::post('users/{id}/ban',[\App\Http\Controllers\Admin\UserController::class, 'banUser'])->middleware('auth:admin');

    Route::get('transactions',[\App\Http\Controllers\Admin\TransactionController::class, 'index'])->middleware('auth:admin');
    Route::get('transactions/{id}',[\App\Http\Controllers\Admin\TransactionController::class, 'show'])->middleware('auth:admin');

    Route::get('escrow',[\App\Http\Controllers\Admin\EscrowController::class, 'index'])->name('admin.escrow')->middleware('auth:admin');
    Route::post('escrow/{id}',[\App\Http\Controllers\Admin\EscrowController::class, 'withdraw'])->name('admin.withdraw')->middleware('auth:admin');
    Route::post('escrow/{id}/cancel',[\App\Http\Controllers\Admin\EscrowController::class, 'refund'])->name('admin.refund')->middleware('auth:admin');

    // KYC
    Route::get('kycs',[\App\Http\Controllers\Admin\KycController::class, 'index'])->middleware('auth:admin');
    Route::get('kycs/{id}',[\App\Http\Controllers\Admin\KycController::class, 'show'])->name('kyc.show')->middleware('auth:admin');
    Route::post('kycs/{id}/approve',[\App\Http\Controllers\Admin\KycController::class, 'approveId'])->name('kyc.approve')->middleware('auth:admin');
    Route::view('settings','admin.pages.settings')->middleware('auth:admin');
    Route::view('pages/homepage','admin.pages.homepage')->middleware('auth:admin');
    Route::view('pages/about-us','admin.pages.about')->middleware('auth:admin');
    Route::view('pages/terms','admin.pages.terms')->middleware('auth:admin');
    Route::view('pages/privacy','admin.pages.privacy')->middleware('auth:admin');
    Route::view('pages/faq','admin.pages.faq')->middleware('auth:admin');

    Route::fallback(function () {
        return abort(404);
    });
