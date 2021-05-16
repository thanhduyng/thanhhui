<?php
$namespace = 'App\Modules\WorkingTime\Controllers';

Route::group(
    ['module' => 'WorkingTime', 'namespace' => $namespace],
    function () {

        Route::get("/working-time-search", 'WorkingTimeSearchController@index')->name("working-time-search.index");
        Route::post("/working-time-search", 'WorkingTimeSearchController@search')->name("working-time-search.search");

        Route::get("/working-time-detail", 'WorkingTimeDetailController@index')->name("working-time-detail.index");

    }
);
