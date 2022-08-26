<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/date', function () {
    $dateDuJour = date('d-m-y');
    date_default_timezone_set("Europe/Brussels");
    $heure = date('H:i', time());
    return view('pages.date', compact('dateDuJour', 'heure'));
});


Route::get('/fruits', function () {
    $panier = array('mangue', 'pêche', 'pomme', 'banane');
    $lgPanier = count($panier);

    return view('pages.fruits', compact('panier', 'lgPanier'));
});

