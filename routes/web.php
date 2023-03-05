<?php

use Illuminate\Support\Facades\Route;
use Ezegyfa\LaravelHelperMethods\DesignerMethods;
use Ezegyfa\LaravelHelperMethods\Database\HelperTableMethods;
use Ezegyfa\LaravelHelperMethods\Crm\Controllers\BlueAdminController;
use Ezegyfa\LaravelHelperMethods\Database\FormGenerating\DatabaseInfos;

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

Route::get('/', function () {

    return view('developmentTest');
    $blueAdminController = new BlueAdminController();
    $blueAdminController->initializeRoutes();
    //HelperTableMethods::createHelperTable(['product_details', 'laptops', 'pcs'], 'test');
    return view('layouts/dynamicPage');
});
DesignerMethods::registerDesignerRoute();
$blueAdminController = new BlueAdminController();
$blueAdminController->initializeRoutes();

Route::get('designer/test-template', function() {
    try {
        return DesignerMethods::getTemplateDynamicPage('blue-admin-index', );
    }
    catch (\Exception $e) {
        return response()->json([
            'message' => $e->getMessage(),
        ]);
    }
});
