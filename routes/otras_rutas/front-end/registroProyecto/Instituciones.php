<?php



Route::group(['prefix' => 'paginas', 'namespace' => 'Front_End\Paginas'], function () {
        Route::get('institucion', 'InstitucionesController@inicio')->name('institucion');
        Route::get('cla_instituciones', 'InstitucionesController@institucionesActivas')->name('cla_instituciones');
        Route::get('institucions_sin_padres', 'InstitucionesController@institucionesActivasSinPadre')->name('institucions_sin_padres');
        Route::get('institucions_intervencion', 'InstitucionesController@institucionesIntervencion')->name('institucions_intervencion');

        Route::apiResource('instituciones', IntervencionesController::class);
        Route::apiResource('cla_institucional', InstitucionesController::class);
        Route::get('proyectos_de_institucion', 'InstitucionesController@proyectos_de_institucion')->name('proyectos_de_institucion');
    });

?>
