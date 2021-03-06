<?php

Route::prefix('opensource')->group(function () {
    Route::permanentRedirect('/', '/open-source');
    Route::permanentRedirect('php', '/open-source/packages');
    Route::permanentRedirect('laravel', '/open-source/packages');
    Route::permanentRedirect('javascript', '/open-source/packages');
    Route::permanentRedirect('postcards', '/open-source/postcards');
});

collect(['en', 'nl'])->each(function (string $locale) {
    Route::prefix($locale)->group(function () {
        Route::permanentRedirect('/', '/');

        Route::prefix('opensource')->group(function () {
            Route::permanentRedirect('/', '/open-source');
            Route::permanentRedirect('php', '/open-source/packages');
            Route::permanentRedirect('laravel', '/open-source/packages');
            Route::permanentRedirect('javascript', '/open-source/packages');
            Route::permanentRedirect('postcards', '/open-source/postcards');
        });

        Route::permanentRedirect('team', '/about-us#team');
        Route::permanentRedirect('jef', '/about-us#jef');
        Route::permanentRedirect('vacancies', '/vacancies');
        Route::permanentRedirect('back-end-vacancy', '/vacancies');
        Route::permanentRedirect('front-end-vacancy', '/vacancies');
        Route::permanentRedirect('disclaimer', '/disclaimer');
        Route::permanentRedirect('stage', '/vacancies/internships');
        Route::permanentRedirect('legaal', '/legal');
        Route::permanentRedirect('legal', '/legal');
    });
});

Route::permanentRedirect('jef', '/about-us#jef');
