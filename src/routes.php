<?php

Route::get('pesapal-callback',['as'=>'pesapal-callback', 'uses'=>'Cimplival\Pesapal\PesapalAPIController@handleCallback']);
Route::get('pesapal-ipn', ['as'=>'pesapal-ipn', 'uses'=>'Cimplival\Pesapal\PesapalAPIController@handleIPN']);