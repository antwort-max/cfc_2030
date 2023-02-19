<?php

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

Auth::routes(['register' => false]);

Route::get('/', [App\Http\Controllers\Web\WebNavegationController::class, 'home'])->name('home');

// NAVEGATION
Route::get('/web/us', [App\Http\Controllers\Web\WebNavegationController::class, 'us'])->name('web.us');
Route::get('/web/local', [App\Http\Controllers\Web\WebNavegationController::class, 'local'])->name('web.local');
Route::get('/web/sales', [App\Http\Controllers\Web\WebNavegationController::class, 'sales'])->name('web.sales');
Route::get('/web/sales', [App\Http\Controllers\Web\WebNavegationController::class, 'sales'])->name('web.sales');

Route::get('/web/search', [App\Http\Controllers\Web\WebNavegationController::class, 'search'])->name('web.search');
//Route::post('/web/search', [App\Http\Controllers\Web\WebNavegationController::class, 'search'])->name('web.search');
Route::get('/web/product/{product}', [App\Http\Controllers\Web\WebNavegationController::class, 'product'])->name('web.product'); 
Route::get('/web/public/{ambiance}', [App\Http\Controllers\Web\WebNavegationController::class, 'ambiance'])->name('web.ambiance');
Route::get('/web/ambiance/{ambiance}', [App\Http\Controllers\Web\WebNavegationController::class, 'ambiance'])->name('web.ambiance');
Route::get('/web/family/{family}', [App\Http\Controllers\Web\WebNavegationController::class, 'family'])->name('web.family');
Route::get('/web/notice/{notice}', [App\Http\Controllers\Web\WebNavegationController::class, 'notice'])->name('web.notice');
Route::get('/web/solution/{solution}', [App\Http\Controllers\Web\WebNavegationController::class, 'solution'])->name('web.solution'); 
// SYSTEM
Auth::routes();
Route::get('/home', [App\Http\Controllers\System\HomeController::class, 'index'])->name('home');
Route::post('/home/product', [App\Http\Controllers\System\HomeController::class, 'product'])->name('home.product')->middleware('auth');
Route::get('/home/kardex/{code}', [App\Http\Controllers\System\HomeController::class, 'kardex'])->name('home.kardex')->middleware('auth');
Route::get('/home/worker_vacation', [App\Http\Controllers\System\HomeController::class, 'worker_vacation'])->name('home.worker_vacation')->middleware('auth');
Route::get('/profile/{username}', [App\Http\Controllers\Access\UserController::class, 'profile'])->name('profile')->middleware('auth');
Route::put('/profile/update/{id}', [App\Http\Controllers\Access\UserController::class, 'profileUpdate'])->name('profile.update')->middleware('auth');

// ACCESS
Route::resource('access/user', App\Http\Controllers\Access\UserController::class)->names('access.user')->middleware('auth');
Route::resource('access/permission', App\Http\Controllers\Access\PermissionController::class)->names('access.permission')->middleware('auth');
Route::resource('access/role', App\Http\Controllers\Access\RoleController::class)->names('access.role')->middleware('auth');
Route::put('access/role/permission/{role}', [App\Http\Controllers\Access\RoleController::class, 'permission'])->name('access.role.permission')->middleware('auth');
Route::put('access/user/role/{user}', [App\Http\Controllers\Access\UserController::class, 'role'])->name('access.user.role')->middleware('auth');

// CONFIG
Route::resource('config/administrative_area', App\Http\Controllers\Config\AdministrativeAreaController::class)->names('config.administrative_area')->middleware('auth');
Route::resource('config/commercial_area', App\Http\Controllers\Config\CommercialAreaController::class)->names('config.commercial_area')->middleware('auth');
Route::resource('config/tags', App\Http\Controllers\Config\tagsController::class)->names('config.tags')->middleware('auth');

// CRM
Route::resource('crm/contact', App\Http\Controllers\Crm\CrmContactController::class)->names('crm.contact')->middleware('auth')->middleware('auth');

// DOCUMENT
Route::resource('document/document', App\Http\Controllers\Document\DocumentDocumentController::class)->names('document.document')->middleware('auth');
Route::resource('document/file', App\Http\Controllers\Document\DocumentFileController::class)->names('document.file')->middleware('auth');

//SYSTEM SALES
Route::resource('sales/picture/formula', App\Http\Controllers\Sales\Picture\SalesPictureFormulaController::class)->names('sales.picture.formula')->middleware('auth');
Route::resource('sales/contest', App\Http\Controllers\Sales\SalesContestController::class)->names('sales.contest')->middleware('auth');

//SYSTEM WORKER
Route::resource('/workers',  App\Http\Controllers\Worker\WorkersController::class)->names('workers')->middleware('auth');
Route::resource('/worker/worker',  App\Http\Controllers\Worker\WorkersController::class)->names('worker.worker')->middleware('auth');
Route::resource('/worker/worker_salary',  App\Http\Controllers\Worker\WorkerSalaryController::class)->names('worker.worker_salary')->middleware('auth');
Route::resource('/worker/worker_vacation',  App\Http\Controllers\Worker\WorkerVacationController::class)->names('worker.worker_vacation')->middleware('auth');
Route::resource('/worker/worker_hours',  App\Http\Controllers\Worker\WorkerHoursController::class)->names('worker.worker_hours')->middleware('auth');
Route::resource('/worker/worker_permissions',  App\Http\Controllers\Worker\WorkerPermissionsController::class)->names('worker.worker_permissions')->middleware('auth');
Route::resource('/worker/worker_seller',  App\Http\Controllers\Worker\WorkerSellerController::class)->names('worker.worker_seller')->middleware('auth');

// PROVIDER
Route::resource('/provider/provider',  App\Http\Controllers\Provider\ProviderController::class)->names('provider.provider')->middleware('auth');
Route::resource('/provider/provider_type',  App\Http\Controllers\Provider\ProviderTypeController::class)->names('provider.provider_type')->middleware('auth');
Route::resource('/provider/provider_contact',  App\Http\Controllers\Provider\ProviderContactController::class)->names('provider.provider_contact')->middleware('auth');
Route::resource('/provider/provider_meeting',  App\Http\Controllers\Provider\ProviderMeetingController::class)->names('provider.provider_meeting')->middleware('auth');

// PRODUCT
Route::resource('/product/product',  App\Http\Controllers\Product\ProductController::class)->names('product.product')->middleware('auth');
Route::resource('/product/family',  App\Http\Controllers\Product\ProductFamilyController::class)->names('product.family')->middleware('auth');
Route::resource('/product/brand',  App\Http\Controllers\Product\ProductBrandController::class)->names('product.brand')->middleware('auth');
Route::resource('/product/unit',  App\Http\Controllers\Product\ProductUnitController::class)->names('product.unit')->middleware('auth');
Route::resource('/product/package',  App\Http\Controllers\Product\ProductPackageController::class)->names('product.package')->middleware('auth');
Route::resource('/product/active',  App\Http\Controllers\Product\ProductActiveController::class)->names('product.active')->middleware('auth');

// CONTROL
Route::resource('/control/invoice_lost',  App\Http\Controllers\Control\InvoiceLostController::class)->names('control.invoice_lost')->middleware('auth');
Route::resource('/control/not_conforming',  App\Http\Controllers\Control\NotConformingController::class)->names('control.not_conforming')->middleware('auth');
Route::resource('/control/product_pendens',  App\Http\Controllers\Control\ProductPendenController::class)->names('control.product_pendens')->middleware('auth');


// SUPPLYING
Route::resource('/supplying/delivery_note',  App\Http\Controllers\Supplying\DeliveryNoteController::class)->names('supplying.delivery.note')->middleware('auth');

// WEB 
Route::resource('/web/web_menu',  App\Http\Controllers\Web\WebMenuController::class)->names('web.web_menu')->middleware('auth');
Route::resource('/web/web_ambiance',  App\Http\Controllers\Web\WebAmbianceController::class)->names('web.web_ambiance')->middleware('auth');
Route::resource('/web/web_notice',  App\Http\Controllers\Web\WebNoticeController::class)->names('web.web_notice')->middleware('auth');

//REST
Route::get('/rest/product',  [App\Http\Controllers\Rest\TablesController::class, 'product'])->name('rest.product');

Route::get('cache-clear', function(){
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('cache:forget spatie.permission.cache');
    echo "CFC2023 / Cache All Clear";
});

Route::get('migrate', function(){
    Artisan::call('migrate');
    echo "CFC2023 / Cache All Clear";
});

