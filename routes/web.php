<?php

use App\Http\Controllers\AccountSettingController;
use App\Http\Controllers\AiToolsController;
use App\Http\Controllers\Auth\GoogleAuthController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DocumentationController;
use App\Http\Controllers\EcommerceController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FinanceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MyCloudController;
use App\Http\Controllers\PluginsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ToDoController;
use Illuminate\Support\Facades\Route;

// routes/web.php (TEMP)
Route::get('/phpinfo', function () {
    phpinfo();
});


/*
|--------------------------------------------------------------------------
| Guest routes (AUTH PAGES)
|--------------------------------------------------------------------------
*/
Route::middleware('guest')->group(function () {
    Route::get('/sign-in', [LoginController::class, 'index'])->name('login');
    Route::get('/sign-up', [RegisterController::class, 'index'])->name('register');
    Route::get('/forgot-password', [ResetPasswordController::class, 'index'])->name('forgot-password');
    Route::get('/verification-code', [RegisterController::class, 'verificationCode'])->name('verification-code');

    // Optional aliases (if something hits /login or /register)
    Route::get('/login', fn () => redirect()->route('login'));
    Route::get('/register', fn () => redirect()->route('register'));

    Route::get('/auth/google/redirect', [GoogleAuthController::class, 'redirect'])->name('google.redirect');
    Route::get('/auth/google/callback', [GoogleAuthController::class, 'callback'])->name('google.callback');
});

/*
|--------------------------------------------------------------------------
| Auth routes (PROTECTED PAGES)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {
    // Home / Dashboard
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/onepage', [HomeController::class, 'onepage'])->name('onepage');

    // Account / Settings
    Route::get('/account-settings', [AccountSettingController::class, 'index'])->name('account-settings');
    Route::get('/todo', [ToDoController::class, 'index'])->name('todo');

    // Projects
    Route::get('/project', [ProjectController::class, 'index'])->name('project');
    Route::get('/project-details', [ProjectController::class, 'projectDetails'])->name('project-details');

    // Analytics
    Route::get('/analytics', [DashboardController::class, 'analytics'])->name('analytics');
    Route::get('/projects-analytics', [DashboardController::class, 'projectsAnalytics'])->name('projects-analytics');
    Route::get('/events-analytics', [DashboardController::class, 'eventsAnalytics'])->name('events-analytics');

    // Ecommerce
    Route::get('/ecommerce-analytics', [EcommerceController::class, 'ecommerceAnalytics'])->name('ecommerce-analytics');
    Route::get('/ecommerce-customers', [EcommerceController::class, 'ecommerceCustomers'])->name('ecommerce-customers');
    Route::get('/ecommerce-comments', [EcommerceController::class, 'ecommerceComments'])->name('ecommerce-comments');
    Route::get('/ecommerce-transactions', [EcommerceController::class, 'ecommerceTransactions'])->name('ecommerce-transactions'); // keep only once

    // Products
    Route::get('/product-list', [ProductController::class, 'index'])->name('product-list');
    Route::get('/add-product', [ProductController::class, 'addProduct'])->name('add-product');

    // Finance
    Route::get('/invoicing', [FinanceController::class, 'invoicing'])->name('invoicing');
    Route::get('/create-invoice', [FinanceController::class, 'createInvoice'])->name('create-invoice');
    Route::get('/expenses', [FinanceController::class, 'expenses'])->name('expenses');

    // AI tools
    Route::get('/ai-chat', [AiToolsController::class, 'aiChat'])->name('ai-chat');
    Route::get('/ai-finder', [AiToolsController::class, 'aiFinder'])->name('ai-finder');
    Route::get('/ai-writer', [AiToolsController::class, 'aiWriter'])->name('ai-writer');
    Route::get('/ai-image-generator', [AiToolsController::class, 'aiImageGenerator'])->name('ai-image-generator');
    Route::get('/ai-modules', [AiToolsController::class, 'aiModules'])->name('ai-modules');
    Route::get('/ai-tool-library', [AiToolsController::class, 'aiToolLibrary'])->name('ai-tool-library');

    // Apps
    Route::get('/calendar', [CalendarController::class, 'calendar'])->name('calendar');
    Route::get('/email', [EmailController::class, 'email'])->name('email');
    Route::get('/chat', [ChatController::class, 'chat'])->name('chat');
    Route::get('/my-cloud', [MyCloudController::class, 'myCloud'])->name('my-cloud');
    Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts');
    Route::get('/my-events', [EventController::class, 'index'])->name('my-events');

    // Docs
    Route::get('/documentation', [DocumentationController::class, 'documentation'])->name('documentation');
    Route::get('/components', [DocumentationController::class, 'components'])->name('components');
    Route::get('/widgets', [DocumentationController::class, 'widgets'])->name('widgets');
    Route::get('/help', [DocumentationController::class, 'help'])->name('help');

    // Plugins
    Route::get('/chart', [PluginsController::class, 'charts'])->name('chart');
    Route::get('/datatable', [PluginsController::class, 'datatable'])->name('datatable');
    Route::get('/date-rangpicker', [PluginsController::class, 'DataRangpicker'])->name('datarangpicker');
    Route::get('/dropify', [PluginsController::class, 'dropify'])->name('dropify');
    Route::get('/inputmask', [PluginsController::class, 'Inputmask'])->name('inputmask');
    Route::get('/owlcarousel', [PluginsController::class, 'OwlCarousel'])->name('owlcarousel');
    Route::get('/sweetalert', [PluginsController::class, 'Sweetalert'])->name('sweetalert');
    Route::get('/tagsinput', [PluginsController::class, 'TagsInput'])->name('tagsinput');
    Route::get('/imageinput', [PluginsController::class, 'ImageInput'])->name('imageinput');
    Route::get('/passwordmeter', [PluginsController::class, 'PasswordMeter'])->name('passwordmeter');
    Route::get('/jkanbanboard', [PluginsController::class, 'jKanbanBoard'])->name('jkanbanboard');

    // Error page
    Route::get('/error', fn () => view('error'))->name('error');

    // ✅ Logout should be POST (implement destroy() in your controller)
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});
