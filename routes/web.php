<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'LoginController@index')->name('/');

Route::post('login', 'LoginController@login')->name('login');

Route::get('redirigir', 'TicketController@index')->name('redirigir');

Route::get('gestionTickets', 'TicketController@gestionIndex')->name('gestionTickets');

Route::get('listarTickets', 'TicketController@listarIndex')->name('listarTickets');

Route::post('pedirTicket', 'TicketController@pedirTicket')->name('pedirTicket');

Route::post('editarTicket', 'TicketController@editar')->name('editarTicket');

Route::post('borrarTicket', 'TicketController@borrar')->name('borrarTicket');

Route::post('nuevoTicket', 'TicketController@nuevo')->name('nuevoTicket');


